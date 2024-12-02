<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article; // Pastikan model Article ada

class UtsController extends Controller
{
    public function index(){
        $articles = Article::all();
        return view('index', compact('articles'));
    }

    public function about(){
        $articles = Article::all();
        return view('about', compact('articles'));
    }

    public function contohisi(){
        $articles = Article::all();
        return view('contohisi', compact('articles'));
    }

    public function langganan(){
        $articles = Article::all();
        return view('langganan', compact('articles'));
    }

    public function contact(){
        $articles = Article::all();
        return view('contact', compact('articles'));
    }

    public function biodata(){
        $nama = 'budi';
        $umur = 20;
        $hasil = 20 + 30;
        $matkul = ["Algoritma & Pemrograman", "Kalkulus", "Pemrograman Web"];

        return view('biodata', [
            'nama' => $nama,
            'umur' => $umur,
            'hasil' => $hasil,
            'matkul' => $matkul
        ]);
    }
}
