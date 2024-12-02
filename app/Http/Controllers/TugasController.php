<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function linktree() {
        return view('tugas.pertemuan1.linktree');
    }

    public function hello() {
        return view('tugas.pertemuan2.hello');
    }

    public function style() {
        return view('tugas.pertemuan2.style');
    }

    public function style2() {
        return view('tugas.pertemuan2.style2');
    }

    public function responsive1() {
        return view('tugas.pertemuan3.responsive1');
    }

    public function desainwireframe() {
        return view('tugas.pertemuan5.desainwireframe');
    }

    public function form() {
        return view('tugas.pertemuan7.form');
    }

    public function template() {
        return view('tugas.pertemuan7.template');
    }
}
