<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content">
        <div class="container-fluid">
            <div class="row p-3">
                <div class="col-lg-4 p-2">
                    <div class="small-box bg-info"> 
                        <div class="inner text-center">
                            <h3>{{$TotalTeacher}}</h3>
                            {{-- <h3>{{ \App\User::all()->count() }}</h3> --}}
                            <p>Total Teachers</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="{{route('teachers.view')}}" class="small-box-footer">View Teachers <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 p-2">
                    <div class="small-box bg-info"> 
                        <div class="inner text-center">
                            <h3>{{$TotalVisitor}}</h3>
                            {{-- <h3>{{ \App\User::all()->count() }}</h3> --}}
                            <p>Total Visitors</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        {{-- <a href="{{route('visitor')}}" class="small-box-footer">View Visitor <i class="fas fa-arrow-circle-right"></i></a> --}}
                        <a href="#" class="small-box-footer">View Visitor <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                    
            </div>
          
        </div>
      </section>     
</div>




