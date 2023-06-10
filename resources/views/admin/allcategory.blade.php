@extends('admin.layouts.template')
@section('page-title')
    All Category - EcommSingle
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Semua Category</h3>
                
  
                  <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
  
                      <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                          <i class="fas fa-search"></i>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                @if(session()->has('message'))
                <div class="alert alert-success">
                  {{ session()->get('message') }}
                </div>
            @endif
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="0">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>nama Category</th>
                        <th>Sub Category</th>
                        <th>Produk</th>
                        <th>action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Elektronik</td>
                        <td>10</td>
                        <td>100</td>
                        <td>
                            <a href="" class="btn btn-primary">Edit</a>
                            <a href="" class="btn btn-danger">Delete</a>
                        </td>
                      </tr>
                    
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
    </div>
@endsection