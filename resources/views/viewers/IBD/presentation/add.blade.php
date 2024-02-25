
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
                 <form id="presentationForm" method="POST" action="{{ url('viewers/IBD/add') }}">
                    {{ csrf_field() }}
                    <div class="card-body">
                        <div class="form-group">
                            <label for="fever">Fever</label>
                            <select name="fever" class="form-control" id="fever" required>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="oralUlcers">Oral Ulcers</label>
                            <select name="oralUlcers" class="form-control" id="oralUlcers" required>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="oralGranulomatosis">Oral Granulomatosis</label>
                            <select name="oralGranulomatosis" class="form-control" id="oralGranulomatosis" required>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nausea">Nausea</label>
                            <select name="nausea" class="form-control" id="nausea" required>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="massiveGIBleeding">Massive GI Bleeding</label>
                            <select name="massiveGIBleeding" class="form-control" id="massiveGIBleeding" required>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="vomiting">Vomiting</label>
                            <select name="vomiting" class="form-control" id="vomiting" required>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="abdominalMass">Abdominal Mass</label>
                            <select name="abdominalMass" class="form-control" id="abdominalMass" required>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="shock">Shock</label>
                            <select name="shock" class="form-control" id="shock" required>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="abdominalPain">Abdominal Pain</label>
                            <select name="abdominalPain" class="form-control" id="abdominalPain" required>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="peritonitis">Peritonitis</label>
                            <select name="peritonitis" class="form-control" id="peritonitis" required>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="mucoidStools">Mucoid Stools</label>
                            <select name="mucoidStools" class="form-control" id="mucoidStools" required>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tenesmus">Tenesmus</label>
                            <select name="tenesmus" class="form-control" id="tenesmus" required>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <!-- Continue adding similar form elements for the remaining fields -->
                        <div class="form-group">
                            <label for="chronicDiarrhea">Chronic Diarrhea</label>
                            <select name="chronicDiarrhea" class="form-control" id="chronicDiarrhea" required>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jointPain">Joint Pain</label>
                            <select name="jointPain" class="form-control" id="jointPain" required>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="bloodyDiarrhea">Bloody Diarrhea</label>
                            <select name="bloodyDiarrhea" class="form-control" id="bloodyDiarrhea" required>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="perianalPain">Perianal Pain</label>
                            <select name="perianalPain" class="form-control" id="perianalPain" required>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="malaiseFatigue">Malaise Fatigue</label>
                            <select name="malaiseFatigue" class="form-control" id="malaiseFatigue" required>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="lossOfAppetite">Loss Of Appetite</label>
                            <select name="lossOfAppetite" class="form-control" id="lossOfAppetite" required>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="lossOfWeight">Loss Of Weight</label>
                            <select name="lossOfWeight" class="form-control" id="lossOfWeight" required>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="failureToThrive">Failure To Thrive</label>
                            <select name="failureToThrive" class="form-control" id="failureToThrive" required>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="pallor">Pallor</label>
                            <select name="pallor" class="form-control" id="pallor" required>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="oralUlcersSign">Oral Ulcers Sign</label>
                            <select name="oralUlcersSign" class="form-control" id="oralUlcersSign" required>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="clubbing">Clubbing</label>
                            <select name="clubbing" class="form-control" id="clubbing" required>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="orofacialGranulomatosis">Orofacial Granulomatosis</label>
                            <select name="orofacialGranulomatosis" class="form-control" id="orofacialGranulomatosis" required>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="hepatomegaly">Hepatomegaly</label>
                            <select name="hepatomegaly" class="form-control" id="hepatomegaly" required>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="abdominalTenderness">Abdominal Tenderness</label>
                            <select name="abdominalTenderness" class="form-control" id="abdominalTenderness" required>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="splenomegaly">Splenomegaly</label>
                            <select name="splenomegaly" class="form-control" id="splenomegaly" required>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="involuntaryGuarding">Involuntary Guarding</label>
                            <select name="involuntaryGuarding" class="form-control" id="involuntaryGuarding" required>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="perianalFissures">Perianal Fissures</label>
                            <select name="perianalFissures" class="form-control" id="perianalFissures" required>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="indolentPerianalFistula">Indolent Perianal Fistula</label>
                            <select name="indolentPerianalFistula" class="form-control" id="indolentPerianalFistula" required>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="perianalAbscess">Perianal Abscess</label>
                            <select name="perianalAbscess" class="form-control" id="perianalAbscess" required>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="activeDrainingFistula">Active Draining Fistula</label>
                            <select name="activeDrainingFistula" class="form-control" id="activeDrainingFistula" required>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pubertalDelay">Pubertal Delay</label>
                            <select name="pubertalDelay" class="form-control" id="pubertalDelay" required>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="asymptomaticPerianalTags">Asymptomatic Perianal Tags</label>
                            <select name="asymptomaticPerianalTags" class="form-control" id="asymptomaticPerianalTags" required>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inflamedPerianalTags">Inflamed Perianal Tags</label>
                            <select name="inflamedPerianalTags" class="form-control" id="inflamedPerianalTags" required>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="muscleWasting">Muscle Wasting</label>
                            <select name="muscleWasting" class="form-control" id="muscleWasting" required>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="arthritis">Arthritis</label>
                            <select name="arthritis" class="form-control" id="arthritis" required>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="erythemaNodosum">Erythema Nodosum</label>
                            <select name="erythemaNodosum" class="form-control" id="erythemaNodosum" required>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="iritisUveitis">Iritis Uveitis</label>
                            <select name="iritisUveitis" class="form-control" id="iritisUveitis" required>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="pyodermaGangrenosum">Pyoderma Gangrenosum</label>
                            <select name="pyodermaGangrenosum" class="form-control" id="pyodermaGangrenosum" required>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="oedema">Oedema</label>
                            <select name="oedema" class="form-control" id="oedema" required>
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="others">Others</label>
                            <input type="text" name="others" class="form-control" id="others" placeholder="Enter others">
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
  