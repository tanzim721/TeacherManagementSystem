<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Manage CT or Assignment Marks</h1>
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
                            <h4 class="text-bold">Marks List</h4>
                            <a class="btn btn-success float-right btn-sm" href="{{route('ctandassignament.add')}}"><i class="fa fa-plus-circle"></i> Add Marks</a>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            {{-- <table id="VisitorDt" class="table table-bordered table-hover text-center"> --}}
                            {{-- <table id="example1" class="table table-bordered table-hover"> --}}
                            <table id="example2" class="table table-bordered table-hover text-center">
                                <thead>
                                    <tr>
                                        <th>SN.</th> 
                                        <th>CT or Assignment Marks</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="c_tand_assignment_models">
                                    @foreach($allData as $key => $ctandassignament)
                                    <tr>
                                        <td>{{$key+1}}.</td>
                                        <td>{{$ctandassignament->ctandassignament}}</td>
                                        <td>
                                            <a href="{{route('ctandassignament.edit', $ctandassignament->id)}}" class="btn btn-sm btn-primary" title="Edit"><i class="fa fa-edit"></i></a> 
                                            <a href="{{route('ctandassignament.delete', $ctandassignament->id)}}" class="btn btn-sm btn-danger" id="delete" title="Delete"><i class="fa fa-trash"></i></a>
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




