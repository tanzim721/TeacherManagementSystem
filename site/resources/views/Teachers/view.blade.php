<div class="container">
    <h2 class="text-center p-3 text-bold">@yield('page_name')</h2>
    <div class="row ">
        @foreach($editData as $key => $teachers)
        <div class="col-md-3 width-100% p-2">
            <div class="card" style="width: 14rem; height:370px p-2" >
                <img style="width: 100%; height:200px" class="card-img-top" src="{{$teachers->image}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-bold">{{$teachers->name}}</h5>
                    <p class="card-text fa fa-briefcase pt-2" aria-hidden="true"> {{$teachers->designation}}</p>
                    <p class="card-text fa fa-phone-square"> {{$teachers->phone}}</p>
                    <p class="card-text fa fa-envelope"> {{$teachers->email}}</p>
                    <a href="#" class="btn btn-primary">Go Details</a>
                </div>      
            </div>
        </div>
        @endforeach
    </div>
</div>

