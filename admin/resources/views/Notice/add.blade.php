@extends('Layout.app')

@section('title', 'Noctice')

@section('content')
    @section('page_name', 'Noctice')
    
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Manage Noctice</h1>
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
                                Edit Noctice
                            @else
                                Add Noctice
                            @endif
                            </h4>
                            <a class="btn btn-success float-right btn-sm" href="{{route('notice.view')}}"><i class="fa fa-list"></i> View List</a>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <form method="POST" action="{{(@$allData)?route('notice.update', $allData->id):route('notice.store')}}" id="myForm" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">                            
                                    <div class="form-group col-md-4">
                                        <label for="name" >Name</label>
                                        <input type="text" name="name" class="form-control">
                                        <font style="color:red">{{($errors->has('name'))?($errors->first('name')):''}}</font>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="text">Description</label>
                                        <input type="text" name="des" class="form-control">
                                        <font style="color:red">{{($errors->has('des'))?($errors->first('des')):''}}</font>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="file" >File Name</label>
                                        <input type="file" name="file" class="form-control">
                                        <font style="color:red">{{($errors->has('file'))?($errors->first('file')):''}}</font>
                                    </div> 
                                    <div class="form-group col-md-4">
                                        <label for="time" >Time and Date</label>
                                        <input type="time" name="time" class="form-control">
                                        <font style="color:red">{{($errors->has('time'))?($errors->first('time')):''}}</font>
                                    </div> 
                                    <div class="form-group col-md-9">
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
              email: {
              required: true,
              email: true,
              },
              phone : {
              required : true;
              minlength : 11
              }
          },
          messages: {
              name: {
              required: "Please enter username",
              }
              email: {
              required: "Please enter a email address",
              email: "Please enter a valid email address"
              },
              phone: {
              required: "Please enter phone nummber",
              minlength: "Phone will be minimum 11 numbers"
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
