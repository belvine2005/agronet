<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    /** @use HasFactory<\Database\Factories\ManufacturerFactory> */
    use HasFactory;

    public function products(){
        return $this->hasMany(Product::class);
        // un fabricant d'intrant possède plusieurs produits
    }

    public function ads(){
        return $this->hasMany(Ad::class);
        // un fabricant possède plusieurs publicités
    }

}
