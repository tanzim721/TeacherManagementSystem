<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Manage Teachers</h1>
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
                            <h4 class="text-bold">Teachers List</h4>
                            Ekhane duita problem: 1.delete kaj korteche na 2.image save hocche na....
                            <a class="btn btn-success float-right btn-sm" href="{{route('teachers.add')}}"><i class="fa fa-plus-circle"></i> Add Teachers</a>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            {{-- <table id="VisitorDt" class="table table-bordered table-hover text-center"> --}}
                            {{-- <table id="example1" class="table table-bordered table-hover"> --}}
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>SN.</th> 
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        {{-- <th>Gender</th> --}}
                                        {{-- <th>Date of Birth</th> --}}
                                        <th>Designation</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="teachers_models">
                                    @foreach($allData as $key => $teachers)
                                    <tr>
                                        <td>{{$key+1}}.</td>
                                        <td>{{$teachers->name}}</td>
                                        <td>{{$teachers->email}}</td>
                                        <td>{{$teachers->phone}}</td>
                                        {{-- <td>{{$teachers->gender}}</td> --}}
                                        {{-- <td>{{$teachers->dateOfBirth}}</td> --}}
                                        <td>{{$teachers->designation}}</td>
                                        <td><img style="width: 45px; height:45px" class="card-img-top" src="{{$teachers->image}}" alt=""></td>
                                        <td>
                                            <a href="{{route('teachers.edit', $teachers->id)}}" class="btn btn-sm btn-primary" title="Edit"><i class="fa fa-edit"></i></a> 
                                            <a href="{{route('teachers.delete', $teachers->id)}}" class="btn btn-sm btn-danger" id="delete" title="Delete"><i class="fa fa-trash"></i></a>
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
    </section>
    <!-- /.content -->
</div>




