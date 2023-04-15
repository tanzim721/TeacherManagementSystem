@extends('Layout.app')

@section('title', 'Teachers')

@section('content')
    @section('page_name', 'Teachers')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Manage Teachers</h1> 
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
                    <h4 class="text-bold">Edit Teachers Details</h4>
                    <a class="btn btn-success float-right btn-sm" href="{{route('teachers.view')}}"><i class="fa fa-list"></i> View List</a>
                    
                  </div><!-- /.card-header -->
                  <div class="card-body">
                    <form method="POST" action="{{route('teachers.update', $editData->id)}}" id="myForm">
                      @csrf
                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <label for="name" >Name</label>
                          <input type="text" value="{{$editData->name}}" name="name" class="form-control">
                          <font style="color:red">{{($errors->has('name'))?($errors->first('name')):''}}</font>
                        </div>
                        <div class="form-group col-md-4">
                          <label for="email">Email</label>
                          <input type="email" value="{{$editData->email}}" name="email" class="form-control">
                          <font style="color:red">{{($errors->has('email'))?($errors->first('email')):''}}</font>
                        </div>
                        <div class="form-group col-md-4">
                          <label for="phone">Phone</label>
                          <input type="text" value="{{$editData->phone}}" name="phone" class="form-control">
                          <font style="color:red">{{($errors->has('phone'))?($errors->first('phone')):''}}</font>
                        </div>                              
                        {{-- <div class="form-group col-md-4">
                          <label for="gendertype">Gender</label>
                          <select name="gendertype" id="gendertype" class="form-control">
                            <option value="">Select Gender</option>
                            <option value="Male" {{($editData->gendertype=="Male")?"selected":""}}>Male</option>
                            <option value="Female" {{($editData->gendertype=="Female")?"selected":""}}>Female</option>
                            <option value="Other" {{($editData->gendertype=="Other")?"selected":""}}>Other</option>
                          </select>
                        </div> --}}
                        {{-- <div class="form-group col-md-4">
                          <label for="date">Date of Birth</label>
                          <input type="date" value="{{$editData->dateOfBirth}}" name="dateOfBirth" class="form-control">
                          <font style="color:red">{{($errors->has('dateOfBirth'))?($errors->first('dateOfBirth')):''}}</font>
                        </div> --}}
                        <div class="form-group col-md-4">
                          <label for="name" >Designation</label>
                          <input type="text" name="designation" class="form-control" value="{{$editData->designation}}">
                          <font style="color:red">{{($errors->has('designation'))?($errors->first('designation')):''}}</font>
                        </div>
                        <div class="form-group col-md-4">
                          <label for="image">Image</label>
                          <input type="file" value="{{$editData->image}}" name="image" class="form-control">
                          <font style="color:red">{{($errors->has('image'))?($errors->first('image')):''}}</font>
                        </div>
                        <br>
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