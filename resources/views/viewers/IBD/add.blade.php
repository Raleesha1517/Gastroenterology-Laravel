
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
   
    <h4>Patient Information</h4>
    <section>
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
    
  </section>

      <h4>Presentation Of Diagnosis</h4>
      <div id="presentation">
        <section>
          <div class="form-group">
            <label for="fever">Fever</label>
            <select name="fever" class="form-control" id="fever" required>
                <option value="Yes">Yes</option>
                <option value="No" selected>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="oralUlcers">Oral Ulcers</label>
            <select name="oralUlcers" class="form-control" id="oralUlcers" required>
                <option value="Yes">Yes</option>
                <option value="No" selected>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="oralGranulomatosis">Oral Granulomatosis</label>
            <select name="oralGranulomatosis" class="form-control" id="oralGranulomatosis" required>
                <option value="Yes">Yes</option>
                <option value="No" selected>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="nausea">Nausea</label>
            <select name="nausea" class="form-control" id="nausea" required>
                <option value="Yes">Yes</option>
                <option value="No" selected>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="massiveGIBleeding">Massive GI Bleeding</label>
            <select name="massiveGIBleeding" class="form-control" id="massiveGIBleeding" required>
                <option value="Yes">Yes</option>
                <option value="No" selected>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="vomiting">Vomiting</label>
            <select name="vomiting" class="form-control" id="vomiting" required>
                <option value="Yes">Yes</option>
                <option value="No" selected>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="abdominalMass">Abdominal Mass</label>
            <select name="abdominalMass" class="form-control" id="abdominalMass" required>
                <option value="Yes">Yes</option>
                <option value="No" selected>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="shock">Shock</label>
            <select name="shock" class="form-control" id="shock" required>
                <option value="Yes">Yes</option>
                <option value="No" selected>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="abdominalPain">Abdominal Pain</label>
            <select name="abdominalPain" class="form-control" id="abdominalPain" required>
                <option value="Yes">Yes</option>
                <option value="No" selected>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="peritonitis">Peritonitis</label>
            <select name="peritonitis" class="form-control" id="peritonitis" required>
                <option value="Yes">Yes</option>
                <option value="No" selected>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="mucoidStools">Mucoid Stools</label>
            <select name="mucoidStools" class="form-control" id="mucoidStools" required>
                <option value="Yes">Yes</option>
                <option value="No" selected>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="tenesmus">Tenesmus</label>
            <select name="tenesmus" class="form-control" id="tenesmus" required>
                <option value="Yes">Yes</option>
                <option value="No" selected>No</option>
            </select>
        </div>
        <!-- Continue adding similar form elements for the remaining fields -->
        <div class="form-group">
            <label for="chronicDiarrhea">Chronic Diarrhea</label>
            <select name="chronicDiarrhea" class="form-control" id="chronicDiarrhea" required>
                <option value="Yes">Yes</option>
                <option value="No" selected>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="jointPain">Joint Pain</label>
            <select name="jointPain" class="form-control" id="jointPain" required>
                <option value="Yes">Yes</option>
                <option value="No" selected>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="bloodyDiarrhea">Bloody Diarrhea</label>
            <select name="bloodyDiarrhea" class="form-control" id="bloodyDiarrhea" required>
                <option value="Yes">Yes</option>
                <option value="No" selected>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="perianalPain">Perianal Pain</label>
            <select name="perianalPain" class="form-control" id="perianalPain" required>
                <option value="Yes">Yes</option>
                <option value="No" selected>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="malaiseFatigue">Malaise Fatigue</label>
            <select name="malaiseFatigue" class="form-control" id="malaiseFatigue" required>
                <option value="Yes">Yes</option>
                <option value="No" selected>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="lossOfAppetite">Loss Of Appetite</label>
            <select name="lossOfAppetite" class="form-control" id="lossOfAppetite" required>
                <option value="Yes">Yes</option>
                <option value="No" selected>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="lossOfWeight">Loss Of Weight</label>
            <select name="lossOfWeight" class="form-control" id="lossOfWeight" required>
                <option value="Yes">Yes</option>
                <option value="No" selected>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="failureToThrive">Failure To Thrive</label>
            <select name="failureToThrive" class="form-control" id="failureToThrive" required>
                <option value="Yes">Yes</option>
                <option value="No" selected>No</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="pallor">Pallor</label>
            <select name="pallor" class="form-control" id="pallor" required>
                <option value="Yes">Yes</option>
                <option value="No" selected>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="oralUlcersSign">Oral Ulcers Sign</label>
            <select name="oralUlcersSign" class="form-control" id="oralUlcersSign" required>
                <option value="Yes">Yes</option>
                <option value="No" selected>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="clubbing">Clubbing</label>
            <select name="clubbing" class="form-control" id="clubbing" required>
                <option value="Yes">Yes</option>
                <option value="No" selected>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="orofacialGranulomatosis">Orofacial Granulomatosis</label>
            <select name="orofacialGranulomatosis" class="form-control" id="orofacialGranulomatosis" required>
                <option value="Yes">Yes</option>
                <option value="No" selected>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="hepatomegaly">Hepatomegaly</label>
            <select name="hepatomegaly" class="form-control" id="hepatomegaly" required>
                <option value="Yes">Yes</option>
                <option value="No" selected>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="abdominalTenderness">Abdominal Tenderness</label>
            <select name="abdominalTenderness" class="form-control" id="abdominalTenderness" required>
                <option value="Yes">Yes</option>
                <option value="No" selected>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="splenomegaly">Splenomegaly</label>
            <select name="splenomegaly" class="form-control" id="splenomegaly" required>
                <option value="Yes">Yes</option>
                <option value="No" selected>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="involuntaryGuarding">Involuntary Guarding</label>
            <select name="involuntaryGuarding" class="form-control" id="involuntaryGuarding" required>
                <option value="Yes">Yes</option>
                <option value="No" selected>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="perianalFissures">Perianal Fissures</label>
            <select name="perianalFissures" class="form-control" id="perianalFissures" required>
                <option value="Yes">Yes</option>
                <option value="No" selected>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="indolentPerianalFistula">Indolent Perianal Fistula</label>
            <select name="indolentPerianalFistula" class="form-control" id="indolentPerianalFistula" required>
                <option value="Yes">Yes</option>
                <option value="No" selected>No</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="perianalAbscess">Perianal Abscess</label>
            <select name="perianalAbscess" class="form-control" id="perianalAbscess" required>
                <option value="Yes">Yes</option>
                <option value="No" selected>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="activeDrainingFistula">Active Draining Fistula</label>
            <select name="activeDrainingFistula" class="form-control" id="activeDrainingFistula" required>
                <option value="Yes">Yes</option>
                <option value="No" selected>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="pubertalDelay">Pubertal Delay</label>
            <select name="pubertalDelay" class="form-control" id="pubertalDelay" required>
                <option value="Yes">Yes</option>
                <option value="No" selected>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="asymptomaticPerianalTags">Asymptomatic Perianal Tags</label>
            <select name="asymptomaticPerianalTags" class="form-control" id="asymptomaticPerianalTags" required>
                <option value="Yes">Yes</option>
                <option value="No" selected>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="inflamedPerianalTags">Inflamed Perianal Tags</label>
            <select name="inflamedPerianalTags" class="form-control" id="inflamedPerianalTags" required>
                <option value="Yes">Yes</option>
                <option value="No" selected>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="muscleWasting">Muscle Wasting</label>
            <select name="muscleWasting" class="form-control" id="muscleWasting" required>
                <option value="Yes">Yes</option>
                <option value="No" selected>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="arthritis">Arthritis</label>
            <select name="arthritis" class="form-control" id="arthritis" required>
                <option value="Yes">Yes</option>
                <option value="No" selected>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="erythemaNodosum">Erythema Nodosum</label>
            <select name="erythemaNodosum" class="form-control" id="erythemaNodosum" required>
                <option value="Yes">Yes</option>
                <option value="No" selected>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="iritisUveitis">Iritis Uveitis</label>
            <select name="iritisUveitis" class="form-control" id="iritisUveitis" required>
                <option value="Yes">Yes</option>
                <option value="No" selected>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="pyodermaGangrenosum">Pyoderma Gangrenosum</label>
            <select name="pyodermaGangrenosum" class="form-control" id="pyodermaGangrenosum" required>
                <option value="Yes">Yes</option>
                <option value="No" selected>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="oedema">Oedema</label>
            <select name="oedema" class="form-control" id="oedema" required>
                <option value="Yes">Yes</option>
                <option value="No" selected>No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="others">Others</label>
            <input type="text" name="others" class="form-control" id="others" placeholder="Enter others">
        </div>
        </section>
      </div>

      <h4>Laboratory Investigations</h4>
      <section>
        <div class="form-group">
          <label for="Hemoglobin">Hemoglobin</label>
          <input type="text" name="Hemoglobin" class="form-control" id="Hemoglobin">
      </div>
      <div class="form-group">
          <label for="MeanCorpuscularVolume">Mean Corpuscular Volume</label>
          <input type="text" name="MeanCorpuscularVolume" class="form-control" id="MeanCorpuscularVolume">
      </div>
      <div class="form-group">
          <label for="WhiteBloodCellCount">White Blood Cell Count</label>
          <input type="text" name="WhiteBloodCellCount" class="form-control" id="WhiteBloodCellCount">
      </div>
      <div class="form-group">
          <label for="PlateletCount">Platelet Count</label>
          <input type="text" name="PlateletCount" class="form-control" id="PlateletCount">
      </div>
      <div class="form-group">
          <label for="ESR">ESR</label>
          <input type="text" name="ESR" class="form-control" id="ESR">
      </div>
      <div class="form-group">
          <label for="CRP">CRP</label>
          <input type="text" name="CRP" class="form-control" id="CRP">
      </div>
      <div class="form-group">
          <label for="Haematocrit">Haematocrit</label>
          <input type="text" name="Haematocrit" class="form-control" id="Haematocrit">
      </div>
      <div class="form-group">
          <label for="Albumin">Albumin</label>
          <input type="text" name="Albumin" class="form-control" id="Albumin">
      </div>
      <div class="form-group">
          <label for="SerumTotalBilirubin">Serum Total Bilirubin</label>
          <input type="text" name="SerumTotalBilirubin" class="form-control" id="SerumTotalBilirubin">
      </div>
      <div class="form-group">
          <label for="ALT">ALT</label>
          <input type="text" name="ALT" class="form-control" id="ALT">
      </div>
      <div class="form-group">
          <label for="AST">AST</label>
          <input type="text" name="AST" class="form-control" id="AST">
      </div>
      <div class="form-group">
          <label for="GGT">GGT</label>
          <input type="text" name="GGT" class="form-control" id="GGT">
      </div>
      <div class="form-group">
          <label for="Urea">Urea</label>
          <select name="Urea" class="form-control" id="Urea">
              <option value="Positive">Positive</option>
              <option value="Negative" selected>Negative</option>
          </select>
      </div>
      <div class="form-group">
          <label for="FaecalCalprotectin">Faecal Calprotectin</label>
          <select name="FaecalCalprotectin" class="form-control" id="FaecalCalprotectin">
              <option value="Positive">Positive</option>
              <option value="Negative" selected>Negative</option>
          </select>
      </div>
      <div class="form-group">
          <label for="FaecalLactoferrin">Faecal Lactoferrin</label>
          <select name="FaecalLactoferrin" class="form-control" id="FaecalLactoferrin">
              <option value="Positive">Positive</option>
              <option value="Negative" selected>Negative</option>
          </select>
      </div>
      <div class="form-group">
          <label for="StoolOccultBlood">Stool Occult Blood</label>
          <select name="StoolOccultBlood" class="form-control" id="StoolOccultBlood">
              <option value="Positive">Positive</option>
              <option value="Negative" selected>Negative</option>
          </select>
      </div>
      <div class="form-group">
          <label for="StoolCulture">Stool Culture</label>
          <select name="StoolCulture" class="form-control" id="StoolCulture">
              <option value="Positive">Positive</option>
              <option value="Negative" selected>Negative</option>
          </select>
      </div>
      <div class="form-group">
          <label for="StoolCultureOrganism">Stool Culture Organism</label>
          <textarea name="StoolCultureOrganism" class="form-control" id="StoolCultureOrganism"></textarea>
      </div>
      <div class="form-group">
          <label for="TuberculosisWorkup">Tuberculosis Workup</label>
          <select name="TuberculosisWorkup" class="form-control" id="TuberculosisWorkup">
              <option value="Done">Done</option>
              <option value="Not done" selected>Not done</option>
          </select>
      </div>
      <div class="form-group">
          <label for="TuberculosisResult">Tuberculosis Result</label>
          <select name="TuberculosisResult" class="form-control" id="TuberculosisResult">
              <option value="Positive">Positive</option>
              <option value="Negative" selected>Negative</option>
          </select>
      </div>
      <div class="form-group">
          <label for="GeneticTesting">Genetic Testing</label>
          <select name="GeneticTesting" class="form-control" id="GeneticTesting">
              <option value="Done">Done</option>
              <option value="Not done" selected>Not done</option>
          </select>
      </div>
      <div class="form-group">
          <label for="GeneticTestingResults">Genetic Testing Results</label>
          <textarea name="GeneticTestingResults" class="form-control" id="GeneticTestingResults"></textarea>
      </div>
      <div class="form-group">
          <label for="MRI">MRI</label>
          <select name="MRI" class="form-control" id="MRI">
              <option value="Done">Done</option>
              <option value="Not done" selected>Not done</option>
          </select>
      </div>
      <div class="form-group">
          <label for="MRI_Date">MRI Date</label>
          <input type="date" name="MRI_Date" class="form-control" id="MRI_Date">
      </div>
      <div class="form-group">
          <label for="MRI_Results">MRI Results</label>
          <textarea name="MRI_Results" class="form-control" id="MRI_Results"></textarea>
      </div>
      <div class="form-group">
          <label for="CECT">CECT</label>
          <select name="CECT" class="form-control" id="CECT">
              <option value="Done">Done</option>
              <option value="Not done" selected>Not done</option>
          </select>
      </div>
      <div class="form-group">
          <label for="CECT_Date">CECT Date</label>
          <input type="date" name="CECT_Date" class="form-control" id="CECT_Date">
      </div>
      <div class="form-group">
          <label for="CECT_Results">CECT Results</label>
          <textarea name="CECT_Results" class="form-control" id="CECT_Results"></textarea>
      </div>
      </section>


      <h3>Imaging</h3>
      <h4>UGIE</h4>
      <section>
          <div class="form-group">
              <label for="UGIE_Date">Date</label>
              <input type="date" name="UGIE_Date" class="form-control" id="UGIE_Date">
          </div>
          <div class="form-group">
              <label for="UGIE_Esophagus_endoscopy">Esophagus endoscopy</label>
              <select name="UGIE_Esophagus_endoscopy" class="form-control" id="UGIE_Esophagus_endoscopy">
                  <option value="Normal">Normal</option>
                  <option value="Abnormal">Abnormal</option>
                  <option value="Not-assessed">Not-assessed</option>
              </select>
          </div>
          <div class="form-group">
            <label for="UGIE_Esophagus_histology[]">Esophagus Histology</label><br>
            <input type="checkbox" name="UGIE_Esophagus_histology[]" value="Normal"> Normal<br>
            <input type="checkbox" name="UGIE_Esophagus_histology[]" value="Active inflammation"> Active inflammation<br>
            <input type="checkbox" name="UGIE_Esophagus_histology[]" value="Ulcers"> Ulcers<br>
            <input type="checkbox" name="UGIE_Esophagus_histology[]" value="Granulomas"> Granulomas<br>
            <input type="checkbox" name="UGIE_Esophagus_histology[]" value="Easonoplic infiltration"> Easonoplic infiltration<br>
            <input type="checkbox" name="UGIE_Esophagus_histology[]" value="Not done"> Not done<br>
        </div>        
          <div class="form-group">
            <label for="Stomach_endoscopy">Stomach endoscopy</label>
            <select name="Stomach_endoscopy" class="form-control" id="Stomach_endoscopy">
                <option value="Normal">Normal</option>
                <option value="Abnormal">Abnormal</option>
                <option value="Not-assessed">Not-assessed</option>
            </select>
        </div>
        <div class="form-group">
            <label for="Stomach_histology[]">Stomach Histology</label><br>
            <input type="checkbox" name="Stomach_histology[]" value="Normal"> Normal<br>
            <input type="checkbox" name="Stomach_histology[]" value="Chronic gastritis"> Chronic gastritis<br>
            <input type="checkbox" name="Stomach_histology[]" value="Ulcers/erosions"> Ulcers/erosions<br>
            <input type="checkbox" name="Stomach_histology[]" value="Granulomas"> Granulomas<br>
            <input type="checkbox" name="Stomach_histology[]" value="Easonoplic infiltration"> Easonoplic infiltration<br>
            <input type="checkbox" name="Stomach_histology[]" value="Dysplacia"> Dysplacia<br>
            <input type="checkbox" name="Stomach_histology[]" value="Intestinal Metaplasia"> Intestinal Metaplasia<br>
            <input type="checkbox" name="Stomach_histology[]" value="H pylori"> H pylori<br>
        </div>
        <div class="form-group">
            <label for="Duodenum_endoscopy">Duodenum endoscopy</label>
            <select name="Duodenum_endoscopy" class="form-control" id="Duodenum_endoscopy">
                <option value="Normal">Normal</option>
                <option value="Abnormal">Abnormal</option>
                <option value="Not-assessed">Not-assessed</option>
            </select>
        </div>
        <div class="form-group">
            <label for="Duodenum_histology[]">Duodenum Histology</label><br>
            <input type="checkbox" name="Duodenum_histology[]" value="Normal"> Normal<br>
            <input type="checkbox" name="Duodenum_histology[]" value="Chronic gastritis"> Chronic gastritis<br>
            <input type="checkbox" name="Duodenum_histology[]" value="Ulcers/erosions"> Ulcers/erosions<br>
            <input type="checkbox" name="Duodenum_histology[]" value="Granulomas"> Granulomas<br>
            <input type="checkbox" name="Duodenum_histology[]" value="Easonoplic infiltration"> Easonoplic infiltration<br>
            <input type="checkbox" name="Duodenum_histology[]" value="Dysplacia"> Dysplacia<br>
            <input type="checkbox" name="Duodenum_histology[]" value="Abnormal Villous Architecture"> Abnormal Villous Architecture<br>
            <input type="checkbox" name="Duodenum_histology[]" value="Lymphangiectasia"> Lymphangiectasia<br>
            <input type="checkbox" name="Duodenum_histology[]" value="H pylori"> H pylori<br>
        </div>
        
          <!-- Similar fields for Stomach and Duodenum endoscopy and histology -->
          <div class="form-group">
              <label for="UGIE_Remarks">Remarks</label>
              <textarea name="UGIE_Remarks" class="form-control" id="UGIE_Remarks"></textarea>
          </div>
      
      <h4>LGIE</h4>
      <section>
          <div class="form-group">
              <label for="LGIE_Date">Date</label>
              <input type="date" name="LGIE_Date" class="form-control" id="LGIE_Date">
          </div>
          <div class="form-group">
              <label for="LGIE_Terminal_Ileum_endoscopy">Terminal Ileum endoscopy</label>
              <select name="LGIE_Terminal_Ileum_endoscopy" class="form-control" id="LGIE_Terminal_Ileum_endoscopy">
                  <option value="Normal">Normal</option>
                  <option value="Abnormal">Abnormal</option>
                  <option value="Not-assessed">Not-assessed</option>
              </select>
          </div>
          <div class="form-group">
            <label for="LGIE_Terminal_Ileum_histology[]">Terminal Ileum Histology</label><br>
            <input type="checkbox" name="LGIE_Terminal_Ileum_histology[]" value="Normal"> Normal<br>
            <input type="checkbox" name="LGIE_Terminal_Ileum_histology[]" value="Active Inflammation"> Active Inflammation<br>
            <input type="checkbox" name="LGIE_Terminal_Ileum_histology[]" value="Ulcers"> Ulcers<br>
            <input type="checkbox" name="LGIE_Terminal_Ileum_histology[]" value="Granulomas"> Granulomas<br>
            <input type="checkbox" name="LGIE_Terminal_Ileum_histology[]" value="Easonoplic infiltration"> Easonoplic infiltration<br>
            <input type="checkbox" name="LGIE_Terminal_Ileum_histology[]" value="Dysplacia"> Dysplacia<br>
            <input type="checkbox" name="LGIE_Terminal_Ileum_histology[]" value="Abnormal Villous Architecture"> Abnormal Villous Architecture<br>
            <input type="checkbox" name="LGIE_Terminal_Ileum_histology[]" value="Lymphangiectasia"> Lymphangiectasia<br>
            <input type="checkbox" name="LGIE_Terminal_Ileum_histology[]" value="H pylori"> H pylori<br>
        </div>
        
          <div class="form-group">
            <label for="Caecum_endoscopy">Caecum endoscopy</label>
            <select name="Caecum_endoscopy" class="form-control" id="Caecum_endoscopy">
                <option value="Normal">Normal</option>
                <option value="Abnormal">Abnormal</option>
                <option value="Not-assessed">Not-assessed</option>
            </select>
        </div>
        <div class="form-group">
            <label for="Caecum_histology[]">Caecum Histology</label><br>
            <input type="checkbox" name="Caecum_histology[]" value="Normal"> Normal<br>
            <input type="checkbox" name="Caecum_histology[]" value="Ulcers/erosions"> Ulcers/erosions<br>
            <input type="checkbox" name="Caecum_histology[]" value="Colitis"> Colitis<br>
            <input type="checkbox" name="Caecum_histology[]" value="Crypt abscess"> Crypt abscess<br>
            <input type="checkbox" name="Caecum_histology[]" value="Granuloma"> Granuloma<br>
            <input type="checkbox" name="Caecum_histology[]" value="Fibrosis"> Fibrosis<br>
            <input type="checkbox" name="Caecum_histology[]" value="Crytitis"> Crytitis<br>
            <input type="checkbox" name="Caecum_histology[]" value="Dysplacia"> Dysplacia<br>
            <input type="checkbox" name="Caecum_histology[]" value="Disruption of Villous architecture"> Disruption of Villous architecture<br>
            <input type="checkbox" name="Caecum_histology[]" value="Basal Plasmacytosis"> Basal Plasmacytosis<br>
            <input type="checkbox" name="Caecum_histology[]" value="Lamina propria plasma"> Lamina propria plasma<br>
            <input type="checkbox" name="Caecum_histology[]" value="Easonophilic infiltration"> Easonophilic infiltration<br>
            <input type="checkbox" name="Caecum_histology[]" value="Other"> Other<br>
            <input type="checkbox" name="Caecum_histology[]" value="Not done"> Not done<br>
        </div>
        <div class="form-group">
            <label for="Ascending_Colon_endoscopy">Ascending Colon endoscopy</label>
            <select name="Ascending_Colon_endoscopy" class="form-control" id="Ascending_Colon_endoscopy">
                <option value="Normal">Normal</option>
                <option value="Abnormal">Abnormal</option>
                <option value="Not-assessed">Not-assessed</option>
            </select>
        </div>
        <!-- Histology field is text input, as specified -->
        <div class="form-group">
            <label for="Ascending_Colon_histology">Ascending Colon Histology</label>
            <input type="text" name="Ascending_Colon_histology" class="form-control" id="Ascending_Colon_histology">
        </div>
          <!-- Similar fields for Caecum, Ascending Colon, Transverse Colon, Descending Colon, Sigmoid Colon, Rectum endoscopy and histology -->
          <div class="form-group">
              <label for="LGIE_Remarks">Remarks</label>
              <textarea name="LGIE_Remarks" class="form-control" id="LGIE_Remarks"></textarea>
          </div>
    <div class="form-group">
        <label for="Transverse_Colon_endoscopy">Transverse Colon endoscopy</label>
        <select name="Transverse_Colon_endoscopy" class="form-control" id="Transverse_Colon_endoscopy">
            <option value="Normal">Normal</option>
            <option value="Abnormal">Abnormal</option>
            <option value="Not-assessed">Not-assessed</option>
        </select>
    </div>
    <!-- Histology field is text input, as specified -->
    <div class="form-group">
        <label for="Transverse_Colon_histology">Transverse Colon Histology</label>
        <input type="text" name="Transverse_Colon_histology" class="form-control" id="Transverse_Colon_histology">
    </div>
    <div class="form-group">
        <label for="Descending_Colon_endoscopy">Descending Colon endoscopy</label>
        <select name="Descending_Colon_endoscopy" class="form-control" id="Descending_Colon_endoscopy">
            <option value="Normal">Normal</option>
            <option value="Abnormal">Abnormal</option>
            <option value="Not-assessed">Not-assessed</option>
        </select>
    </div>
    <!-- Histology field is text input, as specified -->
    <div class="form-group">
        <label for="Descending_Colon_histology">Descending Colon Histology</label>
        <input type="text" name="Descending_Colon_histology" class="form-control" id="Descending_Colon_histology">
    </div>
    <div class="form-group">
        <label for="Sigmoid_Colon_endoscopy">Sigmoid Colon endoscopy</label>
        <select name="Sigmoid_Colon_endoscopy" class="form-control" id="Sigmoid_Colon_endoscopy">
            <option value="Normal">Normal</option>
            <option value="Abnormal">Abnormal</option>
            <option value="Not-assessed">Not-assessed</option>
        </select>
    </div>
    <!-- Histology field is text input, as specified -->
    <div class="form-group">
        <label for="Sigmoid_Colon_histology">Sigmoid Colon Histology</label>
        <input type="text" name="Sigmoid_Colon_histology" class="form-control" id="Sigmoid_Colon_histology">
    </div>
    <div class="form-group">
        <label for="Rectum_endoscopy">Rectum endoscopy</label>
        <select name="Rectum_endoscopy" class="form-control" id="Rectum_endoscopy">
            <option value="Normal">Normal</option>
            <option value="Abnormal">Abnormal</option>
            <option value="Not-assessed">Not-assessed</option>
        </select>
    </div>
    <div class="form-group">
        <label for="Rectum_histology">Rectum Histology</label>
        <input type="text" name="Rectum_histology" class="form-control" id="Rectum_histology">
    </div>
      </section>

      
      <h4>Disease Activity</h4>

      <div class="form-group">
        <label for="age_at_diagnosis">Age at Diagnosis</label>
        <select name="age_at_diagnosis" class="form-control" id="age_at_diagnosis">
            <option value="A1a">0-<10y</option>
            <option value="A1b">10-17y</option>
        </select>
    </div>
    
    <div class="form-group">
        <label for="disease_location_cd">Disease Location in CD</label>
        <select name="disease_location_cd" class="form-control" id="disease_location_cd">
            <option value="L1">L1</option>
            <option value="L2">L2</option>
            <option value="L3">L3</option>
            <option value="L4a">L4a</option>
            <option value="L4b">L4b</option>
        </select>
    </div>
    
    <div class="form-group">
        <label for="disease_behavior_cd">Disease Behavior in CD</label>
        <select name="disease_behavior_cd" class="form-control" id="disease_behavior_cd">
            <option value="B1">B1</option>
            <option value="B2">B2</option>
            <option value="B3">B3</option>
            <option value="B2B3">B2B3</option>
        </select>
    </div>
    
    <div class="form-group">
        <label for="disease_location_uc">Disease Location in UC</label>
        <select name="disease_location_uc" class="form-control" id="disease_location_uc">
            <option value="E1">E1</option>
            <option value="E2">E2</option>
            <option value="E3">E3</option>
            <option value="E4">E4</option>
        </select>
    </div>
    
    <div class="form-group">
        <label for="disease_behavior_uc">Disease Behavior in UC</label>
        <select name="disease_behavior_uc" class="form-control" id="disease_behavior_uc">
            <option value="s0">s0</option>
            <option value="s1">s1</option>
        </select>
    </div>
    
    <div class="form-group">
        <label for="perianal_disease_modifier">Perianal Disease Modifier</label>
        <select name="perianal_disease_modifier" class="form-control" id="perianal_disease_modifier">
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>
    </div>
    
    <div class="form-group">
        <label for="growth">Growth</label>
        <select name="growth" class="form-control" id="growth">
            <option value="G0">G0</option>
            <option value="G1">G1</option>
        </select>
    </div>
    

      <div class="form-group">
          <label for="PCDAI_total_score">PCDAI Total Score</label>
          <input type="number" name="PCDAI_total_score" class="form-control" id="PCDAI_total_score" min="0">
      </div>
  
      <div class="form-group">
          <label for="abdominal_pain">Abdominal Pain (0/5/10)</label>
          <select name="abdominal_pain" class="form-control" id="abdominal_pain">
              <option value="0">0</option>
              <option value="5">5</option>
              <option value="10">10</option>
          </select>
      </div>
  
      <div class="form-group">
          <label for="patient_functioning">Patient Functioning (0/5/10)</label>
          <select name="patient_functioning" class="form-control" id="patient_functioning">
              <option value="0">0</option>
              <option value="5">5</option>
              <option value="10">10</option>
          </select>
      </div>
  
      <div class="form-group">
          <label for="stools_per_day">Stools per Day (0/5/10)</label>
          <select name="stools_per_day" class="form-control" id="stools_per_day">
              <option value="0">0</option>
              <option value="5">5</option>
              <option value="10">10</option>
          </select>
      </div>
  
      <div class="form-group">
          <label for="weight">Weight (0/5/10)</label>
          <select name="weight" class="form-control" id="weight">
              <option value="0">0</option>
              <option value="5">5</option>
              <option value="10">10</option>
          </select>
      </div>
  
      <div class="form-group">
          <label for="height">Height (0/5/10)</label>
          <select name="height" class="form-control" id="height">
              <option value="0">0</option>
              <option value="5">5</option>
              <option value="10">10</option>
          </select>
      </div>
  
      <div class="form-group">
          <label for="abdomen">Abdomen (0/5/10)</label>
          <select name="abdomen" class="form-control" id="abdomen">
              <option value="0">0</option>
              <option value="5">5</option>
              <option value="10">10</option>
          </select>
      </div>
  
      <div class="form-group">
          <label for="perianal_disease">Perianal Disease (0/5/10)</label>
          <select name="perianal_disease" class="form-control" id="perianal_disease">
              <option value="0">0</option>
              <option value="5">5</option>
              <option value="10">10</option>
          </select>
      </div>
  
      <div class="form-group">
          <label for="extraintestinal_manifestations">Extraintestinal Manifestations (0/5/10)</label>
          <select name="extraintestinal_manifestations" class="form-control" id="extraintestinal_manifestations">
              <option value="0">0</option>
              <option value="5">5</option>
              <option value="10">10</option>
          </select>
      </div>
  
      <div class="form-group">
          <label for="hematocrit">Hematocrit (0/2.5/5)</label>
          <select name="hematocrit" class="form-control" id="hematocrit">
              <option value="0">0</option>
              <option value="2.5">2.5</option>
              <option value="5">5</option>
          </select>
      </div>
  
      <div class="form-group">
          <label for="ESR">ESR (0/2.5/5)</label>
          <select name="ESR" class="form-control" id="ESR">
              <option value="0">0</option>
              <option value="2.5">2.5</option>
              <option value="5">5</option>
          </select>
      </div>
  
      <div class="form-group">
          <label for="albumin">Albumin (0/5/10)</label>
          <select name="albumin" class="form-control" id="albumin">
              <option value="0">0</option>
              <option value="5">5</option>
              <option value="10">10</option>
          </select>
      </div>

      <h4>Patient Medication </h4>

    <div class="form-group">
        <label for="medication_used[]">Medication Used</label><br>
        <input type="checkbox" name="medication_used[]" value="oral prednisilone"> Oral Prednisilone<br>
        <input type="checkbox" name="medication_used[]" value="iv methyl prednisilone"> IV Methyl Prednisilone<br>
        <input type="checkbox" name="medication_used[]" value="infliximab"> Infliximab<br>
        <input type="checkbox" name="medication_used[]" value="mesalazine"> Mesalazine<br>
        <input type="checkbox" name="medication_used[]" value="azathioprine"> Azathioprine<br>
        <input type="checkbox" name="medication_used[]" value="oral dexamethasone"> Oral Dexamethasone<br>
        <input type="checkbox" name="medication_used[]" value="sulfasalazine"> Sulfasalazine<br>
    </div>

    <div class="form-group">
        <label for="initiation_date">Date of Initiation of Treatment</label>
        <input type="date" name="initiation_date" class="form-control" id="initiation_date">
    </div>

    <div class="form-group">
        <label for="dose">Dose</label>
        <input type="text" name="dose" class="form-control" id="dose">
    </div>

    <div class="form-group">
        <label for="medication_on_discharge[]">Medication on Discharge</label><br>
        <input type="checkbox" name="medication_on_discharge[]" value="oral prednisilone"> Oral Prednisilone<br>
        <input type="checkbox" name="medication_on_discharge[]" value="iv methyl prednisilone"> IV Methyl Prednisilone<br>
        <input type="checkbox" name="medication_on_discharge[]" value="infliximab"> Infliximab<br>
        <input type="checkbox" name="medication_on_discharge[]" value="mesalazine"> Mesalazine<br>
    </div>

    <div class="form-group">
        <label for="pre_existing_immunosuppressants">Is the patient on pre-existing immunosuppressants at diagnosis?</label>
        <select name="pre_existing_immunosuppressants" class="form-control" id="pre_existing_immunosuppressants">
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>
    </div>

    <div class="form-group">
        <label for="pre_existing_medications">Pre-existing Medications</label>
        <input type="text" name="pre_existing_medications" class="form-control" id="pre_existing_medications">
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
  