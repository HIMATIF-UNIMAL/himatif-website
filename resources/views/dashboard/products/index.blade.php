@extends('dashboard.layouts.main')    
    
@section('container')
  <section class="section">
    <div class="section-header">
      <h1>Produk</h1>
      <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        <div class="breadcrumb-item">Shop</div>
        <div class="breadcrumb-item">Produk</div>
      </div>
    </div>
    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card card-primary">
            <div class="card-header">
              <h4>Data Produk</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th class="text-center">NO</th>
                      <th>Gambar</th>
                      <th>Nama</th>
                      <th>Deskripsi</th>
                      <th>Harga</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($products as $product)
                    <tr>
                      <td>1</td>
                      <td>
                        <div class="gallery">
                          <div class="gallery-item" data-image="{{ $product->image }}" data-title="Image 1"></div>
                        </div>                            
                      </td>
                      <td>{{ $product->name }}</td>
                      <td>{{ $product->description }}</td>
                      <td>Rp.{{ $product->price }}</td>
                      <td>
                        <div class="btn-group mb-3" role="group" aria-label="Basic example">
                          <button type="button" data-toggle="modal" data-target="#edit" class="btn btn-warning"><i class="fas fa-pen-alt"></i></button>
                          <a href="a.html" type="button" class="btn btn-danger btn-del" ><i class="fas fa-trash-alt"></i></a>
                        </div>
                      </td>
                    </tr>
                    @endforeach
                    {{-- <tr>
                      <td>1</td>
                      <td>
                        <div class="gallery">
                          <div class="gallery-item" data-image="{{ asset('dbuser/assets/img/news/img03.jpg') }}" data-title="Image 1"></div>
                        </div>     
                      </td>
                      <td>viesta</td>
                      <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui sunt quibusdam nisi laudantium velit blanditiis aperiam reiciendis facilis ipsa eos minus, deleniti omnis doloribus! Quisquam quia nobis quidem sunt culpa!</td>
                      <td>Rp.20,000</td>
                      <td>
                        <div class="btn-group mb-3" role="group" aria-label="Basic example">
                          <button type="button" data-toggle="modal" data-target="#edit" class="btn btn-warning"><i class="fas fa-pen-alt"></i></button>
                          <a href="" type="button" class="btn btn-danger btn-del"><i class="fas fa-trash-alt"></i></a>
                        </div>
                      </td>
                    </tr> --}}
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


<!-- Modal tambah -->
{{-- <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="post">
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="" required>
              </div>
              <div class="form-group">
                <label>Harga</label>
                <input type="number" class="form-control" name="" required>
              </div>
              <div class="form-group">
                <label>Gambar</label>
                <input type="file"  class="form-control" name="" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Deskripsi</label>
                <textarea class="summernote form-control"></textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type=""  class="btn btn-success">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div> --}}

 <!-- Modal Edit -->
{{-- <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="post">
        <div class="modal-body">
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="" value="" required>
              </div>
              <div class="form-group">
                <label>Harga</label>
                <input type="number" class="form-control" name="" value="" required>
              </div>
              <div class="form-group">
                <label>Gambar</label>
                <input type="file"  class="form-control" name="" value="" required>
                <small class="text-success">Gambar: contoh.jpg</small>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Deskripsi</label>
                <textarea class="summernote form-control"></textarea>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type=""  class="btn btn-success">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div> --}}
