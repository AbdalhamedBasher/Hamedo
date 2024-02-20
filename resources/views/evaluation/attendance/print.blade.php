@extends('layouts.main1')
<br><br><br><br><br><br>
@section('content')



    @if (Session::has('message'))
        <p class="alert alert-danger" style="direction: rtl;text-align: right;">{{ Session::get('message') }}</p>
    @endif
    <div class="row">
        @php
            $user = auth()
                ->guard('evaluation')
                ->user();

        @endphp
    @section('css')
        <style>
            .row {
                margin-right: 5px !important;
                margin-left: 5px !important;
            }

            .rotated {
                writing-mode: tb-rl;
                transform: rotate(-180deg);
            }
        </style>
    @endsection
    @section('content')

        <div class="row d-flex">

            <div class="col-4 mt-3 text-justify-center">
                <div class="card">
                    <h6 class="text-center">قوات الدفاع الجوي الملكي السعودية </h6>
                    <h6 class="text-center">{{ $unit->name }}</h6>
                    <h6 class="text-center">قسم التأهيل العلمي</h6>
                </div>
            </div>


        </div>

    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            @php
                $k = 1;

                $reson = [
                    'متاخر',
                    'غائب',
                    'مستأذن',
                    'استراحة',
                    'مستشفى',
                    'مهمة',
                    'إجازة',
                    'إخلال بالضبط',
                    'جلسة تقصير',
                    'مراجحة الجناح',
                    'ترك ميدان
    التمرين بدون عذر
    (10)
',
                    'الغياب عن الاختبار
    النهائي
    (20)',
                    'أخرى',
                ];
            @endphp
             <div class="card p-3.5">
                <div class="card-header text-xl">
                    الحضور لدورة
                    [ {{ $course->course->name }} ]
                    في نشرة
                    [ {{ $course->training_plan->unit->name }} ]
                    لليوم
                   [{{convertToHijri(convertToGregorian($schdeules->lecture_date)->format('Y-m-d'))}}]
                </div>
             </div>
            <div class="card">


                <div class="card-body">
                    <P class="text-black">{{ $course->name }}</P>
                    <table class="table table-bordered table-striped table-hover datatable datatable-Course-Training-Plan">
                        <thead class="bg-primmary">
                            <tr>
                                <th class="text-center" rowspan="2">ت </th>
                                <th class="text-center"rowspan="3">إسم المتغيبين</th>
                                <th class="text-center rotated" rowspan="2">الرقم</th>

                                <th class="text-center" colspan="7" class="text-center"> الحصص</th>
                                <th class="text-center" colspan="12" class="text-center"> الاسباب</th>
                            </tr>
                            <tr>
                                <th class="text-center">1</th>
                                <th class="text-center">2</th>
                                <th class="text-center">3</th>
                                <th class="text-center">4</th>
                                <th class="text-center">5</th>
                                <th class="text-center">6</th>

                                @php
                                    for ($i = 0; $i < 13; $i++) {
                                        echo "<th class='rotated break-normal hover:break-all'>" . $reson[$i] . '</th>';
                                    }
                                @endphp
                            </tr>


                            </tr>
                            </th>



                        </thead>
                        <tbody>
                            <form action="{{ route('evaluation.attendance.store2') }}" method="POST" id="">
                                <!-- {{ route('admin.attendance.store') }} -->
                                @csrf





                                @foreach ($studentcourse as $student)
                                    <tr id="{{ $student->id }}">
                                        <th scope="row">{{ $k++ }}</th>
                                        <td>{{ $student->username }}</td>



                                        <input type="hidden" name="course_date" value="{{ $schdeules->id }}">
                                        </td>
                                        <td id="0">
                                            <input type="checkbox" name="student[]" value="{{ $student->id }}"
                                                style="display:none;" class="student">{{ $student->military_number }}


                                        </td>
                                        @for ($j = 1; $j <= 6; $j++)
                                            @if (isset($lecture[$student->id][$j]))
                                                @php

                                                @endphp

                                                <input type="hidden" name="applied_by" value="{{ $user->id }}">


                                                <td id="{{ $j }}"><input type="checkbox"
                                                        name="lecture[{{ $student->id }}][]" value="{{ $j }}"
                                                        style="display:none; " class="lecture" id="{{ $j }}">

                                                    <i class="fa fa-check-circle pr"
                                                        style="font-size:36px;color:rgb(210, 29, 29);" data-toggle="modal"
                                                        data-target="#staticBackdrop"></i>
                                                </td>
                                            @else
                                                <td id="{{ $j }}"><input type="checkbox"
                                                        name="lecture[{{ $student->id }}][]" value="{{ $j }}"
                                                        style="  display:none;" class="lecture" id="{{ $j }}">


                                                    <i class="fa fa-check-circle pr"
                                                        style="font-size:36px;color:rgb(79, 156, 116);" data-toggle="modal"
                                                        data-target="#staticBackdrop"></i>
                                                </td>
                                            @endif
                                        @endfor

                                        @for ($j = 1; $j <= 13; $j++)
                                            @if (isset($reason[$student->id][$j]))
                                                <td>

                                                    <input type="checkbox" value="{{ $j }}"
                                                        name="reason[{{ $student->id }}]" style="display:none;"
                                                        class="reason" id="{{ $j }}" checked>
                                                    <i class="fa fa-check-circle rc"
                                                        style="font-size:36px;color:rgb(210, 29, 29);"
                                                        id="{{ $j }}"></i>
                                                </td>
                                            @else
                                                <td id="{{ $j }}"><input type="checkbox"
                                                        name="reason[{{ $student->id }}]" value="{{ $j }}"
                                                        style="display:none;" class="reason" id="{{ $j }}">

                                                    <i class="fa fa-check-circle rc"
                                                        style="font-size:36px;color:#dedede;" data-toggle="modal"
                                                        data-target="#staticBackdrop"></i>
                                                </td>
                                            @endif
                                        @endfor


                                    </tr>
                                @endforeach

                                @php
                                    // dd($attendances["lecture"] )
                                @endphp

                                <input type="submit" value="حفظ" class="btn btn-primary" id="formsubmit">
                                <a href="{{ route('admin.attendance.print', $schdeules->id) }}"
                                    class="btn btn-primary m-1">طباعة</a>
                        </tbody>

                    </table>
                </div>
            </div>

            </form>
        </div>{{-- <div class="card-body"> --}}
    </div>

    <!-- Button trigger modal -->
    <div class="row row-12 p-4">
        <div class="col-4 p-4">
            <table class="table table p-4">

                <tbody>
                    <tr>

                        <td>قائد الدورة</td>
                        @php

                        @endphp


                        <td>{{ $master->username ?? '' }}</td>
                    </tr>



                    <tr>

                        <td>الرتبة</td>
                        <td>{{ $master->rank ?? '' }}</td>
                    </tr>
                    <tr>

                        <td>التوقيع</td>
                        <td></td>
                    </tr>



                </tbody>
            </table>





        </div>
        <div class="col-4 p-4">

            <table class="table table p-4">

                <tbody>
                    <tr>

                        <td>مشرف الدورة</td>

                        <td>{{ $schdeules->course_training->lessons_schedule->supervisor->name ?? ' ' }}</td>
                    </tr>



                    <tr>

                        <td>الرتبة</td>
                        <td>
                            {{ $schdeules->course_training->lessons_schedule->supervisor->rank ?? '  ' }}
                        </td>
                    </tr>
                    <tr>

                        <td>التوقيع</td>
                        <td></td>
                    </tr>



                </tbody>
            </table>
        </div>

        <div class="col-4 p-4">

            <table class="table table p-4">

                <tbody>
                    <tr>
                        @php

                            $unitadmin = App\Models\User::where('unit_id', $unit->id)
                                ->where('job_role', 'accredited')
                                ->get();
                        @endphp

                        <td>مدير أدارة التدريب</td>
                        <td>{{ $unitadmin[0]->name ?? '' }}</td>
                    </tr>



                    <tr>

                        <td>الرتبة</td>
                        <td>{{ $unitadmin[0]->rank ?? '' }}</td>
                    </tr>
                    <tr>

                        <td>التوقيع</td>
                        <td></td>
                    </tr>



                </tbody>
            </table>

        </div>
    </div>
    @php
    @endphp
    <!-- Button trigger modal -->


@endsection
@section('scripts')
    @parent
    <script>
        $(document).ready(function() {

            var x;

            $(".pr").click(function() { // check for lecture

                var color = $(this).css("color");
                var lecture = $(this).parent().find('input[type=checkbox]')
                var student = $(this).parent().parent().find("td:eq(1) input[type=checkbox]")
                if (color == "rgb(210, 29, 29)") { // check is green

                    $(this).attr("class", "fa fa-check-circle").css("color", "#808080");

                    x = lecture.attr("id")

                    console.log("green= " + x);

                } else {

                    $(this).attr("class", "fa fa-check-circle").css("color",
                        "rgb(210, 29, 29)"); // check is red now absent student

                    var lecture = $(this).parent().find('input[type=checkbox]')

                    console.log("red= " + lecture.attr("value"));



                    //  $("#staticBackdrop").modal('show');


                }

                lecture.prop('checked', !lecture.prop('checked'));
                $reason = $(this).parent().parent().find("td .rc");
                $reason.each(function() {

                    if ($(this).css("color") != "#dedede") {
                        $(this).parent().find('input[type=checkbox]').attr("checked", true)
                        $(this).parent().parent().find("td:eq(1) input[type=checkbox]").attr(
                            "checked", true)
                    }
                })
            });

            $(".rc").click(function() {
                var color = $(this).css("color");
                var student = $(this).parent().parent().find("td:eq(1) input[type=checkbox]")
                var reason = $(this).parent().find('input[type=checkbox]')
                console.log(reason.val())
                var all_rec = $(this).parent().parent().attr("id")
                $('input:checkbox.reason').each(function() {
                    if ($(this).parent().parent().attr("id") == all_rec) {
                        $(this).parent().find("i").css("color", "#dedede")
                        $(this).prop('checked', false)


                    }




                })





                if (color == "rgb(210, 29, 29)") {
                    $(this).attr("class", "fa fa-check-circle").css("color", "#dedede");
                    reason.prop('checked', !reason.prop('checked'));
                    student.prop('checked', reason.prop('checked'));

                } else {

                    $(this).attr("class", "fa fa-check-circle").css("color", "rgb(210, 29, 29)");

                }

                reason.prop('checked', !reason.prop('checked'));
                student.prop('checked', reason.prop('checked'));

            });
            save_form
            $('#add-project-form').on("submit", function(event) {
                e.preventDefault()
                if ($("#formsubmit").attr("checked")) {
                    console.log("yes it work");
                }
            })
        });
    </script>
    <script>
        $(function() {
            $(".dateHijri").hijriDatePicker({
                hijri: true,
                showTodayButton: true
            });
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)

            let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
            let deleteButton = {
                text: deleteButtonTrans,
                url: "{{ route('admin.courses.massDestroy') }}",
                className: 'btn-danger',
                action: function(e, dt, node, config) {
                    var ids = $.map(dt.rows({
                        selected: true
                    }).nodes(), function(entry) {
                        return $(entry).data('entry-id')
                    });

                    if (ids.length === 0) {
                        alert('{{ trans('global.datatables.zero_selected') }}')

                        return
                    }

                    if (confirm('{{ trans('global.areYouSure') }}')) {
                        $.ajax({
                                headers: {
                                    'x-csrf-token': _token
                                },
                                method: 'POST',
                                url: config.url,
                                data: {
                                    ids: ids,
                                    _method: 'DELETE'
                                }
                            })
                            .done(function() {
                                location.reload()
                            })
                    }
                }
            }
            dtButtons.push(deleteButton)


            $.extend(true, $.fn.dataTable.defaults, {
                order: [
                    [1, 'desc']
                ],
                pageLength: 100,
            });
            $('.datatable-Course-Training-Plan:not(.ajaxTable)').DataTable({
                buttons: dtButtons
            })
            $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
                $($.fn.dataTable.tables(true)).DataTable()
                    .columns.adjust();
            });
        })
    </script>
    <script type="text/javascript">
        $(function() {
            $(".dateHijri").hijriDatePicker({
                hijri: true,
                showTodayButton: true
            });
        });
    </script>
@endsection
