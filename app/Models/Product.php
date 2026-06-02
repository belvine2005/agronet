<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    use SoftDeletes;

    protected $fillable = [
        //=== les champs qui peuvent etre renseignés
        'name',
        'type',
        'status',
        'available_quantity'
    ];

    public function manufacturer(){
        return $this->belongsTo(Manufacturer::class);
        // un produit peut appartenir à un fabricant d'intrants (après création)
    }

    public function producer(){
        return $this->belongsTo(Producer::class);
        // un produit peut appartenir aux producteurs agricoles
    }

    public function catalog(){
        return $this->belongsTo(Catalog::class);
        // un produit peut appartenir à un catalogue
    }

    public function ads(){
        return $this->belongsToMany(Ad::class);
        // un produit peut faire l'objet d'une annonce
    }

    public function carts(){
        return $this->belongsToMany(Cart::class);
        // un produit peut appartenir à plusieurs panier
    }

    public function comment(){
        return $this->morphMany(Rating::class,'commentable');
    }

    public function commands(){
        return $this->belongsToMany(Command::class);
    }

    public function reports(){
        return $this->morphMany(Report::class,'reportable');
        //un produit peut faire l'objet de plusieurs signalements
    }

    public function price_markets(){
        return $this->hasMany(Prices_market::class);
        // un produit peut avoir plusieurs prix moyens
    }

}
