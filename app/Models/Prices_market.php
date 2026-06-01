<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prices_market extends Model
{
    /** @use HasFactory<\Database\Factories\PricesMarketFactory> */
    use HasFactory;

    protected $fillable = [ 
        //=== les attributs qu'on peut remplir
        'price',
        'locality',
        'market',
        'type_product',
        'location_latitude',
        'location_longitude',
        'location_indication'
    ]; 

    public function products(){
        return $this->belongsToMany(Product::class);
        //un prix moyen peut appartenir à plusieurs produits
    }

}
