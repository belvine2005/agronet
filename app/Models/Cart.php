<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    /** @use HasFactory<\Database\Factories\CartFactory> */
    use HasFactory;

    protected $fillable = [
        'status'
        ];

    public function user(){
        return $this->belongsTo(User::class);
        // un panier appartient à un utilisteurs
    }

    public function products(){
        return $this->belongsToMany(Product::class);
        //un panier peut contenir plusieurs produits
    }

    public function command(){
        return $this->hasOne(Command::class);
    }
}