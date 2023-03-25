@extends('Layout.app')
@section('title', 'ICE Association, Services')

@section('content')
    @section('page_name', 'Services')
    {{-- @include('Component.HomeBanner') --}}
    @include('Service.view')

@endsection



