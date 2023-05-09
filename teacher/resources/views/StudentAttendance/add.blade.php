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
                            <input type="date" name="time" class="checkdate form-control singledatepicker">
                            <font style="color:red">{{($errors->has('time'))?($errors->first('time')):''}}</font>
                          </div> 
                          
                          <div class="form-group col-md-4">
                            <label for="">Course Code</label>
                            <select name="coursecode" id="form-control" class="form-control">
                              @foreach ($coursecode as $key => $item)
                                <option value="">{{$item->coursecode}}</option>
                              @endforeach
                            </select>
                          </div>
                          
                        </div>
                        <div class="form-row">
                          <table id="example2" class="table table-bordered table-hover text-center">
                            <thead>
                              <tr>
                                <th>Roll</th>
                                <th>Attendance Status</th>
                              </tr>
                              {{-- <tr>
                                <th class="text-center btn present_all" style="display; table-cell;">Present</th>
                                <th class="text-center btn absent_all" style="display; table-cell;">Absent</th>
                              </tr> --}}
                            </thead>
                            <tbody id="">
                              @foreach($roll as $key => $roll)
                                <tr>
                                    <td>{{$roll->roll}}</td>
                                    <td colspan="2">
                                      <div class="switch-toggle switch-2 switch-candy">
                                        <input type="radio" value="Present" name="attendance_status{{$key}}" class="present"  id="present{{$key}}" checked="checked">
                                        <label for="present{{$key}}">Present</label>

                                        <input type="radio" value="Absent" name="attendance_status{{$key}}" class="absent" id="absent{{$key}}" >
                                        <label for="absent{{$key}}">Absent</label>
                                      </div>
                                    </td>
                                </tr>
                                @endforeach 

                            </tbody>
                          </table>
                        </div>
                        <div class="form-row">
                          <div class="col-md-5">

                          </div>
                          <div class="form-group col-md-2">
                            <button type="submit" class="btn btn-primary ">{{(@$allData)?'Update':'Submit'}}</button>
                          </div>
                          <div class="col-md-5">

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

      <script type="text/javascript">
        // $(function () {
        // $.validator.setDefaults({
        //   submitHandler: function () {
        //     alert( "Form successful submitted!" );
        //   }
        // });
        $(document).ready(function(){
          $('#myForm').validate({
            rules: {
                date: {
                  required: true,
                }
              },
              messages: {
                
              },
              errorElement: 'span',
              errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
              },
              highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
              },
              unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
              }  
          });
        });
      </script>

@endsection
