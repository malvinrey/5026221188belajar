<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageCounterBelajar extends Model
{
    protected $table = 'pagecounterbelajar'; // Nama tabel yang baru
    protected $fillable = ['Jumlah'];
    public $timestamps = false;
}
