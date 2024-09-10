@extends('layouts.app')

@section('title')
@endsection

@section('content')
    @include('partials.home.header')
    @include('partials.lifestyle.section1')
    @include('partials.lifestyle.section2')
    @include('partials.lifestyle.section3')
    @include('partials.home.footer')
@endsection
