@extends('Layout.app')

@section('title', 'Tasks Schedule')

@section('content')
    @section('page_name', 'Tasks Schedule')
    {{-- @include('Component.HomeBanner') --}}
    {{-- @include('Component.HomeService') --}}
    @include('Schedule.view')
@endsection
