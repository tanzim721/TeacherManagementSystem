<div class="container">
    <h2 class="text-center p-3 text-bold">@yield('page_name')</h2>
    <div class="row ">
        @foreach($dataGallery as $key => $gallery)
        <div class="col-md-2 width-100% p-2">
            <div class="card" style="width: 11rem; height:320px" >
                <img style="width: 100%; height:200px" class="card-img-top" src="{{$gallery->gallery_img}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$gallery->gallery_name}}</h5>
                    <br>
                    {{-- <p class="card-text">{{$gallery->gallery_des}}</p> --}}
                    <time class="entry-data published" datetime="">{{$gallery->created_at}}</time>
                    <a href="#" class="btn btn-primary">Go Details</a>
                </div>      
            </div>
        </div>
        @endforeach
    </div>
</div>

