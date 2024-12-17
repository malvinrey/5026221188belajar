<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan1 extends Model
{
    use HasFactory;

    // Tabel yang digunakan
    protected $table = 'karyawan1';

    // Primary Key yang digunakan
    protected $primaryKey = 'NIP';

    // Non-incrementing key karena NIP bukan auto-increment
    public $incrementing = false;

    // Tipe data primary key
    protected $keyType = 'string';

    // Kolom yang dapat diisi (fillable)
    protected $fillable = ['NIP', 'Nama', 'Pangkat', 'Gaji'];
}
