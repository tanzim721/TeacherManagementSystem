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
        <div class="container-fluid" id="mainDiv">
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
            <!-- Left col -->
                <section class="col-md-12 connectedSortable">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                        <div class="card-header">
                            <h4>Picture List</h4>
                            <a class="btn btn-success float-right btn-sm" href="{{route('gallery.add')}}"><i class="fa fa-plus-circle"></i> Add Picture</a>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <table id="VisitorDt" class="table table-bordered table-hover text-center">
                            {{-- <table id="example1" class="table table-bordered table-hover"> --}}
                            {{-- <table id="example2" class="table table-bordered table-hover"> --}}
                                <thead>
                                    <tr>
                                        <th>SN.</th> 
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="service_table">
                                    @foreach($dataGallery as $key => $gallery)
                                    <tr>
                                        <td>{{$key+1}}.</td>
                                        <td>{{$gallery->gallery_name}}</td>
                                        <td>{{$gallery->gallery_des}}</td>
                                        <td><img style="width: 50px; height:50px" class="card-img-top" src="{{$gallery->gallery_img}}" alt="Card image cap"></td>
                                        <td>
                                            <a href="{{route('gallery.edit', $gallery->id)}}" class="btn btn-sam btn-primary" title="Edit"><i class="fa fa-edit"></i></a> 
                                            <a href="" class="btn btn-sm btn-danger" id="delete" title="Delete"><i class="fa fa-trash"></i></a>
                                        </td>
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

        {{-- <div id="loadergDiv" class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <img class="loding-icon " src="{{asset('images/loding.gif')}}" alt="">
                </div>
            </div>
        </div>
        <div id="worngDiv" class="container d-none">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center">Something Went Wrong!</h3>
                </div>
            </div>
        </div> --}}
    </section>
    <!-- /.content -->
</div>




