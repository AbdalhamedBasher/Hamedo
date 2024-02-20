<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    {{-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}
    {{--    <link href="{{asset('bootstrap-4.6.2/dist/css/bootstrap.min.css')}}" rel="stylesheet" />--}}


  <link rel="stylesheet" href="{{asset('css/select2.min1.css')}}">

  <link rel="stylesheet" href="{{asset('css/bootstrap5_2.css')}}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    {{-- selec2 cdn --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=El+Messiri&family=Lateef:wght@500&display=swap" rel="stylesheet">
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
        <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

    <link href="{{ asset('css/flatpickr.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tailwind.min.css') }}" rel="stylesheet">

    {{--    <link href="https://unpkg.com/@tailwindcss/forms/dist/forms.min.css" rel="stylesheet">--}}
    <script src="{{ asset('js/flasher.min.js') }}" defer></script>
      <script src="{{ asset('js/cdn.min.js') }}" defer></script>
            <script src="{{ asset('jquery-3.6.0.min.js')}}" defer></script>

    {{-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" type="text/css"> --}}
    {{--    @vite('resources/js/app.js')--}}
{{--    <style></style>--}}
    @yield('styles')
<style>
    @font-face {
    font-family: 'OptimusPrinceps';
    src: url('{{asset('/fonts/almarai/Almarai-Regular.ttf')}}');
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



    <script src="{{ asset('js/alpinejs.cdn.min.js') }}" defer></script>
    <link href="{{ asset('themes/css/sweetalert2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sweetalert2.min.css') }}" rel="stylesheet">

    @livewireStyles
    @powerGridStyles
</head>
<div id="loader" class="center"></div>

<body class="app header-fixed sidebar-fixed aside-menu-fixed pace-done">

@include('sweetalert::alert')

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

	<link rel="stylesheet" type="text/css"
     href="{{ asset('js/toastr.min.css') }}">

    <script src="{{ asset('js/toastr.min1.js') }}"></script>
        <script>

//   @if(Session::has('message'))
//   toastr.options =
//   {
//   	"closeButton" : true,
//   	"progressBar" : true
//   }
//   		toastr.success("{{ session('message') }}");
//   @endif

//   @if(Session::has('error'))
//   toastr.options =
//   {
//   	"closeButton" : true,
//   	"progressBar" : true
//   }
//   		toastr.error("{{ session('error') }}");
//   @endif

//   @if(Session::has('info'))
//   toastr.options =
//   {
//   	"closeButton" : true,
//   	"progressBar" : true
//   }
//   		toastr.info("{{ session('info') }}");
//   @endif

//   @if(Session::has('warning'))
//   toastr.options =
//   {
//   	"closeButton" : true,
//   	"progressBar" : true
//   }
//   		toastr.warning("{{ session('warning') }}");
//   @endif
</script>

<header class="app-header navbar">
    <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">
        <span class="navbar-brand-full"><b>إدارة التدريب</b></span>
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
@php

            $notifications =\App\Models\Notification::where(['type'=>'App\Notifications\SchedulesNotification','read_at'=>null])->get();
            $rejectNotification =\App\Models\Notification::where(['type'=>'App\Notifications\RejectNotification','read_at'=>null])->get();
            $count =0;


@endphp




   <div class="nav-item dropdown">

        <a class="nav-link" data-toggle="dropdown" href="#">

@foreach($notifications as $notification)


@if ($notification->type ==='App\Notifications\SchedulesNotification')
  @if ( $notification->data['user_id'] === auth()->user()->id and  $notification->data['type']==='certified' )
          <span class="badge badge-warning navbar-badge">1 </span>
          @endif
     @if($notification->data['user_id'] == auth()->user()->id and  $notification->data['type']=='Approval')
          <span class="badge badge-warning navbar-badge">1 </span>
          @endif

          @endif
@endforeach          <i class="fa fas fa-bell fa-1x pb-1"></i>
        </a>


        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">



          <div class="dropdown-divider"></div>
             @forelse($notifications as $notification)

          <input type="hidden" name="" value="{{$count +=2}}" id="">


@if ($notification->type ==='App\Notifications\SchedulesNotification')
      @if ( $notification->data['user_id'] === auth()->user()->id and  $notification->data['type']==='certified' )

            <a href="{{route('admin.lessons_schedules.certified',['lessons_schedule'=>$notification->data['lessons_schedule_id'],'unit_id'=>$notification->data['unit_id'],'num'=>$notification->num3])}}" class="dropdown-item">
تصديق جدول
            <span class="float-right text-muted text-sm"> [{{  date('j \\ F Y, g:i A', strtotime($notification->created_at))}}]</span>
@else

            @endif
          </a>
          @if($notification->data['user_id'] == auth()->user()->id and  $notification->data['type']=='Approval')
                    <input type="hidden" name="" value="{{$count +=1}}" id="">

          <a href="{{route('admin.lessons_schedules.approval',['lessons_schedule'=>$notification->data['lessons_schedule_id'],'unit_id'=>$notification->data['unit_id']])}}" class="dropdown-item">

            اعتماد جدول
{{$count}}
          <span class="float-right text-muted text-sm"> [{{  date('j \\ F Y, g:i A', strtotime($notification->created_at))}}]</span>

@else

          @endif
        </a>


@endif

  @empty

@endforelse

    @forelse ($rejectNotification as $reject)

@if ($reject->data['user_id'] === auth()->user()->id and  $reject->data['type']==='certified' )

            <a href="{{route('admin.lessons_schedules.checker1',['lessons_schedule'=>$reject->data['lessons_schedule_id'],'num'=>$reject->num3,'unit_id'=>$reject->data['unit_id']])}}" class="dropdown-item">
    تم رفض
            <span class="float-right text-muted text-sm"> [{{  date('j \\ F Y, g:i A', strtotime($reject->created_at))}}]</span>
@else


          </a>
            @endif
          @if($reject->data['user_id'] == auth()->user()->id and  $reject->data['type']=='approval')
                    <input type="hidden" name="" value="{{$count +=1}}" id="">

          <a href="{{route('admin.lessons_schedules.certfied1',['lessons_schedule'=>$reject->data['lessons_schedule_id'],'num'=>$reject->num3,'unit_id'=>$reject->data['unit_id']])}}" class="dropdown-item">

             تم رفض اعتماد الجدول
{{$count}}
          <span class="float-right text-muted text-sm"> [{{  date('j \\ F Y, g:i A', strtotime($reject->created_at))}}]</span>

@else

          @endif
        </a>
    @empty

    @endforelse

          <div class="dropdown-divider"></div>


          {{-- <a href="{{route("admin.all_notification")}}" id="mark-all class="dropdown-item dropdown-footer">See All Notifications</a> --}}
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
    <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>

</div>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
  $(document).ready(function() {
      // Select2 Multiple
      $('.select2-multiple').select2({
          placeholder: "Select",
          allowClear: true
      });

  });

</script>
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
<script src="{{ asset('js/toastr.min.js')}}" defer></script>
<script src="{{ asset('js/sweetalert2.min.js')}}" defer></script>

<script src="{{ asset('/vendor/flasher/flasher-toastr.min.js')}}" ></script>
<script src="{{ asset('/vendor/flasher/jquery.min.js')}}" ></script>






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
<script>
    document.onreadystatechange = function () {
        if (document.readyState !== "complete") {
            document.querySelector(
                "body").style.visibility = "hidden";
            document.querySelector(
                "#loader").style.visibility = "visible";
        } else {
            document.querySelector(
                "#loader").style.display = "none";
            document.querySelector(
                "body").style.visibility = "visible";
        }
    };
</script>

@livewire('livewire-ui-modal')



<script>
    window.addEventListener('showAlert', event => {
        alert(event.detail.message);
    })
</script>
<script src="{{asset('build/datepicker-hijri.js')}}"></script>
<script src="{{ asset('themes/js/sweetalert2.min.js') }}"></script>

@yield('scripts')
@powerGridScripts

@livewireScripts
<script src="{{ asset('js/select2.min.js') }}"></script>

<script>
$(document).ready(function(){
    $('.select2').select2({

    });
});
</script>
</body>

</html>
