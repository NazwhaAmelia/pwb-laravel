@extends('template.master')

@section('content_title', 'Edit data genre')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">

<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-warning">
      <div class="card-header">
        <h3 class="card-title">Genre</h3>
      </div>
      <!-- /.card-header -->

      <!-- form start -->
      <form action="{{route('genre.update', $genres->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
          <div class="form-group">
            <label for="movieGenre">Movie Genre</label>
            <input type="text" class="form-control" @error('name') {{'is invalid'}} @enderror id="name" name="name" placeholder="Enter Movie Genre" value={{$genres->name}}>
          </div>
        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-secondary">Submit</button>
        </div>
      </form>
    </div>
</section>
@endsection
