<nav class="navbar navbar-expand-lg navbar-info ">
    <a class="navbar-brand" href="{{url('/')}}"> <img class="ml-2 brand-logo" src="{{asset('images/pust logo.png')}}" alt=""> </a>
    <a class="dropbtn text-white">Pabna University of Science and Technology</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon text-danger"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav col-lg-11">
            <li class="nav-item ">
                {{-- <a class="nav-link text-bold" href="{{url('/')}}">HOME</a> --}}
                <a href="{{url('/')}}" class="pt-5 dropbtn">HOME</a>
            </li>
            <li class="dropdown">  
                <a href="" class="pt-5 dropbtn">ABOUT</a>   
                {{-- <i class="fa fa-angle-down"></i> --}} 
                <div class="dropdown-content">
                    <a href="" class="text-bold">Overview</a>
                    <a href="" class="text-bold">Overview</a>
                    <a href="" class="text-bold" >Overview</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="{{route('gallery.view')}}" class="pt-5 dropbtn">PHOTO</a>
            </li>
            <li class="dropdown">
                <a href="{{route('service.view')}}" class="pt-5 dropbtn">SERVICES</a>
            </li>
            <li class="dropdown">
                <a href="" class="pt-5 dropbtn">ACADEMICS</a>
                <div class="dropdown-content">
                    <a href="" class="text-bold">Overview</a>
                    <a href="" class="text-bold">Overview</a>
                    <a href="" class="text-bold" >Overview</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="" class="pt-5 dropbtn">ANNOUNCEMENTS</a>
                <div class="dropdown-content">
                    <a href="" class="text-bold">Overview</a>
                    <a href="" class="text-bold">Overview</a>
                    <a href="" class="text-bold" >Overview</a>
                </div>
            </li>
            <li class="dropdown">
                <a href="{{route('teachers.view')}}" class="pt-5 dropbtn">CONTACT TEACHERS</a>
            </li>
        </ul> 
        <div class="text-aline:right col-lg-1">
            <a href="#"><button class="btn btn-info btn-outline-black my-2 my-sm-0 " type="submit">LOGIN</button></a>
        </div>
    </div>
</nav>












