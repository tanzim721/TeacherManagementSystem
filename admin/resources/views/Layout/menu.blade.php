
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
<nav class="mt-2 treeview ">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item ">           
            <a href="{{asset('/')}}" class="nav-link"> 
                <i class="nav-icon fas fa-home"></i> 
                <p> Home
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
        </li> 
        <li class="nav-item">
            <a href="{{route('visitor')}}" class="nav-link"> 
                <i class="nav-icon fas fa-users"></i> 
                <p> Visitor
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('service.view')}}" class="nav-link"> 
                <i class="nav-icon fas fa-globe"></i> 
                <p> Service
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{route('gallery.view')}}" class="nav-link"> 
                <i class="nav-icon fa fa-file-image" aria-hidden="true"></i> 
                <p> Gallery
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
        </li>
        <li class="nav-item has-treeview">
            <a href="" class="nav-link"> 
                <i class="nav-icon fa fa-file-image" aria-hidden="true"></i> 
                <p> Gallery
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon far fa-circle"></i>
                        <p>View</p>
                    </a>
                </li>
            </ul>
        </li>

        
        {{-- <li><i class="fas fa-angle-right rotate"></i>
            <span><i class="far fa-envelope-open ic-w mx-1"></i>Mail</span>
            <ul class="nested">
              <li><i class="far fa-bell ic-w mr-1"></i>Offers</li>
              <li><i class="far fa-address-book ic-w mr-1"></i>Contacts</li>
              <li><i class="fas fa-angle-right rotate"></i>
                <span><i class="far fa-calendar-alt ic-w mx-1"></i>Calendar</span>
                <ul class="nested">
                  <li><i class="far fa-clock ic-w mr-1"></i>Deadlines</li>
                  <li><i class="fas fa-users ic-w mr-1"></i>Meetings</li>
                  <li><i class="fas fa-basketball-ball ic-w mr-1"></i>Workouts</li>
                  <li><i class="fas fa-mug-hot ic-w mr-1"></i>Events</li>
                </ul>
              </li>
            </ul>
          </li> --}}
        
    </ul>
</nav>
<!-- /.sidebar-menu