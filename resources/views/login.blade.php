@extends('layouts.main')

@section('container')
    <div class="d-lg-flex masuk">
    <div class="bg order-1 order-md-2 d-none d-lg-block" style="background-image: url('assets/img/bg_1.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <img src="assets/img/logo4.png" width="200" alt="Logo">
            <p class="mb-4 pt-3">Login sistem manajemen website dan aplikasi HIMATIF</p>
            <form action="#" method="post">
              <div class="form-group first">
                <label class="isi" for="username">Username</label>
                <input type="text" class="form-control" placeholder="Username" id="username">
              </div>
              <div class="form-group last mb-3">
                <label class="isi" for="password">Password</label>
                <input type="password" class="form-control" placeholder="Your Password" id="password">
              </div>
              
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" >
                <label class="form-check-label" for="disabledFieldsetCheck">
                  Ingat Saya!
                </label>
              </div>

              <div class="d-grid gap-2 mt-4">
                <button class="btn btn-success mt-4" type="button">Masuk</button>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>   
  </div>
@endsection