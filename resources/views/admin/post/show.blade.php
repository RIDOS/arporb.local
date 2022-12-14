@extends('admin.layout.main')

@section('content')
      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{ $post->title }}</h1>
            <a href="{{ route("admin.post.edit", $post->id) }}" class="text-success">Редактировать</a>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Главная </a></li>
              <li class="breadcrumb-item active">Посты</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-2 mb-3">
            <a href="{{ route('admin.post.create') }}" class="btn btn-block btn-primary">Добавить</a>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <tbody>
                    <tr>
                      <td>ID</td>
                      <td>{{ $post->id }}</td>
                    </tr>
                    <tr>
                      <td>Название</td>
                      <td>{{ $post->title }}</td>
                    </tr>
                    <tr>
                      <td>Описание</td>
                      <td>{{ $post->content }}</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
              <!-- /.card-body -->
            </div>
          </div>
        <!-- /.row -->
        <!-- Main row -->
        
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection