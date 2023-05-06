@extends('Layout.app')

@section('title', 'Course Code')

@section('content')
    @section('page_name', 'Course Code')
    {{-- @include('Component.HomeBanner') --}}
    {{-- @include('Component.HomeService') --}}
    @include('CourseCode.view')
@endsection
