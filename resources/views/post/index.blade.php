@extends('template.home')
@section('page')
  <li class="breadcrumb-item active">Data Post</li>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">DataTable with default features</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <a href="{{ route('post.create') }}"class="btn btn-primary mb-2">
                Tambah
            </a>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>No</th>
                <th>Title</th>
                <th>Body</th>
                <th>Aksi</th>
              </tr>
              </thead>
              <tbody>
                @foreach ($posts as $item)
                    
                <tr>
                    <td>{{$loop -> iteration}}</td>
                    <td>{{$item -> title}}</td>
                    <td>{{$item -> body}}</td>
                    <td>
                        <a href="{{route('post.show', $item->id)}}" class="btn btn-sm btn-info">Show</a>
                        <a href="{{route('post.edit', $item->id)}}" class="btn btn-sm btn-info">Edit</a>
                        <form action="{{route('post.destroy', $item->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" value="delete" class="btn btn-sm btn-danger" onclick="confirm('Apakah Anda Yakin?')">
                        </form>
                    </td>
                </tr>
                @endforeach
              <tfoot>
              <tr>
                <th>Rendering engine</th>
                <th>Rendering engine</th>
                <th>Browser</th>
                <th>Platform(s)</th>
              </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
@endsection