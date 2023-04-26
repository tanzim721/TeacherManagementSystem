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
                                    Edit Picture
                                @else
                                    Add Picture
                                @endif
                                </h4>
                                <a class="btn btn-success float-right btn-sm" href="{{route('gallery.view')}}"><i class="fa fa-list"></i> View List</a>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <form method="POST" action="{{(@$allData)?route('gallery.update', $allData->id):route('gallery.store')}}" id="myForm">
                                    @csrf
                                    <div class="form-row">                            
                                        <div class="form-group col-md-4">
                                            <label for="name" >Picture Name</label>
                                            <input type="text" name="name" class="form-control">
                                            <font style="color:red">{{($errors->has('gallery_name'))?($errors->first('gallery_name')):''}}</font>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="name" >Description</label>
                                            <input type="text" name="designation" class="form-control">
                                            <font style="color:red">{{($errors->has('gallery_des'))?($errors->first('gallery_des')):''}}</font>
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

@endsection
