<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Starter</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href={{asset("https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback")}}>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href={{asset("plugins/fontawesome-free/css/all.min.css")}}>
  <!-- Theme style -->
  <link rel="stylesheet" href={{asset("dist/css/adminlte.min.css")}}>

  @stack('css')

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

{{-- Preloader --}}
<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>
  <!-- End Preloader -->

<!-- Navbar -->
  @include('template.separate.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container(bisa di include) -->
  @include('template.separate.sidebar')
  <!-- /.main-sidebar -->

   <!-- Control Sidebar -->
   <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
      </div>
    </aside>
  <!-- /.control-sidebar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>@yield('content_title')</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div>
      <!-- /.content-header -->
    </div>
    
    <!-- Main content -->
    @yield('content')
    <!-- /.content -->

   
</div>
  <!-- /.content-wrapper -->
</div>

<!--Main footer -->
  @include('template.separate.footer')
<!-- /.footer -->
</div>


<!-- ./wrapper -->


<!-- jQuery -->
<script src={{asset("../../plugins/jquery/jquery.min.js")}}></script>
<!-- Bootstrap 4 -->
<script src={{asset("../../plugins/bootstrap/js/bootstrap.bundle.min.js")}}></script>
<!-- bs-custom-file-input -->
<script src={{asset("../../plugins/bs-custom-file-input/bs-custom-file-input.min.js")}}></script>
<!-- AdminLTE App -->
<script src={{asset("../../dist/js/adminlte.min.js")}}></script>
<!-- AdminLTE for demo purposes -->
<script src={{asset("../../dist/js/demo.js")}}></script>

@stack('js')

<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
