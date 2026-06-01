<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCart extends Model
{
    /** @use HasFactory<\Database\Factories\ProductCartFactory> */
    use HasFactory;

    protected $fillable = [
        'product_id',
        'cart_id',
        'quantity',
        'unitCost'
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function cart(){
        return $this->belongsTo(Cart::class);
    }
}
