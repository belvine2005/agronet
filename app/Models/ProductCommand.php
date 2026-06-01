<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCommand extends Model
{
    /** @use HasFactory<\Database\Factories\ProductCommandFactory> */
    use HasFactory;

    protected $fillable = [
        'product_id',
        'command_id',
        'quantity',
        'unit_price',
        'total_price'
    ];

    protected function casts(): array
    {
        return [
            'quantity' => 'decimal:2',
            'unit_price' => 'integer',
            'total_price' => 'integer',
        ];
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function command(){
        return $this->belongsTo(Command::class);
    }
}
