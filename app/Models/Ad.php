<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    /** @use HasFactory<\Database\Factories\AdFactory> */
    use HasFactory;

    protected $fillable = [
        'header',
        'description',
        'image',
        'adress_latitude',
        'adress_longitude',
        'adress_indication'
    ];

    public function products(){
        return $this->belongsToMany(Product::class);
        //une annonce peut concerner plusieurs produits
    }

    public function reports(){
        return $this->morphMany(Report::class,'reportable');
        // une annonce peut faire l'objet de plusieurs signalements
    }

    public function ratings(){
        return $this->morphMany(Rating::class,'commentable');
        // une annonce peut avoir plusieurs avis
    }

    public function manufacturer(){
        return $this->belongsTo(Manufacturer::class);
        // plusieurs annonces peuvent appartenir à un fabricant
    }

    public function producer(){
        return $this->belongsTo(Producer::class);
        // plusieurs annonces peuvent appartenir à un producteur
    }

}
