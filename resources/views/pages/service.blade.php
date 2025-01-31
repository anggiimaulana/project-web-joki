@extends('layouts.main')

@section('title', $title)

@section('data')
    <div class="pt-16 md:pt-20">
        @include('templates.service')
    </div>
    <script src="{{ asset('js/service.js') }}"></script>

@endsection
