<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <script src="{{ asset('js/tailwindcss.js') }}"></script>
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" type="text/css">
    @livewireStyles
    <style>
      @font-face {
        font-family: 'OptimusPrinceps';
    src: url('{{asset('/fonts/NotoNaskhArabic-VariableFont_wght.ttf')}}');
  }
      *{

        font-family: 'OptimusPrinceps' !important;

      }
  </style>
</head>
<body class="bg-gray-50">
  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 pt-8">
      {{ $slot }}
  </div>
  <script src="{{ asset('js/jquery.3.6.0.min.js') }}"></script>
  <script src="{{ asset('js/select2.full.min.js') }}"></script>
{{--  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>--}}
  @livewireScripts
  <!-- Way 1 -->
{{--  <x:pharaonic-select2::scripts />--}}
  <!-- Way 2 : Vendor Publishing REQURIED -->
{{--  <script src="{{ asset('vendor/pharaonic/pharaonic.select2.min.js') }}"></script>--}}
</body>
</html>
