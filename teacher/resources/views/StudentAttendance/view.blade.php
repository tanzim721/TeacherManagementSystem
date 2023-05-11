<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Manage Student Attendance</h1>
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
                            <h4 class="text-bold">Student Attendance List</h4>
                            <a class="btn btn-success float-right btn-sm" href="{{route('studentAttendance.add')}}"><i class="fa fa-plus-circle"></i> Add Student Attendance</a>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            {{-- <table id="VisitorDt" class="table table-bordered table-hover text-center"> --}}
                            <table id="example1" class="table table-bordered table-hover text-center">
                            {{-- <table id="example2" class="table table-bordered table-hover text-center"> --}}
                                <thead>
                                    <tr>
                                        <th>SN.</th>
                                        <th>Session</th> 
                                        {{-- <th>Roll</th>
                                        <th>Course Code</th>
                                        <th>Date</th> --}}
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="student_attendance_models">
                                    @foreach($allData as $key => $studentAttendance)
                                    <tr>
                                        <td>{{$key+1}}.</td>
                                        <td>{{$studentAttendance->session}}</td>
                                        {{-- <td>{{$studentAttendance->roll}}</td>
                                        <td>{{$studentAttendance->coursecode}}</td>
                                        <td>{{$studentAttendance->date}}</td> --}}
                                        <td>
                                            <a href="{{route('studentAttendance.add')}}" class="btn btn-sm btn-primary" title="View"><i class="fa fa-eye"></i></a> 
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




