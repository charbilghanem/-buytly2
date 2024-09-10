@extends('layouts.app')

@section('title')
@endsection

@section('content')
    @include('partials.home.header')
    @include('partials.gallery.section1')
    @include('partials.gallery.section2')
    @include('partials.gallery.section3')
    @include('partials.home.footer')
@endsection
