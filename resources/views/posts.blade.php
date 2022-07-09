@extends('layouts.main')

@section('container')
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog</h2>
          <ol>
            <li>Home</li>
            <li>Blog</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container">
        <div class="section-title">
          <h2>Blog</h2>
          <p>Berita & Artikel</p>
          <!-- <p>Kategori : Artikel</p> -->
          <!-- <p>Tags : Teknologi</p> -->
          <!-- <p>Search : test</p> -->
        </div>
        <div class="row justify-content-center">

          <div class="search col-lg-10 my-4 pb-4">
            <form action="" method="post">
              <div class="input-group">
                <input type="text" class="form-control form-control-lg" aria-label="Text input with dropdown button" placeholder="Mau Cari Apa ? ">
                <div class="input-group-append">
                  <button class="btn btn-success " type="button"><i class="bi bi-search"></i> Search</button>
                </div>
            </div>
            </form>
          </div>

          @foreach($posts as $post)
          <div class="col-lg-4 col-md-6 entries">
            <article class="entry">
              <div class="entry-img">
                <img src="img/contoh.jpg" alt="" class="img-fluid">
              </div>
              <h2 class="entry-title">
                <a href="/blog/{{ $post['slug'] }}">{{ $post['title'] }}</a>
              </h2>
              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">{{ $post['author'] }}</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-bookmarks"></i> <a href="blog-single.html">Artikel</a></li>
                </ul>
              </div>
              <div class="entry-content">
                <p>
                  {{ $post['body'] }}
                </p>
              </div>
            </article><!-- End blog entry -->
          </div>
          @endforeach

        </div><!-- End blog entries list -->
        <div class="row">
          <div class="col-12">
            <nav aria-label="...">
              <ul class="pagination  justify-content-center justify-content-lg-start">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active" aria-current="page">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Blog Section -->
@endsection