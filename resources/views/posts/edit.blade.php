@extends('adminlte.master')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-22">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Edit Post {{$post->id}}</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="/posts" method="POST"> 
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" class="form-control" name="title" id="title" placeholder="Enter email" value="{{ old('title', $post->title)}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Body</label>
                  <input type="text" class="form-control" id="body" name="body" placeholder="Password" value="{{ old('body', $post->body)}}">
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
           
@endsection 