@extends('template.master')

@section('content_titile', 'Edit data cast')

@section('content')
 <!-- Main content -->
 <section class="content">
    <div class="container-fluid">
        <div class='row'>

        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Cast</h3>
            </div>
            <!-- /.card-header -->

            <!-- form start -->
            <form action="{{ route('cast.update', $casts->id) }}" method="POST">
                @csrf
                @method('PUT')
              <div class="card-body">
                <div class="form-group">
                  <label for="name">Name Cast</label>
                  <input type="text" class="form-control" @error('name') {{'is invalid'}} @enderror id="name" name="name" value="{{$casts->name}}" placeholder="Enter Cast Name...">
                </div>
                <div class="form-group">
                  <label for="age">Age</label>
                  <input type="text" class="form-control" id="age" value="{{$casts->age}}" name="age" placeholder="Enter Age...">
                </div>
                <div class="form-group">
                  <label for="movieSynopsis">Bio</label><br>
                  <textarea class="form-control" name="bio" id="bio" style="resize: none" placeholder="Enter Bio...">{{$casts->bio}}</textarea>
                </div>
                <div class="form-group">
                  <div class="input-group">
                  </div>
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-secondary">Submit</button>
              </div>
            </form>
        </div>
    </div><!-- /.container-fluid -->
  </section>
<!-- /.content -->

@endsection
