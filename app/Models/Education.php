<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable=[
        'school_start',
        'school_finish',
        'degree',
        'school_name',
        'school_description',
    ];
}
