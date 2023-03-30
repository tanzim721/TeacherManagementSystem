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
                    <h4 class="text-center">Edit Teachers Details</h4>
                    <a class="btn btn-success float-right btn-sm" href="{{route('teachers.view')}}"><i class="fa fa-list"></i> View List</a>
                    
                  </div><!-- /.card-header -->
                  <div class="card-body">
                    <form method="POST" action="{{route('teachers.update',$editData->id)}}" id="myForm">
                      @csrf
                      <div class="form-row">
                        <div class="form-group col-md-4">
                          <label for="usertype">User Role</label>
                          <select name="usertype" id="usertype" class="form-control">
                            <option value="">Select Role</option>
                            <option value="Admin" {{($editData->usertype=="Admin")?"selected":""}}>Admin</option>
                            <option value="User" {{($editData->usertype=="User")?"selected":""}}>User</option>
                          </select>
                        </div>
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
                       
                        <div class="form-group col-md-6">
                          <input type="submit" name="" value="update" class="btn btn-primary">
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

    
@endsection