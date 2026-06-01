<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    /** @use HasFactory<\Database\Factories\RatingFactory> */
    use HasFactory;

    protected $fillable = [
        'comment',
        'score'
    ];

    public function commentable(){
        return $this->morphTo();
        // un commentaire peut appartenir à plusieurs autres modèles
    }
}
