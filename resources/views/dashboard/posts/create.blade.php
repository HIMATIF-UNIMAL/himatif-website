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
              <form action="/dashboard/posts" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="title">Judul</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title') }}">
                    @error('title')
                      <span class="invalid-feedback" role="alert">
                        {{ $message }}
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group row mb-4 hidden">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="slug">Slug</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
                    @error('slug')
                      <span class="invalid-feedback" role="alert">
                        {{ $message }}
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="Category">Kategori</label>
                  <div class="col-sm-12 col-md-7">
                    <select class="form-control select2" name="category_id">
                      <option selected>Pilih Kategori</option>
                      @foreach ($categories as $category)
                        @if (old('category_id') == $category->id)
                          <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                          <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                      @endforeach
                    </select>
                    @error('category_id')
                      <span class="invalid" role="alert">
                        <small class="text-danger">{{ $message }}</small>
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="image">Gambar</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="image">
                    @error('image')
                      <span class="invalid-feedback" role="alert">
                        {{ $message }}
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="body">Isi</label>
                  <div class="col-sm-12 col-md-7">
                    @error('body')
                      <span class="invalid" role="alert">
                        <small class="text-danger">{{ $message }}</small>
                      </span>
                    @enderror
                    <textarea class="summernote @error('body') is-invalid @enderror" name="body" id="body">{{ old('body') }}</textarea>
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

  <script>
    const title = document.getElementById('title');
    const slug = document.getElementById('slug');

    title.addEventListener('change', function(e) {
      fetch('/dashboard/posts/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });
  </script>
@endsection