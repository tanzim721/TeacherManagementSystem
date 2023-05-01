<div class="container ">
    <h2 class="text-center p-3 text-bold">@yield('page_name')</h2>
    <div class="row ">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>View</th>
                    <th>Download</th>
                </tr>
            </thead>
            <tbody>
                @foreach($allData as $key => $notice)
                    <tr>
                        <td>{{$notice->name}}</td>
                        <td>{{$notice->des}}</td>
                        <td><a href="">View</a></td>
                        <td><a href="{{asset('notice.download', $notice->file)}}">Download</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
</div>

