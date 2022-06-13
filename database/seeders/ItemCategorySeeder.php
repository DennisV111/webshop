<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item_categories = [
            'Architect',
            'Photography',
            'Graphic Design',
            'Novel',
            'Children',
            'Philosophy',
            'Food',
            'Business',
        ];

        foreach ($item_categories as $category) {
            \App\Models\ItemCategory::create([
                'name'  => $category
            ]);
        }
    }
}