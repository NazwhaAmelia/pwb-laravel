  @extends('template.master')

  @push('css')
  <link rel="stylesheet" href={{asset("../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css")}}>
  <link rel="stylesheet" href={{asset("../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css")}}>
  <link rel="stylesheet" href={{asset("../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css")}}>
  @endpush

  @section('title', 'Data genre')

    @section('content')
  @if ($message = Session::get('success'))
  <div class="alert alert-success alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
  </div>
@endif
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <a href="{{ route('genre.create') }}" class="btn btn-sm btn-outline-primary">
          <i class="fa fa-plus"> Genre</i>
        </a>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="table" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Genre</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($genres as $key => $value)
              <tr>
                <td>
                  {{ $key + 1 }}
                </td>
                <td>
                  {{ $value->name }}
                </td>
                <td>
                    <form action="{{ route('genre.delete', $value->id) }}" method="post">
                        {{-- <a href="{{ route('genre.show', $value->id) }}" class="btn btn-sm btn-info">
                          Detail
                        </a> --}}
                        <a href="{{ route('genre.edit', $value->id) }}" class="btn btn-sm btn-warning">
                            <i class="fas fa-pen"></i>
                          <span>Edit</span>
                        </a>
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger">
                            <i class="fas fa-trash"></i>
                            <span>Delete</span>
                          </button>
                        </form>
                </td>
              </tr>
            @empty
              <tr>
                <td></td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
</div>
  @endsection

  {{-- @section('content')
  <section class=""
  @endsection --}}

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

<script>
    $(function () {
      $("#table").DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
  @endpush















