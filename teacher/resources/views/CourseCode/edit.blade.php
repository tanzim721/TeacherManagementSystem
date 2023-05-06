@extends('Layout.app')

@section('title', 'Course Code')

@section('content')
    @section('page_name', 'Course Code')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Manage Course Code</h1> 
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
                            <h4 class="text-bold">Edit Course Code Details</h4>
                            <a class="btn btn-success float-right btn-sm" href="{{route('coursecode.view')}}"><i class="fa fa-list"></i> View List</a>
                            
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <form method="POST" action="{{route('coursecode.update', $editData->id)}}" id="myForm" enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="coursecode" >Course Code</label>
                                    <input type="text" value="{{$editData->coursecode}}" name="coursecode" class="form-control">
                                    <font style="color:red">{{($errors->has('coursecode'))?($errors->first('coursecode')):''}}</font>
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
    
@endsection