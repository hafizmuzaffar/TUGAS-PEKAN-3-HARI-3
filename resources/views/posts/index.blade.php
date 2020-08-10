@extends('adminlte.master')

@section('content')
<div class="mt-3 ml-3 col-md-12 ">
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Table Pertanyaan</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
          @if(session('success'))
          <div class="alert alert-success">
          {{ session('success') }}
          </div>
          @endif
          <a class="btn btn-primary mb-2" href="/posts/create"> Create New Pertanyaan</a>
          <table class="table table-striped">
            <thead>
              <tr>
                <th style="width: 10px">No</th>
                <th>Judul Pertanyaan</th>
                <th>Isi</th>
                <th style="width: 40px">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($posts as $key => $post)
              <tr>
              <td> {{ $key + 1 }}</td>
                  <td>{{ $post->title }}</td>
                  <td>{{ $post->body  }}</td>
                  <td style="display: flex;">
                      <a href="{{ url('posts/' . $post->id )}}" class="btn btn-default btn-sm">Show</a>
                      <a href="{{ url('posts/' . $post->id . '/edit')}}" class="btn btn-default btn-sm">Edit</a>
                      <a href="{{ url('posts/' . $post->id . '/delete')}}" class="btn btn-default btn-sm">Delete</a>
                  </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
</div>
    
@endsection