@extends('template.master')

@push('css')
<link rel="stylesheet" href={{asset("../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css")}}>
<link rel="stylesheet" href={{asset("../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css")}}>
<link rel="stylesheet" href={{asset("../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css")}}>
@endpush

@section('title', 'Add cast')


@section('content')
@section('content_title', 'Add Your Favorite Movies Cast.🩵')
 <!-- Main content -->
 <section class="content">
    <div class="container-fluid">

        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Cast</h3>
            </div>
            <!-- /.card-header -->

            <!-- form start -->
            <form action="{{route ('cast.store')}}" method="POST">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="castName">Name Cast</label>
                  <input type="text" class="form-control" @error('name') {{'is invalid'}} @enderror id="castName" name="name" value="{{old('name')}}" placeholder="Enter Cast Name..." >
                </div>
                <div class="form-group">
                  <label for="CastAge">Age</label>
                  <input type="number" class="form-control" id="castAge" value="{{old('age')}}" name="age" placeholder="Enter Age...">
                </div>
                <div class="form-group">
                  <label for="movieSynopsis">Bio</label><br>
                  <textarea class="form-control" name="bio" id="castBio" value="{{old('bio')}}" style="resize: none"  placeholder="Enter Cast Name..."></textarea>
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

@push('js')
<script src={{asset("../../plugins/datatables/jquery.dataTables.min.js")}}></script>
<script src={{asset("../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js")}}></script>
<script src={{asset("../../plugins/datatables-responsive/js/dataTables.responsive.min.js")}}></script>
<script src={{asset("../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js")}}></script>
<script src={{asset("../../plugins/datatables-buttons/js/dataTables.buttons.min.js")}}></script>
<script src={{asset("../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js")}}></script>
<script src={{asset("../../plugins/jszip/jszip.min.js")}}></script>
<script src={{asset("../../plugins/pdfmake/pdfmake.min.js")}}></script>
<script src={{asset("../../plugins/pdfmake/vfs_fonts.js")}}></script>
<script src={{asset("../../plugins/datatables-buttons/js/buttons.html5.min.js")}}></script>
<script src={{asset("../../plugins/datatables-buttons/js/buttons.print.min.js")}}></script>
<script src={{asset("../../plugins/datatables-buttons/js/buttons.colVis.min.js")}}></script>
@endpush


