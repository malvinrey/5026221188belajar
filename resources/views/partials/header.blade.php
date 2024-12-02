<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">
      <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto me-xl-0">
        <h1 class="sitename">PustakaLewiReborn</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
            <li class="dropdown">
                <a><span>Tugas</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                    <li><a href="{{ route('tugas.pertemuan1.linktree') }}">pertemuan 1 - linktree</a></li>
                    <li><a href="{{ route('tugas.pertemuan2.hello') }}">pertemuan 2 - hello</a></li>
                    <li><a href="{{ route('tugas.pertemuan2.style') }}">pertemuan 2 - style</a></li>
                    <li><a href="{{ route('tugas.pertemuan2.style2') }}">pertemuan 2 - style2</a></li>
                    <li><a href="{{ route('tugas.pertemuan3.responsive1') }}">pertemuan 3 - responsive1</a></li>
                    <li><a href="{{ route('tugas.pertemuan5.desainwireframe') }}">pertemuan 5 - desainwireframe</a></li>
                    <li><a href="{{ route('tugas.pertemuan7.form') }}">pertemuan 7 - form</a></li>
                    <li><a href="{{ route('tugas.pertemuan7.template') }}">pertemuan 7 - template</a></li>
                </ul>
            </li>
          <li><a href="{{ url('/') }}" class="active">Home</a></li>
          <li><a href="{{ url('/about') }}">Tentang Kami</a></li>
          <li><a href="{{ url('/contohisi') }}">Contoh Isi</a></li>
          <li class="dropdown"><a><span>Jenis Berita</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a>Ekonomi</a></li>
              <li><a>Politik</a></li>
              <li><a>Sosial Budaya</a></li>
              <li><a>Pendidikan</a></li>
              <li><a>Opini</a></li>
              <li><a>Teknologi/Sains</a></li>
              <li><a>Hukum</a></li>
              <li><a>Agama</a></li>
              <li><a>Lifestyle</a></li>
              <li><a>Otomotif</a></li>
              <li><a>Olahraga</a></li>
              <li><a>Internasional</a></li>
            </ul>
          </li>
          <li><a href="{{ url('/langganan') }}">Langganan Berita</a></li>
          <li><a href="{{ url('/contact') }}">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links">
        <a href="https://www.addtoany.com/add_to/twitter?linkurl=https%3A%2F%2Fwww.pustakalewi.com%2Fbuku-tamu%2F&linkname=Buku%20Tamu&linknote=" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.addtoany.com/add_to/facebook?linkurl=https%3A%2F%2Fwww.pustakalewi.com%2Fbuku-tamu%2F&linkname=Buku%20Tamu&linknote=" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.addtoany.com/add_to/whatsapp?linkurl=https%3A%2F%2Fwww.pustakalewi.com%2Fbuku-tamu%2F&linkname=Buku%20Tamu&linknote=" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
        <a href="https://www.addtoany.com/add_to/telegram?linkurl=https%3A%2F%2Fwww.pustakalewi.com%2Fbuku-tamu%2F&linkname=Buku%20Tamu&linknote=" class="telegram"><i class="bi bi-telegram"></i></a>
      </div>
    </div>
  </header>
