<div class="widgets-container">
    <!-- Blog Author Widget -->
    <div class="blog-author-widget widget-item">
        <div class="d-flex flex-column align-items-center">
            <div class="d-flex align-items-center w-100">
                <i class="bi bi-person rounded-circle flex-shrink-0" style="font-size: 100px;"></i>
                <div>
                    <h4>Editor</h4>
                    <div class="social-links">
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <p>
                Penulis adalah lulusan dari universitas ternama dan memiliki pengalaman luas dalam bidang jurnalistik.
            </p>
        </div>
    </div>
    <!-- /Blog Author Widget -->

    <!-- Search Widget -->
    <div class="search-widget widget-item">
        <h3 class="widget-title">Search</h3>
        <form action="{{ url('/search') }}" method="GET">
            <input type="text" name="query" class="form-control" placeholder="Search...">
            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
    </div>
    <!-- /Search Widget -->

    <!-- Recent Posts Widget -->
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
    <!-- /Recent Posts Widget -->

    <!-- Tags Widget -->
    <div class="tags-widget widget-item">
        <h3 class="widget-title">Tags</h3>
        <ul class="list-unstyled d-flex flex-wrap">
            <li class="me-2"><a href="#">Ekonomi</a></li>
            <li class="me-2"><a href="#">Politik</a></li>
            <li class="me-2"><a href="#">Sosial Budaya</a></li>
            <li class="me-2"><a href="#">Pendidikan</a></li>
            <li class="me-2"><a href="#">Opini</a></li>
            <li class="me-2"><a href="#">Teknologi/Sains</a></li>
            <li class="me-2"><a href="#">Hukum</a></li>
            <li class="me-2"><a href="#">Agama</a></li>
            <li class="me-2"><a href="#">Lifestyle</a></li>
            <li class="me-2"><a href="#">Otomotif</a></li>
            <li class="me-2"><a href="#">Olahraga</a></li>
            <li class="me-2"><a href="#">Internasional</a></li>
        </ul>
    </div>
    <!-- /Tags Widget -->
</div>
