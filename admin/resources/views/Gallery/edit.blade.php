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
                    <h4>Add Image</h4>
                    <a class="btn btn-success float-right btn-sm" href="{{route('gallery.view')}}"><i class="fa fa-list"></i> View List</a>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <form method="POST" action="{{route('gallery.store')}}" id="myForm">
                        @csrf
                        <div class="form-row">                            
                            <div class="form-group col-md-4">
                                <label for="name" >Image Name</label>
                                <input type="text" name="name" class="form-control">
                                <font style="color:red">{{($errors->has('gallery_name'))?($errors->first('gallery_name')):''}}</font>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="description">Description</label>
                                <input type="description" name="description" class="form-control">
                                <font style="color:red">{{($errors->has('gallery_des'))?($errors->first('gallery_des')):''}}</font>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="password">Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                           
                            <div class="form-group col-md-6">
                                <input type="Submit" name="" value="submit" class="btn btn-primary">
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