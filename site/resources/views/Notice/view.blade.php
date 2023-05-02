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
                <a href="{{url('/')}}" class="text-center bannerUnderText ">Home</a> |
                <a href="" class="text-center bannerUnderText">Notice</a>
                {{-- <a href="" class="text-center bannerUnderText">Information and Communication Engineering(ICE)</a><br> --}}
                {{-- <a target="__blank" href="https://pust.ac.bd/" class="text-center bannerUnderText">Pabna University of Science and Technology</a> --}}
            </div>
        </div>       
    </div>
</div>
<div class="container ">
    <h2 class="text-center p-3 text-bold">@yield('page_name')</h2>
    <div class="row ">
        {{-- <form class="exampleNotice pb-2" action="/action_page.php">
            <input type="text" placeholder="Search" name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form> --}}
        <table class="table table-striped">
            <tbody>
                @foreach($allData as $key => $notice)
                    <tr>
                        <td>
                            <p class="fa fa-calendar"> {{$notice->time}}</p>
                            <p class="">{{$notice->des}}</p>    
                        </td>
                        <td><a class="btn" href="{{route('notice.pdf.view', $notice->id)}}">View</a></td>
                        {{-- <td><a class="btn" href="{{route('notice.download', $notice->file)}}">Download</a></td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
</div>

