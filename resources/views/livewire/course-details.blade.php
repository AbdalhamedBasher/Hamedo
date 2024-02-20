<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="RTL">

<head >
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
    <title>بطاقة المراجعة الدورية</title>

    <link rel="stylesheet" href="{{asset('css/cards.css')}}" type="text/css"/>
</head>

<body dir="RTL">


<br/>




<table class="maintable-material">

    <tr>
        <td colspan="12">
            <table style="width: 100%">
                <tr>
                    <td class="auto-style-material2" colspan="2" style="width: 96pt">
                    {{ $course->code}}</td>
                    <td class="auto-style-material1" colspan="9" height="41" style="height: 30.75pt; width: 490pt">
                       000000000000
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td colspan="6" valign="top" class="tdmain">
            <table class="subtable-material2" style="width: 100%">
                <tr>
                    <td colspan="1" class="rowtitle-material">المعهد</td>
                    <!--                    <td colspan="1" class="rowtitle-material">الدورة</td>-->
                    <td colspan="1" class="rowtitle-material">المقرر الجديد</td>
                    <td colspan="1" class="rowtitle-material"> ساعات المقرر</td>
                    <td colspan="1" class="rowtitle-material">الملاحظة</td>
                    <td colspan="1" class="rowtitle-material">القيد</td>
                    <td colspan="1" class="rowtitle-material">الإجراء</td>
                </tr>
               00000000000

            </table>
        </td>
    </tr>
</table>
<div class="page-break"></div>

    <br>
    <br>
    <table class="maintable" id="tableAll">
        <tr>
            <td class="auto-style1" colspan="12" style="height: 31pt; width: 552pt">
                بطاقة مقترحة منهج دورة
            </td>
        </tr>
        <tr>
            <td colspan="6" class="tdmain">

                <table style="width: 100%">
                    <tr>
                        <td class="rowtitle">
                            اسم الدورة
                        </td>
                    </tr>
                    <tr>
                        <td>
                        {{ $course->name }}      </td>
                    </tr>

                </table>
                <table style="width: 100%">
                    <tr>
                        <td class="rowtitle">
                            الهدف العام من الدورة
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <p> {{ $course->goal_general}}</p>
                        </td>
                    </tr>
                </table>

                <!-- Table of Goals-->
                <table class="subtable" style="width: 100%">
                    <tr>
                        <td colspan="2" class="rowtitle">الأهداف التفصيلية ( الخاصة ) للدورة</td>

                    </tr>
                    <tr>
                        <td class="goals">
                        {{ $course->goal_detailed}}
                        </td>
                    </tr>
                </table>

                <!-- Table of Conditions-->
                <table class="subtable" style="width: 100%">
                    <tr>
                        <td colspan="2" class="rowtitle">شروط الإلتحاق بالدورة</td>
                    </tr>



                        <tr>
                            <td>{{ $course->enrollment_conditions}}</td>

                            </td>
                        </tr>



                </table>
            </td>

            <td colspan="6" valign="top" class="tdmain">
                <table style="width: 100%">
                    <tr>
                        <td class="rowtitle">رمز الدورة</td>
                        <td>000000000000</td>
                    </tr>
                </table>
                <table style="width: 100%; height: 65px;">
                    <tr>
                        <td class="rowtitle" colspan="4">الفئة المستهدفة</td>
                    </tr>
                    <tr>
                        <td>ضباط <input type="checkbox" disabled  /></td>
                        <td>أفراد <input type="checkbox" disabled  /></td>
                        <td>طلاب <input type="checkbox" disabled ></td>
                        <td>مشتركة <input type="checkbox" disabled /></td>
                    </tr>

                </table>

                <table style="width: 100%; height: 30px;">
                    <tr>

                            <td class="rowtitle">مدة الدورة بالأسابيع السابقة</td>
                            <td>

                    </tr>
                    <tr>

                            <td class="auto-style1">مدة الدورة بالأسابيع المحدث</td>
                            <td></td>

                    </tr>





                </table>
                <table class="subtable2" style="width: 100%">
                    <tr>
                        <td class="rowtitle2" style="height: 39px">ت</td>
                        <td class="rowtitle2" style="height: 39px">اسم المادة</td>
                        <td class="rowtitle2" style="height: 39px">
                            عدد الساعات
                        </td>
                    </tr>

                        <tr>
                            <td>000</td>
                            <td>00000</td>
                            <td>

00000

                            </td>

                        </tr>

                        <tr>
                            <td>0000000000000</td>
                            <td>0000000000000</td>
                            <td>00000000000</td>
                        </tr>



                        <tr>
                            <td>00000000</td>
                            <td>00000</td>
                            <td>0000000</td>
                        </tr>



                    <tr>
                        <td colspan="3">
                            <table style="width: 100%">
                                <tr>
                                    <td class="rowtitle2">المجموع</td>
                                    <td class="rowtitle2"
                                        style="width: 154px">0000</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <table class="subtable2" style="width: 100%">


                                <tr>
                                    <td>افتتاح الدورة</td>
                                    <td style="width: 154px">
                                        00
                                    </td>
                                </tr>
                                <tr>
                                    <td>يوم الطالب</td>
                                    <td style="width: 154px">
                                       000

                                    </td>

                                </tr>
                                <tr>
                                    <td>إجازة منتصف الدورة</td>
                                    <td style="width: 154px">

                                        00000
                                    </td>


                                </tr>
                                <tr>
                                    <td>وقت القائد</td>
                                    <td style="width: 154px">
                                        000000000
                                    </td>


                                </tr>
                                <tr>
                                    <td>إجراءات التخرج</td>
                                    <td style="width: 154px">

                                       000000000
                                    </td>


                                </tr>

                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <table style="width: 100%; height: 39px;">
                                <tr>
                                    <td class="rowtitle2">المجموع</td>
                                    <td class="rowtitle2"
                                        style="width: 154px">000000</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>


        <tr>
            <td class="footer" colspan="12" height="20" style="height: 15.0pt; width: 552pt" width="735">
                تم اعتماد تطبيق هذا المنهج بأمر معالي قائد قوات الدفاع الجوي ضمن
                المراجعة الدورية للمناهج للأعوام التدريبية (1435هـ/1436هـ)
                (1436هـ/1437هـ) (1438هـ/1439هـ)
            </td>
        </tr>


    </table>

</body>

</html>
