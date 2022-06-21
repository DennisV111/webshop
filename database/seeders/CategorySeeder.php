<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Architect',
            'Photography',
            'Graphic Design',
            'Novel',
            'Children',
            'Philosophy',
            'Food',
            'Business',
        ];

        foreach ($categories as $category) {
            \App\Models\Category::create([
                'name'  => $category
            ]);
        }
    }
}
