@extends('layouts.app')

@section('title')
@endsection

@section('content')
    @include('partials.home.header')
    @include('partials.contact.section1')
    @include('partials.contact.section2')
    @include('partials.contact.section3')
    @include('partials.contact.section4')
    @include('partials.home.footer')
@endsection
