@extends('admin.layouts.template')
@section('page-title')
    Add Product - EcommSingle
@endsection
@section('content')
<section class="content">
    <div class="row">
      <div class="col">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Tambahkan Produk</h3>
            </div>
          </div>
          <div class="card-body">
        <form action="" method="POST">
            <div class="form-group">
              <label for="nama_produk">Nama Produk</label>
                <div class="col-sm-10">
                    <input type="text" id="nama_produk" name="nama_produk" class="form-control" placeholder="Tambahkan Nama">
                </div>
            </div>

            <div class="form-group">
              <label for="deskripsi_panjang_produk">Deskripsi Panjang Produk</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="" id="" cols="30" rows="10" placeholder="Tambahkan Deskripsi Panjang"></textarea>
                </div>
            </div>

            <div class="form-group">
              <label for="deskripsi_pendek_produk">Deskripsi Pendek roduk</label>
              <div class="col-sm-10">
                <textarea class="form-control" name="" id="" cols="10" rows="10" placeholder="Tambahkan Deskripsi Pendek"></textarea>
            </div>
            </div>
            
            <div class="form-group">
                <label for="harga_produk">Harga Produk</label>
                <div class="col-sm-10">
                    <input type="number" id="harga_produk" name="harga_produk" class="form-control" placeholder="Harga Produk">
                </div>
            </div>
            
            <div class="form-group">
                <label for="banyak_produk">Banyak Produk</label>
                <div class="col-sm-10">
                    <input type="number" id="banyak_produk" name="banyak_produk" class="form-control" placeholder="Banyak Produk">
                </div>
            </div>

            <div class="form-group">
                <label for="inputStatus">Pilih Sub Category</label>
                <div class="col-sm-10">
                <select id="inputStatus" class="form-control custom-select">
                    <option selected>Pilih Sub Category</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>

                </select>
                </div>
            </div>

            <div class="form-group">
                <label for="foto_produk">Tambah Foto Produk</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="formFile">
                </div>
            </div>
        </form>
         
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <button type="submit" class="btn btn-primary">Tambah Produk</button>
        <a href="#" class="btn btn-secondary">Kembali</a>
      </div>
    </div>
  </section>
@endsection