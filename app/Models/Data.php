<?php

namespace App\Models;

use App\Models\Wallet;
use App\Models\Chart;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'countryname',
        'stock_quantity',
        'stock_price',
        'stock_available',
        'stock_sold',

    ];


    public function WalletData(){
        return $this->hasMany(Wallet::class);
    }

    public function ChartData(){
        return $this->hasMany(Chart::class);
    }
}
