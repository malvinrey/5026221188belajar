<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan1;

class EASKodeCController extends Controller
{
    // Tampilkan semua karyawan dengan optional search
    public function index(Request $request)
    {
        $search = $request->input('search');

        // Query karyawan dengan fitur pencarian dan pagination
        $karyawans = Karyawan1::when($search, function ($query, $search) {
            $query->where('NIP', 'LIKE', "%{$search}%")
                  ->orWhere('Nama', 'LIKE', "%{$search}%")
                  ->orWhere('Pangkat', 'LIKE', "%{$search}%")
                  ->orWhere('Gaji', 'LIKE', "%{$search}%");
        })->paginate(10);

        // Kirim data ke view
        return view('eas.index', compact('karyawans', 'search'));
    }

    // Tampilkan form edit dengan route model binding
    public function edit($NIP)
{
    // Ambil data karyawan berdasarkan NIP
    $karyawan = Karyawan1::findOrFail($NIP);

    // Kirim data ke view edit
    return view('eas.edit', compact('karyawan'));
}


public function show($NIP)
{
    // Ambil data karyawan berdasarkan NIP
    $karyawan = Karyawan1::findOrFail($NIP);

    // Kirim data karyawan ke view
    return view('eas.view', compact('karyawan'));
}

public function viewAll()
{
    // Ambil semua data karyawan dari database
    $karyawans = Karyawan1::all();

    // Kirim data ke view 'eas.view'
    return view('eas.view', compact('karyawans'));
}



    // Update data karyawan
    public function update(Request $request, $NIP)
{
    // Validasi data input
    $request->validate([
        'Nama' => 'required|string|max:50',
        'Pangkat' => 'required|string|max:5',
        'Gaji' => 'required|integer',
    ]);

    // Ambil data karyawan berdasarkan NIP
    $karyawan = Karyawan1::findOrFail($NIP);

    // Update data karyawan
    $karyawan->update([
        'Nama' => $request->Nama,
        'Pangkat' => $request->Pangkat,
        'Gaji' => $request->Gaji,
    ]);

    // Redirect ke halaman index dengan pesan sukses
    return redirect()->route('karyawan.index')->with('success', 'Data karyawan berhasil diperbarui.');
}
public function store(Request $request)
{
    // Validasi input
    $request->validate([
        'NIP' => 'required|string|size:9|unique:karyawan1,NIP',
        'Nama' => 'required|string|max:50',
        'Pangkat' => 'required|string|max:5',
        'Gaji' => 'required|integer',
    ]);

    // Tambahkan data baru
    Karyawan1::create([
        'NIP' => $request->NIP,
        'Nama' => $request->Nama,
        'Pangkat' => $request->Pangkat,
        'Gaji' => $request->Gaji,
    ]);

    // Redirect kembali ke index dengan pesan sukses
    return redirect()->route('karyawan.index')->with('success', 'Data karyawan berhasil ditambahkan!');
}
}
