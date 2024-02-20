<html dir="rtl">

<head>

    <title>  {{$course->name}}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="{{ public_path('css/courses.css') }}">
    <style>

        @page {

            odd-footer-name: html_myFooter1;

        }
    </style>

</head>

<body>

<table class="maintable" id="tableAll" dir="rtl">

    <tr>
        <td class="auto-style1" colspan="12" style="height: 31pt; ">
            بطاقة مقترحة منهج دورة
        </td>
    </tr>

    <tr>
        <td colspan="6" class="tdmain">

            <table style="width: 100%">
                <thead>
                <tr>
                    <td class="rowtitle">
                        اسم الدورة
                    </td>
                </tr>
                </thead>
                <tr>
                    <td style="text-align: center">
                        {{$course->name}}
                    </td>
                </tr>

            </table>
            <table style="width:100%">
                <thead>
                <tr>
                    <td class="rowtitle">
                        الهدف العام من الدورة
                    </td>
                </tr>
                </thead>
                <tr>
                    <td>
                        <p style="white-space: pre-line">{!! $course->goal_general !!}</p>
                    </td>
                </tr>
            </table>

            <!-- Table of Goals-->
            <table  style="width: 100%">
                <thead>
                <tr>
                    <td  class="rowtitle">الأهداف التفصيلية ( الخاصة ) للدورة</td>

                </tr>
                </thead>
                @php
                    $enrollment_conditions = explode("\n", str_replace("\r", "", $course->goal_detailed));
                    $number =1;
                @endphp

                <tr>
                    <td style="text-align: right">
                        @foreach($enrollment_conditions as $value)

                       {{$number++}}-{{$value}}<br>
                        @endforeach
                    </td>
                </tr>
            </table>

            <!-- Table of Conditions-->
            <table class="subtable" style="width: 100%; border: 11px forestgreen solid  ;
">
                <thead>
                <tr>
                    <td colspan="4" class=""  style="height: 39px; background: #a3b1ba !important;">شروط الإلتحاق بالدورة</td>
                </tr>
                </thead>
                @php
                    $enrollment_conditions = explode("\n", str_replace("\r", "", $course->enrollment_conditions));
                    $number =1;
                @endphp


                @foreach($enrollment_conditions as $value)
                 @if ($enrollment_conditions[0]=== "")

                <tr>
                    <td>
                        {{-- <p style="white-space: pre-line">{{$value}}</p> --}}
                    </td>
                </tr>
@else
 <tr>
                 <td>{{$number++}}</td>
                    <td>
                        <p style="white-space: pre-line">{{$value}}</p>
                    </td>
                </tr>
                @endif
                @endforeach


            </table>


        <td colspan="6" valign="top" class="tdmain">
            <table style="width: 100%">
                <thead>
                <tr>
                    <td class="rowtitle">رمز الدورة</td>
                    <td>{{$course->code}}</td>
                </tr>
                </thead>
            </table>
            <table style="width: 100%; height: 65px;">

                <tr>
                    <td class="rowtitle" colspan="4">الفئة المستهدفة</td>
                </tr>
                <tr>
                    <td> @foreach ($course->targeted_class as $value)
                          <td style="text-align: center">{{    $value   }}</td>
                        @endforeach
                    </td>

                </tr>

            </table>

            <table style="width: 100%; height: 30px;">
                <tr>
                    <td class="rowtitle">مدة الدورة بالأسابيع</td>
                    <td>{{$course->weeks_number}}
                </tr>
                <!-- <tr>

                    <td class="rowtitle">مدة الدورة بالأسابيع المحدث</td>
                    <td>111</td>

                </tr> -->


            </table>
            <table class="subtable2" style="width: 100%">
                <tr>
                    <td class="" style="height: 39px; background: #a3b1ba !important;width: 10px">ت</td>
                    <td class="" style="height: 39px; background: #a3b1ba !important;">اسم المادة</td>
                    <td class="" style="height: 39px; background: #a3b1ba !important;">
                        عدد الساعات
                    </td>
                </tr>
                @php
                    $counter=1;
                    $sum_hours=0;
                @endphp
                @foreach($course->Materials as $Material)

                    <tr>

                        <td> {{ arabic_w2e($counter++)}}</td>
                        <td> {{ $Material->name }}</td>
                        @php
                            $total_hours=App\Models\CourseMaterialLesson::where([
                            'course_id' => $course->id,'material_id' => $Material->id])->get('hours');
                        @endphp

                        @foreach ($total_hours as $value)
                            <td style="width:65px;text-align: center">{{arabic_w2e($value->hours)}}</td>
                        @endforeach

                        <input type="hidden" name="" value="{{$sum_hours+=$value->hours }}">


                    </tr>
                @endforeach
                @php
                    for ($counter; $counter < 26; $counter++) {

                @endphp
                <tr>
                    <td>{{ arabic_w2e($counter)}}</td>
                    <td></td>
                    <td></td>
                </tr>

                @php
                    }

                @endphp

                <tr>
                    <td colspan="3">
                        <table  class="subtable2" style="width: 100%">
                            <tr>
                                <td class="rowtitle2" style="height: 39px; background: #a3b1ba !important;">المجموع</td>
                                <td class="rowtitle2" style="width:81px ">{{arabic_w2e($sum_hours)}}</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <table class="subtable2" style="width: 100%">

                            @php
                                $sum =0
                            @endphp
                            @foreach (json_decode($course->extracurricular_hours) as $value1)
                            @foreach ($value1 as $key => $value)
                                @if ($value != '0'and$value !='')
                                    <tr>
                                        <td style="background-color:#e4e5e6;">
                                            {{ \App\Models\ExtracurricularHour::find($key)->name }}
                                        </td>
                                        <td style="width:81px;text-align: center">
                                            {{arabic_w2e($value) }}
                                            <input type="hidden" name="" value="  {{$sum+=$value }}">
                                        </td>

                                    </tr>

                                    @endif
                                    @endforeach
                                    @endforeach


                                    </tr>

                        </table>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <table  class="subtable2" style="width: 100%">
                            <tr>
                                <td class="rowtitle2" style="height: 39px; background: #a3b1ba !important;">المجموع</td>
                                <td class="rowtitle2" style="width:81px ">{{arabic_w2e($sum)}}</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>


    <tr>
        <td class="footer" colspan="12" height="20" style="height: 15.0pt; width: 552pt" width="735">
            تم اعتماد تطبيق هذا المنهج بأمر معالي قائد قوات الدفاع الجوي

        </td>
    </tr>


</table>
<htmlpagefooter name="myFooter1" >
    <table width="100%">
        <tr>

            <td  align="center" style="font-size: 12px">
                {PAGENO}/{nbpg}
            </td>

        </tr>
    </table>
</htmlpagefooter>
</body>

</html>

