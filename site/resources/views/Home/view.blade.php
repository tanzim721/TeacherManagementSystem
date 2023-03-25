{{-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100 banner" src="{{asset('images/banner.webp')}}" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 banner" src="{{asset('images/banner.jpg')}}" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 banner" src="{{asset('images/banner.webp')}}" alt="Third slide">
        </div>
    </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
</div> --}}


<div class="container-fluid jumbotron m-1 bg-white">
    <h2 class="text-center pb-5 px-2 text-bold">@yield('page_name')</h2>
    <div class="row">

        <div class="col-md-6">
            <img src="{{asset('images/banner.webp')}}" alt="" class="d-block w-100 banner">
        </div>

        <div class="col-md-6 justify-content-center backcolor">
            <div class="m-lg-5 m-md-5 p-lg-5 m-sm-3 p-sm-3 p-md-5">
                <h5 class="top-banner-title text-justify">Department of ICE</h5>
                <h5 class="top-banner-title text-justify">Pabna University of Science and Technology</h5>
            </div> 
        </div>
        
    </div>
</div>