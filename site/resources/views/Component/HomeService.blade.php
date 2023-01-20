<div class="container">
    <div class="row ">
        @foreach($ServicesData as $key => $services)
        <div class="col-md-3 width-100% p-2">
            <div class="card" style="width: 16rem;" >
                <img style="width: 100%; height:250px" class="card-img-top" src="{{$services->service_img}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{$services->service_name}}</h5>
                  <p class="card-text">{{$services->service_des}}</p>
                  <a href="#" class="btn btn-primary">Go Details</a>
                </div>      
            </div>
        </div>
        @endforeach
    </div>
</div>