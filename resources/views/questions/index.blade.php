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

        <!-- Default box -->
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Master Questions</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
            </div>
          </div>
          <div class="card-body">

            <a href='/pertanyaan/create' class="btn btn-primary btn-md">Create Question</a>
            <br>
            <br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Title</th>
                        <th>Question</th>
                        <th>Answer</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($questions as $key => $question)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $question->title }}</td>
                            <td>{{ $question->question }}</td>
                            <td>

                                @if ($question->answer!=NULL)
                                    <a href='#' class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="left" title="Ubah Jawaban"><i class="fa fa-comments"></i></a>
                                    <a href='/jawaban/{{ $question->id }}' class="btn btn-sm btn-info" data-toggle="tooltip" data-placement="top" title="Lihat Jawaban"><i class="fa fa-eye"></i></a>
                                    <form action="/jawaban/{{$question->answer_id}}" method="POST" style="display: inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="right" title="Hapus Jawaban"><i class="fa fa-trash"></i></button>
                                    </form>
                                    @else
                                <a href='/jawaban/create/{{ $question->id }}' class="btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Isi Jawaban"><i class="fa fa-comments"></i></a>
                                @endif
                            </td>
                            <td>
                                <a href='/pertanyaan/{{$question->id}}/edit' class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                <form action="/pertanyaan/{{$question->id}}" method="POST" style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            Footer
          </div>
          <!-- /.card-footer-->
        </div>
        <!-- /.card -->

      </section>
      <!-- /.content -->
@endsection

@push('scripts')
<script>
$(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>
@endpush
