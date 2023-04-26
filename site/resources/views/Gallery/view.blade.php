<div class="container ">
    <h2 class="text-center p-3 text-bold">@yield('page_name')</h2>
    <div class="row ">
        @foreach($allData as $key => $gallery)
        <div class="col-md-3 width-100% p-2">
            <div class="card" style="width: 15rem; height:365px p-2" >
                <img style="width: 100%; height:200px" class="card-img-top" src="{{$gallery->gallery_image}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-bold text-danger">{{$gallery->gallery_name}}</h5><br>
                    <p class="card-text fa fa-phone-square"> {{$gallery->gallery_des}}</p><br>
                    <a href="#" class="btn btn-info ml-4">Go Details</a>
                </div>      
            </div>
        </div>
        @endforeach
    </div>
</div>

