<?php

namespace App\Services;

use App\Models\Capsule;
use App\Models\Category;
use App\Models\GeneratedCapsule;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Client\RequestException;
use App\Models\GptCapsuleResponse;

class GptCapsuleService
{
    public function generateCapsule(string $categoryName, string $industry): array
    {
        Log::info('Starting GPT generation...', ['category' => $categoryName, 'industry' => $industry]);

        $category = Category::where('name', $categoryName)->firstOrFail();

        $allCapsules = Capsule::where('is_blocked', false)->get(['id', 'title', 'content', 'category_id']);

        $allCapsulesText = $allCapsules->map(function ($item, $i) {
            return ($i + 1) . ". [{$item->id}] {$item->title}: {$item->content}";
        })->implode("\n");

        $prompt = <<<PROMPT
You are an AI assistant that helps select automation capsules.

Category: $categoryName  
User's industry: $industry

Here is a list of all existing AI capsules from all categories:

$allCapsulesText

1. From this list, select 2–4 capsules that best match the industry "$industry".  
   If there are few suitable capsules in the current category, choose from others that are as similar in meaning as possible.  
   IMPORTANT!!! The response must be in JSON format. Make sure to follow these field constraints:
   - description: max 80 characters  
   - advantages: max 20 characters  
   - automates: max 20 characters  
   - average_hours_per_week: number  
   - efficiency_percentage: number  
   Response format:
[
  {
    "capsule_id": "...",
    "title": "...",
    "description": "...",
    "advantages": "...",
    "automates": "...",
    "average_hours_per_week": ...,
    "efficiency_percentage": ...
  }
]

2. If fewer than 6 capsules were selected in step 1 — generate the missing capsules (so that the total is 6).  
   Make sure they are different from the existing ones.  
   IMPORTANT!!! The response must be in JSON format. Make sure to follow these field constraints:
   - description: max 80 characters  
   - advantages: max 20 characters  
   - automates: max 20 characters  
   - average_hours_per_week: number  
   - efficiency_percentage: number  
   Format for generated capsules:
[
  {
    "title": "...",
    "description": "...",
    "advantages": "...",
    "automates": "...",
    "average_hours_per_week": ...,
    "efficiency_percentage": ...,
    "type": "generated"
  }
]
PROMPT;

        try {
            set_time_limit(90);

            $response = Http::withToken(env('OPENAI_API_KEY'))
                ->timeout(90)
                ->post('https://api.openai.com/v1/chat/completions', [
                    'model' => 'gpt-3.5-turbo',
                    'messages' => [
                        ['role' => 'system', 'content' => 'Ты ассистент по подбору AI-капсул'],
                        ['role' => 'user', 'content' => $prompt],
                    ],
                    'temperature' => 0.7,
                ]);

            $json = $response->json();
            $content = $json['choices'][0]['message']['content'] ?? '';

            if (empty($content)) {
                Log::error('Empty GPT response', ['json' => $json]);
                return [];
            }

            preg_match_all('/\[\s*\{.*?\}\s*\]/s', $content, $matches);

            $recommended = isset($matches[0][0]) ? json_decode($matches[0][0], true) : [];
            $generated = isset($matches[0][1]) ? json_decode($matches[0][1], true) : [];

            if (json_last_error() !== JSON_ERROR_NONE) {
                Log::error('Invalid GPT JSON response', ['error' => json_last_error_msg(), 'content' => $content]);
                return [];
            }

            foreach ($generated as $gen) {
                $exists = GeneratedCapsule::where('title', $gen['title'])
                    ->where('user_input', $industry)
                    ->where('category_id', $category->id)
                    ->first();

                if ($exists) {
                    $exists->increment('used_count');
                } else {
                    GeneratedCapsule::create([
                        'title' => $gen['title'],
                        'category_id' => $category->id,
                        'user_input' => $industry,
                        'gpt_response_json' => json_encode($gen),
                        'used_count' => 1,
                        'is_blocked' => false,
                    ]);
                }
            }

            $final = collect($recommended)->merge($generated);

            GptCapsuleResponse::create([
                'category_id' => $category->id,
                'user_input' => $industry,
                'response_json' => $final->values()->all(),
            ]);

            return $final->values()->all();

        } catch (ConnectionException $e) {
            Log::error('GPT connection timeout', ['message' => $e->getMessage()]);
            return [];
        } catch (RequestException $e) {
            Log::error('GPT API request error', [
                'message' => $e->getMessage(),
                'response' => optional($e->response)->body(),
            ]);
            return [];
        } catch (\Throwable $e) {
            Log::critical('GPT FAIL', ['msg' => $e->getMessage(), 'trace' => $e->getTraceAsString()]);
            Log::critical('Unexpected error in GPTCapsuleService', ['message' => $e->getMessage()]);
            return [];
        }
    }
}
