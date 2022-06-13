<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemStockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $maxNumberOfItems = 200;

        for ($i=1; $i<=$maxNumberOfItems; $i++) {
            \App\Models\ItemStock::create([
                'stock'  => 0
            ]);
        }

    }
}
