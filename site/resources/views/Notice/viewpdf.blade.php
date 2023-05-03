
<div class="container">
    <div class="row">
        <h4 class="text-center p-3 text-bold"><u>@yield('page_name')</u></h4>
        <div class="col-md-9">
            <p class="fa fa-calendar"> {{$allData->time}}</p>
            <p class="">{{$allData->des}}</p>  
            <div class="row pb-3">
                <iframe height="650" width="500" src="/assets/{{$allData->file}}" frameborder="0"></iframe>
            </div>
        </div>
        <div class="col-md-3 pt-4">
            <table class="table table-striped">
                <tbody>
                    <br>
                    @foreach($allData2 as $key => $notice)
                        <tr class="pt-5">
                            <td>
                                <p class="fa fa-calendar">{{$notice->time}}</p>
                                <p class="">{{$notice->des}}</p>
                            </td>
                            <td><a class="btn" href="{{route('notice.pdf.view', $notice->id)}}">View</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

