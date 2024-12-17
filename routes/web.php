<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\CRUDPegawaiController;
use App\Http\Controllers\EASKodeCController;

// Form routes
Route::get('/formulir', 'App\Http\Controllers\PegawaiController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\PegawaiController@proses');

// UtsController routes
Route::get('/index', 'App\Http\Controllers\UtsController@index');
Route::get('/about', 'App\Http\Controllers\UtsController@about');
Route::get('/contohisi', 'App\Http\Controllers\UtsController@contohisi');
Route::get('/langganan', 'App\Http\Controllers\UtsController@langganan');
Route::get('/contact', 'App\Http\Controllers\UtsController@contact');

// Static Views
Route::view('/about', 'about');
Route::view('/contohisi', 'contohisi');
Route::view('/langganan', 'langganan');
Route::view('/contact', 'contact');

// TugasController routes
 //   Route::prefix('tugas')->group(function () {
 //   Route::prefix('pertemuan1')->group(function () {
  //      Route::get('/linktree', [TugasController::class, 'linktree'])->name('tugas.pertemuan1.linktree');
 //   });
  //  Route::prefix('pertemuan2')->group(function () {
  //      Route::get('/hello', [TugasController::class, 'hello'])->name('tugas.pertemuan2.hello');
  //      Route::get('/style', [TugasController::class, 'style'])->name('tugas.pertemuan2.style');
  //      Route::get('/style2', [TugasController::class, 'style2'])->name('tugas.pertemuan2.style2');
  //  });
//    Route::prefix('pertemuan3')->group(function () {
  //      Route::get('/responsive1', [TugasController::class, 'responsive1'])->name('tugas.pertemuan3.responsive1');
  //  });
//    Route::prefix('pertemuan5')->group(function () {
 //       Route::get('/desainwireframe', [TugasController::class, 'desainwireframe'])->name('tugas.pertemuan5.desainwireframe');
 //   });
 //   Route::prefix('pertemuan7')->group(function () {
//        Route::get('/form', [TugasController::class, 'form'])->name('tugas.pertemuan7.form');
//        Route::get('/template', [TugasController::class, 'template'])->name('tugas.pertemuan7.template');
  //  });
//});

// Custom error route
Route::get('/error', function () {
    return "<h1>Server Error: Ada Kesalahan di Server</h1>";
});

// DosenController routes
Route::get('/dosen', 'App\Http\Controllers\DosenController@index');
Route::get('/blog2', 'App\Http\Controllers\DosenController@blog');
Route::get('/biodata', 'App\Http\Controllers\DosenController@biodata');

// PegawaiDBController routes
Route::prefix('pegawai')->group(function () {
    Route::get('/', 'App\Http\Controllers\PegawaiDBController@index');
    Route::get('/tambah', 'App\Http\Controllers\PegawaiDBController@tambah');
    Route::post('/store', 'App\Http\Controllers\PegawaiDBController@store');
    Route::get('/edit/{id}', 'App\Http\Controllers\PegawaiDBController@edit');
    Route::post('/update', 'App\Http\Controllers\PegawaiDBController@update');
    Route::get('/hapus/{id}', 'App\Http\Controllers\PegawaiDBController@hapus');
    Route::get('/cari', 'App\Http\Controllers\PegawaiDBController@cari');
});

// CRUDPegawaiController resource route
Route::resource('hewan', CRUDPegawaiController::class);

// EASKodeCController routes
Route::resource('karyawan', EASKodeCController::class);

// Route Utama: Arahkan ke Index
Route::get('/', [EASKodeCController::class, 'index'])->name('index');

// Route untuk halaman View per Karyawan
Route::get('/karyawan/{karyawan}', [EASKodeCController::class, 'show'])->name('karyawan.show');

// Route Dummy Edit
Route::get('/karyawan/{karyawan}/edit', [EASKodeCController::class, 'edit'])->name('karyawan.edit');

Route::post('/karyawan/store', [EASKodeCController::class, 'store'])->name('karyawan.store');

