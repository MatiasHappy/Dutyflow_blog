<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $categories = ['Duty', 'Habit', 'Fun'];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}
