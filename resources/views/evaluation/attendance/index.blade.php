@extends('layouts.main2')
<br><br><br><br><br><br>




@section('content')

<div class="flex items-center markdown">
    <h1 style="font-size: 2em;"><b>  {{ auth()->guard('evaluation')->user()->username }}</b></h1>
</div>
<nav aria-label="breadcrumb" dir="rtl">

  </nav>
    <div class="card mt-1">
        <div class="card-header mt-1">
            الدورات المتاحة
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-Course">
                    <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            #
                        </th>
                        <th>
                            اسم الدورة
                        </th>
                        <th>
                            النشرة
                        </th>
                        <th>
                            رمز الدورة
                        </th>
                        <th>
                            رقم الدورة
                        </th>
                        <th>
                            التاريخ
                        </th>
                        <th>
                            المدة المتبقية
                            على نهاية الدورة
                        </th>
                        <th>
                            الحالة
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                    </thead>
                    <tbody>


                            <tr data-entry-id="{{ $course_training_plans->id }}">

                                <td>

                                </td>
                                <td>
                                    {{ $course_training_plans->id ?? '' }} {{-- المعرف --}}
                                </td>
                                <td>

                                        <a href="{{ route('admin.courses.show', $course_training_plans->course->id) }}" target="_blank">
                                            {{ $course_training_plans->course->name ?? '' }} {{-- الدورة --}}
                                        </a>

                                </td>
                                <td>

                                        <a href="{{ url('admin/training_plans/'.$course_training_plans->training_plan->id.'/unit/'.$course_training_plans->training_plan->unit->id) }}" target="_blank">
                                            {{ $course_training_plans->training_plan->unit->name ?? '' }}  النشرة
                                        </a>

                                </td>
                                <td>
                                    {{ $course_training_plans->course->code ?? '' }} {{-- رمز الدورة --}}
                                </td>
                                <td>
                                    {{ $course_training_plans->patch_number ?? '' }} {{-- رقم الدورة --}}
                                </td>
                                <td>
                                    <span class="badge badge-info">{{ convertToHijri($course_training_plans->start_at) ?? '' }}</span> -
                                    <span class="badge badge-info">{{ convertToHijri($course_training_plans->end_at) ?? '' }}</span> {{-- البداية والنهاية --}}
                                </td>
                                <td>
                                    {{ \Carbon\Carbon::create($course_training_plans->end_at)->diffInDays(\Carbon\Carbon::now()) ?? '' }} {{-- الأيام المتبقية --}}
                                </td>
                                <td>
                                    {{ $course_training_plans->status ?? '' }} {{-- الحالة --}}
                                </td>
                                <td>

                                        <a class="btn btn-xs btn-primary" href="{{ url('evaluation/attendance/'.$course_training_plans->id.'/show') }}">
                                            عرض
                                        </a> {{-- الدورة --}}



                                        <a class="btn btn-xs btn-primary" href="{{ url('evaluation/attendance/'.$course_training_plans->id.'/print_attendance_all') }}">
                                            تقرير الغياب
                                        </a> {{-- الدورة --}}



                                      <div class="btn-group">



                                </td>
                            </tr>


                    </tbody>
                </table>
            </div>


        </div>
    </div>
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

    </script>

@endsection
