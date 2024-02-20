<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    {{-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}
    {{--    <link href="{{asset('bootstrap-4.6.2/dist/css/bootstrap.min.css')}}" rel="stylesheet" />--}}


    <link rel="stylesheet" href="{{ asset('css/site.css') }}">

  <link rel="stylesheet" href="{{asset('css/bootstrap5_2.css')}}">
    {{-- selec2 cdn --}}

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
    <link href=" {{ asset('css/bootstrap-datetimepicker.min1.css') }}" rel="stylesheet">
    <link href="{{ asset('css/doc.css') }}" rel="stylesheet">
    <link href="{{ asset('css/vs.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/site.css') }}">
    <!-- Styles -->

    <link href="{{ asset('css/flatpickr.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tailwind.min.css') }}" rel="stylesheet">

    {{--    <link href="https://unpkg.com/@tailwindcss/forms/dist/forms.min.css" rel="stylesheet">--}}
    {{-- <script src="{{ asset('js/flasher.min.js') }}" defer></script> --}}
      <script src="{{ asset('js/cdn.min.js') }}" defer></script>
            <script src="{{ asset('jquery-3.6.0.min.js')}}" defer></script>

    {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" type="text/css"> --}}
    {{--    @vite('resources/js/app.js')--}}
{{--    <style></style>--}}
<style>
    span.select2.select2-container.select2-container--classic{
        width: 100% !important;
    }
</style>
    @yield('styles')
<style>
    @font-face {
    font-family: 'OptimusPrinceps';
    src: url('{{asset('/fonts/NotoNaskhArabic-VariableFont_wght.ttf')}}');
}
    *{

font-family: 'OptimusPrinceps';

    }
</style>
<style type="text/css">

@font-face {

    /* font-family: 'alfont';
    font-style: normal;
    font-weight: 400;
    src: asset('/public/fonts/alfont.tff'); */
}

.breadcrumb-item.active {
    color: #ffffff !important;
}

    </style>


<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="{{ asset('js/alpinejs.cdn.min.js') }}" defer></script>
    <script src="{{ asset('js/moment.js') }}" defer></script>

 <style>
        #loader {
            border: 8px solid #f3f3f3;
            border-radius: 50%;
            border-top: 8px solid #615375;
            width: 70px;
            height: 70px;
            animation: spin 1s linear infinite;
        }

        .center {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
        }

        @keyframes spin {
            100% {
                transform: rotate(360deg);
            }
        }

        .error {
  color: red;
  margin-left: 5px;
}

label.error {
  display: inline;
}
    </style>

</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed pace-done" style="visibility: hidden;background:#835ea6">
    <div id="loader" class="center"></div>

 {{-- @include('sweetalert::alert') --}}

{{-- @include('snippets.toastr')
    <script>
    window.addEventListener('load', function() {
        @if (Session::has('toastr-info'))
            @foreach (Session::pull('toastr-info') as $message)
              toastr.info('{{ $message }}');
            @endforeach
        @endif

        @if (Session::has('toastr-warning'))
            @foreach (Session::pull('toastr-warning') as $message)
              toastr.info('{{ $message }}');
            @endforeach
        @endif

        @if (Session::has('toastr-success'))
            @foreach (Session::pull('toastr-success') as $message)
              toastr.info('{{ $message }}');
            @endforeach
        @endif

        @if (Session::has('toastr-error'))
            @foreach (Session::pull('toastr-error') as $message)
              toastr.info('{{ $message }}');
            @endforeach
        @endif
    });
</script> --}}

  <script src="{{ asset('js/jquery.min111.js') }}"></script>

<script src="{{ asset('bootstrap.bundle.min.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<header class="app-header navbar">
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
        <span class="navbar-brand-full"><b>نظام التسعيرات </b></span>
        <span class="navbar-brand-minimized">{{ trans('panel.site_title') }}</span>
    </a>
    <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <ul class="nav navbar-nav ml-auto">
      <h4>
        &#128075;
        مرحبًا:
        {{ auth()->user()->name }}

      </h4>



 </div>

      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
        </a>
    </div>
    </ul>
</header>
<div class="app-body">
    @include('partials.menu')
    <main class="main">
        <div style="padding-top: 20px" class="container-fluid">
            @if(session('message'))
                <div class="row mb-2">
                    <div class="col-lg-12">
                        <div class="alert alert-success" role="alert">{{ session('message') }}</div>
                    </div>
                </div>
            @endif
            @if($errors->count() > 0)
                <div class="alert alert-danger">
                    <ul class="list-unstyled">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @yield('content')

        </div>


    </main>
    <form id="logoutform" action="#" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>

</div>


<script>
  $(document).ready(function() {
      // Select2 Multiple
      $('.select2').select2({
      });

  });

</script>
            <script src="{{ asset('js/jquery-3.6.0.min.js')}}" ></script>
            <script src="{{ asset('js/bootstrap-hijri-datetimepicker.min.js')}}" ></script>
            <script src="{{ asset('js/bootstrap-doc.js')}}" ></script>
            <script src="{{ asset('js/highlight.pack.js')}}" ></script>
            <script src="{{ asset('js/site.js')}}" ></script>

 <script>
        document.onreadystatechange = function () {
            if (document.readyState !== "complete") {
                document.querySelector(
                    "body").style.visibility = "hidden";
                document.querySelector(
                    "#loader").style.visibility = "visible";
            } else {
                document.querySelector(
                    "body").style.visibility = "visible";
                     document.querySelector(
                    "body").style.background = "#ededed";
                document.querySelector(
                    "body").style.visibility = "visible";
                       document.querySelector(
                    "#loader").style.visibility = "hidden";
            }
        };
    </script>

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
<script src="{{ asset('js/sweetalert2.min.js')}}" defer></script>


<script src="{{ asset('js/select2.min.js') }}"></script>





<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>




@livewire('livewire-ui-modal')



<script src="{{asset('build/datepicker-hijri.js')}}"></script>
<script src="{{ asset('themes/js/sweetalert2.min.js') }}"></script>

@yield('scripts')
@powerGridScripts

@livewireScripts


</body>

</html>
