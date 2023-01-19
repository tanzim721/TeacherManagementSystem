
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
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
            {{-- <p>
                <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                  Link with href
                </a>
              </p>
              <div class="collapse" id="collapseExample">
                <div class="card card-body">
                 proident.
                </div>
              </div>
            </p> --}} 
        <li class="nav-item has-treeview">           
            <a href="#" class="nav-link"> 
                <i class="nav-icon fas fa-home"></i> 
                <p>
                    Home
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="far fa-users nav-icon"></i>
                        <p>View Student</p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Change Password</p>
                    </a>
                </li> --}}
            </ul>
        </li>
        {{-- <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <span>Name</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <div class="dropdown-divider"></div>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item dropdown-footer">{{__('Logout')}}</a>
                <form id="logout-form" action="#" method="POST" class="d-none">
                    @csrf
                </form> 
            </div>
        </li> --}}
    </ul>
</nav>
<!-- /.sidebar-menu