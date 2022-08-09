@extends('dashboard.layouts.main')

@section('container')
<section class="section">
    <div class="section-header">
    <h1>Post</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item">Blog</div>
        <div class="breadcrumb-item">Post</div>
    </div>
    </div>
    <div class="section-body">
    <div class="row">
        <div class="col-12">
        <div class="card card-primary">
            <div class="card-header">
            <h4>Data Post</h4>
            </div>

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                <thead>
                    <tr>
                    <th class="text-center">NO</th>
                    <th>Gambar</th>
                    <th>Kategori</th>
                    <th>Judul</th>
                    <th>Views</th>
                    <th>Komen</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="gallery">
                                <div class="gallery-item" data-image="assets/img/news/img03.jpg" data-title="Image 1"></div>
                                </div>
                            </td>
                            <td>{{ $post->category->name }}</td>
                            <td>{{ $post->title }}</td>
                            <td>0</td>
                            <td>{{ $post->comments->count() }}</td>
                            <td>
                                <div class="btn-group mb-3" role="group" aria-label="Basic example">
                                <a href="/dashboard/posts/{{ $post->slug }}/edit" type="button" class="btn btn-warning" ><i class="fas fa-pen-alt"></i></a>
                                <form action="/dashboard/posts/{{ $post->slug }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-del"><i class="fas fa-trash-alt"></i></button>
                                </form>
                                {{-- <a href="/dashboard/posts" type="button" class="btn btn-danger btn-del" ><i class="fas fa-trash-alt"></i></a> --}}
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>
@endsection