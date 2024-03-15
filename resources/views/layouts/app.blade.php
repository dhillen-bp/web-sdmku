<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="font-poppins">

<head>
    @include('partials.head')
</head>

<body>
    @include('partials.nav')
    @yield('body')
    @include('partials.footer')

    @yield('before-script')
    @include('partials.script')
    @yield('after-script')

    <script src="https://unpkg.com/taos@1.0.5/dist/taos.js"></script>
</body>

</html>
