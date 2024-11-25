<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    // Tabel database yang digunakan
    protected $table = 'pegawai';

    // Kolom yang dapat diisi
    protected $fillable = [
        'pegawai_nama',
        'pegawai_email',
        'pegawai_umur',
        'pegawai_jabatan',
        'pegawai_alamat',
    ];
}
