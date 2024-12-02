<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hewan extends Model
{
    use HasFactory;

    // Specify the table name if it doesn't follow Laravel's naming conventions
    protected $table = 'hewan'; // Set this to the singular table name

    // Define the fillable properties
    protected $fillable = [
        'namahewan',
        'jumlahhewan',
        'tersedia',
    ];
}
