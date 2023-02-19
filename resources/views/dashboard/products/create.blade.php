<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Tambah Produk</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
  <link rel="stylesheet" href="node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="node_modules/datatables.net-select-bs4/css/select.bootstrap4.min.css">
  <link rel="stylesheet" href="node_modules/summernote/dist/summernote-bs4.css">
  <link rel="stylesheet" href="node_modules/select2/dist/css/select2.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>
        </form>
        <ul class="navbar-nav navbar-right">
          <a href="#"class="nav-link nav-link-lg"><i class="fas fa-globe"></i></a>
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep"><i class="far fa-bell"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Komentar Pending
              </div>
              <div class="dropdown-list-content dropdown-list-message">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <figure class="avatar mr-2 avatar-md bg-light text-dark" data-initial="K"></figure>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b>
                    <p>Hello, Bro!</p>
                    <div class="time">22 Maret 2022</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <figure class="avatar mr-2 avatar-md bg-light text-dark" data-initial="K"></figure>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b>
                    <p>Hello, Bro!</p>
                    <div class="time">22 Maret 2022</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <figure class="avatar mr-2 avatar-md bg-light text-dark" data-initial="K"></figure>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b>
                    <p>Hello, Bro!</p>
                    <div class="time ">22 Maret 2022</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <figure class="avatar mr-2 avatar-md bg-light text-dark" data-initial="K"></figure>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b>
                    <p>Hello, Bro!</p>
                    <div class="time">22 Maret 2022</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-avatar">
                    <figure class="avatar mr-2 avatar-md bg-light text-dark" data-initial="K"></figure>
                  </div>
                  <div class="dropdown-item-desc">
                    <b>Kusnaedi</b>
                    <p>Hello, Bro!</p>
                    <div class="time">22 Maret 2022</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">Selengkapnya <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown dropdown-list-toggle"><a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep"><i class="far fa-envelope"></i></a>
            <div class="dropdown-menu dropdown-list dropdown-menu-right">
              <div class="dropdown-header">Inbox
              </div>
              <div class="dropdown-list-content dropdown-list-icons">
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-icon bg-light text-dark">
                    <i class="fas fa-user"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <p>
                      <b>Fajar</b><br>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem soluta, alias ad, atque harum quaerat nulla aliquid neque repellendus aperiam facere laborum quasi, veritatis iusto nihil cupiditate velit aliquam nesciunt.
                    </p>
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-icon bg-light text-dark">
                    <i class="fas fa-user"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <p>
                      <b>Fajar</b><br>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem soluta, alias ad, atque harum quaerat nulla aliquid neque repellendus aperiam facere laborum quasi, veritatis iusto nihil cupiditate velit aliquam nesciunt.
                    </p>
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-icon bg-light text-dark">
                    <i class="fas fa-user"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <p>
                      <b>Fajar</b><br>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem soluta, alias ad, atque harum quaerat nulla aliquid neque repellendus aperiam facere laborum quasi, veritatis iusto nihil cupiditate velit aliquam nesciunt.
                    </p>
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
                <a href="#" class="dropdown-item dropdown-item-unread">
                  <div class="dropdown-item-icon bg-light text-dark">
                    <i class="fas fa-user"></i>
                  </div>
                  <div class="dropdown-item-desc">
                    <p>
                      <b>Fajar</b><br>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem soluta, alias ad, atque harum quaerat nulla aliquid neque repellendus aperiam facere laborum quasi, veritatis iusto nihil cupiditate velit aliquam nesciunt.
                    </p>
                    <div class="time">10 Hours Ago</div>
                  </div>
                </a>
              </div>
              <div class="dropdown-footer text-center">
                <a href="#">Selengkapnya<i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </li>
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="#" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand text-left pl-4 pt-4 mb-3">
            <a href="index.html"><h5><img src="assets/img/logo.png" width="30" alt="logo">  HIMATIF</h5></a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html"><img src="assets/img/logo.png" width="30" alt="logo"></a>
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li class="nav-item dropdown" >
                <a href="#" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
              </li>
              <li class="menu-header">Main Menu</li>
              <li class="nav-item dropdown active">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-users"></i> <span>Shop</span></a>
                <ul class="dropdown-menu">
                  <li class="active"><a class="nav-link" href="layout-top-navigation.html">Tambah Produk</a></li>
                  <li><a class="nav-link" href="layout-default.html">Produk</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-users"></i> <span>Pengurus</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="layout-top-navigation.html">Tambah divisi</a></li>
                  <li><a class="nav-link" href="layout-default.html">Teras</a></li>
                  <li><a class="nav-link" href="layout-transparent.html">Administrasi</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-newspaper"></i> <span>Blog</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="layout-top-navigation.html">Kategori/Tags</a></li>
                  <li><a class="nav-link" href="layout-default.html">Tambah Post</a></li>
                  <li><a class="nav-link" href="layout-transparent.html">Post</a></li>
                  <li><a class="nav-link" href="layout-transparent.html">Komentar</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-calendar-alt"></i>  <span>Event</span></a>
                <ul class="dropdown-menu">
                  <li><a class="nav-link" href="bootstrap-alert.html">Tambah Event</a></li>
                  <li><a class="nav-link" href="bootstrap-badge.html">Event</a></li>
                </ul>
              </li>
              <li><a class="nav-link" href="blank.html"><i class="fas fa-trophy"></i> <span>Prestasi</span></a></li>
              <li><a class="nav-link" href="blank.html"><i class="far fa-image"></i> <span>Galeri</span></a></li>
              <li><a class="nav-link" href="blank.html"><i class="far fa-envelope"></i> <span>Inbox</span></a></li>
              <li><a class="nav-link" href="blank.html"><i class="fas fa-cog"></i> <span>Setting</span></a></li>
              <li><a class="nav-link" href="blank.html"><i class="fas fa-user"></i> <span>User</span></a></li>
              <li><a class="nav-link" href="blank.html"><i class="fas fa-sign-out-alt"></i> <span>Logout</span></a></li>
            </ul>

            <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
              <a href="https://getstisla.com/docs" target="_blank" class="btn btn-success btn-lg btn-block btn-icon-split">
                <i class="fas fa-globe"></i> Lihat Web
              </a>
            </div>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tambah Produk</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item">Shop</div>
              <div class="breadcrumb-item">Tambah-Produk</div>
            </div>
          </div>
          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Form tambah Produk</h4>
                  </div>
                  <div class="card-body">
                    <form action="" method="post">
                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" name=""class="form-control">
                        </div>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">harga</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="text" name=""class="form-control">
                        </div>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Gambar</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="file" name=""class="form-control">
                        </div>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                        <div class="col-sm-12 col-md-7">
                          <textarea class="summernote" name=""></textarea>
                        </div>
                      </div>
                      <div class="form-group row mb-4">
                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                        <div class="col-sm-12 col-md-7">
                          <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; IPTEK 2022 
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>



  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="node_modules/datatables/media/js/jquery.dataTables.min.js"></script>
  <script src="node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="node_modules/datatables.net-select-bs4/js/select.bootstrap4.min.js"></script>
  <script src="node_modules/summernote/dist/summernote-bs4.js"></script>
  <script src="node_modules/sweetalert/dist/sweetalert.min.js"></script>
  <script src="node_modules/select2/dist/js/select2.full.min.js"></script>

  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <script src="assets/js/custom.js"></script>

  <!-- Page Specific JS File -->
  <script src="assets/js/page/modules-datatables.js"></script>
  <script src="assets/js/page/modules-sweetalert.js"></script>
  <script src="assets/js/page/bootstrap-modal.js"></script>

  
</body>
</html>
