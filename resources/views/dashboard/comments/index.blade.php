@extends('dashboard.layouts.main')

@section('container')
    <!-- Main Content -->
    <div class="main-content">
    <section class="section">
        <div class="section-header">
        <h1>Komentar</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item">Blog</div>
            <div class="breadcrumb-item">Komentar</div>
        </div>
        </div>
        <div class="section-body">
        <div class="row">
            <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                <h4>Data Komentar</h4>
                </div>
                <div class="card-body">
                {{-- <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#komen" role="tab" aria-controls="home" aria-selected="true">Komen</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#pending" role="tab" aria-controls="profile" aria-selected="false">
                            <p>Pending  <small class="badge badge-success text-white">1</small></p>
                        </a>
                    </li>
                </ul> --}}
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade active show" id="komen" role="tabpanel" aria-labelledby="home-tab">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-1">
                            <thead>
                                <tr>
                                <th class="text-center">NO</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Artikel</th>
                                <th>Isi Komentar</th>
                                <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- <tr>
                                    <td>1</td>
                                    <td>Fajar Chan</td>
                                    <td>fajarrivaldi2015@gmail.com</td>
                                    <td>Bla Bla Bla</td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. </td>
                                    <td>
                                        <div class="btn-group mb-3" role="group" aria-label="Basic example">
                                        <a href="a.html" type="button" class="btn btn-danger btn-del" ><i class="fas fa-trash-alt"></i></a>
                                        </div>
                                    </td>
                                </tr> --}}
                                <tr>
                                    <td>1</td>
                                    <td>Fajar Chan</td>
                                    <td>fajarrivaldi2015@gmail.com</td>
                                    <td>Bla Bla Bla</td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. </td>
                                    <td>
                                        <div class="btn-group mb-3" role="group" aria-label="Basic example">
                                        {{-- <a href="a.html" type="button" class="btn btn-danger btn-del" ><i class="fas fa-trash-alt"></i></a> --}}
                                        <a href="/dashboard/comments/*/edit" type="button" class="btn btn-warning" ><i class="fas fa-pen-alt"></i></a>
                                        <form action="/dashboard/comments/*" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-del"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                    </div>
                    {{-- <div class="tab-pane fade" id="pending" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="table-responsive">
                            <table class="table table-striped" id="table-2">
                            <thead>
                                <tr>
                                <th class="text-center">NO</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Isi</th>
                                <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td>1</td>
                                <td>Fajar Chan</td>
                                <td>fajarrivaldi2015</td>
                                <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo nulla at deserunt ipsam autem delectus iusto nisi reiciendis, culpa animi, recusandae maiores perferendis corporis maxime velit? Natus exercitationem velit minus.</td>
                                <td>
                                    <div class="btn-group mb-3" role="group" aria-label="Basic example">
                                    <a href="a.html" type="button" class="btn btn-success" ><i class="fas fa-check"></i></a>
                                    <a href="a.html" type="button" class="btn btn-danger btn-del" ><i class="fas fa-trash-alt"></i></a>
                                    </div>
                                </td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                    </div> --}}
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>
    </div>
@endsection