@extends('Layout.app')

@section('title', 'Notice')

@section('content')
    @section('page_name', 'Notice')
    {{-- @include('Component.HomeBanner') --}}
    {{-- @include('Component.HomeService') --}}
    @include('Notice.view')
@endsection
