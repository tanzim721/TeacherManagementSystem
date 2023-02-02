<nav class="navbar navbar-expand-lg navbar-light ">
    <a class="navbar-brand" href="{{url('/')}}"> <img class="ml-5 brand-logo" src="{{asset('images/pust logo.png')}}" alt=""> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav col-lg-11">
            <li class="nav-item ">
                <a class="nav-link text-bold" href="{{url('/')}}">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-bold" href="{{url('/')}}">PHOTO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-bold" href="{{route('service.view')}}">SERVICES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-bold" href="{{url('/')}}">NOTICES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-bold" href="{{url('/')}}">CONTACT US</a>
            </li>
        </ul> 
        <div class="text-aline:right col-lg-1">
            <a href="#"><button class="btn btn-info btn-outline-black my-2 my-sm-0 " type="submit">LOGIN</button></a>
        </div>
    </div>
</nav>












