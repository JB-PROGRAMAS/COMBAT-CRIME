@extends('layouts.backend.app')
@push('css')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset ('asset/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset ('asset/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
 
@endpush
@section('content')

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">All Sexual Claims</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Sexual Corruption</li>
            <li class="breadcrumb-item active">My Claim</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
 <!-- Main content -->
 <section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <!-- /.card-header -->
          <div class="card-body">
            <table id="sexual" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Name</th>
                <th>Category</th>
                <th>University/Institution</th>
                <th>Contact Person</th>
                <th>Your Sexual Claim</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
              @foreach($sexs as $sexual)
                   <tr> 
                   <td>{{$sexual->name}}</td>
                   <td>{{$sexual->category}}</td>
                   <td>{{$sexual->institution}}</td>
                   <td>{{$sexual->cp}}</td>
                   <td>{{$sexual->sclaim}}</td>
                   <td><a href =""> Delete </a></td>
                   <td><a href =""> Edit</a></td>
                   </tr>
                   @endforeach
              </tbody>
              <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Category</th>
                  <th>University/Institution</th>
                  <th>Contact Person</th>
                  <th>Your Sexual Claim</th>
                  <th>Action</th>
                </tr>
              </tfoot>
             
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->
@endsection
@push('js')

<!-- jQuery -->
<script src="{{asset ('asset/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset ('asset/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset ('asset/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset ('asset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset ('asset/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset ('asset/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<!-- ccm-->
<script src="{{asset ('asset/dist/js/adminlte.min.js')}}"></script>
<!--  -->
<script src="{{asset ('asset/dist/js/demo.js')}}"></script>
<!-- page script -->
  <!-- DataTables -->
<script src="{{asset ('asset/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset ('asset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset ('asset/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset ('asset/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script>
  $(function () {
    $("#sexual").DataTable();
  });
</script>
@endpush