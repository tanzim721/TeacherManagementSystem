@extends('Layout.app')
@section('title', 'ICE Association, Teachers')

@section('content')
    @section('page_name', 'Teachers')
    {{-- @include('Component.HomeBanner') --}}
    @include('Teachers.view')

@endsection



