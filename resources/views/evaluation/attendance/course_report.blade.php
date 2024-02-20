@extends('layouts.main2')



<br><br><br><br>
@section('content')
<div class="flex items-center markdown">

</div>
    <nav aria-label="breadcrumb" dir="rtl">
        {{-- <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('admin/training_plans') }}">النشرات</a></li>
            <li class="breadcrumb-item"><a
                        href="{{ url('admin/training_plan_years/'.$training_plan->training_plan_year->id) }}">{{ $training_plan->training_plan_year->name }}</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">دورات ({{ $unit->name }}) للعام التدريبي
                ({{ $training_plan->training_plan_year->name }})
            </li>
        </ol> --}}
    </nav>




        <div class="card p-3.5 mt-5">
            <div class="card-header text-xl">
                الحضور لدورة
                [ {{ $course->course->name }} ]
                في نشرة
                [ {{ $course->training_plan->unit->name }} ]


            </div>






</div>

    <div class="card">
        <div class="card-header">

        </div>
        <div class="card-body">



            <br>


            <hr>
            <br>

            <!-- Modal -->


            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-course_training_plans">
                    <thead>
                    <tr>

                        <th class="col col-1 text-center">
                            ت
                        </th>


                        <th class="col col-2 text-center">
                  الطالب
                        </th>



                        <th class="col col-1 text-center">
                          إيام الغياب
                         </th>


                    </tr>
                    </thead>

                    <tbody>
                        @php
                            $i=1;
                        @endphp
 @foreach ($students as $student)
                        <tr >



                            <td>
                                {{$i++}}
                            </td>
                            @php


@endphp
                            <td>


{{$student->username}}



@php
$attent=App\Models\attendance_student::where('student_id', $student->id)->get();
$days=[];

foreach ($attent as $atten) {
$days[]=App\Models\attendance::find($atten->course_date);
}
$days=array_unique($days);
@endphp





                            </td>
                            <td class="text-center">


                                <span class="badge badge-info"> {{count($days)}} يوم </span>




                            </td>



                        </tr>

                        @endforeach

                    </tbody>
                </table>
            </div>


        </div>
    </div>

@endsection
@section('scripts')
    @parent
    <script>
       $(document).ready(function(){
        $(".btn-success").click(function(){
            var ids=$(this).data("id");
           $("#ids").val(ids)

           $("#course_date2").val($(this).data("date"))
 var op= $(".modal-body  div #course_modal").val( $(this).data("name")).change();

 op.attr("selected","selected");
            $(this).data("name")

           $("#admin2").val($(this).data("admin"))
            $("#course_admin2").val($(this).data("course_admin"))
            console.log( $("#course_date2").val())
        })

    })
        $(function () {
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
            @can('user_delete')
            let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
            let deleteButton = {
                text: deleteButtonTrans,
                url: "{{ route('admin.users.massDestroy') }}",
                className: 'btn-danger',
                action: function (e, dt, node, config) {
                    var ids = $.map(dt.rows({selected: true}).nodes(), function (entry) {
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
                            data: {ids: ids, _method: 'DELETE'}
                        })
                            .done(function () {
                                location.reload()
                            })
                    }
                }
            }
            dtButtons.push(deleteButton)
            @endcan

            $.extend(true, $.fn.dataTable.defaults, {
                order: [[1, 'desc']],
                pageLength: 100,
            });
            $('.datatable-course_training_plans:not(.ajaxTable)').DataTable({buttons: dtButtons})
            $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });
        })

    </script>
    <script type="text/javascript">
        $(function () {
            $(".dateHijri").hijriDatePicker({
                hijri: true,
                showTodayButton: true
            });
            // $("#end_at").hijriDatePicker({
            //   hijri:true,
            //   showTodayButton: true
            // });
        });
    </script>
@endsection
