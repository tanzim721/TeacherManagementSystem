@extends('Layout.app')
@section('title', 'ICE Association, Notice')

@section('content')
    @section('page_name', 'Notice PDF')
    {{-- @include('Component.HomeBanner') --}}
    @include('Notice.viewpdf')

@endsection



