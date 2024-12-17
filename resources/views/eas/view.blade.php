@extends('eas.template')

@section('tulisan1')
<div class="container mt-5">
    <!-- Header Halaman -->
    <h3 class="mb-4 text-center"><strong>View Karyawan</strong></h3>

    <!-- Tombol Kembali -->
    <div class="mb-3">
        <a href="{{ route('karyawan.index') }}" class="btn btn-secondary">Kembali ke Index</a>
    </div>

    <!-- Data Karyawan -->
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-4"><strong>NIP</strong></div>
                <div class="col-8">{{ $karyawan->NIP }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-4"><strong>Nama</strong></div>
                <div class="col-8">{{ $karyawan->Nama }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-4"><strong>Pangkat</strong></div>
                <div class="col-8">{{ $karyawan->Pangkat }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-4"><strong>Gaji</strong></div>
                <div class="col-8">Rp. {{ number_format($karyawan->Gaji, 0, ',', '.') }}</div>
            </div>
        </div>
    </div>
</div>
@endsection
