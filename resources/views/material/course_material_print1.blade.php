<html dir="rtl">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="{{ asset('font/Cairo-Black.ttf') }}" rel="stylesheet">
    <script type="text/javascript" src="{{asset('js/jquery-1.12.1.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('js/print.js')}}"></script>


</head>
<style type="text/css" media="print">
    @page {
        size: auto;
        margin: 0;
    }
</style>
<style>
    body {

    }
</style>
<style>

    * {
        /* font-family: DejaVu Sans, sans-serif; */
        text-align: center;

    }

    /* body {
        style="font-family:Arial"
    } */


    .page-break {
        display: block;
        page-break-before: always;
    }

    .auto-style1 {
        color: white;
        font-size: 16.0pt;
        font-weight: 400;
        font-style: normal;
        text-decoration: none;
        font-family: AdvertisingExtraBold;
        text-align: center;
        vertical-align: middle !important;
        white-space: nowrap;
        border-style: none;
        border-color: inherit;
        border-width: medium;
        padding-left: 1px;
        padding-right: 1px;
        padding-top: 1px;
        /*background: #4F6228;*/
        background: #13494a;
    }

    .footer {
        color: black;
        font-size: 8.0pt;
        font-weight: 400;
        font-style: normal;
        text-decoration: none;
        font-family: AdvertisingBold;
        text-align: center;
        vertical-align: bottom;
        white-space: nowrap;
        border-left-style: none;
        border-left-color: inherit;
        border-left-width: medium;
        border-right-style: none;
        border-right-color: inherit;
        border-right-width: medium;
        border-top: 1.0pt solid windowtext;
        border-bottom-style: none;
        border-bottom-color: inherit;
        border-bottom-width: medium;
        padding-left: 1px;
        padding-right: 1px;
        padding-top: 1px;
    }

    .maintable {

        margin-right: auto;
        margin-left: auto;
        border: 2px solid #000;
        text-align: center;
        /*width: 900px;*/
        width: auto;
        DIRECTION: RTL;


    }

    .maintable td {
        vertical-align: top;
    }

    .subtable td {
        /*background: #EBF1DE;*/
        background: #fff !important;
        border: 1px black solid;
        text-align: right;
        height: 30px;
        padding-right: 5px;
        vertical-align: middle !important;
    }

    .subtable2 td {
        background: #fff !important;
        border: 1px black solid;
        vertical-align: middle !important;
        height: 20px;
    }


    .rowtitle {
        color: black;
        font-size: 14.0pt;
        font-weight: 400;
        font-style: normal;
        text-decoration: none;
        /*font-family: "AL-Mohanad Bold";*/
        text-align: center;
        vertical-align: middle !important;
        /*background: #C4D79B !important;*/
        background: #a3b1ba !important;
        border: 1px solid #000;
        height: 28px
    }

    .rowtitle2 {
        color: black;
        font-size: 12.0pt;
        font-weight: 700;
        font-style: normal;
        text-decoration: none;
        /*	font-family: "AL-Mohanad Bold";*/
        text-align: center;
        vertical-align: middle !important;
        white-space: nowrap;
        /*	background: #963634 !important;*/
        background-color: #a3b1ba !important;
    }


    .auto-style-material1 {
        color: white;
        font-size: 16.0pt;
        font-weight: 400;
        font-style: normal;
        text-decoration: none;
        font-family: AdvertisingExtraBold;
        text-align: center;
        vertical-align: middle !important;
        white-space: nowrap;
        border-style: none;
        border-color: inherit;
        border-width: medium;
        padding: 0px;
        background: forestgreen;
        /*background-color: #a3b1ba !important;*/
        /*	background-color: #13494a !important;*/
    }

    .footer-material1 {
        color: black;
        font-size: 8.0pt;
        font-weight: 400;
        font-style: normal;
        text-decoration: none;
        font-family: AdvertisingBold;
        text-align: center;
        vertical-align: bottom;
        white-space: nowrap;
        border-left-style: none;
        border-left-color: inherit;
        border-left-width: medium;
        border-right-style: none;
        border-right-color: inherit;
        border-right-width: medium;
        border-top: 1.0pt solid windowtext;
        border-bottom-style: none;
        border-bottom-color: inherit;
        border-bottom-width: medium;
        padding-left: 1px;
        padding-right: 1px;
        padding-top: 1px;
    }

    .maintable-material {
        margin-right: auto;
        margin-left: auto;
        border: 1px forestgreen solid;
        text-align: center;
        width: 900px;

    }

    .maintable-material td {
        height: 40px;
        vertical-align: top;
    }

    .subtable-material td {
        background: #EBF1DE;
        border: 1px forestgreen solid;
        vertical-align: middle !important;
        /*text-align:right;*/
    }

    .subtable-material2 td {
        background: #DDEBF7;
        border: 1px forestgreen solid;
        vertical-align: middle !important;
        text-align: right;
    }


    .rowtitle-material {
        color: black;
        font-size: 14.0pt;
        font-weight: 400;
        font-style: normal;
        text-decoration: none;
        /*	font-family: "AL-Mohanad Bold";*/
        text-align: center !important;
        vertical-align: middle !important;
        /*	background: #9BC2E6!important;*/
        background-color: #a3b1ba !important;
        border: 1px forestgreen solid;
        height: 28px
    }

    .rowtitle-material2 {
        color: black;
        font-size: 12.0pt;
        font-weight: 700;
        font-style: normal;
        text-decoration: none;
        /*	font-family: "AL-Mohanad Bold";*/
        text-align: center !important;
        vertical-align: middle !important;
        white-space: nowrap;
        /* background: #548235!important; */
        background-color: #a3b1ba !important;
        border: 1px forestgreen solid;
    }

    .auto-style-material2 {
        color: #2F75B5;
        font-size: 16.0pt;
        font-weight: 400;
        font-style: normal;
        text-decoration: none;
        font-family: AdvertisingExtraBold;
        text-align: center;
        vertical-align: middle !important;
        white-space: nowrap;
        border-style: none;
        border-color: inherit;
        border-width: medium;
        padding: 0px;
    }

    .numbering {

        vertical-align: middle !important;
        text-align: center !important;
        width: 30px;
    }

    .subtable-material2 td {
        height: 25px !important;
    }

    .subtable-material td {
        /*height:23px !important;*/
        height: 10px !important;
        font-size: 13px;
        font-weight: 600;
    }

    .footertable1-header {
        color: black;
        font-size: 13.0pt;
        font-weight: bold;
        font-style: normal;
        text-decoration: none;
        text-align: center;
        vertical-align: middle;
        /*background: #305496 !important;*/
        background-color: #a3b1ba !important;
    }

    #border1-header td {
        border-top: 1.0pt forestgreen solid;
        border-right: 1.0pt forestgreen solid;
        border-left: 1.0pt forestgreen solid;
        border-bottom: 1.0pt forestgreen solid;

    }

    .footertable2-header {
        color: black;
        font-size: 13.0pt;
        font-weight: bold;
        font-style: normal;
        text-decoration: none;
        text-align: center;
        vertical-align: middle !important;
        /*	background: #7B7B7B !important;*/
        background-color: #a3b1ba !important;
        border: 1px forestgreen solid;

    }

    .footertable3-header {
        color: black;
        font-size: 13.0pt;
        font-weight: bold;
        font-style: normal;
        text-decoration: none;
        text-align: center;
        vertical-align: middle !important;
        /* background: #C65911 !important;*/
        background-color: #a3b1ba !important;
        border: 1px forestgreen solid;
    }

    .footertable3 td {
        /*background: #F4B084;*/
    }

    .footer-material1.footertable3 {
        border-left-style: none;
        border-left-color: inherit;
        border-left-width: medium;
        border-right-style: none;
        border-right-color: inherit;
        border-right-width: medium;
        border-top: 1.0pt solid windowtext;
        border-bottom-style: none;
        border-bottom-color: inherit;
        border-bottom-width: medium;
    }

    .footertable2 td {
        /* background: #C9C9C9;*/
        vertical-align: middle;
    }

    .footertable1 td {
        /* background: #8EA9DB;*/

        font-size: 12pt;
        font-weight: bold;
        vertical-align: middle;
    }


    .tdmain {
        width: 60%;
    }


    /*span.line {
        width: 524px;
        height: 0px;
        border-bottom: 1px solid black;
        position: absolute;
        x: inherit;
        margin-right: -520px;
    }*/

    td.goals {
        height: 550px !important;
        vertical-align: top !important;
        line-height: 1.4;
        background: #fff;
    }

    td.goals2 {
        height: 30px !important;
        vertical-align: top !important;
        line-height: 1.4;
        background: #fff;
    }

    table.subtable-material {
        height: 810px;
    }

    td.rowtitle2 {
        background-color: #a3b1ba !important;
    }

    td.rowtitle {
        background-color: #a3b1ba !important;
        font-weight: bold !important;
    }

    pre {

        text-align: right !important;

    }
</style>
<body dir="RTL">
@php

        @endphp
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
                        {{$material->name}}

                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td colspan="6" valign="top" class="tdmain">

            <table class="subtable-material2" style="width: 100%">
                <tr>
                    <td colspan="2" class="rowtitle-material">الدورات التي يُدرس فيها هذا المقرر</td>

                </tr>
                @php
                    $counter =1;
                    $sum_hours=0;
                @endphp
                @foreach($material->courses as $course)

                    <tr>
                        <td style="background-color: white;">{{arabic_w2e($counter++)}}</td>
                        @php
                            $total_hours=App\Models\CourseMaterialLesson::where([
                            'course_id' => $course->id,'material_id' => $material->id])->get('hours');
                        @endphp

                        @foreach ($total_hours as  $value)

                        @endforeach


                        <td style="background-color: white;">{{$course->name}} ({{$value->hours}})</td>

                    </tr>

                @endforeach
                @php
                    for ($counter; $counter < 15; $counter++) {

                @endphp
                <tr>
                    <td>{{arabic_w2e($counter)}}</td>
                    <td>  </td>
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
                    <td style="vertical-align:middle;">
                        <pre>	{!! $material->goal_general !!}</pre>
                    </td>
                </tr>
            </table>

            <table class="subtable-material2" style="width: 100%; height: 300px;">
                <tr>
                    <td colspan="2" class="rowtitle-material">الأهداف التفصيلية ( الخاصة ) للمقرر</td>
                </tr>

                <tr>

                    <td style="background-color: white;">
                        <pre>{!! $material->goal_detailed !!}</pre>
                    </td>
                </tr>

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
            <table class="subtable-material" style="width: 100%; ">
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
                @foreach ($material->lessons as $lesson)
                    <tr>
                        <td class="numbering" style="background-color: white;">{{arabic_w2e($counter++)}}</td>
                        <td style="background-color: white;">{{$lesson['name']}}</td>
                        <td class="numbering" style="background-color: white;">{{arabic_w2e($lesson['value'])}}</td>
                        <input type="hidden" name="" value="  {{$sum_hours+=$lesson['value'] }}">


                    </tr>
                @endforeach
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

                                        <tr>
                                            @foreach ($training_methods as $value)

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
                                        <tr>
                                            @foreach ($training_tools as $value)
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
                                                00
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                الإســم:
                                            </td>
                                            <td>
                                                0
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                التوقيع:
                                            </td>
                                            <td>
                                                رئيس اللجنة الفنية رقم (7)
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


</body>

</html>
<script>window.onload = function () {
        window.print();
    }  </script>

<script>
    window.addEventListener('afterprint', (event) => {
        window.close();

    });
</script>
