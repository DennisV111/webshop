<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductStockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $maxNumberOfItems = 77;

        for ($i=1; $i<=$maxNumberOfItems; $i++) {
            \App\Models\ProductStock::create([
                'amount'  => random_int(1,30),
                'item_id' => $i,
            ]);
        }
    }
}
