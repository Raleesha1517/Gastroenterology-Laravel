
  <!-- Content Wrapper. Contains page content -->
 
  <!-- /.content-wrapper -->
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
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Validation</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Validation</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
    
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <!-- left column -->
              <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Quick Example <small>jQuery Validation</small></h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                 <!-- add.blade.php -->

<form id="patientForm" method="POST" action="{{ url('viewers/IBD/add') }}">
  {{ csrf_field() }}
  <div class="card-body">
      <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" required>
      </div>
      <div class="form-group">
          <label for="gender">Gender</label>
          <select name="gender" class="form-control" id="gender" required>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
          </select>
      </div>
      <div class="form-group">
          <label for="ethnicity">Ethnicity</label>
          <select name="ethnicity" class="form-control" id="ethnicity" required>
              <option value="Sinhalese">Sinhalese</option>
              <option value="Tamil">Tamil</option>
              <option value="Muslim">Muslim</option>
              <option value="Other">Other</option>
          </select>
      </div>
      <div class="form-group">
          <label for="dob">Date of Birth</label>
          <input type="date" name="dob" class="form-control" id="dob" required>
      </div>
      <div class="form-group">
          <label for="address">Address</label>
          <textarea name="address" class="form-control" id="address" placeholder="Enter address"></textarea>
      </div>
      <div class="form-group">
          <label for="contactNo">Contact Number</label>
          <input type="text" name="contactNo" class="form-control" id="contactNo" placeholder="Enter contact number" required>
      </div>
      <div class="form-group">
          <label for="ageOfSymptomOnset">Age of Symptom Onset</label>
          <input type="text" name="ageOfSymptomOnset" class="form-control" id="ageOfSymptomOnset" placeholder="Enter age of symptom onset" required>
      </div>
      <div class="form-group">
          <label for="dateOfDiagnosis">Date of Diagnosis</label>
          <input type="date" name="dateOfDiagnosis" class="form-control" id="dateOfDiagnosis" required>
      </div>
      <div class="form-group">
          <label for="diagnosis">Diagnosis</label>
          <select name="diagnosis" class="form-control" id="diagnosis" required>
              <option value="Crohn’s Disease">Crohn’s Disease</option>
              <option value="Ulcerative Colitis">Ulcerative Colitis</option>
              <option value="Undetermined Colitis">Undetermined Colitis</option>
          </select>
      </div>
      <div class="form-group">
          <label for="familyHistoryIBD">Family History of IBD</label>
          <select name="familyHistoryIBD" class="form-control" id="familyHistoryIBD" required>
              <option value="Yes">Yes</option>
              <option value="No">No</option>
          </select>
      </div>
      <div class="form-group">
          <label for="degreeOfRelationIBD">Degree of Relation for IBD</label>
          <input type="text" name="degreeOfRelationIBD" class="form-control" id="degreeOfRelationIBD" placeholder="Enter degree of relation for IBD">
      </div>
      <div class="form-group">
          <label for="familyHistoryBowelCA">Family History of Bowel CA</label>
          <select name="familyHistoryBowelCA" class="form-control" id="familyHistoryBowelCA" required>
              <option value="Yes">Yes</option>
              <option value="No">No</option>
          </select>
      </div>
      <div class="form-group">
          <label for="degreeOfRelationBowelCA">Degree of Relation for Bowel CA</label>
          <input type="text" name="degreeOfRelationBowelCA" class="form-control" id="degreeOfRelationBowelCA" placeholder="Enter degree of relation for Bowel CA">
      </div>
      <div class="form-group">
          <label for="consanguinity">Consanguinity</label>
          <select name="consanguinity" class="form-control" id="consanguinity" required>
              <option value="Yes">Yes</option>
              <option value="No">No</option>
          </select>
      </div>
      <div class="form-group">
          <label for="degreeOfConsanguinity">Degree of Consanguinity</label>
          <input type="text" name="degreeOfConsanguinity" class="form-control" id="degreeOfConsanguinity" placeholder="Enter degree of consanguinity">
      </div>
  </div>
  <!-- /.card-body -->
  <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>

                
                </div>
                <!-- /.card -->
                </div>
              <!--/.col (left) -->
              <!-- right column -->
              <div class="col-md-6">
    
              </div>
              <!--/.col (right) -->
            </div>
            <!-- /.row -->
          </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
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
  