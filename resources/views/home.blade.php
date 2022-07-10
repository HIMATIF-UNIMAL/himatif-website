@extends('layouts.main')

@section('container')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <h1>Welcome to <span>HIMATIF</span></h1>
      <h2>HIMPUNAN MAHASISWA TEKNIK INFORMATIKA</h2>
      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto">Selengkapnya <i class="bi bi-arrow-down"></i></a>
      </div>
    </div>
  </section><!-- End Hero -->
  
  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container mb-5 pb-3">
      <div class="row justify-content-center">
        <div class="col-12 text-center">
          <img src="img/logo1.png"  class="img-fluid" alt="himatif">
        </div>
      </div>
      <div class="row text-center justify-content-center mt-5">
          <h3>Himpunan Mahasiswa Teknik Informatika</h3>
          <p>HIMATIF adalah sebuah organisasi mahasiswa Teknik Informatika di Universitas Malikussaleh. Bersekretariat di Jalan Batam, Lantai II Gedung Teknik Informatika, Lhokseumawe, Aceh. Phone : +628 23 7060 1327  E-mail : himatif@unimal.ac.id</p>
      </div>
  </div>
    <div class="container">
      <div class="row content">
        <div class="col-lg-6 pb-5 pb-lg-0">
          <img src="img/contoh.jpg" class="img-fluid foto" alt="">
        </div>
        <div class="col-lg-6">
          <div class="row">
            <div class="col-12">
              <div class="section-title">
                <h2>Profil</h2>
                <p>Visi</p>
              </div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
            </div>
            <div class="col-12">
              <div class="section-title">
                <p>Misi</p>
              </div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li><i class="bi bi-check2-all text-warning"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
                <li><i class="bi bi-check2-all text-warning"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
                <li><i class="bi bi-check2-all text-warning"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End About Section -->

 <!-- ======= teras Section ======= -->
 <section id="teras" class="teras">
  <div class="container" data-aos="fade-up">

    <div class="section-title-kanan">
      <h2>Pengurus</h2>
      <p>Pengurus Teras</p>
    </div>

    <div class="row content">
      @foreach ($divisi as $d)
      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="pengurus">
          <div class="pengurus-img">
            <img src="{{ url('img/foto-pengurus/'.$d["foto"]) }}" class="img-fluid" alt="">
          </div>
          <div class="pengurus-info">
            <h4>{{ $d["nama"] }}</h4>
            <span>{{ $d["jabatan"] }}</span>
          </div>
        </div>
      </div>
      @endforeach

    </div>
  </div>
</section><!-- End teras Section -->

  <!-- ======= divisi Section ======= -->
  <section id="Divisi" class="divisi">
    <div class="container">

      <div class="section-title">
        <h2>Divisi</h2>
        <p>Divisi</p>
      </div>

      <div class="row content">
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-3 mb-lg-4">
          <div class="icon-box">
            <h4 class="title"><a href="divisi.html">ADMINISTRASI DAN KESEKETARIATAN</a></h4>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-3 mb-lg-4">
          <div class="icon-box">
            <h4 class="title"><a href="divisi.html">AGAMA DAN SOSIAL</a></h4>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-3 mb-lg-4">
          <div class="icon-box">
            <h4 class="title"><a href="divisi.html">PENGEMBANGAN ORGANISASI DAN KADERISASI</a></h4>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-3 mb-lg-4">
          <div class="icon-box">
            <h4 class="title"><a href="divisi.html">HUBUNGAN MASYARAKAT</a></h4>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-3 mb-lg-4">
          <div class="icon-box">
            <h4 class="title"><a href="divisi.html">KEWIRAUSAHAAN</a></h4>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-3 mb-lg-4">
          <div class="icon-box">
            <h4 class="title"><a href="divisi.html">KAJIAN ILMIAH DAN IPTEK</a></h4>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-3 mb-lg-4">
          <div class="icon-box">
            <h4 class="title"><a href="divisi.html">JURNALISTIK </a></h4>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-3 mb-lg-4">
          <div class="icon-box">
            <h4 class="title"><a href="divisi.html">MEDIA INFORMASI DAN KOMUNIKASI</a></h4>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-3 mb-lg-4">
          <div class="icon-box">
            <h4 class="title"><a href="divisi.html">MINAT DAN BAKAT</a></h4>
          </div>
        </div>
      </div>
    </div>
  </section><!-- End divisi Section -->

   <!-- ======= divisi Section ======= -->
   <section id="berita" class="berita">
    <div class="container">

      <div class="section-title text-center">
        <p>Berita</p>
        <span>Dapatkan Berita terbaru mengenai kegiatan HIMATIF</span>
      </div>
      <div class="row content">
        <div class="col-lg-4 col-md-6 mb-5">
          <div class="card">
            <img src="img/contoh3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <small>2 Maret 2022</small>
              <h4 class="title"><a href="blog-detail.html">HIMATIF Universitas Malikussaleh Bersama PERMIKOMNAS RI  </a></h4>
              <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae dicta iste nam beatae saepe illum reiciendis tempore similique laudantium sequi quam, praesentium labore, veritatis facilis dolor. Enim et iste aliquid...</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-5">
          <div class="card">
            <img src="img/contoh3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <small>2 Maret 2022</small>
              <h4 class="title"><a href="blog-detail.html">Informatics Goes To School Hadir Kembali!! Sosialisasi Jurusan Informatika Universitas Malikussaleh... </a></h4>
              <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae dicta iste nam beatae saepe illum reiciendis tempore similique laudantium sequi quam, praesentium labore, veritatis facilis dolor. Enim et iste aliquid...</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-5">
          <div class="card">
            <img src="img/contoh3.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <small>2 Maret 2022</small>
              <h4 class="title"><a href="blog-detail.html">HIMATIF UNIMAL BERSAMA PERMIKOMNAS WILAYAH 1 AKAN MENGOPTIMAL ARTIFICIAL INTELIGENT (AI) </a></h4>
              <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quae dicta iste nam beatae saepe illum reiciendis tempore similique laudantium sequi quam, praesentium labore, veritatis facilis dolor. Enim et iste aliquid...</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 text-center">
          <a href="blog.html" class="btn btn-success tombol">Lihat Berita Lainnya <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>


    </div>
  </section><!-- End divisi Section -->

  <!-- kontak -->
  <section id="kontak" class="kontak">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body p-lg-5">
              <div class="row">
                <div class="col-lg-6 mb-5">
                  <form role="form" method="post">
                    <h3>Kontak Kami</h3>
                    <div class="row g-2 mt-4 mb-3">
                      <div class="col-md">
                        <label for="formGroupExampleInput" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="formGroupExampleInput" name="nama" placeholder="Nama" required="">
                      </div>
                      <div class="col-md">
                        <label for="formGroupExampleInput" class="form-label">Email</label>
                        <input type="email" class="form-control" id="formGroupExampleInput" name="email" placeholder="Email" required="">
                      </div>
                    </div>
                    <div class="mb-3">
                      <label for="formGroupExampleInput" class="form-label">Subjek</label>
                      <input type="text" class="form-control" id="formGroupExampleInput" name="subject" placeholder="Subjek" required="">
                    </div>
                    <div class="mb-3">
                      <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
                      <pre><textarea class="form-control" id="exampleFormControlTextarea1" name="pesan" rows="3" placeholder="Tulis Pesan Anda ..." required=""></textarea></pre>
                    </div>
                    <div class="d-grid gap-2">
                      <button class="btn btn-success text-light mt-5" name="kirim" type="submit">Kirim</button>
                    </div>
                  </form>
                </div>
                <div class="col-lg-6">
                  <h3>Hubungi Kami</h3>
                  <div class="pt-1">
                    <p><i class="bi bi-telephone-fill"></i> : +6282370601327 <br>
                    <i class="bi bi-envelope-fill"></i> : himatif@unimal.ac.id <br>
                    <i class="bi bi-geo-alt-fill"></i> : Jalan Batam, Kampus Bukit Indah Lantai II Gedung Teknik Informatika. Lhokseumawe, Indonesia</p>
                  </div>
                  <h3 class="mt-4 pb-1">Lokasi Kami</h3>
                  <div class="embed-responsive embed-responsive-21by9 ratio ratio-21x9 mb-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d496.67467800033734!2d97.06381077482143!3d5.200062513346117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf06a367ab925a6b6!2sTeknik%20Informatika%20Unimal!5e0!3m2!1sen!2sid!4v1620638971734!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy"  height="100"></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection