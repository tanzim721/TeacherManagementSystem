<div class="content-wrapper">
    <!-- Content Header (Page header) --> 
    <div class="content-header">    
      <div class="container-fluid">
        <div class="row mb-2">  
          <div class="col-sm-6"> 
            <h5 class="m-0 pl-3 text-bold">Services List</h5>
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
                Services List
                <a class="btn btn-success float-right btn-sm" href="{{route('services.add')}}"><i class="fa fa-plus-circle"></i> Add Service</a>
              </div><!-- /.card-header -->  
              <div class="card-body">
                <table id="VisitorDt" class="table table-bordered table-hover text-center">
                {{-- <table id="example1" class="table table-bordered table-hover text-center"> --}}
                {{-- <table id="example2" class="table table-bordered table-hover text-center"> --}}
                    <thead>
                        <tr>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ServicesData as $key => $services)
                        <tr>
                            <td><img style="width: 50px; height:50px" class="card-img-top" src="{{$services->service_img}}" alt="Card image cap"></td>
                            <td>{{$services->service_name}}</td>
                            <td>{{$services->service_des}}</td>
                            <td><a href="{{route('services.edit', $services->id)}}" class="btn btn-sm btn-primary" title="Edit"><i class="fa fa-edit"></i></a> </td>
                            <td><a href="{{route('services.delete', $services->id)}}" type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#exampleModal"><i class="text-light fa fa-trash"></i></a></td>
                          </tr>
                        @endforeach
                    </tbody>
                    {{-- <tbody id="service_tables">
                      
                    </tbody> --}}
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