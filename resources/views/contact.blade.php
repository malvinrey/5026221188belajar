@extends('layouts.main')

@section('title', 'Contact Us')

@section('body-class', 'contact-page')

@section('content')
<!-- Page Title -->
<div class="page-title">
    <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Contact</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="current">Contact</li>
            </ol>
        </nav>
    </div>
</div>

<!-- Contact Section -->
<section id="contact" class="contact section">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-4">
                <div class="info-item d-flex">
                    <i class="bi bi-geo-alt flex-shrink-0"></i>
                    <div>
                        <h3>Address</h3>
                        <p>Diponegoro 186 (Lantai 2), Kota Surabaya, Jawa Timur</p>
                    </div>
                </div>
                <div class="info-item d-flex">
                    <i class="bi bi-telephone flex-shrink-0"></i>
                    <div>
                        <h3>Call Us</h3>
                        <p>(031) 5687372</p>
                    </div>
                </div>
                <div class="info-item d-flex">
                    <i class="bi bi-envelope flex-shrink-0"></i>
                    <div>
                        <h3>Email Us</h3>
                        <p>redaksi@pustakalewi.net</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <form action="" method="post" class="php-email-form">
                    @csrf
                    <div class="row gy-4">
                        <!-- Input Nama -->
                        <div class="col-md-6">
                            <input type="text" id="name" name="name" class="form-control" placeholder="Your Name" required>
                        </div>

                        <!-- Input Email -->
                        <div class="col-md-6">
                            <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                        </div>

                        <!-- Input Subject -->
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                        </div>

                        <!-- Slider Umur -->
                        <div class="col-md-12">
                            <label for="age">Your Age: <span id="age-value">25</span></label>
                            <input type="range" id="age" name="age" min="1" max="100" value="25"
                                oninput="document.getElementById('age-value').innerText = this.value">
                        </div>

                        <!-- Pesan -->
                        <div class="col-md-12">
                            <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                        </div>

                        <!-- Tombol Kirim -->
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
