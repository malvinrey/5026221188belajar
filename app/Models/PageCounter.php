<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageCounter extends Model
{
    use HasFactory;

    // Specify the table associated with the model if different from the plural form of the model name
    protected $table = 'pagecounter';

    // Define the attributes that are mass assignable
    protected $fillable = ['jumlah'];

    // Optionally, if you want to avoid created_at and updated_at timestamps, uncomment the line below
    // public $timestamps = false;
}
