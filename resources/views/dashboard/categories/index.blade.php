@extends('dashboard.layouts.main')    
    
@section('container')
    <section class="section">
        <div class="section-header">
        <h1>Kategori/Tags</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item">Blog</div>
            <div class="breadcrumb-item">Kategori-Tags</div>
        </div>
        </div>
        <div class="section-body">
        <div class="row">
            <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                <h4>Tambah Kategori</h4>
                </div>
                <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Jenis Kategori" required>
                        <div class="input-group-append">
                        <button class="btn btn-success" type="submit"><i class="fas fa-plus"></i> Tambah</button>
                        </div>
                    </div>
                    </div>
                </form>
                </div>
            </div>
            <div class="card card-primary">
                <div class="card-header">
                <h4>Kategori</h4>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="table-1">
                    <thead>
                        <tr>
                        <th>NO</th>
                        <th>Jenis</th>
                        <th>Post</th>
                        <th class="text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->posts->count() }}</td>
                            <td class="text-right">
                                <div class="btn-group mb-3" role="group" aria-label="Basic example">
                                <a href="/dashboard/categories/{{ $category->slug }}/edit" type="button" class="btn btn-warning" ><i class="fas fa-pen-alt"></i></a>
                                <form action="/dashboard/categories/{{ $category->slug }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-del"><i class="fas fa-trash-alt"></i></button>
                                </form>
                                </div>
                            </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
                </div>
            </div>
            </div>
            <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                <h4>Tambah Tags</h4>
                </div>
                <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Jenis Tags" aria-label="" name="" required>
                        <div class="input-group-append">
                        <button class="btn btn-success" type="submit"><i class="fas fa-plus"></i> Tambah</button>
                        </div>
                    </div>
                    </div>
                </form> 
                </div>
            </div>
            <div class="card card-primary">
                <div class="card-header">
                <h4>Tags</h4>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="table-3">
                    <thead>
                        <tr>
                        <th>NO</th>
                        <th>Jenis</th>
                        <th>Post</th>
                        <th class="text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>1</td>
                        <td>Ilmu</td>
                        <td>4</td>
                        <td class="text-right">
                            <div class="btn-group mb-3" role="group" aria-label="Basic example">
                            <a href="a.html" type="button" class="btn btn-danger btn-del" ><i class="fas fa-trash-alt"></i></a>
                            </div>
                        </td>
                        </tr>
                        <tr>
                        <td>2</td>
                        <td>Teknologi</td>
                        <td>5</td>
                        <td class="text-right">
                            <div class="btn-group mb-3" role="group" aria-label="Basic example">
                            <a href="" type="button" class="btn btn-danger btn-del"><i class="fas fa-trash-alt"></i></a>
                            </div>
                        </td>
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
