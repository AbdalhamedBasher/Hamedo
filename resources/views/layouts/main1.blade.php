<!doctype html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>نظام البطاقات </title>
    
    <link rel="stylesheet" href="{{asset('css/tailwind.min.css')}}" >
    {{-- <link rel="icon" href="{{ asset('img/favicon.png') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <script src="{{ asset('js/alpinejs.cdn.min.js') }}" defer></script>
    <script src="{{ asset('js/alpinejs.cdn.min.js') }}" defer></script>
    <script src="{{ asset('js/flasher.min.js') }}" defer></script>
      <script src="{{ asset('js/cdn.min.js') }}" defer></script>

    @yield('style')
    <style>
        @font-face {
            font-family: 'OptimusPrinceps';
        src: url('{{asset('/fonts/almarai/Almarai-Regular.ttf')}}');
    }
        *{

            font-family: 'OptimusPrinceps' !important;

        }
    </style>
<style>

body{

    background: #f8f8f8;
}
            /*Code to change color of active link*/
            .navbar-nav > .active > a {
                color:#00a463 !important;
            }
        </style>
        @livewireStyles
        @powerGridStyles
</head>

<body>
    @include('partials.header')

    @includeWhen($breadcrumb ?? null, 'partials.breadcrumb')
    @include('sweetalert::alert')
    @yield('content')

    @include('partials.footer')


    <script src="{{ asset('js/jquery-1.12.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('js/swiper.min.js') }}"></script>
    <script src="{{ asset('js/masonry.pkgd.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script>
          $(document).ready(function () {
              $("ul.navbar-nav > li").click(function (e) {
               $("ul.navbar-nav > li").removeClass("active");
               $(this).addClass("active");
                });
            });
        </script>

    @livewireScripts
    @powerGridScripts
</body>

</html>
