@extends('template.home')
@section('page')
  <li class="breadcrumb-item active">Create Data Post</li>
@endsection
@section('content')
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Masukkan Post</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('post.store') }}" method="POST">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" value="{{old('title')}}" placeholder="Enter Title" required>
                  @error('title')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="body">Body</label>
                  <input type="text" name="body" class="form-control" id="body" value="{{old('body')}}"  placeholder="Body" required>
                  @error('body')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection