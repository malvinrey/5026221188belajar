<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/tambah', function () {
    return view('tambah');
});

use App\Http\Controllers\Controller;

// Route data pegawai
Route::get('/pegawai', [Controller::class, 'index']);
Route::get('/pegawai/tambah', [Controller::class, 'create']);
Route::post('/pegawai/store', [Controller::class, 'store']);
Route::get('/pegawai/edit/{id}', [Controller::class, 'edit']);
Route::put('/pegawai/update/{id}', [Controller::class, 'update']);
Route::delete('/pegawai/hapus/{id}', [Controller::class, 'destroy']);

