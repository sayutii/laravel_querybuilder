@extends('template.home')
@section('page')
  <li class="breadcrumb-item active">Show Post</li>
@endsection
@section('content')
<div class="col">
    <div class="card card-default">
      <div class="card-header">
        <h3 class="card-title">
          <i class="fas fa-bullhorn"></i>
          Show Post
        </h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="callout callout-danger">
          <h5>{{ $posts -> title }}</h5>
        </div>
        <div class="callout callout-info">
          <h5>{{ $posts -> body }}</h5>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
@endsection