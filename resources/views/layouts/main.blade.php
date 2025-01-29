@include('layouts.header')
<body class="bg-gray-50">
    @include('layouts.nav')
    @yield('data')
    @include('layouts.footer')
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
