<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PageCounterControllerBelajar extends Controller
{
    public function showCounter()
    {
        // Ambil semua data dan baca baris terakhir
        $lastRow = DB::table('pagecounterbelajar')->orderBy('ID', 'desc')->first();

        // Tentukan nilai baru untuk "Jumlah"
        $newJumlah = $lastRow->Jumlah + 1;

        // Insert baris baru dengan nilai "Jumlah" yang baru
        DB::table('pagecounterbelajar')->insert(['Jumlah' => $newJumlah]);

        // Tampilkan view dengan nilai "Jumlah" terbaru
        return view('latihanpagecounter.counterbelajar', ['jumlah' => $newJumlah]);
    }
}
