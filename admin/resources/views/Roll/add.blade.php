@extends('Layout.app')

@section('title', 'Roll')

@section('content')
    @section('page_name', 'Roll')
    
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Manage Roll</h1>
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
                        Edit Roll
                      @else
                        Add Roll
                      @endif
                    </h4>
                    <a class="btn btn-success float-right btn-sm" href="{{route('roll.view')}}"><i class="fa fa-list"></i> View List</a>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <form method="POST" action="{{(@$allData)?route('roll.update', $allData->id):route('roll.store')}}" id="myForm" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">                            
                            <div class="form-group col-md-7">
                                <label for="roll" >Roll</label>
                                <input type="text" name="roll" class="form-control">
                                <font style="color:red">{{($errors->has('roll'))?($errors->first('roll')):''}}</font>
                            </div>
                            <div class="form-group col-md-6">
                                {{-- <br> --}}
                              <button type="submit" class="btn btn-primary ">{{(@$allData)?'Update':'Submit'}}</button>
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
