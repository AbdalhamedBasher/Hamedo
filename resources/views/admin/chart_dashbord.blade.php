@extends('layouts.admin')
@section('content')
@php

@endphp
<nav aria-label="breadcrumb" dir="rtl">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('admin') }}">
        <i class="fa fas fa-home"></i>
        الرئيسية
      </a></li>
    <li class="breadcrumb-item active" aria-current="page">
      <i class="fa fas fa-check-square"></i>
      التقييم
    </li>
  </ol>
</nav>
<div class="container-fluid mb-1 shadow-sm">
  <h1> رسوم وأعمدة بيانية توضح تقييمات الطلاب والمعلمين لنظام التعليم الإلكتروني للعام للوحدة </h1>





  <h5 class="text-center  fw-bold m-2">

    {{auth()->user()->roles[0]->id==1 ? "" :[auth()->user()->unit->name]}}
  </h5>







</div>
<div class="container-fluid mb-1 shadow-sm mt-2 p-3">


  <div class="col-8">

    <select class="form-select m-3" onchange="spaces_details(this.value)">
      @foreach (\App\Models\trainingplanyear::get() as $item)
      {{$item->title}}
      <option data-tokens={{$item->id}}> {{$item->name}}</option>
      @endforeach
    </select>
  </div>
  <div class="col-10">
    <iframe src="{{route('admin.evaluationchart.get',\App\Models\trainingplanyear::orderby('id', 'desc')->first()->id)}}" frameborder="0" class="w-100" id="#masteriframe"></iframe>
  </div>
</div>
{{-- @dd($item_sum,$bar) --}}

@endsection
@section('scripts')
@parent
<script>
  $(function () {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
            @can('course_delete')
            let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
            let deleteButton = {
                text: deleteButtonTrans,
                url: "{{ route('admin.courses.massDestroy') }}",
                className: 'btn-danger',
                action: function (e, dt, node, config) {
                    var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
                        return $(entry).data('entry-id')
                    });

                    if (ids.length === 0) {
                        alert('{{ trans('global.datatables.zero_selected') }}')

                        return
                    }

                    if (confirm('{{ trans('global.areYouSure') }}')) {
                        $.ajax({
                            headers: {'x-csrf-token': _token},
                            method: 'POST',
                            url: config.url,
                            data: { ids: ids, _method: 'DELETE' }})
                            .done(function () { location.reload() })
                    }
                }
            }
            dtButtons.push(deleteButton)
            @endcan

            $.extend(true, $.fn.dataTable.defaults, {
                order: [[ 1, 'desc' ]],
                pageLength: 100,
            });
            $('.datatable-Course:not(.ajaxTable)').DataTable({ buttons: dtButtons })
            $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });
        })
        $(document).on("load", function () {
    $("#div1").fadeIn();
});
</script>

@endsection