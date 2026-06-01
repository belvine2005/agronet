<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Command extends Model
{
    /** @use HasFactory<\Database\Factories\CommandFactory> */
    use HasFactory;

    protected $fillable = [
        'status',
        'cart_id',
        'buyer_id',
        'seller_id'
    ];

    public function cart(){
        return $this->belongsTo(Cart::class);
    }

    public function buyer(){
        return $this->belongsTo(User::class, 'buyer_id');
    }

    public function seller(){
        return $this->belongsTo(User::class, 'seller_id');
    }

    public function products(){
        return $this->belongsToMany(Product::class);
    }
}
