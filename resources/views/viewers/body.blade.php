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
                {{-- @foreach($getRecords as $Value)
                <tr>
                  <td>{{ $Value->name }}</td>
                  <td>{{ $Value->Age }}</td>
                  <td>{{ $Value->Gender }}</td>
                  <td>{{ $Value->Ethnicity }}</td>
                  <td>{{ $Value->DateOfBirth }}</td>
                </tr>
                @endforeach --}}
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