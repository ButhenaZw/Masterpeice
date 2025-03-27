<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'DriveX')</title>
    
   @include('home.layout.top')
    @yield('head')
</head>
<body>

    {{-- preloader start --}}
    {{-- @include('Home.layout.preloader') --}}
    {{-- preloader end --}}


    {{-- Navbar start --}}
    @include('Home.layout.navbar')
    {{-- Navbar end --}}

    {{-- Hero section start --}}
    @include('Home.layout.sections')
    {{-- Hero section end --}}

        {{-- footer section start --}}
        @include('Home.layout.footer')
        {{-- footer section end --}}


    {{-- Bottom start --}}
    @include('Home.layout.bottom')
    {{-- Bottom end --}}

</body>
</html>