<!doctype html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>نظام البطاقات </title>
{{--    <link rel="preconnect" href="https://fonts.googleapis.com">--}}
{{--    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>--}}
{{--    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300&display=swap" rel="stylesheet">--}}

{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.2/tailwind.min.css" integrity="sha512-l7qZAq1JcXdHei6h2z8h8sMe3NbMrmowhOl+QkP3UhifPpCW2MC4M0i26Y8wYpbz1xD9t61MLT9L1N773dzlOA==" crossorigin="anonymous" />--}}
    <link href="{{ asset('css/tailwind.min.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <script src="{{ asset('js/alpinejs.cdn.min.js') }}" defer></script>
    <script src="{{ asset('js/alpinejs.cdn.min.js') }}" defer></script>
    <script src="{{ asset('js/flasher.min.js') }}" defer></script>
      <script src="{{ asset('js/cdn.min.js') }}" defer></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Almarai&family=Noto+Naskh+Arabic:wght@700&display=swap" rel="stylesheet">
{{--    <link rel="preconnect" href="https://fonts.googleapis.com">--}}
{{--    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>--}}
{{--    <link href="https://fonts.googleapis.com/css2?family=Noto+Naskh+Arabic:wght@700&display=swap" rel="stylesheet">--}}
@livewireStyles
@powerGridStyles
<style>
    @font-face {
        font-family: 'OptimusPrinceps';
    src: url('{{asset('/fonts/NotoNaskhArabic-VariableFont_wght.ttf')}}');
}
    *{

        font-family: 'OptimusPrinceps' !important;

    }
</style>
<style>

body{
    background: #f8f8f8;
/* font-family: 'Noto Naskh Arabic', serif;} */
            /*Code to change color of active link*/
            .navbar-nav > .active > a {
                color:#00a463 !important;
            }
        </style>
</head>

<body>
    @include('partials.header')

    @includeWhen($breadcrumb ?? null, 'partials.breadcrumb')

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
    <script src="{{ asset('js/custom.js') }}"></script>
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
