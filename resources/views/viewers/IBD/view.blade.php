<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Paediactric Gastroenterology Database</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="{{ url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback') }}">
<link rel="stylesheet" href="{{ url('plugins/fontawesome-free/css/all.min.css') }}">
<link rel="stylesheet" href="{{ url('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css') }}">
<link rel="stylesheet" href="{{ url('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
<link rel="stylesheet" href="{{ url('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ url('plugins/jqvmap/jqvmap.min.css') }}">
<link rel="stylesheet" href="{{ url('dist/css/adminlte.min.css') }}">
<link rel="stylesheet" href="{{ url('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
<link rel="stylesheet" href="{{ url('plugins/daterangepicker/daterangepicker.css') }}">
<link rel="stylesheet" href="{{ url('plugins/summernote/summernote-bs4.min.css') }}">

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  @include('viewers.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('viewers.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
              <li><button type="button" class="btn btn-warning"><a href="{{url('viewers/IBD/add')}}"> New Form</button></li>
                <li><button type="button" class="btn btn-warning"><a href="{{url('viewers/IBD/view')}}"> View Form</button></li>
            </ol>
          </div><!-- /.col -->
        </div>
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">DataTable with default features</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Ethnicity</th>
                <th>Date of birth</th>
              </tr>
              </thead>
              <tbody>
                @foreach($data as $Value)
                <tr>
                  <td>{{ $Value->Name }}</td>
                  <td>{{ $Value->Age }}</td>
                  <td>{{ $Value->Gender }}</td>
                  <td>{{ $Value->Ethnicity }}</td>
                  <td>{{ $Value->DateOfBirth }}</td>
                </tr>
                @endforeach
              <tfoot>
              <tr>
                <th>Rendering engine</th>
                <th>Browser</th>
                <th>Platform(s)</th>
                <th>Engine version</th>
                <th>CSS grade</th>
              </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    
    </div>
  </div>

  <footer class="main-footer">
    <strong>Copyright &copy; 2024 <a href="https://adminlte.io">Paeiactric gastroenterology Database</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ url('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ url('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<script src="{{ url('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ url('plugins/chart.js/Chart.min.js') }}"></script>
<script src="{{ url('plugins/sparklines/sparkline.js') }}"></script>
<script src="{{ url('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ url('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<script src="{{ url('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<script src="{{ url('plugins/moment/moment.min.js') }}"></script>
<script src="{{ url('plugins/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ url('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<script src="{{ url('plugins/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ url('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<script src="{{ url('dist/js/adminlte.js') }}"></script>
<script src="{{ url('dist/js/pages/dashboard.js') }}"></script>

</body>
</html>
