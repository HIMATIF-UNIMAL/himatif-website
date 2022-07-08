  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="/" class="logo"><img src="img/logo4.png" alt="Logo"></a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link {{ ($title === 'Home') ? 'active' : '' }}" href="/">Home</a></li>
          <li class="dropdown {{ ($title === 'Sejarah' || $title === 'Divisi') ? 'active' : '' }}"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/sejarah">Sejarah</a></li>
              <li class="dropdown"><a href="#"><span>Kepengurusan</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="/divisi">Teras</a></li>
                  <li><a href="/divisi">Administrasi</a></li>
                  <li><a href="/divisi">Agama</a></li>
                  <li><a href="/divisi">Kaderisasi</a></li>
                  <li><a href="/divisi">Humas</a></li>
                  <li><a href="/divisi">Kewirausahaan</a></li>
                  <li><a href="/divisi">Iptek</a></li>
                  <li><a href="/divisi">Jurnalistik</a></li>
                  <li><a href="/divisi">Medikom</a></li>
                  <li><a href="/divisi">Minat Bakat</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a class="nav-link {{ ($title === 'Blog') ? 'active' : '' }}" href="/blog">Blog</a></li>
          <li><a class="nav-link {{ ($title === 'Toko') ? 'active' : '' }}" href="/toko">Shop</a></li>
          <li><a class="nav-link {{ ($title === 'Events') ? 'active' : '' }}" href="/events">Event</a></li>
          <li><a class="nav-link {{ ($title === 'Prestasi') ? 'active' : '' }}" href="/prestasi">Prestasi</a></li>
          <li><a class="nav-link {{ ($title === 'Galeri') ? 'active' : '' }}" href="/galeri">Galeri</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->