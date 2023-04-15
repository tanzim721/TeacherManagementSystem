@extends('Layout.App')
@section('title', 'Visitor')

@section('content')
    {{-- <div class="container">
        <div class="row">
            <div class="col-md-10 p-5">
                <div id="visitorDt" class="table table-stripper table-sm table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr class="th-sm">No</tr>
                        <tr class="th-sm">IP</tr>
                        <tr class="th-sm">Date & Time</tr>
                    </thead>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h5 class="m-0 pl-3 text-bold">Visitor List</h5>
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
                  {{-- <div class="card-header">
                    User List
                    <a class="btn btn-success float-right btn-sm" href="#"><i class="fa fa-plus-circle"></i> Add Student</a>
                    
                  </div><!-- /.card-header --> --}}
                  <div class="card-body">
                    <table id="VisitorDt" class="table table-bordered table-hover text-center">
                    {{-- <table id="example1" class="table table-bordered table-hover text-center"> --}}
                    {{-- <table id="example2" class="table table-bordered table-hover text-center"> --}}
                        <thead>
                            <tr>
                            <th>No</th>
                            <th>IP</th>
                            <th>Date & Time</th>
                            {{-- <th>Action</th> --}}
                            </tr>
                        </thead>
                       
                        <tbody>
                            @foreach($allData as $key => $visitor)
                            <tr>
                                <td>{{$visitor->id}}.</td>
                                <td>{{$visitor->ip_address}}</td>
                                <td>{{$visitor->visit_time}}</td>
                                {{-- <td>
                                    <a href="#" class="btn btn-sam btn-primary" title="Edit"><i class="fa fa-edit"></i></a> 
                                    <a href="#" class="btn btn-sm btn-danger" id="delete" title="Delete"><i class="fa fa-trash"></i></a>
                                </td> --}}
                            </tr>
                            @endforeach
                        </tbody>
                    </table>  
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