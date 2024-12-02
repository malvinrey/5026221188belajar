<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PageCounterController extends Controller
{
    public function index()
    {
        // Update the counter
        DB::table('pagecounter')->increment('jumlah');

        // Get the updated count
        $jumlah = DB::table('pagecounter')->first()->jumlah;

        // Return the view with the count
        return view('pagecounter.index', compact('jumlah'));
    }
}
