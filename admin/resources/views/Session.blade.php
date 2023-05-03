@extends('Layout.app')

@section('title', 'Session')

@section('content')
    @section('page_name', 'Session')
    {{-- @include('Component.HomeBanner') --}}
    {{-- @include('Component.HomeService') --}}
    @include('Session.view')
@endsection
