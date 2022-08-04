@extends('dashboard.layouts.main')

@section('container')
  <section class="section">
    <div class="section-header">
      <h1>Tambah Post</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item">Blog</div>
        <div class="breadcrumb-item">Tambah-post</div>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Form tambah post</h4>
            </div>
            <div class="card-body">
              <form action="" method="post">
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="Text" name=""class="form-control">
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kategori</label>
                  <div class="col-sm-12 col-md-7">
                    <select class="form-control select2" name="">
                      <option value="">Berita</option>
                      <option value="">Artikel</option>
                    </select>
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Gambar</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="file" name=""class="form-control">
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Isi</label>
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
@endsection