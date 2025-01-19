@extends('layouts.main')

@section('title', $title)

@section('data')
    <div>
        @include('templates.homepage.hero-section')
        @include('templates.homepage.about')
        @include('templates.homepage.rating')
        @include('templates.homepage.why-choose-us')
        @include('templates.homepage.how-to-order')
        @include('templates.homepage.service')
    </div>
    
    <script src="{{ asset('js/script.js') }}"></script>
@endsection
