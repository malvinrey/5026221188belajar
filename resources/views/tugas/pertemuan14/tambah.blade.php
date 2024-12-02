@extends('template') <!-- Extend the template -->

@section('headerPage', 'Tambah Data Pegawai')

@section('content') <!-- Start the content section -->

<div class="container">
    <p class="text-center">
        <a href="/pegawai" class="btn btn-warning btn-sm">Kembali</a>
    </p>

    <div class="card p-4">
        <form action="/pegawai/store" method="POST">
            @csrf <!-- Laravel's CSRF token directive -->

            <div class="form-group row mb-3">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" name="nama" id="nama" class="form-control" required placeholder="Masukkan nama pegawai">
                </div>
            </div>

            <div class="form-group row mb-3">
                <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <textarea name="alamat" id="alamat" class="form-control" required placeholder="Masukkan alamat pegawai">{{ $pegawai->pegawai_alamat }}</textarea>
                </div>
            </div>

            <div class="form-group row mb-3">
                <label for="umur" class="col-sm-2 col-form-label">Umur</label>
                <div class="col-sm-10">
                    <input type="number" name="umur" id="umur" class="form-control" required placeholder="Masukkan umur pegawai">
                </div>
            </div>

            <div class="form-group row mb-3">
                <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
                <div class="col-sm-10">
                    <input type="text" name="jabatan" id="jabatan" class="form-control" required placeholder="Masukkan jabatan pegawai">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-12 text-end">
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection <!-- End the content section -->
