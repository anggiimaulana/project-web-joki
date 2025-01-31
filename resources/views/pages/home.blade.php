@extends('layouts.main')

@section('title', $title)

@section('data')
    <div>
        @include('templates.hero-section')
        @include('templates.about')
        @include('templates.rating')
        @include('templates.why-choose-us')
        @include('templates.how-to-order')
        @include('templates.service')
        @include('templates.testimonial')
        @include('templates.blog_home')
        @include('templates.faq')
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
@endsection
