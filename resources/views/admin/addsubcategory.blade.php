@extends('admin.layouts.template')
@section('page-title')
    Add SubCategory - EcommSingle
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
              <label for="category_name">Nama SubCategory</label>
              <input type="text" id="subcategory_name" name="subcategory_name" class="form-control" placeholder="elektroniks">
            </div>
           
            <div class="form-group">
                <label for="inputStatus">Pilih Menu</label>
                <select id="inputStatus" class="form-control custom-select">
                    <option selected>Pilih Salah Satu</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>

                </select>
            </div>
        </form>
         
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <button type="submit" class="btn btn-primary">Tambah SubCategory</button>
        <a href="#" class="btn btn-secondary">Kembali</a>
      </div>
    </div>
  </section>
@endsection