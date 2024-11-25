<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class Controller extends BaseController
{
    /**
     * Tampilkan data pegawai dengan fitur pencarian dan pagination.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $query = Pegawai::query();

        // Filter berdasarkan nama jika parameter 'cari' ada
        if ($request->has('cari') && $request->cari) {
            $query->where('pegawai_nama', 'like', '%' . $request->cari . '%');
        }

        // Ambil jumlah data per halaman (default 10)
        $pagination = $request->input('pagination', 10);

        // Paginate hasil pencarian
        $pegawai = $query->paginate($pagination);

        // Kirim data ke view
        return view('pegawai.index', compact('pegawai'));
    }

    /**
     * Tampilkan form tambah pegawai.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('pegawai.create');
    }

    /**
     * Simpan data pegawai baru.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:pegawai,pegawai_email',
            'umur' => 'required|integer|min:18',
            'jabatan' => 'required|string|max:255',
            'alamat' => 'required|string|max:500',
        ]);

        // Simpan data pegawai ke database
        Pegawai::create([
            'pegawai_nama' => $request->nama,
            'pegawai_email' => $request->email,
            'pegawai_umur' => $request->umur,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_alamat' => $request->alamat,
        ]);

        // Redirect dengan pesan sukses
        return redirect('/pegawai')->with('success', 'Pegawai berhasil ditambahkan!');
    }

    /**
     * Tampilkan form edit pegawai.
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $pegawai = Pegawai::findOrFail($id);
        return view('pegawai.edit', compact('pegawai'));
    }

    /**
     * Update data pegawai.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:pegawai,pegawai_email,' . $id,
            'umur' => 'required|integer|min:18',
            'jabatan' => 'required|string|max:255',
            'alamat' => 'required|string|max:500',
        ]);

        // Cari pegawai dan update data
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->update([
            'pegawai_nama' => $request->nama,
            'pegawai_email' => $request->email,
            'pegawai_umur' => $request->umur,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_alamat' => $request->alamat,
        ]);

        // Redirect dengan pesan sukses
        return redirect('/pegawai')->with('success', 'Pegawai berhasil diperbarui!');
    }

    /**
     * Hapus data pegawai.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        // Hapus pegawai berdasarkan ID
        $pegawai = Pegawai::findOrFail($id);
        $pegawai->delete();

        // Redirect dengan pesan sukses
        return redirect('/pegawai')->with('success', 'Pegawai berhasil dihapus!');
    }
}
