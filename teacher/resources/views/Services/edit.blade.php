@extends('Layout.app')

@section('title', 'Services')

@section('content')
    @section('page_name', 'Services')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Manage Services</h1> 
              </div><!-- /.col -->
              <!-- <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">Student</li>
                </ol> 
              </div> --><!-- /.col -->
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
                    <h4 class="text-bold">Edit Services Details</h4>
                    <a class="btn btn-success float-right btn-sm" href="{{route('services.view')}}"><i class="fa fa-list"></i> View List</a>
                  </div><!-- /.card-header -->
                  <div class="card-body">
                    <form method="POST" action="{{route('services.update', $ServicesData->id)}}" id="myForm">
                      @csrf
                      <div class="form-row">                      
                        
                        <div class="form-group col-md-4">
                          <label for="image">Image</label>
                          <input type="file" value="{{$ServicesData->service_img}}" name="service_img" class="form-control">
                          <font style="color:red">{{($errors->has('service_img'))?($errors->first('service_img')):''}}</font>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="name" >Title</label>
                            <input type="text" value="{{$ServicesData->service_name}}" name="service_name" class="form-control">
                            <font style="color:red">{{($errors->has('service_name'))?($errors->first('service_name')):''}}</font>
                        </div>
                        <div class="form-group col-md-4">
                          <label for="name" >Description</label>
                          <input type="text" name="service_des" class="form-control" value="{{$ServicesData->service_des}}">
                          <font style="color:red">{{($errors->has('service_des'))?($errors->first('service_des')):''}}</font>
                        </div>
                        <div class="form-group col-md-12">
                          <input type="submit" name="" value="Update" class="btn btn-primary">
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