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
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('storecategory') }}" method="POST">
          @csrf
            <div class="form-group">
              <label for="category_name">Nama Kategory</label>
              <input type="text" id="category_name" name="category_name" class="form-control" placeholder="elektroniks">
            </div>
            <button type="submit" class="btn btn-primary">Tambah category</button>
            <a href="#" class="btn btn-secondary">Kembali</a>
        </form>
         
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
       
        
      </div>
    </div>
  </section>
@endsection