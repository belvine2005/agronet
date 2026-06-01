<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;

#[Fillable(['email', 'name', 'phone', 'password', 'role'])]
#[Hidden(['password'])]


class Administrator extends Model
{
    /** @use HasFactory<\Database\Factories\AdministratorFactory> */
    use HasFactory;

 
}
