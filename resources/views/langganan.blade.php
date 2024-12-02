@extends('layouts.main')

@section('title', 'Langganan Berita')

@section('body-class', 'subscription-page')

@section('content')
<!-- Page Title -->
<div class="page-title">
    <div class="container">
        <h1 class="mb-2">Form Langganan Berita</h1>
    </div>
</div>

<!-- Form Langganan Section -->
<form action="" method="post" class="php-email-form">
    @csrf
    <div class="row gy-4">
        <!-- Nama -->
        <div class="col-md-6">
            <input type="text" id="name" name="name" class="form-control" placeholder="Nama Anda">
        </div>

        <!-- Email -->
        <div class="col-md-6">
            <input type="email" class="form-control" name="email" placeholder="Email Anda">
        </div>

        <!-- Pilihan Kategori Langganan -->
        <div class="col-md-12">
            <h4>Pilih Kategori Berita yang Ingin Dilanggani</h4>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="kategori[]" value="Ekonomi" id="ekonomi">
                <label class="form-check-label" for="ekonomi">Ekonomi</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="kategori[]" value="Politik" id="politik">
                <label class="form-check-label" for="politik">Politik</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="kategori[]" value="Sosial Budaya" id="sosial-budaya">
                <label class="form-check-label" for="sosial-budaya">Sosial Budaya</label>
            </div>
        </div>

        <!-- Tombol Kirim -->
        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Langganan</button>
        </div>
    </div>
</form>


<!-- Testimoni Pelanggan -->
<section class="testimonials section">
    <div class="container">
        <h2 class="text-center mb-4">Apa Kata Pelanggan Kami</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="testimonial-item">
                    <p>"PustakaLewiReborn memberikan berita yang sangat update dan terpercaya, sangat puas berlangganan di sini!"</p>
                    <h5>- John Doe</h5>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-item">
                    <p>"Berlangganan berita ekonomi membantu saya dalam keputusan bisnis saya. Informasi yang sangat akurat dan cepat."</p>
                    <h5>- Jane Smith</h5>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-item">
                    <p>"Saya suka berlangganan berita teknologi dari PustakaLewiReborn, selalu ada inovasi terbaru!"</p>
                    <h5>- Lisa Adams</h5>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Penawaran Paket Langganan -->
<section class="pricing section">
    <div class="container">
        <h2 class="text-center mb-4">Paket Langganan</h2>
        <div class="row">
            @foreach([
                ['Paket Harian', 'Rp 10.000/hari', ['Akses semua kategori berita', 'Update harian', 'Support via email']],
                ['Paket Mingguan', 'Rp 50.000/minggu', ['Akses semua kategori berita', 'Update mingguan', 'Support via email & WhatsApp']],
                ['Paket Bulanan', 'Rp 150.000/bulan', ['Akses semua kategori berita', 'Update bulanan', 'Support 24/7']]
            ] as $paket)
            <div class="col-md-4">
                <div class="pricing-plan">
                    <h3>{{ $paket[0] }}</h3>
                    <p>{{ $paket[1] }}</p>
                    <ul>
                        @foreach($paket[2] as $fitur)
                        <li>{{ $fitur }}</li>
                        @endforeach
                    </ul>
                    <button class="btn btn-primary">Pilih Paket</button>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- FAQ -->
<section class="faq section">
    <div class="container">
        <h2 class="text-center mb-4">Pertanyaan yang Sering Diajukan</h2>
        <div class="accordion" id="faqAccordion">
            @foreach([
                ['Bagaimana cara berlangganan?', 'Anda bisa berlangganan dengan mengisi form di atas dan memilih paket langganan yang sesuai.'],
                ['Apakah saya bisa membatalkan langganan kapan saja?', 'Ya, Anda bisa membatalkan langganan kapan saja melalui pengaturan akun Anda atau menghubungi tim support.'],
                ['Apa metode pembayaran yang tersedia?', 'Kami menerima pembayaran melalui transfer bank, kartu kredit, dan e-wallet seperti GoPay dan OVO.']
            ] as $index => $faq)
            <div class="accordion-item">
                <h3 class="accordion-header">
                    <button class="accordion-button {{ $index === 0 ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#faq{{ $index }}">
                        {{ $faq[0] }}
                    </button>
                </h3>
                <div id="faq{{ $index }}" class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        {{ $faq[1] }}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Keuntungan Berlangganan -->
<section class="benefits section">
    <div class="container">
        <h2 class="text-center mb-4">Keuntungan Berlangganan</h2>
        <div class="row">
            @foreach([
                ['bi-lightning-charge-fill', 'Update Berita Cepat', 'Dapatkan berita terbaru lebih cepat dari sumber terpercaya.'],
                ['bi-star-fill', 'Akses Premium', 'Akses ke konten eksklusif dan analisis mendalam.'],
                ['bi-chat-dots-fill', 'Dukungan 24/7', 'Tim support siap membantu Anda kapan saja.']
            ] as $benefit)
            <div class="col-md-4">
                <div class="benefit-item text-center">
                    <i class="bi {{ $benefit[0] }}"></i>
                    <h4>{{ $benefit[1] }}</h4>
                    <p>{{ $benefit[2] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
