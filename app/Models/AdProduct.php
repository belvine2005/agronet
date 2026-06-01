<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdProduct extends Model
{
    /** @use HasFactory<\Database\Factories\AdProductFactory> */
    use HasFactory;

    protected $fillable = [
        'ad_id',
        'product_id'
    ];

    public function ad(){
        return $this->belongsTo(Ad::class);
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
