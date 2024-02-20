<!doctype html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>نظام البطاقات </title>
    @livewireStyles
    @powerGridStyles
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
      <link href="{{ asset('css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" />

      <link href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" />
      <link href="{{ asset('font-awesome-4.7.0/css/font-awesome.css') }}" rel="stylesheet" />
      <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet" />
      <link href="{{ asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
      <link href="{{ asset('css/buttons.dataTables.min.css') }}" rel="stylesheet" />
      <link href="{{ asset('css/select.dataTables.min.css') }}" rel="stylesheet" />
      <link href="{{ asset('coreui/css/coreui.min.css') }}" rel="stylesheet" />
      <link href="{{ asset('font-awesome-4.7.0/css/font-awesome.css') }}" rel="stylesheet" />
      <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" />
      <link href="{{ asset('css/dropzone.min.css') }}" rel="stylesheet" />
      <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
      <link href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet" />
     <link rel="stylesheet" href="{{ asset('css/bootstrap.min2.css') }}">
      <link href=" {{ asset('css/bootstrap-datetimepicker.min1.css') }}" rel="stylesheet">
      <link href="{{ asset('css/doc.css') }}" rel="stylesheet">
      <link href="{{ asset('css/vs.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('css/site.css') }}">
      <!-- Styles -->
      <link href="{{ asset('css/flatpickr.min.css') }}" rel="stylesheet">
      <link href="{{ asset('css/tailwind.min.css') }}" rel="stylesheet">

      {{--    <link href="https://unpkg.com/@tailwindcss/forms/dist/forms.min.css" rel="stylesheet">--}}
      <script src="{{ asset('js/alpinejs.cdn.min.js') }}" defer></script>
      <script src="{{ asset('js/alpinejs.cdn.min.js') }}" defer></script>
      <script src="{{ asset('js/flasher.min.js') }}" defer></script>
        <script src="{{ asset('js/cdn.min.js') }}" defer></script>
              <script src="{{ asset('jquery-3.6.0.min.js')}}" defer></script>


      {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" type="text/css"> --}}
      {{--    @vite('resources/js/app.js')--}}
  {{--    <style></style>--}}
      @yield('styles')
      <style>
       
    </style>
  <style type="text/css">


  .breadcrumb-item.active {
      color: #ffffff !important;
  }
  </style>
      @livewireStyles

      @livewireStyles
      @powerGridStyles
    @yield('style')
<style>

body{

    background: #f8f8f8;
}
            /*Code to change color of active link*/
            .navbar-nav > .active > a {
                color:#00a463 !important;
            }
        </style>
</head>

<body>
    @include('partials.header1')

    @includeWhen($breadcrumb ?? null, 'partials.breadcrumb')
    @include('sweetalert::alert')
    @yield('content')



    @livewireScripts
    @powerGridScripts

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

    <link href="{{ asset('css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" />

    <link href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('font-awesome-4.7.0/css/font-awesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/buttons.dataTables.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/select.dataTables.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('coreui/css/coreui.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('font-awesome-4.7.0/css/font-awesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/dropzone.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
    <link href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet" />
   <link rel="stylesheet" href="{{ asset('css/bootstrap.min2.css') }}">
    <link href=" {{ asset('css/bootstrap-datetimepicker.min1.css') }}" rel="stylesheet">
    <link href="{{ asset('css/doc.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vs.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/site.css') }}">
    <!-- Styles -->
    <link href="{{ asset('css/flatpickr.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tailwind.min.css') }}" rel="stylesheet">

    {{--    <link href="https://unpkg.com/@tailwindcss/forms/dist/forms.min.css" rel="stylesheet">--}}
    <script src="{{ asset('js/alpinejs.cdn.min.js') }}" defer></script>
    <script src="{{ asset('js/alpinejs.cdn.min.js') }}" defer></script>
    <script src="{{ asset('js/flasher.min.js') }}" defer></script>
      <script src="{{ asset('js/cdn.min.js') }}" defer></script>
            <script src="{{ asset('jquery-3.6.0.min.js')}}" defer></script>

            <script src="{{ asset('js/jquery-3.6.0.min.js')}}" ></script>
            <script src="{{ asset('js/bootstrap-hijri-datetimepicker.min.js')}}" ></script>
            <script src="{{ asset('js/bootstrap-doc.js')}}" ></script>
            <script src="{{ asset('js/highlight.pack.js')}}" ></script>
            <script src="{{ asset('js/site.js')}}" ></script>



<script src="{{ asset('bootstrap-4.6.2/dist/js/bootstrap.min.js')}}" ></script>
<script src="{{ asset('bootstrap-4.6.2/dist/umd/popper.min.js')}}" ></script>
<script src="{{ asset('js/bootstrap-hijri-datetimepicker.min.js')}}"></script>
<script src="{{ asset('coreui/js/coreui.min.js')}}"></script>
<script src="{{ asset('js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{ asset('js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('js/buttons.flash.min.js')}}"defer></script>
<script src="{{ asset('js/buttons.html5.min.js')}}" defer></script>
<script src="{{ asset('js/buttons.print.min.js')}}"defer></script>
<script src="{{ asset('js/buttons.colVis.min.js')}}"defer></script>
<script src="{{ asset('js/pdfmake.min.js')}}"></script>
<script src="{{ asset('js/vfs_fonts.js')}}"></script>
<script src="{{ asset('js/jszip.min.js')}}"></script>
<script src="{{ asset('js/dataTables.select.min.js') }}"></script>
<script src="{{ asset('js/ckeditor.js')}}"></script>
<script src="{{ asset('js/moment.min.js')}}"></script>
<script src="{{asset('js/bootstrap-datetimepicker.min.js')}}"></script>
<script src="{{ asset('js/select2.full.min.js')}}"></script>
<script src="{{ asset('js/dropzone.min.js')}}"></script>
<script src="{{ asset('js/Hijri.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/flatpickr.js')}}" defer></script>



<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>


<script>
    $(function() {
        let copyButtonTrans = '{{ trans('global.datatables.copy') }}'
        let csvButtonTrans = '{{ trans('global.datatables.csv') }}'
        let excelButtonTrans = '{{ trans('global.datatables.excel') }}'
        let pdfButtonTrans = '{{ trans('global.datatables.pdf') }}'
        let printButtonTrans = '{{ trans('global.datatables.print') }}'
        let colvisButtonTrans = '{{ trans('global.datatables.colvis') }}'

        let languages = {
            'en': 'https://cdn.datatables.net/plug-ins/1.10.19/i18n/English.json'
        };

        $.extend(true, $.fn.dataTable.Buttons.defaults.dom.button, { className: 'btn' })
        $.extend(true, $.fn.dataTable.defaults, {
            language: {
                url: languages['{{ app()->getLocale() }}']
            },
            columnDefs: [{
                orderable: false,
                className: 'select-checkbox',
                targets: 0
            }, {
                orderable: false,
                searchable: false,
                targets: -1
            }],
            select: {
                style:    'multi+shift',
                selector: 'td:first-child'
            },
            order: [],
            scrollX: true,
            pageLength: 100,
            dom: 'lBfrtip<"actions">',
            buttons: [
                'copy', 'excel', 'pdf'
            ]
        });

        $.fn.dataTable.ext.classes.sPageButton = '';

    });


</script>


@livewire('livewire-ui-modal')

@livewireScripts
@livewireScripts
@powerGridScripts

<script>
    window.addEventListener('showAlert', event => {
        alert(event.detail.message);
    })
</script>
<script src="{{asset('build/datepicker-hijri.js')}}"></script>
@yield('scripts')

    {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" type="text/css"> --}}
    {{--    @vite('resources/js/app.js')--}}
{{--    <style></style>--}}
    @yield('styles')
<style>
    @font-face {
        font-family: OptimusPrinceps;
        src: url('{{ public_path('fonts/MarkaziText-VariableFont_wght.tff') }}');
    }
    *{
    font-family: ' OptimusPrinceps';}
    </style>
        @livewireStyles

        @livewireStyles
        @powerGridStyles




    <script>
          $(document).ready(function () {
              $("ul.navbar-nav > li").click(function (e) {
               $("ul.navbar-nav > li").removeClass("active");
               $(this).addClass("active");
                });
            });
        </script>
</body>

</html>
