@extends('layouts.backend.app')

@section('content')

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Create Your Testimonal</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item">My Testimonals</li>
            <li class="breadcrumb-item active">Create Testimonal</li>
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
            <h3 class="card-title">Create Testimonal</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form class="form-horizontal" method ="POST" action ="#">
              @csrf
            <div class="card-body">
              <div class="form-group row">
                  <div class="col-md-6">
                      <label for="name" class="col-sm-6 col-form-label">Name</label>
                <div class="col-sm-8">
                  <input type="text" size="30" class="form-control" id="name" name="name" placeholder="Name">
                </div>
                </div>
                <div class="col-md-6">
                  <label for="Religion" class="col-sm-8 col-form-label">Religion</label>
            <div class="col-sm-8">
              <select class = "form-control" id="religion" name="religion">
              <option value= "4">Dar es Salaam</option>
              <option value="3">Dodoma</option>
              <option value= "2">Mwanza</option>
              <option value="5">Kilimanjaro</option>
              <option value="6">Morogoro</option>
              <option value="1">Arusha</option>
              <option value= "0">Mbeya</option>
            </select>
           
              </div></div>
              <div class="col-md-6">
                <label for="ward" class="col-sm-8 col-form-label">District (Wilaya)</label>
          <div class="col-sm-8">
            <select class = "form-control" id="ward" name="ward">
              <option value= "4">ILALA</option>
              <option value="3">KIGAMBONI</option>
              <option value= "2">TEMEKE</option>
              <option value="5">KINONDONI</option>
             </select>
              </div></div>


              <div class="col-md-6">
                <label for="status" class="col-sm-8 col-form-label">Curent Status *(If your in good situation or not)</label>
          <div class="col-sm-8">
            <select class = "form-control" id="status" name="status">
              <option value= "1">Active</option>
              <option value="0">Inactive</option>
            </select>
            </div>          
          </div>
   
    <div class="card-body pad">
         <label for="typingoftestimonal" class="col-sm-6 col-form-label">Type Your Testimonal here share with us..</label>
      <div class="mb-3">
        <textarea class="textarea" name="testimonal" id="testimonal" placeholder="Type your Testimonals Here now feel free your Safe"
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