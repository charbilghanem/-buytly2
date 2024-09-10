@extends('layouts.app')

@section('title')
@endsection

@section('content')
    @include('partials.home.header')
    @include('partials.apartments.section1')
    @include('partials.apartments.section2')
    @include('partials.apartments.section3')
    @include('partials.apartments.section4')
    @include('partials.home.footer')
@endsection
