<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    /** @use HasFactory<\Database\Factories\ReportFactory> */
    use HasFactory;

    protected $fillable = [
        'content'
    ];

    public function reportable(){
        return $this->morphTo();
        // un signalement peut etre associé à plusieurs tables
    }

}
