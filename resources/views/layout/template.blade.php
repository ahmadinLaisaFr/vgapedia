<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ isset($title) ? $title : 'home' }}</title>
    <link rel="stylesheet" href="{{ asset('build/assets/app.ab30ecac') }}">{{-- build from tailwind --}}
    <link rel="stylesheet" href="{{ asset('plugin/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('plugin/fontawesome-free-6.2.0-web/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugin/fontawesome-free-6.2.0-web/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugin/swiper/swiper-bundle.min.css') }}">
    @vite("resources/css/app.css")
</head>
<body>
    {{-- navbar --}}
    <header>
        @include('layout.nav')
    </header>
    {{-- end navbar --}}
    {{-- content --}}
    <div class="mx-auto">
        @yield('content')
    </div>
    {{-- end content --}}
    {{-- info --}}
    <div>
        @include('layout.info')
    </div>
    {{-- end info --}}
    {{-- footer --}}
    <div>
        @include('layout.footer')
    </div>
    {{-- end footer --}}
    
    <script src="{{ asset('public/build/assets/app.334e7359.js ') }}"></script> {{-- build from tailwind --}}
    <script src="{{ asset('plugin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('plugin/fontawesome-free-6.2.0-web/js/all.min.js') }}"></script>
    <script src="{{ asset('plugin/js/script.js') }}"></script>
    <script src="{{ asset('plugin/swiper/swiper-bundle.min.js') }}"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
            }
        });
    </script>
</body>
</html>