<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

     protected $fillable = [
        'title',
        'slug',          
        'description',
        'category_id',
        'city_id',
        'country_id',
        'state_id',
        'qualification',
        'skills',
        'role',
        'status',
    ];


}
