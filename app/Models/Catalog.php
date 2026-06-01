<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    /** @use HasFactory<\Database\Factories\CatalogFactory> */
    use HasFactory;

    protected $fillable = [
        'description'
    ];

    public function products(){
        return $this->hasMany(Product::class);
        //un catalogue peut contenir plusieurs produits
    }


}
