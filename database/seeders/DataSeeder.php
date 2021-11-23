<?php

namespace Database\Seeders;

use App\Models\Data;
use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Data::create([
            'countryname'=>'try',
            'stock_quantity'=>2000,
            'stock_price'=>50,
            'stock_available'=>1800,
            'stock_sold'=>1,
        ]);

        Data::create([
            'countryname'=>'usd',
            'stock_quantity'=>10000,
            'stock_price'=>30,
            'stock_available'=>900,
            'stock_sold'=>1,
        ]);

        Data::create([
            'countryname'=>'uro',
            'stock_quantity'=>100000,
            'stock_price'=>10,
            'stock_available'=>60000,
            'stock_sold'=>1,
        ]);
    }
}
