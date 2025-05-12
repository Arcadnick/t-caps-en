<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $categories = [
            ['name' => 'Sales', 'slug' => 'sales'],
            ['name' => 'Marketing', 'slug' => 'marketing'],
            ['name' => 'Research', 'slug' => 'research'],
            ['name' => 'BizOps', 'slug' => 'bizops'],
            ['name' => 'Customer Services', 'slug' => 'customer_services'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
