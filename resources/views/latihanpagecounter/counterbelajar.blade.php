@extends('latihanpagecounter.template')

@section('tulisan1')
    Selamat Datang di Halaman Counter
@endsection

@section('link1')
    <a href="{{ url('/') }}" class="btn btn-secondary">Kembali ke Home</a>
@endsection

@section('konten')
    <h4>Anda Pengunjung ke-{{ $jumlah }}</h4>
@endsection
