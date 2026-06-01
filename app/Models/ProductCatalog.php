<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCatalog extends Model
{
    /** @use HasFactory<\Database\Factories\ProductCatalogFactory> */
    use HasFactory;

    protected $fillable = [
        'product_id',
        'catalog_id'
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function catalog(){
        return $this->belongsTo(Catalog::class);
    }
}
