@extends('layouts.backend.app')

@section('content')

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Report Forced Sexual Corruption Claim</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">Sexual Corruption</li>
            <li class="breadcrumb-item active">Create Claim</li>
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
      <!-- left column -->
      <div class="col-md-12">
       
        <!-- Horizontal Form -->
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Create Your Claim</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form class="form-horizontal" method ="POST" action ="{{route('create_sexual')}}">
              @csrf
            <div class="card-body">
              <div class="form-group row">
                  <div class="col-md-6">
                      <label for="name" class="col-sm-6 col-form-label">Name</label>
                <div class="col-sm-8">
                  <input type="text" size="30" class="form-control"  id="name" name="name" placeholder="Name">
                </div>
                </div>
                <div class="col-md-6">
                  <label for="category" class="col-sm-8 col-form-label">Category</label>
            <div class="col-sm-8">
              <select class = "form-control" id="category" name="category">
                <option value= "4">University</option>
                <option value="3">Private Company</option>
                <option value= "2">Goverment</option>
                <option value="1">Secondary/Primary School</option>
                <option value= "0">Others Institutions</option>
              </select>
              </div></div>
                <div class="col-md-6">
                  <label for="institution" class="col-sm-8 col-form-label">University/College/Institution Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" name="institution" id="institution" placeholder="Write Here that name">
              </div>
            
            </div>
            <div class="col-md-6">
              <label for="contactPerson" class="col-sm-6 col-form-label">Suspecting Person</label>
        <div class="col-sm-8">
          <input type="text" class="form-control" name="contactPerson" id="contactPerson" placeholder="Contact Person">
          </div>       
        </div>

    <div class="card-body pad">
         <label for="typingofclaims" class="col-sm-6 col-form-label">Type Your Claim Here</label>
      <div class="mb-3">
        <textarea class="textarea" name="sclaim" id="sclaim" placeholder="Type your Claims Here now feel free your Safe"
                  style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
      </div>
    </div>
    <!-- /.content -->

       <!-- <div class="col-md-6">
          <label for="typingofclaims" class="col-sm-6 col-form-label">Type Your Claim Here</label>
          <div class="col-sm-12">
          <textarea class="form-control" name="sclaim" id="sclaim" rows="10" placeholder="Type your Claims Here now feel free your Safe"></textarea>
        </div>
      </div>-->
      <!--<div class="col-md-6">
        <label for="exampleInputFile">File input</label>
               <div class="col-sm-12">
                <input type="file" class="custom-file-input" name="sexual_evidence" id="sexual_evidnce">
                <label class="custom-file-label" for="exampleInputFile">Choose image to Send as a supporting Evidence</label>
              </div>
            </div>-->
           
              <!--<div class="form-group row">
                <div class="col-md-4">
                    <label for="phone" class="col-sm-4 col-form-label">Phone No</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone No">
              </div>-->
              
              <div class="col-md-6">
                <label for="status" class="col-sm-8 col-form-label">Curent Status *(If your in good situation or not)</label>
          <div class="col-sm-8">
            <select class = "form-control" id="status" name="status">
              <option value= "1">Active</option>
              <option value="0">Inactive</option>
            </select>
            </div>
          
          </div>
          <div class="col-md-4">       
      </div>
            </div>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-default float-right">Submit Your Claims</button>
            </div>
            <!-- /.card-footer -->
          </div>
          </form>
        </div>
        <!-- /.card -->

      </div>
      <!--/.col (left) -->
     
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>



@endsection