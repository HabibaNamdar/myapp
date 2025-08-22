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
        'company_name',
        'category_id',
        'user_id',
        'type',
        'city_id',
        'country_id',
        'state_id',
        'qualification',
        'skills',
        'role',
        'description',
        'status',
        'deadline',
        'hiring',
        'monthly_salary_min',
        'monthly_salary_max',
        'year_passing_from',
        'year_passing_to',
        'experience_from',
        'experience_to',
    ];
}
