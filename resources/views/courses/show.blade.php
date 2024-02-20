@extends('layouts.main1')

<br><br><br><br><br><br>
@section('content')
    @section('style')
        <style>
            #black{
                color: black !important;
            }
        </style>
    @endsection

    <div class="container">
        <div class="main-body">

            <!-- Breadcrumb -->
            <nav aria-label="breadcrumb" class="main-breadcrumb">
                <ol class="breadcrumb">

                    <li class="breadcrumb-item active" aria-current="page" style="
    color: white;
    font-size: 26px;
">

                       تفاصيل دورة:
                    {{$course->name}}
                    </li>
                </ol>
            </nav>
            <!-- /Breadcrumb -->
            <br>
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <div class="mt-3">
                                    <h4> </h4>
                                    <p class="text-secondary mb-1"> رمز الدورة: {{arabic_w2e($course->code)}}</p>
                                    <p class="text-muted font-size-sm" id="black" > مدة المنهج / الدورة
                                        (بالاسابيع):{{arabic_w2e($course->weeks_number)}}</p>
                                    <p class="text-muted font-size-sm" id="black">الفئة المستهدفة </p>
                                    <br>

                                    <td> @foreach ($course->targeted_class as $value)
                                              {{$value}}
                                        @endforeach
                                    </td>

                                </div>

                            </div>
                        </div>
                    </div>



                    <div class="card mb-3">
                        <div class="card-body">
                            <h3 style="text-align: center;"> شروط الالتحاق بالدورة </h3>
                            <div class="row">
                            </div>
                            <hr>
                            <p style="white-space: pre-line;TEXT-ALIGN: right;" id="black">{!! $course->enrollment_conditions !!}</p>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-body">
                            <h3 style="text-align: center;">الساعات الامنهجية </h3>

                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">البيان</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    الساعات المخصص لها
                                </div>
                            </div>
                            <hr>
                            @foreach (json_decode($course->extracurricular_hours) as $value1)
                                @foreach ($value1 as $key => $value)
                                    @if ($value != ''and $value != '0')
                                <div class="row">
                                    <div class="col-sm-5" style="text-align: right;">
                                        <h6 class="mb-0" id="black">{{ \App\Models\ExtracurricularHour::find($key)->name }} </h6>
                                    </div>
                                    <div class="col-sm-5 text-secondary">
                                        {{arabic_w2e($value) }}
                                    </div>
                                </div>
                                <hr>

                                    @endif
                                @endforeach
                            @endforeach

                        </div>
                    </div>

                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body" style="text-align: right">
                            <h3 style="text-align: center;">
                                الهدف العام من الدورة
                                  </h3>
                            <p style="white-space: pre-line" id="black">{!! $course->goal_general !!}</p>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-body" style="text-align: right">
                            <h3 style="text-align: center;">الإهداف
                                التفصيلية للدورة: </h3>

                            <p style="white-space: pre-line" id="black">{!! $course->goal_detailed !!}</p>

                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-body">
                            <h3 style="text-align: center;">المقررات الخاصه بي الدورة </h3>

                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">المنهج</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    الساعات الدرسية
                                </div>
                            </div>
                            <hr>
                            @foreach($course->Materials as $Material)
                                <div class="row">
                                    <div class="col-sm-3" style="text-align: right;">
                                        <a href="{{route('material.show',[$Material->id,$course->id])}}">
                                        <h6 class="mb-0" id="black">{{ $Material->name }} </h6>
                                        </a>

                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        @php
                                            $total_hours=App\Models\CourseMaterialLesson::where([
                                            'course_id' => $course->id,'material_id' => $Material->id])->get('hours');
                                        @endphp

                                        @foreach ($total_hours as $value)
                                            {{$value->hours}}
                                        @endforeach
                                    </div>
                                </div>
                                <hr>
                            @endforeach

                            <div class="row">

                            </div>
                        </div>
                    </div>


                </div>
            </div>


        </div>

    </div>






    </div>
    </div>

    </div>
