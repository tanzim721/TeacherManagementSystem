@extends('Layout.app')

@section('title', 'Gallery')

@section('content')
    @section('page_name', 'Gallery')
    
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Manage Gallery</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <!-- <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Student</li>
                </ol> -->
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
    
        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
              <!-- Left col -->
              <section class="col-md-12 connectedSortable">
                <!-- Custom tabs (Charts with tabs)-->
                <div class="card">
                  <div class="card-header">
                    <h4 class="text-bold">
                      @if(isset($allData))
                        Edit Gallery
                      @else
                        Add Gallery
                      @endif
                    </h4>
                    <a class="btn btn-success float-right btn-sm" href="{{route('gallery.view')}}"><i class="fa fa-list"></i> View List</a>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <form method="POST" action="{{(@$allData)?route('gallery.update', $allData->id):route('gallery.store')}}" id="myForm" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">                            
                            <div class="form-group col-md-4">
                                <label for="name" >Picture Name</label>
                                <input type="text" name="name" class="form-control">
                                <font style="color:red">{{($errors->has('name'))?($errors->first('name')):''}}</font>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="des">Description</label>
                                <input type="text" name="des" class="form-control">
                                <font style="color:red">{{($errors->has('des'))?($errors->first('des')):''}}</font>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control p-1">
                            </div>
                            <div class="form-group col-md-6">
                              <button type="submit" class="btn btn-primary">{{(@$allData)?'Update':'Submit'}}</button>
                            </div>
                        </div>
                    </form>          
                  </div>
                  <!-- /.card-body -->
                </div>
    
              </section>
            </div>
            <!-- /.row (main row) -->
          </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div> 

    
    <script type="text/javascript">
      $(function () {
      $.validator.setDefaults({
          submitHandler: function () {
              alert( "Form successful submitted!" );
          }
      });
      $('#myForm').validate({
      rules: {
              name: {
              required: true,
              },
              image : {
              required : true;
              }
          },
          messages: {
              name: {
              required: "Please enter username",
              }
              image: {
              required: "Please enter phone nummber",
              }   
          },
          errorElement: 'span',
          errorPlacement: function (error, element) {
              error.addClass('invalid-feedback');
              element.closest('.form-group').append(error);
          },
          highlight: function (element, errorClass, validClass) {
              $(element).addClass('is-invalid');
          },
          unhighlight: function (element, errorClass, validClass) {
              $(element).removeClass('is-invalid');
          }
          });
      });
    </script>

@endsection
