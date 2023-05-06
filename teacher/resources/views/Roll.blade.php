@extends('Layout.app')

@section('title', 'Roll')

@section('content')
    @section('page_name', 'Roll')
    {{-- @include('Component.HomeBanner') --}}
    {{-- @include('Component.HomeService') --}}
    @include('Roll.view')
@endsection
