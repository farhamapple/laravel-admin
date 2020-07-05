@extends('layouts.template')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Items Page</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Master</a></li>
                <li class="breadcrumb-item active">Items</li>
            </ol>
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>
     <!-- Main content -->
     <section class="content">

        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit Item</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
             <form role="form" action="/items/{{$item->id}}" method="POST">
                @csrf
                @method('PUT')

              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name Item</label>
                <input type="text" class="form-control" name='name' value="{{ $item->name }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Description</label>
                  <textarea class="form-control" name='description'>{{ $item->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Stock</label>
                    <input type="text" class="form-control" name='stock' value="{{ $item->stock }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input type="text" class="form-control" name='price' value="{{ $item->price }}">
                </div>



              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update</button>
              </div>
            </form>
          </div>

      </section>
      <!-- /.content -->
@endsection
