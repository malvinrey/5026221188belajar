@extends('eas.template')

@section('tulisan1')
<div class="container mt-5">
    <h3 class="mb-4 text-center"><strong>Edit Data Karyawan</strong></h3>

    <!-- Form Edit Karyawan -->
    <form action="{{ route('karyawan.update', $karyawan->NIP) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Input NIP -->
        <div class="mb-3">
            <label for="NIP" class="form-label">NIP</label>
            <input type="text" name="NIP" class="form-control" value="{{ $karyawan->NIP }}" readonly>
        </div>

        <!-- Input Nama -->
        <div class="mb-3">
            <label for="Nama" class="form-label">Nama</label>
            <input type="text" name="Nama" class="form-control" value="{{ $karyawan->Nama }}" required>
        </div>

        <!-- Input Pangkat -->
        <div class="mb-3">
            <label for="Pangkat" class="form-label">Pangkat</label>
            <input type="text" name="Pangkat" class="form-control" value="{{ $karyawan->Pangkat }}" required>
        </div>

        <!-- Input Gaji -->
        <div class="mb-3">
            <label for="Gaji" class="form-label">Gaji</label>
            <input type="number" name="Gaji" class="form-control" value="{{ $karyawan->Gaji }}" required>
        </div>

        <!-- Tombol Simpan dan Kembali -->
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('karyawan.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
