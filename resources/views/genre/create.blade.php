@extends('template.master')

@push('css')
<link rel="stylesheet" href={{asset("../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css")}}>
<link rel="stylesheet" href={{asset("../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css")}}>
<link rel="stylesheet" href={{asset("../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css")}}>
@endpush

@section('title', 'Add Genre')

@section('content')
@section('content_title', 'Add Your Favorite Movies Genres.⭐')
<section class="content">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title">Genre</h3>
                    </div>
                <!-- /.card-header -->
                <!-- form start -->
                    <form action="{{route ('genre.store')}}" method="POST">
                        @csrf
                        <div class="card-body">
                        <div class="form-group">
                            <label for="movieGenre">Movie Genre</label>
                            <input type="text" class="form-control" @error('name') {{'is invalid'}} @enderror id="name" name="name" placeholder="Enter Movie Genre">
                        </div>
                        </div>
                        <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-secondary">Submit</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
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

