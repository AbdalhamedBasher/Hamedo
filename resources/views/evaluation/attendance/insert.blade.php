@extends('layouts.main2')
<br><br><br><br><br><br>
@section('content')
    <div class="flex items-center markdown">
        <h1 style="font-size: 2em;"><b> </b></h1>
    </div>


    @if (Session::has('message'))
        <p class="alert alert-success" style="direction: rtl;text-align: right;">{{ Session::get('message') }}</p>
        @else
        @if (Session::has('error'))
        <p class="alert alert-danger" style="direction: rtl;text-align: right;">{{ Session::get('error') }}</p>


        @endif

    @endif
    <div class="row">
        @php

                $teachers='';
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




        </div>

    </div>

    @php
        $teacher = [];
        $index=0;
    @endphp
    <div class="row justify-content-center">
        <div class="col-md-11 m-2">
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
                <div class="card-header">

                </div>

                <div class="card-body p-2">

                    <table class="table table-bordered m-1 table-striped table-hover datatable datatable-Course-Training-Plan">
                        <i class='fa fa-user' > تم التأكيد</i>
                        <i class='fa fa-lock p-2'> حصص غير تابعة للاستاذ</i>
                        <thead class="bg-primmary">
                            <tr>
                                <th class="text-center" rowspan="2">ت </th>
                                <th class="text-center"rowspan="3">إسم المتغيبين</th>
                                <th class="text-center rotated" rowspan="2">الرقم</th>

                                <th class="text-center" colspan="7" class="text-center"> الحصص</th>
                                <th class="text-center" colspan="12" class="text-center"> الاسباب</th>
                            </tr>
                            <tr>
                                @foreach ($lesson as $key => $value)
                                    <th class="text-center">{{ empty($value) ? 'الحصة ' . convertNumber_f($key+1) : $value->lesson }}
                                    </th>
                                @endforeach

                                @php
                                    for ($i = 0; $i < 13; $i++) {
                                        echo "<th class='rotated break-normal hover:break-all'>" . $reson[$i] . '</th>';
                                    }
                                    $disabled = '';
                                @endphp
                            </tr>


                            </tr>
                            </th>



                        </thead>
                        <tbody>
                            <form action="{{ route('evaluation.attendance.store2') }}" method="POST" id="lecture_form">
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
                                                style="display:none" class="student">{{ $student->military_number }}


                                        </td>
                                        @foreach ($lesson as $j => $value)
                                        @php


                                        $teacher = \App\Models\UserSurvey::where(['course_training_plan_id' => $course->id])->withWhereHas('material', fn($query) => $query->where('name', $value->lesson))

                                        ->withWhereHas('user_course_training_plan', fn($query) => $query->where(['substitute' => null, 'type' => 'T','id'=> auth()->guard('evaluation')->user()->id]))
                                        ->first();
                                        //    dd($teacher[0]);
                                        $disabled='';
                                        $notallowed='';

                                            if(isset($lectures)){




                                        }

                            if(auth()->guard('evaluation')->user()->type=='T'){
                            if( is_null($teacher)){
                             $notallowed='disabled';
                            }
                            else{
                            if($teacher->material=!$value){
                             $notallowed='disabled';
                            }
                            }
                            }
                        else{

                            $notallowed='';


                            }
                            foreach($teacher_course as $v){
                            $disabled=isset($verfy_lecture[$v->user_course_training_plan->id][$j+1])?'disabled':'';
                            }


     @endphp

                                            @if (isset($lecture[$student->id][$j + 1]))
                                                <td id="{{ $j + 1 }}">

                                                              <input type="checkbox"
                                                        name="lecture[{{ $student->id }}][]" value="{{ $j + 1 }}"
                                                        style="display:none" class="lecture" id="{{ $j + 1 }}"
                                                        {{$disabled }}{{$notallowed}}>
                                                        <i class='fa fa-user' style="{{$disabled?'':'display:none'}}"></i>
                                                        <i class='fa fa-lock' style="{{$notallowed?'':'display:none'}}"></i>
                                                    <i class="fa fa-check-circle pr"
                                                        style="font-size:36px;color:rgb(210, 29, 29);" data-toggle="modal"
                                                        data-target="#staticBackdrop"></i>

                                                </td>
                                            @else
                                                <td id="{{ $j }}">
                                                              <input type="checkbox"
                                                        name="lecture[{{ $student->id }}][]" value="{{ $j + 1 }}"
                                                        style="display:none" class="lecture" id="{{ $j + 1 }}" {{$disabled}}


                                                               {{$notallowed}}

                                                        >
                                                        <i class='fa fa-user' style="{{$disabled?'':'display:none'}}"></i>
                                                        <i class='fa fa-lock' style="{{$notallowed?'':'display:none'}}"></i>
                                                    <i class="fa fa-check-circle pr" style="font-size:36px;color:#dedede"
                                                        data-toggle="modal" data-target="#staticBackdrop" ></i>

                                                </td>
                                            @endif

                                        @endforeach


                                        @for ($j = 1; $j <= 13; $j++)
                                            @if (isset($reason[$student->id][$j]))
                                                <td>

                                                    <input type="checkbox" value="{{ $j }}"
                                                        name="reason[{{ $student->id }}]" style="display:none" class="reason"
                                                        id="{{ $j }}" checked>
                                                    <i class="fa fa-check-circle rc"
                                                        style="font-size:36px;color:rgb(210, 29, 29);"
                                                        {{-- (210, 29, 29) --}}
                                                        id="{{ $j }}"></i>
                                                </td>
                                            @else
                                                <td id="{{ $j }}"><input type="checkbox"
                                                        name="reason[{{ $student->id }}]" value="{{ $j }}"
                                                        style="display:none" class="reason" id="{{ $j }}">

                                                    <i class="fa fa-check-circle rc" style="font-size:36px;color:#dedede;"
                                                        data-toggle="modal" data-target="#staticBackdrop"></i>
                                                </td>
                                            @endif
                                        @endfor


                                    </tr>
                                @endforeach

                                @php

                                @endphp



                            </form>

                            @if ( auth()->guard('evaluation')->user()->type==="T")






                            <form action="{{ route('evaluation.attendance.teacher_verfy') }}" method="post" id="verfy">
                                @csrf

                                <input type="hidden" name="course_id" value="{{$course->id}}">
                                    <tr>
                                        <td>{{ $k++ }}</td>
                                        <td>{{ auth()->guard('evaluation')->user()->username }}
                                        </td>
                                        <td>{{ auth()->guard('evaluation')->user()->military_number }}</td>

                                        @foreach ($lesson as $j => $value)
@php
     $teacher = \App\Models\UserSurvey::where(['course_training_plan_id' => $course->id])
            ->withWhereHas('material', fn($query) => $query->where('name', $value->lesson))

            ->withWhereHas('user_course_training_plan', fn($query) => $query->where(['substitute' => null, 'type' => 'T','id'=>auth()->guard('evaluation')->user()->id]))
            ->first();

            $color=(\App\Models\attendance_verfy::where(['teatcher_id'=>auth()->guard('evaluation')->user()->id],['lecture'=>$j],['course_id'=> $course->id] )->first());
            // \attendance_verfy::where('course_id', $course->id)->where('teatcher_id',auth()->guard('evaluation')->user()->id )->where('lecture',$j)->first()

@endphp

@if($teacher)
<input type="hidden" name="attendance" value="{{$schdeules->id}}">
<input type="hidden" name="teacher_id" value="{{  auth()->guard('evaluation')->user()->id}}">
@if(isset($teacher->material->name)&&(\Str::contains($teacher->material->name,$value->lesson)) )


@if ( isset($verfy_lecture[ auth()->guard('evaluation')->user()->id][$j+1]))

<td id="{{ $j + 1 }}">
    <input type="checkbox" name="verfy[{{ auth()->guard('evaluation')->user()->id}}][]"
        value="{{ $j + 1 }}" class="verfy"
    id="{{ $j + 1 }}" style="display:none">
    <i class="fa fa-check-circle tt" style="font-size:36px;color:rgb(104, 29, 210);"  data-toggle="modal" data-target="#staticBackdrop"></i>
</td>


@else
{{-- {{dd(isset($verfy_lecture[ auth()->guard('evaluation')->user()->id][$j+1]))}} --}}
  <td id="{{ $j  }}">
    <input type="checkbox" name="verfy[{{ auth()->guard('evaluation')->user()->id}}][]"
        value="{{ $j + 1 }}" class="verfy"
    id="{{ $j + 1 }}" style="display:none">
    <i class="fa fa-check-circle tt" style="font-size:36px;color:#dedede;"
        data-toggle="modal" data-target="#staticBackdrop"></i>
</td>




{{-- @endif --}}
@endif


@endif
@else
<td>&ensp;</td>

@endif
                                        @endforeach

<td><button style="font-size:24px" class="btn btn-primary" id="formsubmit" onclick="event.preventDefault(); document.getElementById('verfy').submit();">تاكيد <i class="fa fa-lock"  ></i></button>
</td>
                                    </tr>

                            </form>

                            @endif
                        </tbody>

                    </table>
                    <button style="font-size:24px" class="btn btn-primary" id="formsubmit" onclick="event.preventDefault(); document.getElementById('lecture_form').submit();">حفظ <i class="fa fa-save"  ></i></button>

                        <a href="{{ route('evaluation.attendance.print', $schdeules->id) }}"
                            class="btn btn-primary m-1" style="font-size:24px">طباعة <i class="fa fa-print"  ></i></a>

                </div>
            </div>


        </div>{{-- <div class="card-body"> --}}
    </div>

    <!-- Button trigger modal -->
    <div class="row row-12 p-4">
        <div class="col-4 p-5">


        </div>
        <div class="col-4 p-5">


        </div>

        <div class="col-4 p-5">


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
                if(!(lecture).prop("disabled")){

                if (color == "rgb(210, 29, 29)") { // check is green

                    $(this).attr("class", "fa fa-check-circle").css("color", "#dedede");

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
                $(this).parent().parent().find("td:eq(1) input[type=checkbox]").attr(
                    "checked", true)
            }
            else{
                alert('هذه الحصة غير مصرح بتعديلها')
            }
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






            // teacher icon
            $(".tt").click(function() {
                var color = $(this).css("color");
                var verfy = $(this).parent().find('input[type=checkbox]');
                if (color == "rgb(104, 29, 210)") { // check is green

                    $(this).attr("class", "fa fa-check-circle").css("color", "#dedede");

                    verfy.prop('checked', !verfy.prop('checked'))

            console.log(verfy.prop('checked'));

                } else {

                    $(this).attr("class", "fa fa-check-circle").css("color",
                        "rgb(104, 29, 210)"); // check is red now absent student




                    verfy.prop('checked', !verfy.prop('checked'))


                    //  $("#staticBackdrop").modal('show');


                }

            })







        });
    </script>
    <script>
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
