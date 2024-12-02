<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PustakaLewiReborn</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

    <!-- Favicons -->
    <link href="{{ asset('images/favicon.png') }}" rel="icon">
    <link href="{{ asset('images/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=EB+Garamond:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

    <!-- Buat Logo -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">


    <!-- Vendor CSS Files -->
    <link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/swiper-bundle.min.css') }}" rel="stylesheet">

     <!-- Main CSS File -->
  <link href="{{ asset('asset/css/main.css') }}" rel="stylesheet">
</head>

<body class="index-page">
  <!-- Header -->
  @include('partials.header')

  <!-- Main Content -->
  <main class="main">

    <!-- Slider Section -->
    <section id="slider" class="slider section dark-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">

          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "centeredSlides": true,
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              }
            }
          </script>

          <div class="swiper-wrapper">

            <div class="swiper-slide" style="background-image: url('{{ asset('images/Risma-Gus-Hans-Debat-Perdana.webp') }}');">
              <div class="content">
                <h2><a href="{{ url('contoh-isi') }}">Debat Perdana, Cagub Risma Paparkan Strategi Peningkatan dan Pemerataan Pendidikan</a></h2>
                <p>Calon gubernur Jawa Timur nomor urut 3, Tri Rismaharini memaparkan strategi untuk meningkatkan dan meratakan pendidikan di Jatim dalam debat perdana Pilgub Jatim yang berlangsung di Ballroom Graha Unesa, Jumat (18/10/2024).</p>
              </div>
            </div>

            <div class="swiper-slide" style="background-image: url('{{ asset('images/Stasiun-Pasar-Senen.jpeg') }}');">
              <div class="content">
                <h2><a href="#">Jadi Stasiun Tersibuk, KAI Tingkatkan Fasilitas di Stasiun Pasar Senen</a></h2>
                <p>PT Kereta Api Indonesia (Persero) mencatat peningkatan volume jumlah penumpang KA Jarak Jauh di Stasiun Pasar Senen dari tahun ke tahun. Stasiun yang melayani 32 perjalanan kereta api jarak jauh dan 52 perjalanan Commuterline tersebut, pada tahun 2021 telah melayani 1.218.734 penumpang kereta api jarak jauh.</p>
              </div>
            </div>
          </div>

          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>

          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Slider Section -->

    <!-- Trending Category Section -->
    <section id="trending-category" class="trending-category section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="container" data-aos="fade-up">
          <div class="row g-5">
            <div class="col-lg-4">

              <div class="post-entry lg">
                <a href="{{ url('contoh-isi') }}"><img src="{{ asset('images/Risma-Gus-Hans-Debat-Perdana.webp') }}" alt="" class="img-fluid" ></a>
                <div class="post-meta"><span class="date">Politik</span> <span class="mx-1">•</span> <span>19 Oct 2024</span></div>
                <h2><a href="{{ url('contoh-isi') }}">Debat Perdana, Cagub Risma Paparkan Strategi Peningkatan dan Pemerataan Pendidikan</a></h2>
                <p class="mb-4 d-block">Calon gubernur Jawa Timur nomor urut 3, Tri Rismaharini memaparkan strategi untuk meningkatkan dan meratakan pendidikan di Jatim dalam debat perdana Pilgub Jatim yang berlangsung di Ballroom Graha Unesa, Jumat (18/10/2024).</p>
              </div>
            </div>

            <div class="col-lg-8">
              <div class="row g-5">
                <div class="col-lg-4 border-start custom-border">
                  <div class="post-entry">
                    <a href="#"><img src="{{ asset('images/BJB-event-768x487.jpg') }}" alt="" class="img-fluid"></a>
                    <div class="post-meta"><span class="date">Ekonomi</span> <span class="mx-1">•</span> <span>19 Oct 2024</span></div>
                    <h2><a href="#">BJB Ajak Masyarakat Bijak Mengelola Keuangan</a></h2>
                  </div>
                  <div class="post-entry">
                    <a href="#"><img src="{{ asset('images/Bandara-Dhoho-Diresmikan-768x511.jpg') }}" alt="" class="img-fluid"></a>
                    <div class="post-meta"><span class="date">Sosial Budaya</span> <span class="mx-1">•</span> <span>19 Oct 2024</span></div>
                    <h2><a href="#">Bandara Dhoho Kediri Diresmikan, Siap Layani Penerbangan Domestik dan International</a></h2>
                  </div>
                  <div class="post-entry">
                    <a href="#"><img src="{{ asset('images/kampus-Universitas-terbuka-300x225.jpg') }}" alt="" class="img-fluid"></a>
                    <div class="post-meta"><span class="date">Pendidikan</span> <span class="mx-1">•</span> <span>19 Oct 2024</span></div>
                    <h2><a href="#">UT Surabaya Tawarkan Dua Jalur Pendaftaran</a></h2>
                  </div>
                </div>
                <div class="col-lg-4 border-start custom-border">
                  <div class="post-entry">
                    <a href="#"><img src="{{ asset('images/Telkom-event_2.jpg') }}" alt="" class="img-fluid"></a>
                    <div class="post-meta"><span class="date">Teknologi/Sains</span> <span class="mx-1">•</span> <span>18 Oct 2024</span></div>
                    <h2><a href="#">Telkom Dinobatkan Sebagai The Most Outstanding BUMN Learning dalam Ajang BUMN Learning Festival 2024</a></h2>
                  </div>
                  <div class="post-entry">
                    <a href="#"><img src="{{ asset('images/ilustrasi-judi-online.jpg') }}" alt="" class="img-fluid"></a>
                    <div class="post-meta"><span class="date">Hukum</span> <span class="mx-1">•</span> <span>12 Oct 2024</span></div>
                    <h2><a href="#">Pemerintah Tegur Keras E-Wallet Yang Jadi Fasilitator Judi Online</a></h2>
                  </div>
                  <div class="post-entry">
                    <a href="#"><img src="{{ asset('images/PGPI-diskusi-bareng-Eri-Cahyadi-300x225.jpg') }}" alt="" class="img-fluid"></a>
                    <div class="post-meta"><span class="date">Agama</span> <span class="mx-1">•</span> <span>18 Oct 2024</span></div>
                    <h2><a href="#">Persekutuan Gereja-Gereja Pentakosta Indonesia Gelar Diskusi Bersama Eri Cahyadi</a></h2>
                  </div>
                </div>

                <!-- Recent Posts Section -->
                <div class="col-lg-4">
                  <div class="recent-posts-widget widget-item">
                    <h3 class="widget-title">Postingan Terbaru</h3>

                    <div class="post-item">
                      <div>
                        <h4><a href="#">Sambut Hari Sumpah Pemuda Artotel TS Suites Surabaya Hadirkan Onedeck Fusion Vibes Vol 3</a></h4>
                        <time datetime="2024-10-28">Oct 28, 2024</time>
                      </div>
                    </div>

                    <div class="post-item">
                      <div>
                        <h4><a href="#">Jadi Stasiun Tersibuk, KAI Tingkatkan Fasilitas di Stasiun Pasar Senen</a></h4>
                        <time datetime="2024-10-29">Oct 29, 2024</time>
                      </div>
                    </div>

                    <div class="post-item">
                      <div>
                        <h4><a href="#">Kemeriahan Open House SD Katolik Mardi Wiyata I Malang</a></h4>
                        <time datetime="2024-10-30">Oct 30, 2024</time>
                      </div>
                    </div>

                    <div class="post-item">
                      <div>
                        <h4><a href="#">BJB Ajak Masyarakat Bijak Mengelola Keuangan</a></h4>
                        <time datetime="2024-10-31">Oct 31, 2024</time>
                      </div>
                    </div>

                    <div class="post-item">
                      <div>
                        <h4><a href="#">Bandara Dhoho Kediri Diresmikan, Siap Layani Penerbangan Domestik dan Internasional</a></h4>
                        <time datetime="2024-11-01">Nov 1, 2024</time>
                      </div>
                    </div>

                  </div>
                  </div>
                </div> <!-- End Trending Section -->

              </div>
            </div>
          </div> <!-- End .row -->
        </div>
      </div>
  </main>


  <!-- Footer -->
  @include('partials.footer')

  <!-- Vendor JS Files -->
  <script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('asset/js/validate.js') }}"></script>
  <script src="{{ asset('asset/js/aos.js') }}"></script>
  <script src="{{ asset('asset/js/swiper-bundle.min.js') }}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('asset/js/main.js') }}"></script>
</body>
</html>
