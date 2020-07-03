@extends('layouts.template')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Answers Page</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Master</a></li>
                <li class="breadcrumb-item active">Answers</li>
            </ol>
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>
     <!-- Main content -->
     <section class="content">

        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Add Answer</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="/jawaban" method="POST">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="hidden" class="form-control" name='question_id' value="{{ $question->id }}">
                <input type="text" class="form-control" name='title' value="{{ $question->title }}" disabled>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Description</label>
                  <textarea class="form-control" name='question' disabled>{{ $question->question }}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Jawaban</label>
                    <textarea class="form-control" name='answer'></textarea>
                  </div>

              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

      </section>
      <!-- /.content -->
@endsection
