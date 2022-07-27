@extends('layouts.main')

@section('container')
    <div class="d-lg-flex masuk">
        <div class="bg order-1 order-md-2 d-none d-lg-block" style="background-image: url('img/bg_1.jpg');"></div>
        <div class="contents order-2 order-md-1">

        <div class="container">
            <div class="row align-items-center justify-content-center">
            <div class="col-md-7">

                @if(session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        </button>
                    </div>
                @endif

                <img src="{{ url('img/logo4.png') }}" width="200" alt="Logo">
                <p class="mb-4 pt-3">Login sistem manajemen website dan aplikasi HIMATIF</p>
                <form action="/login" method="post">
                    @csrf
                <div class="form-group first">
                    <label class="isi" for="username">Username</label>
                    <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username" id="username" autofocus required value="{{ old('username') }}">
                    @error('username')
                        <span class="invalid-feedback" role="alert">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
                <div class="form-group last mb-3">
                    <label class="isi" for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Your Password" id="password" required>
                </div>
                
                {{-- <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" >
                    <label class="form-check-label" for="disabledFieldsetCheck">
                    Ingat Saya!
                    </label>
                </div> --}}

                <div class="d-grid gap-2 mt-4">
                    <button class="btn btn-success mt-4" type="submit">Masuk</button>
                </div>

                </form>
            </div>
            </div>
        </div>
        </div>

        
    </div>
@endsection