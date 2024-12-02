@extends('layouts.main') <!-- Menggunakan layout utama -->

@section('title', 'About Us')
@section('meta_description', 'Learn more about us at PustakaLewiReborn.')
@section('meta_keywords', 'About, PustakaLewi, Profile')

@section('body_class', 'about-page') <!-- Body class khusus -->

@section('content')
<!-- Page Title -->
<div class="page-title">
    <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">About Us</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="current">About</li>
            </ol>
        </nav>
    </div>
</div>

<!-- About Section -->
<section id="about" class="about section">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                <p class="who-we-are">Who are we?</p>
                <h3>Perhimpunan Pustaka Lewi (PPL)</h3>
                <p class="fst-italic">
                    Perhimpunan Pustaka Lewi (PPL) adalah lembaga yang fokus pada kajian, riset, dan pemberdayaan umat Kristen terutama dalam relasinya terhadap masyarakat, negara, dan pemerintahan.
                </p>
                <ul>
                    <li><i class="bi bi-check-circle"></i> <span><b>Trustworthy</b></span></li>
                    <li><i class="bi bi-check-circle"></i> <span><b>Independent</b></span></li>
                    <li><i class="bi bi-check-circle"></i> <span><b>Up-to-date</b></span></li>
                </ul>
            </div>
            <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
                <div class="row gy-4">
                    <div class="col-lg-6">
                        <img src="{{ asset('images/terimakunjungan.jpeg') }}" class="img-fluid" alt="Terima Kunjungan">
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ asset('images/perhimpunan.jpeg') }}" class="img-fluid" alt="Perhimpunan">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
