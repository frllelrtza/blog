<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(5)->create();
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
            'color' => 'red',

        ]);
        Category::create([
            'name' => 'Web Proggraming',
            'slug' => 'web-proggraming',
            'color' => 'green',
        ]);
        Category::create([
            'name' => 'Digital Marketing',
            'slug' => 'digital-marketing',
            'color' => 'blue',
        ]);
        Category::create([
            'name' => 'Product Management',
            'slug' => 'product-management',
            'color' => 'yellow',
        ]);
        Category::create([
            'name' => 'Artificial Intelligence',
            'slug' => 'artificial-intelligence',
            'color' => 'purple',
        ]);
    }
}
