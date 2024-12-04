<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PageCounterController extends Controller
{
    public function index()
    {
        // Get the last record to determine the current ID and Jumlah
        $lastCounter = DB::table('pagecounter')->orderBy('id', 'desc')->first();

        // If no records exist (very first run), initialize with ID 1
        if (!$lastCounter) {
            DB::table('pagecounter')->insert([
                'id' => 1,
                'jumlah' => 0
            ]);
            $lastCounter = (object) ['id' => 1, 'jumlah' => 0];
        }

        // Prepare the next ID and increment the jumlah
        $nextId = $lastCounter->id + 1;
        $nextJumlah = $lastCounter->jumlah + 1;

        // Insert the new record with the nextId and nextJumlah
        DB::table('pagecounter')->insert([
            'id' => $nextId,
            'jumlah' => $nextJumlah
        ]);

        // Send the new ID and Jumlah to the view
        return view('pagecounter.index', [
            'id' => $nextId,        // ID of the latest visitor
            'jumlah' => $nextJumlah  // Updated Jumlah of visitors
        ]);
    }
}
