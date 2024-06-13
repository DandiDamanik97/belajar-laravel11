<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //User::factory(5)->create();
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);
        Category::create([
            'name' => 'UI UX',
            'slug' => 'ui-ux',
        ]);
        Category::create([
            'name' => 'Machine Learning',
            'slug' => 'machine-learning',
        ]);
        Category::create([
            'name' => 'Data Structur',
            'slug' => 'data-structur',
        ]);
        Category::create([
            'name' => 'Web Developer',
            'slug' => 'web-developer',
        ]);
    }
}
