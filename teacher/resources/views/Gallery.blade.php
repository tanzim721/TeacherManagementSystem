@extends('Layout.app')

@section('title', 'Gallery')

@section('content')
    @section('page_name', 'Gallery')
    {{-- @include('Component.HomeBanner') --}}
    {{-- @include('Component.HomeService') --}}
    @include('Gallery.view')
@endsection
