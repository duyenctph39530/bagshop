@include('layouts.partials.head')

<body>
    @include('layouts.partials.header')
    @yield('banner')
    @yield('content')
    @yield('sale')

    @include('layouts.partials.footer')


</body>
@include('layouts.partials.script')
</html>