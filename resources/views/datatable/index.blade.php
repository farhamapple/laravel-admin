@extends('layouts.template')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Tugas Datatable</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Tugas</a></li>
                <li class="breadcrumb-item active">Data Table</li>
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
            <h3 class="card-title">Tugas Sanbercode Templating Blade</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                <i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                <i class="fas fa-times"></i></button>
            </div>
          </div>
          <div class="card-body">

            <table class="table table-bordered">
            <thead>
                <tr>
                <th style="width: 10px">#</th>
                <th>Task</th>
                <th>Progress</th>
                <th style="width: 40px">Label</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>1.</td>
                <td>Update software</td>
                <td>
                    <div class="progress progress-xs">
                    <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                    </div>
                </td>
                <td><span class="badge bg-danger">55%</span></td>
                </tr>
                <tr>
                <td>2.</td>
                <td>Clean database</td>
                <td>
                    <div class="progress progress-xs">
                    <div class="progress-bar bg-warning" style="width: 70%"></div>
                    </div>
                </td>
                <td><span class="badge bg-warning">70%</span></td>
                </tr>
                <tr>
                <td>3.</td>
                <td>Cron job running</td>
                <td>
                    <div class="progress progress-xs progress-striped active">
                    <div class="progress-bar bg-primary" style="width: 30%"></div>
                    </div>
                </td>
                <td><span class="badge bg-primary">30%</span></td>
                </tr>
                <tr>
                <td>4.</td>
                <td>Fix and squish bugs</td>
                <td>
                    <div class="progress progress-xs progress-striped active">
                    <div class="progress-bar bg-success" style="width: 90%"></div>
                    </div>
                </td>
                <td><span class="badge bg-success">90%</span></td>
                </tr>
            </tbody>
            </table>




          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            2020 @ Sanbercode
          </div>
          <!-- /.card-footer-->
        </div>
        <!-- /.card -->

      </section>
      <!-- /.content -->
@endsection
