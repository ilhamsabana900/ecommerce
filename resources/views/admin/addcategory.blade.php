@extends('admin.layouts.template')
@section('page-title')
    Add Category - EcommSingle
@endsection
@section('content')
<section class="content">
    <div class="row">
      <div class="col">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Tambahkan Category Baru</h3>
            </div>
          </div>
          <div class="card-body">
        <form action="" method="POST">
            <div class="form-group">
              <label for="category_name">Nama Kategory</label>
              <input type="text" id="category_name" name="category_name" class="form-control" placeholder="elektroniks">
            </div>
        </form>
         
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <button type="submit" class="btn btn-primary">Tambah category</button>
        <a href="#" class="btn btn-secondary">Kembali</a>
      </div>
    </div>
  </section>
@endsection