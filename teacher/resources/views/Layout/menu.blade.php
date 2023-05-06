<div class="form-inline">
    <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
            <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
            </button>
        </div> 
    </div>
</div>
<!-- Sidebar Menu -->
<nav class="mt-2 treeview">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{asset('/')}}" class="nav-link">
                <i class="nav-icon fas fa-home"></i> 
                <p>
                    Home
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('studentAttendance.view')}}" class="nav-link">
                <i class="nav-icon fas fa-tasks"></i> 
                <p>
                    Student Attendance
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link">
                <i class="nav-icon fas fa-tasks"></i> 
                <p>
                    CT Marks
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
        </li>
        {{-- <li class="nav-item">
            <a href="" class="nav-link">
                <i class="nav-icon fas fa-tasks"></i> 
                <p>
                    Tasks Schedule
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>General Elements</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Advanced Elements</p>
                    </a>
                </li>
            </ul>
        </li> --}}
       
    </ul>
</nav>
<!-- /.sidebar-menu