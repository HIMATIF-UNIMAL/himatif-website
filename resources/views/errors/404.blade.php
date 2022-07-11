<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HIMATIF | 404</title>

  <meta name="description" content="">
  <meta property="og:url" content="" />
  <meta property="og:type" content="article">
  <meta property="og:title" content="HIMATIF | 404" />
  <meta property="og:image" content="{{ url('img/logo.png') }}" />
  <meta property="og:description" content="" />

  <link rel="icon" type="image/x-icon" href="{{ url('img/logo.png') }}">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ url('css/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ url('css/style.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="{{ url('css/justifiedGallery.css') }}">
  <link rel="stylesheet" href="{{ url('css/magnific-popup.css') }}">

  <!-- =======================================================
  * Developed By: IPTEK HIMATIF UNIMAL 2022
  * Frontend Develop By: Fajar Rivaldi Chan
  * Backend Develop By: Muhammad Bayu Juhri, M. Akbar Husain, Kairul Akram, Gilang Ramadhan Purba
  ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">
      <a href="/" class="logo"><img src="{{ url('img/logo4.png') }}" alt="Logo"></a>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link" href="/">Home</a></li>
          <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
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
          <li><a class="nav-link" href="/blog">Blog</a></li>
          <li><a class="nav-link" href="/toko">Shop</a></li>
          <li><a class="nav-link" href="/events">Event</a></li>
          <li><a class="nav-link" href="/prestasi">Prestasi</a></li>
          <li><a class="nav-link" href="/galeri">Galeri</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

<main>
    <section class="notfound">
      <div class="container my-lg-5 py-lg-5 ">
        <div class="row justify-content-center px-5">
          <div class="col-md-5  align-self-center">
            <img src="{{ url('img/sad.png') }}"  class="img-fluid" alt="sad">
          </div>
          <div class="col-md-6  align-self-center text-center text-md-start">
            <h1>404</h1>
            <h2>UPPSSS !!.</h2>
            <p class="text-muted">Ga ada apa apa disini ngab, halaman tidak tersedia. Silahkan hubungi kami apabila ini merupakan kesalahan
            </p>
            <a href="/" class="text-success"><p><i class="bi bi-arrow-left"></i> Back To Home</p></a>
          </div>
        </div>
      </div>
    </section>
</main>

  @include('partials.footer')

<a href="#" class="back-to-top btn btn-success d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>

  <!-- _Template Main JS File_ -->
  <script src="{{ url('js/main.js') }}"></script>

  <!-- Js Library for galery -->
  <script src="{{ url('js/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ url('js/jquery.justifiedGallery.js') }}"></script>
  <script src="{{ url('js/jquery.magnific-popup.min.js') }}"></script>

  <script>
    $('#susunan').justifiedGallery({
    rowHeight : 250,
    lastRow : 'nojustify',
    margins : 10
    });
    $('.tampilkan').magnificPopup({
    type: 'image',
    mainClass: 'mfp-with-zoom',
    zoom: {
      enabled: true,
      duration: 300,
      easing: 'ease-in-out', 
      opener: function(openerElement) {
        return openerElement.is('img') ? openerElement : openerElement.find('img');
      }
    }
  })
  </script>
</body>

</html>