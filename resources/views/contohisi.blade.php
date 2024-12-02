@extends('layouts.main')

@section('title', 'Contoh Isi')

@section('body-class', 'single-post-page')

@section('content')
<div class="page-title">
    <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Single Post</h1>
        <nav class="breadcrumbs">
            <ol>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class="current">Contoh Isi</li>
            </ol>
        </nav>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <!-- Blog Details Section -->
            <section id="blog-details" class="blog-details section">
                <article class="article">
                    <div class="post-img">
                        <img src="{{ asset('assets/img/Risma-Gus-Hans-Debat-Perdana.webp') }}" alt="" class="img-fluid">
                    </div>

                    <h2 class="title">Debat Perdana, Cagub Risma Paparkan Strategi Peningkatan dan Pemerataan Pendidikan</h2>

                    <div class="meta-top">
                        <ul>
                            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a>editor</a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a><time datetime="2024-10-18">18 Oct 2024</time></a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a>12 Comments</a></li>
                        </ul>
                    </div>

                    <div class="content">
                        <p>
                            Surabaya – Calon gubernur Jawa Timur nomor urut 3, Tri Rismaharini memaparkan strategi untuk meningkatkan dan meratakan pendidikan di Jatim dalam debat perdana Pilgub Jatim yang berlangsung di Ballroom Graha Unesa, Jumat (18/10/2024).
                        </p>

                        <blockquote>
                            <p>
                                Bu Risma menyoroti tantangan serius yang dihadapi banyak anak di Jatim, khususnya di tingkat SD dan SMP, yang terpaksa putus sekolah karena berbagai kendala.
                            </p>
                        </blockquote>

                        <p>
                            “Banyak anak di tingkat SD dan SMP yang putus sekolah. Oleh karena itu, kami akan memberikan bantuan dukungan untuk sekolah-sekolah tersebut agar bisa memberikan akses pendidikan yang lebih baik bagi anak-anak kita,” ujar Risma.
                        </p>
                    </div>

                    <div class="meta-bottom">
                        <i class="bi bi-folder"></i>
                        <ul class="cats">
                            <li><a>Politik</a></li>
                        </ul>

                        <i class="bi bi-tags"></i>
                        <ul class="tags">
                            <li><a>debat</a></li>
                            <li><a>gus hans</a></li>
                            <li><a>Pilgub Jatim 2024</a></li>
                            <li><a>tri rismaharini</a></li>
                        </ul>
                    </div>
                </article>
            </section>

            <!-- Blog Comments Section -->
            <section id="blog-comments" class="blog-comments section">
                <h4 class="comments-count">8 Comments</h4>

                <div id="comment-1" class="comment">
                    <div class="d-flex">
                        <div class="comment-img"><img src="{{ asset('assets/img/blog/comments-1.jpg') }}" alt=""></div>
                        <div>
                            <h5><a href="">Georgia Reader</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                            <time datetime="2022-01-01">01 Jan, 2022</time>
                            <p>
                                Et rerum totam nisi. Molestiae vel quam dolorum vel voluptatem et et. Est ad aut sapiente quis molestiae est qui cum soluta.
                                Vero aut rerum vel. Rerum quos laboriosam placeat ex qui. Sint qui facilis et.
                            </p>
                        </div>
                    </div>
                </div>

                <div id="comment-2" class="comment">
                    <div class="d-flex">
                        <div class="comment-img"><img src="{{ asset('assets/img/blog/comments-2.jpg') }}" alt=""></div>
                        <div>
                            <h5><a href="">Aron Alvarado</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                            <time datetime="2022-01-01">01 Jan, 2022</time>
                            <p>
                                Ipsam tempora sequi voluptatem quis sapiente non. Autem itaque eveniet saepe. Officiis illo ut beatae.
                            </p>
                        </div>
                    </div>
                </div>

                <div id="comment-3" class="comment">
                    <div class="d-flex">
                        <div class="comment-img"><img src="{{ asset('assets/img/blog/comments-3.jpg') }}" alt=""></div>
                        <div>
                            <h5><a href="">Lynda Small</a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
                            <time datetime="2022-01-01">01 Jan, 2022</time>
                            <p>
                                Enim ipsa eum fugiat fuga repellat. Commodi quo quo dicta. Est ullam aspernatur ut vitae quia mollitia id non. Qui ad quas nostrum rerum sed necessitatibus aut est. Eum officiis sed repellat maxime vero nisi natus.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Comment Form Section -->
            <section id="comment-form" class="comment-form section">
                <form method="POST">
                    <h4>Post Comment</h4>
                    <p>Your email address will not be published. Required fields are marked * </p>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input name="name" type="text" class="form-control" placeholder="Your Name*" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <input name="email" type="email" class="form-control" placeholder="Your Email*" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col form-group">
                            <textarea name="comment" class="form-control" placeholder="Your Comment*" required></textarea>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Post Comment</button>
                    </div>
                </form>
            </section>
        </div>

        <div class="col-lg-4 sidebar">
            @include('partials.sidebar')
        </div>
    </div>
</div>
@endsection
