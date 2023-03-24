<div class="container">
    <h2 class="text-center p-3 text-bold">@yield('page_name')</h2>
    <div class="row ">
        {{-- @foreach($ServicesData as $key => $services) --}}
        <div class="col-md-3 width-100% p-2">
            <div class="card" style="width: 16rem;" >
                <img style="width: 100%; height:250px" class="card-img-top" src="" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">name</h5>
                    <p class="card-text">Desc</p>
                    <br>
                    {{-- <time class="entry-data published" datetime=""><p>{{  now()->toDateTimeString() }}</p></time> --}}
                    <a href="#" class="btn btn-primary">Go Details</a>
                </div>      
            </div> 
        </div> 
        {{-- @endforeach --}}
    </div>
</div>

