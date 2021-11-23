<?php

namespace App\Models;

use App\Models\Data;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chart extends Model
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

    public function DataChart(){
        return $this->belongsTo(Data::class);
    }

}
