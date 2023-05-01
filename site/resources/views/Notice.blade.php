@extends('Layout.app')
@section('title', 'ICE Association, Notice')

@section('content')
    @section('page_name', 'Notice')
    {{-- @include('Component.HomeBanner') --}}
    @include('Notice.view')

@endsection



