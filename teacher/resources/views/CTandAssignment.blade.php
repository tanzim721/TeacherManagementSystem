@extends('Layout.app')

@section('title', 'CT or Assignment Marks')

@section('content')
    @section('page_name', 'Marks')
    {{-- @include('Component.HomeBanner') --}}
    {{-- @include('Component.HomeService') --}}
    @include('CTandAssignment.view')
@endsection
