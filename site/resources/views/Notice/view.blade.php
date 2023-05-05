<div class="container-fluid jumbotron bg-white backBanner">
    {{-- <h2 class="text-center pb-5 px-2 text-bold">@yield('page_name')</h2> --}}
    <div class="row">
        {{-- <div class="col-md-6">
            <img src="{{asset('images/banner.webp')}}" alt="" class="d-block w-100 banner">
        </div> --}}
        <div class="col-md-12">
            <div class="optimizeDiv">
                <h4 class="top-banner-title text-black">Dept. of ICE</h4>
                {{-- <h5 class="top-banner-title text-justify text-bold">Pabna University of Science and Technology</h5> --}}
            </div> 
            <div class="col-md-12 bannerUnderText">
                <a href="{{route('home')}}" class="text-center bannerUnderText ">Home</a> |
                <a href="{{route('notice.view')}}" class="text-center bannerUnderText">Notice</a>
                {{-- <a href="" class="text-center bannerUnderText">Information and Communication Engineering(ICE)</a><br> --}}
                {{-- <a target="__blank" href="https://pust.ac.bd/" class="text-center bannerUnderText">Pabna University of Science and Technology</a> --}}
            </div>
        </div>       
    </div>
</div>
<div class="mx-5 pb-3">
    <h4 class="text-center pb-3 text-bold">@yield('page_name')</h4>
    <div class="row ">
        {{-- <form class="exampleNotice pb-2" action="/action_page.php">
            <input type="text" placeholder="Search" name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form> --}}
        <div class="col-md-9">
            <table class="table table-striped">
                <tbody>
                    @foreach($allData as $key => $notice)
                        <tr>
                            <td>
                                <p class="fa fa-calendar"> {{$notice->time}}</p>
                                <p class="">{{$notice->des}}</p>    
                            </td>
                            <td><a class="btn btn-danger" href="{{route('notice.pdf.view', $notice->id)}}">View</a></td>
                            {{-- <td><a class="btn" href="{{route('notice.download', $notice->file)}}">Download</a></td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-3 usefulLinkColor">
            <table class="table">
                <h3 class="fa fa-paper-plane pl-5 pt-3"></h3>
                <br>
                <h5 class="p-3 useful text-bold">USEFUL LINKS</h5>
                {{-- <i class="fa fa-forward pr-1" aria-hidden="true"></i> --}}
                <a href="" class="fa fa-forward p-3"> Telephone and Email Index</a>
                <br>
                {{-- <i class="fa fa-forward p-3" aria-hidden="true"></i> --}}
                <a href="" class="fa fa-forward p-3"> PUST Forms</a>
                <br>
                {{-- <i class="fa fa-forward p-3" aria-hidden="true"></i> --}}
                <a href="" class="fa fa-forward p-3"> Events</a>
                <br>
                {{-- <i class="fa fa-forward p-3" aria-hidden="true"></i> --}}
                <a href="" class="fa fa-forward p-3"> Contact Us</a>
            </table>
        </div>
    </div>
</div>

