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
          <p>{{ $title }}</p>
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

          @if ($posts->count())
              <div class="mb-3 entries">
                <article class="entry">
                <img src="{{ url('img/contoh.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body text-center">
                  <h5 class="entry-title">
                    <a href="/blog/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a>
                  </h5>
                  <div class="entry-meta">
                    <ul>
                      <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="/authors/{{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}</a></li>
                      <li class="d-flex align-items-center"><i class="bi bi-clock"></i>{{ $posts[0]->created_at->format('H:i') }}</li>
                      <li class="d-flex align-items-center"><i class="bi bi-calendar-check"></i>{{ $posts[0]->created_at->format('d M Y') }}</li>
                      <li class="d-flex align-items-center"><i class="bi bi-bookmarks"></i> <a href="/categories/{{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a></li>
                    </ul>
                  </div>
                  <p class="card-text">{{ $posts[0]->excerpt }}</p>
                </div>
                </article>
              </div>
          @else
              <div class="alert alert-info">
                <strong>Info!</strong> Belum ada artikel.
              </div>
          @endif

          @foreach($posts->skip(1) as $post)
          <div class="col-lg-4 col-md-6 entries">
            <article class="entry">
              <div class="entry-img">
                <img src="{{ url('img/contoh.jpg') }}" alt="" class="img-fluid">
              </div>
              <h2 class="entry-title">
                <a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
              </h2>
              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-calendar-check"></i>{{ $post->created_at->format('d M Y') }}</li>
                  <li class="d-flex align-items-center"><i class="bi bi-bookmarks"></i> <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></li>
                </ul>
              </div>
              <div class="entry-content">
                <p>
                  {{ $post->excerpt }}
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