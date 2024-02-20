<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">



    <link href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('font-awesome-4.7.0/css/font-awesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/buttons.dataTables.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/select.dataTables.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('coreui/css/coreui.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('font-awesome-4.7.0/css/font-awesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" />
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






    <title>Document</title>
    <style>
        body{
            background-image:
        }
        .row{
            margin-right:5px !important; margin-left:5px !important;
        }
        .rotated {
        writing-mode: tb-rl;
        transform: rotate(-180deg);
        word-wrap: break-word!important;
    }
    </style>
</head>
<body>

    <div class="row">
        <div class="col-4 justify-start"><img src="{{asset('img/logo.png')}}" width="90" height="90" /></div>
    <div class="col-4 mt-3 text-justify-center">
        <h6 class="text-center">قوات الدفاع الجوي الملكي السعودية </h6>
        <h6 class="text-center">{{$data['unit']->name}}</h6>
        <h6 class="text-center">قسم التأهيل العلمي</h6>
    </div>
    <div class="col-4"><img src="{{asset('img/logo.png')}}" width="90" height="90" style="float:left"/></div>
    </div>

    <div class="row">
        <h4 class="text-center text-decoration-underline bold">نموذج التعداد اليومي  (     {{convertToHijri(convertToGregorian($data['schdeules']->lecture_date))}}    )  </h4>
    <h4 class="text-center text-decoration-underline bold" > إسم الدورة :({{$data['course']->course->name}}) رقم  {{$data['course']->course->code}}    </h4>
    </div>

    @php


    @endphp
<div class="row justify-content-center">
    <div class="col-md-8">
        <table class="mt-2 table mr-2 table-bordered">
            <thead>

            <th>الحصة <br>period</th><th>القوة <br>assigned</th><th>المتغيبين <br>absent </th><th>إسم المدرس <br>Instructor's Name</th><th>التوقيع <br> signature</th>
     @php

     @endphp
           </thead>
            <tbody>
            @php
             $attends=App\Models\attendance_student::get()->count();
             $teachers = \App\Models\UserSurvey::where(['course_training_plan_id' =>$CourseTrainingPlan->id])
                ->withWhereHas('material', fn($query) => $query->where('name', $data['lesson'][0]))

                ->withWhereHas('user_course_training_plan', fn($query) => $query->where(['substitute' => null, 'type' => 'T']))->first();

                            $attends=App\Models\attendance_student::where("lecture",0)->where("course_date",$data['schdeules']->id);
          @endphp

@foreach ($data['lesson'] as $key=> $value)
      <tr>
     <td>{{$key+1}}</td>
     @php
             $teachers = \App\Models\UserSurvey::where(['course_training_plan_id' =>$CourseTrainingPlan->id])
                ->withWhereHas('material', fn($query) => $query->where('name', $value))

                ->withWhereHas('user_course_training_plan', fn($query) => $query->where(['substitute' => null, 'type' => 'T']))->first();

                            $attends=App\Models\attendance_student::where("lecture",$key+1)->where("course_date",$data['schdeules']->id);



          @endphp


          <td>
            {{$CourseTrainingPlan ->trainee_number-1 ?? ''}}</td>


          </td>
          <td>

            {{$attends->count()   ?? 0}}


          </td>
          <td>

      @php
      $attend=$attends->first();


      @endphp
          {{ $teachers->user_course_training_plan->username ?? ''}}</td>
          <td>
          &nbsp;
          </td>


    </tr>
     @endforeach



            </tbody>
        </table>
</div>
</div>
<hr>

<div class="row justify-content-center">
    <div class="col-md-8">

     @php


      $reson=['متاخر', 'غائب',	'مستأذن' ,	'استراحة' ,	'مستشفى',	'مهمة',	'إجازة',	'إخلال بالضبط',	'جلسة تقصير',	'مراجحة الجناح',
        ' ترك ميدان
    التمرين </br> بدون  عذر
    (10)',	'الغياب  عن   </br> الاختبار
    النهائي
    (20)'	, 'أخرى'];
    @endphp
     <div class="card">
        <div class="card-header">

        </div>

        <div class="card-body">

        <table class="table table-bordered table-striped table-hover datatable datatable-Course-Training-Plan">
            <thead class="bg-primmary">
                <tr >
            <th class="text-center" rowspan="2">ت </th><th  class="text-center"rowspan="3">إسم المتغيبين</th><th  class="text-center rotated" rowspan="2">الرقم</th>

           <th class="text-center" colspan="7" class="text-center"> الحصص</th>
           <th class="text-center" colspan="12" class="text-center"> الاسباب</th>
           </tr>
           <tr>
            @foreach ($data['lesson'] as $key=> $item)
            <th class="text-center">{{$key+1}}</th>
            @endforeach


            @php
            for ($i=0; $i <13 ; $i++) {
            echo "<th class='rotated break-normal hover:break-all'>".$reson[$i]."</th>";
            }
        @endphp
        </tr>


    </tr>
        </th>



           </thead>
            <tbody>




@php
    $s=1;
;
@endphp

  @foreach ($data['students'] as  $student)

  <tr id="{{$student->id}}">
            <th scope="row">{{$s++}}</th>
            <td>{{$student->username}}</td>

            <td id="0">
                {{$student->military_number}}


            </td>

            @for ($j=1 ; $j<=6;$j++)
@if(isset($lecture[$student->id][$j]))


             <td id="{{$j}}"><input type="checkbox" name="lecture[{{$student->id}}][]" value="{{$j}}" style="display:none;  " class="lecture" id="{{$j}}" >

                <i class="fa fa-check-circle pr" style="font-size:22px;color:rgb(210, 29, 29);" data-toggle="modal" data-target="#staticBackdrop"></i> </td>
                @else
<td>
          &nbsp;
          </td>




                @endif

                 @endfor

                    @for ($j=1 ; $j<=13;$j++)

                        @if(isset($reason[$student->id][$j]))

                         <td >

                            <input type="checkbox"  value="{{$j}}"  name="reason[{{$student->id}}]" style="display:none;" class="reason"  id="{{$j}}" >
                            <i class="fa fa-check-circle rc" style="font-size:22px;color:rgb(210, 29, 29);" id="{{$j}}"></i> </td>
@else
<td>
          &nbsp;
          </td>



@endif

                    @endfor


        </tr>
            @endforeach

@php
    // dd($attendances["lecture"] )
@endphp
            </tbody>

        </table>




</div>
</div>


<!-- Button trigger modal -->

<!-- Button trigger modal -->
<div class="row row-12 p-4 mt-12">
    <div class="col-4 p-8">
    <table class="table table p-4">

    <tbody>
    <tr>

            <td>قائد الدورة</td>
        @php

     $user=App\Models\UserCourseTrainingPlan::where("course_training_plan_id",$data['course']->id)->min('military_number');

      $master=App\Models\UserCourseTrainingPlan::where('military_number',$user)->first();
        @endphp


            <td>{{$data['master']->username ?? ''}}</td>
        </tr>



    <tr>

            <td>الرتبة</td>
            <td>{{$data['master']->rank ?? ''}}</td>
        </tr>
        <tr>

            <td>التوقيع</td>
            <td></td>
        </tr>



    </tbody>
    </table>





    </div>
    <div class="col-4 p-8">

    <table class="table table p-4">

    <tbody>
    <tr>

            <td>مشرف الدورة</td>

            <td>{{$data['schdeules']->course_training->lessons_schedule->supervisor->name ?? ' '}}</td>
        </tr>



    <tr>

            <td>الرتبة</td>
            <td>
                {{$data['schdeules']->course_training->lessons_schedule->supervisor->rank ?? '  '}}
                </td>
        </tr>
        <tr>

            <td>التوقيع</td>
            <td></td>
        </tr>



    </tbody>
        </table>
             </div>

    <div class="col-4 p-8">

        <table class="table table p-4">

    <tbody>
    <tr>
        @php

          $unitadmin = App\Models\User::where('unit_id',$data['unit']->id)->where('job_role','accredited')->get();
        @endphp

            <td>مدير  أدارة التدريب</td>
            <td>{{$unitadmin[0]->name ?? ''}}</td>
        </tr>



    <tr>

            <td>الرتبة</td>
            <td>{{$unitadmin[0]->rank ?? ''}}</td>
        </tr>
        <tr>

            <td>التوقيع</td>
            <td></td>
        </tr>



         </tbody>
            </table>

             </div>
</body>
<script type="text/javascript">

    window.print();
 </script>
</html>
