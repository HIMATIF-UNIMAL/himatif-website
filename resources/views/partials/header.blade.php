<!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="/" class="logo"><img src="{{ url('img/logo4.png') }}" alt="Logo"></a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link {{ ($title === 'Home') ? 'active' : '' }}" href="/">Home</a></li>
          <li class="dropdown {{ ($title === 'Sejarah' || $title === 'Divisi') ? 'active' : '' }}"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/sejarah">Sejarah</a></li>
              <li class="dropdown"><a href="#"><span>Kepengurusan</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="/divisi/teras">Teras</a></li>
                  <li><a href="/divisi/adm">Administrasi</a></li>
                  <li><a href="/divisi/agama">Agama</a></li>
                  <li><a href="/divisi/kaderisasi">Kaderisasi</a></li>
                  <li><a href="/divisi/humas">Humas</a></li>
                  <li><a href="/divisi/kwh">Kewirausahaan</a></li>
                  <li><a href="/divisi/iptek">Iptek</a></li>
                  <li><a href="/divisi/jurnal">Jurnalistik</a></li>
                  <li><a href="/divisi/medikom">Medikom</a></li>
                  <li><a href="/divisi/bakat">Minat Bakat</a></li>
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