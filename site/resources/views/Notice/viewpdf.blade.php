
<div class="container ">
    <h2 class="text-center p-3 text-bold">@yield('page_name')</h2>
    <p class="fa fa-calendar"> {{$allData->time}}</p>
    <p class="">{{$allData->des}}</p>  
    <div class="row pb-3">
        <iframe height="650" width="500" src="/assets/{{$allData->file}}" frameborder="0"></iframe>
    </div>
    
</div>

