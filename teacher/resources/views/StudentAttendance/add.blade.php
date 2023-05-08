@extends('Layout.app')

@section('title', 'Student Attendance')

@section('content')
    @section('page_name', 'Student Attendance')
    
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
                        Edit Student Attendance
                      @else
                        Add Student Attendance
                      @endif
                    </h4>
                    <a class="btn btn-success float-right btn-sm" href="{{route('studentAttendance.view')}}"><i class="fa fa-list"></i> View List</a>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <form method="POST" action="{{(@$allData)?route('studentAttendance.update', $allData->id):route('studentAttendance.store')}}" id="myForm" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">   
                          <div class="form-group col-md-4" id='datetimepicker2'>
                            <label for="time" >Time and Date</label>
                            <input type="date" name="time" class="form-control">
                            <font style="color:red">{{($errors->has('time'))?($errors->first('time')):''}}</font>
                          </div> 
                          <div class="form-group col-md-4">
                            <label for="session" >Session</label>
                            <input type="text" value="{{$session->session}}" name="session" class="form-control">
                            <font style="color:red">{{($errors->has('session'))?($errors->first('session')):''}}</font>
                        </div>
                          <div class="form-group col-md-4">
                            <label for="">Course Code</label>
                            <select name="coursecode" id="form-control" class="form-control">
                              @foreach ($coursecode as $key => $item)
                                <option value="">{{$item->coursecode}}</option>
                              @endforeach
                            </select>
                          </div>
                          {{-- <div class="form-group col-md-4">
                            <label for="session" >Session</label>
                            <input type="text" value="{{$session->session}}" name="session" class="form-control">
                            <font style="color:red">{{($errors->has('session'))?($errors->first('session')):''}}</font>
                          </div> --}}
                        </div>
                        <div class="form-row">
                          <table id="example2" class="table table-bordered table-hover text-center">
                            <thead>
                              <tr>
                                  <th>Roll</th>
                                  <th>Attendance Status</th>
                              </tr>
                            </thead>
                            <tbody id="">
                              @foreach($roll as $key => $roll)

                                <tr>
                                    <td>{{$roll->roll}}</td>
                                    <td>
                                    
                                    </td>
                                </tr>
                                @endforeach 

                            </tbody>
                          </table>
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
