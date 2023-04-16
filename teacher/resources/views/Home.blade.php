@extends('Layout.app')

@section('title', 'HOME')

@section('content')
    @section('page_name', 'Home')
    {{-- @include('Component.HomeBanner') --}}
    {{-- @include('Component.HomeService') --}}
    @include('Home.view')
@endsection
