<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Capsule;
class PageController extends Controller
{
    public function index()
    {
        $page = Page::where('slug', 'home')->first();
        $capsules = collect();

        if ($page && is_array($page->capsule_ids)) {
            $capsules = Capsule::whereIn('id', $page->capsule_ids)->get();
        }

        return view('welcome', [
            'capsules' => $capsules,
        ]);
    }

    public function capsules()
    {
        return view('capsules-page');
    }

    public function autoResponse()
    {
        return view('auto-response');
    }

    public function aicapsules()
    {
        return view('ai-capsules');
    }

    public function requestcapsule()
    {
        return view('request-capsule');
    }

    public function bookdemo()
    {
        return view('book-demo');
    }

    public function partners()
    {
        return view('partners');
    }

    public function login()
    {
        return view('login');
    }

    public function useragreement()
    {
        $page = Page::where('slug', 'user-agreement')->firstOrFail();

        return view('user-agreement', [
            'content' => $page->content
        ]);
    }

    public function cookies()
    {
        $page = Page::where('slug', 'cookies')->firstOrFail();

        return view('cookies', [
            'content' => $page->content
        ]);
    }

    public function privacypolicy()
    {
        $page = Page::where('slug', 'privacy-policy')->firstOrFail();

        return view('privacy-policy', [
            'content' => $page->content
        ]);
    }
}
