@extends('Layout.App')
@section('title', 'SERVICES')

@section('content')
  @section('page_name', 'Services')
  {{-- @include('Component.HomeBanner') --}}
  {{-- @include('Component.HomeService') --}}
  @include('Services.view')
@endsection

{{-- @section('script')
    
    <script type="text/javascript">
      getServicesData();
    </script>

@endsection --}}



<!-- Modal -->
{{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Do you want to Delete?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-sm btn-danger">Yes</button>
      </div>
    </div>
  </div>
</div> --}}




