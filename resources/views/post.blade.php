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
    <section id="blog" class="blog blog-detail">
      <div class="container">
        <div class="row justify-content-center">

          <div class="col-lg-9 accordion-body">
            <article class="entry">
              <div class="entry-img">
                <img src="{{ url('img/contoh.jpg') }}" alt="" class="img-fluid">
              </div>
              <div class="my-5 px-lg-5">
                <h2 class="judul">
                  {{ $post['title'] }}
                </h2>
                <div class="entry-meta">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">{{ $post['author'] }}</a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-bookmarks"></i> <a href="blog-single.html">Artikel</a></li>
                  </ul>
                </div>
              </div>
              <div class="entry-content pb-3 px-lg-5">
                <p>
                  {{ $post['body'] }}
                </p>
                
                <div class="tag">
                  <i class="bi bi-tags"></i>Tags:
                  <a href="" class="bg-light mx-1">#tech</a>  
                  <a href="" class="bg-light mx-1">#teknologi</a>  
                  <a href="" class="bg-light mx-1">#dies</a>  
                  <a href="" class="bg-light mx-1">#dnv17</a>  
                </div>
              </div>
              <div class="share px-lg-5 my-4">
                <hr>
                <strong class="me-3">Share : </strong>
                <a href="" class="btn fb mb-2 mb-lg-0"><i class="bi bi-facebook"></i> Facebook</a>
                <a href="" class="btn tw mb-2 mb-lg-0"><i class="bi bi-twitter"></i> twitter</a>
                <a href="" class="btn ig mb-2 mb-lg-0"><i class="bi bi-instagram"></i> Instagram</a>
                <a href="" class="btn in mb-2 mb-lg-0"><i class="bi bi-linkedin"></i> Linkedin</a>
                <hr>
              </div>
            </article><!-- End blog entry -->
          </div>

        </div><!-- End blog entries list -->
      </div>
    </section><!-- End Blog Section -->

    
    <section class="komen komen-form">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-9">
            <h2>Komentar</h2>
            <hr>
            <a href="#" class="text-success" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-pencil-square"></i> Tambahkan Komentar</a>
            <div class="card  card-review mt-4 pl-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-1 p-2">
                            <img src="{{ url('img/user.svg') }}" alt="user">
                        </div>
                        <div class="col-md-11 ">
                            <h4>Rektor Unimal</h4>
                            <span class="text-muted">2021-03-27</span>
                            <p class="pt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="card card-review mt-4 pl-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-1 p-2">
                            <img src="{{ url('img/user.svg') }}" alt="user">
                        </div>
                        <div class="col-md-11">
                            <h4>Kepala Jurusan</h4>
                            <span class="text-muted">2021-03-27</span>
                            <p class="pt-3">Facere omnis harum laudantium necessitatibus fugit saepe sed!</p>
                        </div>
                    </div>  
                </div>
            </div>              

            <!---------------Modal----------------------->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-body p-5">
                                <form method="post" action="">
                                    <h2 class="mb-4">Tulis Komentar</h2>
                                    <div class="form-group mb-3">
                                        <input class="form-control" type="text" placeholder="Nama" required >
                                    </div>
                                    <div class="form-group mb-3">
                                      <input class="form-control" type="email"  placeholder="Email" required >
                                    </div>
                                    <div class="form-group mb-3">
                                        <pre><textarea class="form-control" placeholder="Tulis Komentarmu" row="1" required=""></textarea></pre>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-success">Kirim</button>
                                        <button class="btn btn-light " data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </form>                    
                            </div>
                        </div>
                    </div>
                </div>
            <!--------------- end Modal----------------------->

          </div>
        </div>
      </div>
    </section>  
@endsection