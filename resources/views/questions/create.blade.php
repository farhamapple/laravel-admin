@extends('layouts.template')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Questions Page</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Master</a></li>
                <li class="breadcrumb-item active">Questions</li>
            </ol>
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>
     <!-- Main content -->
     <section class="content">

        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Create Question</h3>
            </div>
            <!-- /.card-header -->
            @if (count($errors) > 0)
            <br>
            <div class="alert alert-danger" role="alert">
                @foreach ($errors->all() as $error)


                    {{ $error }}

                @endforeach
            </div>
            @endif

            @if (Session::has('success'))
            <br>
            <div class="alert alert-success" role="alert">
                {{ Session('success') }}
            </div>
            @endif
            <!-- form start -->
            <form role="form" action="/pertanyaan" method="POST">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" class="form-control" name='title'>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Question</label>
                  <textarea class="form-control" name='question'></textarea>
                </div>

              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href='/pertanyaan' class="btn btn-danger">Back</a>
            </div>
            </form>
          </div>

      </section>
      <!-- /.content -->
@endsection
