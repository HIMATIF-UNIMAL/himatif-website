@extends('dashboard.layouts.main')    
    
@section('container')
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
              <form action="/dashboard/products" method="post">
                @csrf
                <div class="form-group row mb-4">
                  <label for="name" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" required autofocus value="{{ old('name') }}">
                    @error('name')
                      <span class="invalid-feedback" role="alert">
                        {{ $message }}
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label for="price" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" name="price" id="price" class="form-control @error('price') is-invalid @enderror" required value="{{ old('price') }}">
                    @error('price')
                      <span class="invalid-feedback" role="alert">
                        {{ $message }}
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Gambar</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="file" name=""class="form-control">
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label for="description" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                  <div class="col-sm-12 col-md-7">
                    @error('description')
                      <span class="invalid" role="alert">
                        <small class="text-danger">{{ $message }}</small>
                      </span>
                    @enderror
                    <textarea class="summernote @error('description') is-invalid @enderror" name="description" id="description" required>{{ old('description') }}</textarea>
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
@endsection
