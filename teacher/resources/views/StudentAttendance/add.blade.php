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
                      <div class="add-item">
                        <div class="form-row">
                          <div class="form-group col-md-6">
                              <label for="">Course Code</label>
                              <select name="coursecode" id="form-control" class="form-control">
                                @foreach ($coursecode as $item)
                                  <option value="">{{$item->coursecode}}</option>
                                @endforeach
                              </select>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <select name="roll" id="form-control" class="form-control">
                              <table id="example2" class="table table-bordered table-hover text-center">
                                <thead>
                                    <tr>
                                      <th>Roll</th> 
                                      <th>Attendance Status</th>
                                    </tr>
                                </thead>
                                <tbody id="student_attendance_models">
                                    <tr>
                                      @for($i=1; $i<=45; $i++)
                                        <td>{{$i}}</td>
                                        <td colspan="2">
                                          <div class="switch-toggle switch-2 switch-candy">
                                            <input type="text" class="present" id="present{{$i}}" name="attendance_status{{$i}}" value="Present" type="radio" checked="checked">
                                            <label for="present{{$i}}">Present</label>
                                            
                                            <input type="text" class="absent" id="absent{{$i}}" name="attendance_status{{$i}}" value="Absent" type="radio" checked="checked">
                                            <label for="absent{{$i}}">Absent</label>
                                            
                                          </div>
                                        </td>
                                      @endfor
                                    </tr>
                                </tbody>
                            </table>
                              
                            </select>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary ">{{(@$allData)?'Update':'Submit'}}</button>
                      </div>
                    </form>
                      {{-- <form method="POST" action="{{(@$allData)?route('studentAttendance.update', $allData->id):route('studentAttendance.store')}}" id="myForm" enctype="multipart/form-data">
                          @csrf
                          <div class="form-row">                            
                              <div class="form-group col-md-7">
                                  <label for="studentAttendance" >Student Attendance</label>
                                  <input type="text" name="studentAttendance" class="form-control">
                                  <font style="color:red">{{($errors->has('roll'))?($errors->first('roll')):''}}</font>
                              </div>
                              <div class="form-group col-md-6">
                                <button type="submit" class="btn btn-primary ">{{(@$allData)?'Update':'Submit'}}</button>
                              </div>
                          </div>
                      </form>           --}}
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
