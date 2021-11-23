<?php

namespace App\Models;

use App\Models\User;
use App\Models\Data;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'countryname',
        'amount_stock',
        'stock_price',
        'amount_stock_price',
        'user_id',
        'data_id',
        'created_at',
        'updated_at',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function DataWallets(){
        return $this->belongsTo(Data::class);
    }

}
