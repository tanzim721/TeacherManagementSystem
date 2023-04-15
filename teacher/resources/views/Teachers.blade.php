@extends('Layout.app')

@section('title', 'Teachers')

@section('content')
    @section('page_name', 'Teachers')
    {{-- @include('Component.HomeBanner') --}}
    {{-- @include('Component.HomeService') --}}
    @include('Teachers.view')
@endsection
