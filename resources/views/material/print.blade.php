<html dir="rtl">

<head>

    <title>{{$material->name}}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <link rel="stylesheet" href="{{ public_path('css/material.css') }}">
    <style>
        .page-break {
            page-break-after: always;
        }
        @page {
            size: auto;

            odd-footer-name: html_myFooter1;

        }
    </style>
</head>
<body dir="RTL">

<br/>


<table class="maintable-material">

    <tr>
        <td colspan="12">
            <table style="width: 100%">
                <tr>
                    <td class="auto-style-material2" colspan="2" style="width: 96pt">
                        {{$material->code}}
                    </td>
                    <td class="auto-style-material1" colspan="9" height="41" style="height: 30.75pt; width: 490pt">
                        {{$material->name }}

                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td colspan="6" class="tdmain">

            <table class="subtable-material2" style="width: 100%">
                <tr>
                    <td colspan="2" class="rowtitle-material" >الدورات التي يُدرس فيها هذا المقرر</td>

                </tr>

                @php
                    $counter =1;
                    $sum_hours=0;
                @endphp
                @foreach($material->courses as $course)
                    <tr>
                        <td style="width: 30px">{{arabic_w2e($counter++)}}</td>
                        @php
                            $total_hours=App\Models\CourseMaterialLesson::where([
                            'course_id' => $course->id,'material_id' => $material->id])->get('hours');
                        @endphp

                        @foreach ($total_hours as  $value)

                        @endforeach


                        <td style="">{{$course->name}} ({{$value->hours}})</td>

                    </tr>

                @endforeach
                @php
                    for ($counter; $counter < 15; $counter++) {

                @endphp
                <tr>
                    <td>{{arabic_w2e($counter)}}</td>
                    <td></td>
                </tr>

                @php
                    }

                @endphp

            </table>

            <table style="width: 100%; height: 80px;">
                <tr>
                    <td class="rowtitle-material">
                        الهدف العام للمقرر
                    </td>
                </tr>
                <tr>
                    <td >

                        <p style="white-space: pre-line;text-align: right">{!! $material->goal_general !!}</p>

                    </td>
                </tr>
            </table>

            <table class="subtable-material2" style="width: 100%; height: auto;">

                <tr>
                    <td colspan="2" class="rowtitle-material">الأهداف التفصيلية ( الخاصة ) للمقرر</td>
                </tr>
                @php
                    $goal_detailed = explode("\n", str_replace("\r", "", $material->goal_detailed));
                    $number =1;
                @endphp
                @foreach($goal_detailed as $value)
                <tr>
                    <td>{{$number++}}</td>
                    <td style="">
                        <p style="white-space: pre-line;text-align: right">{{$value}}</p>
                    </td>

                </tr>
                @endforeach
            </table>
        </td>
        <td colspan="6">

            <table style="width: 100%">

                <tr>
                    <td class="rowtitle-material">
                        اسم المقرر
                    </td>
                </tr>

                <tr>
                    <td style="vertical-align:middle;">
                        {{$material->name}}
                    </td>
                </tr>

            </table>

            <table style="width: 100%">

                <tr>
                    <td class="rowtitle-material" style="width: 296px">عدد مفردات المقرر</td>
                    <td style="vertical-align:middle;">{{$total}}</td>
                </tr>

            </table>


            <!-- Table of Goals-->
            <table class="subtable-material" style="width: 100%;">
                <tr>
                    <td class="rowtitle-material2" style="height: 39px">الرقم</td>
                    <td class="rowtitle-material2" style="height: 39px; width: 339px;">مفردات المقرر</td>
                    <td class="rowtitle-material2" style="height: 39px; width: 49px;">الساعات</td>
                </tr>
                @php
                    $counter =1;
                    $sum_hours=0;
                    $coun=0;

                @endphp
                @if(!$material_to_lesson==null)
                @foreach ($material_to_lesson->lessons as $lesson)
                    <tr>
                        <td class="numbering" style="">{{arabic_w2e($counter++)}}</td>
                        <td style="">{{$lesson['name']}}</td>
                        <td class="numbering" style="">{{arabic_w2e($lesson['value'])}}</td>
                        <input type="hidden" name="" value="  {{$sum_hours+=$lesson['value'] }}">


                    </tr>
                @endforeach
                @endif

                @php
                    for ($counter; $counter < 26; $counter++) {

                @endphp
                <tr>
                    <td>{{arabic_w2e($counter)}}</td>
                    <td></td>
                    <td></td>
                </tr>

                @php
                    }

                @endphp


            </table>
            <table style="width: 100%">
                <tr>
                    <td class="rowtitle-material2">&nbsp;المجموع</td>
                    <td class="rowtitle-material2" style="width: 69px">{{arabic_w2e($sum_hours)}}</td>
                </tr>
            </table>

            <!-- Table of Conditions-->


        </td>

    </tr>
    <tr>
        <td class="footer-material1" colspan="12" height="20" style="height: 15.0pt; width: 100%">
            <table dir="rtl" style="width: 100%">
                <tr>
                    <td colspan="4">
                        <table class="footertable3" width="100%" style="height: 166.5px">
                            <tr>
                                <td class="footertable3-header">الوسائل التدريبية</td>
                            </tr>
                            <tr id="border1-header">
                                <td>
                                    <table width="100%" style="height: 100%">
                                        @foreach ($training_methods as $value)
                                        <tr>


                                                <td style="height: 5px">

                                                    {{$value->name}}
                                                </td>

                                        </tr>


                                        @endforeach
                                    </table>
                                </td>
                            </tr>

                        </table>
                    </td>
                    <td colspan="4">
                        <table class="footertable2" width="100%" style="height: 166.5px">
                            <tr>
                                <td class="footertable2-header">أسلوب التدريس</td>
                            </tr>
                            <tr id="border1-header">
                                <td>
                                    <table width="100%" style="height: 100%">
                                        @foreach ($training_tools as $value)
                                        <tr>

                                                <td>
                                                    {{$value->name}}
                                                </td>

                                        </tr>
                                        @endforeach


                                    </table>
                                </td>
                            </tr>
                        </table>


                    </td>

                    <td colspan="4">
                        <table class="footertable1" width="100%" style="height: 166.5px">
                            <tr>
                                <td class="footertable1-header">رئيس اللجنة الفنية</td>
                            </tr>
                            <tr id="border1-header">
                                <td>
                                    <table width="100%">
                                        <tr>
                                            <td style="height: 15px">
                                                الــرتـبة :
                                            </td>
                                            <td style="height: 15px">
                             {{$material->rank_committee_chair  ?? '' }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                الإســم:
                                            </td>
                                            <td>
                                 {{$material->committee_chair ?? '    23342234423      '}}
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                التوقيع:
                                            </td>
                                            <td>
                                               {{$material->signature ?? ''}}
                                            </td>
                                        </tr>

                                    </table>
                                </td>
                            </tr>
                        </table>

                    </td>

                </tr>

            </table>

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
