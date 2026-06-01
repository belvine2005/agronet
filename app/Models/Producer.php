<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producer extends Model
{
    /** @use HasFactory<\Database\Factories\ProducerFactory> */
    use HasFactory;

    protected $fillable = [
        //=== les attributs qu'on peut remplir
        
    
    
    ];
    public function products(){
        return $this->hasMany(Product::class);
    }

    public function ads(){
        return $this->hasMany(Ad::class);
        // un producteur possède plusieurs publicités
    }

    // public function reports(){
    //     return $this->morphMany(Report::class,'reportable');
    //     //un producteur peut faire l'objet de plusieurs signalements
    // }
}
