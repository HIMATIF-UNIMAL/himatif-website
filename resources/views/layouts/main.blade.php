<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>HIMATIF | {{ $title }}</title>

  <meta name="description" content="">
  <meta property="og:url" content="" />
  <meta property="og:type" content="article">
  <meta property="og:title" content="HIMATIF | {{ $title }}" />
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

@include('partials.header')

<main>
    @yield('container')
</main>

@include('partials.footer')

  <a href="#" class="back-to-top btn btn-success d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('js/list.min.js') }}"></script>
  <script> 
  var monkeyList = new List('test-list', { 
    valueNames: ['name']
  });
  </script>

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