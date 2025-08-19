<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
     use HasFactory;

    // Table name (optional, Laravel will auto-detect "qualifications")
    protected $table = 'qualifications';

    // Fillable fields
    protected $fillable = [
        'name',
    ];
    public $timestamps = false;
}
