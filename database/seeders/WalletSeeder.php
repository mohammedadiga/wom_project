<?php

namespace Database\Seeders;

use App\Models\Wallet;
use Illuminate\Database\Seeder;

class WalletSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Wallet::create([
            'countryname'=>'try',
            'amount_stock'=>200,
            'stock_price'=>10,
            'amount_stock_price'=> 200 * 10,
            'user_id'=>1,
            'data_id'=>1,
        ]);

        Wallet::create([
            'countryname'=>'usd',
            'amount_stock'=>100,
            'stock_price'=>30,
            'amount_stock_price'=>100 * 30,
            'user_id'=>1,
            'data_id'=>2,
        ]);

        Wallet::create([
            'countryname'=>'uro',
            'amount_stock'=>4000,
            'stock_price'=>2,
            'amount_stock_price'=>4000 * 2 ,
            'user_id'=>1,
            'data_id'=>3,
        ]);
    }
}
