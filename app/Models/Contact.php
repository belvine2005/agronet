<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    /** @use HasFactory<\Database\Factories\ContactFactory> */
    use HasFactory;

    use SoftDeletes;

    protected $fillable = [
        'status'
    ];

    public function users(){
        return $this->belongsToMany(User::class);
        // il y'a contact entre au moins deux utilisateurs
    }
}
