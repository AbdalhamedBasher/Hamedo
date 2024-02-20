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
">تفاصيل مقرر:{{$material->name}}</li>
            </ol>
          </nav>
        <br>
          <!-- /Breadcrumb -->
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <div class="mt-3">
                      <h4>  {{$material->name}}</h4>
                      <p class="text-secondary mb-1" id="black">  {{$material->code}}</p>
                      <p class="text-muted font-size-sm" id="black"> مجموع الحصص:{{arabic_w2e($material->lessons_hours)}}</p>
                        <!-- <p class="text-muted font-size-sm">الفئة المستهدفة 	 </p> -->
                        <br>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h3 class="text-secondary" id="black">الدورات التي يدرس فيها هذا المقرر </h3>
                  </li>
                 @foreach($material->courses as $value)
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                      <a href="{{route('courses.show',$value->id)}}">
                    <span class="text-secondary" id="black">{{$value->name}}	</span>
                      </a>
                  </li>
                  @endforeach
                </ul>
              </div>
            </div>
            <div class="col-md-8">

                <div class="card mb-3">
                    <div class="card-body">
                        <h3 style="text-align: center;"> الهدف العام للمقرر</h3>
                        <p style="white-space: pre-line;text-align: right" id="black">{!! $material->goal_general!!}</p>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <h3 style="text-align: center;">  الأهداف التفصيلية ( الخاصة ) للمقرر</h3>
                        <p style="white-space: pre-line;text-align: right" id="black">{!! $material->goal_detailed!!}</p>
                    </div>
                </div>
              <div class="card mb-3">
                <div class="card-body">
                  <h3 style="text-align: center;">المفردات الخاصة بالمقرر</h3>
                  <div class="row">

                    <div class="col-sm-3">
                      <h6 class="mb-0" >مفرددات المقرر</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       الساعات
                    </div>
                  </div>
                  <hr>

                    @foreach ($material_to_lesson->lessons as $lesson)
                <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0" style="text-align: right" id="black">{{$lesson["name"]}}</h6>
                    </div>
                    <div class="col-sm-9 text-secondary" id="black">
                      {{arabic_w2e($lesson["value"])}}
                    </div>

                  </div>
                  <hr>
                    @endforeach

                  <div class="row">
                  </div>
              </div>
                  <div>

                      @if($material_to_lesson->material_ref !=null)
                          <h3  style="text-align: center;">المقررات دخل المفردات</h3>
                          @foreach(json_decode($material_to_lesson->material_ref) as $value)

                              <div style="text-align: right;margin-right: 10px" >
                                  <h3>*<a style="color: black" data-toggle="collapse" href="#id{{$value->material_id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
                                          {{ App\Models\Material::find($value->material_id)->name }}
                                      </a></h3>
                              </div>

                              <div class="collapse" id="id{{$value->material_id}}">
                                  <div class="card card-body">
                                      @foreach($value->lessons as  $item)
                                          <h6 class="mb-0" style="text-align: right" id="black">{{$item->name}}</h6>
                                          <div class="col-sm-9 text-secondary" id="black">
                                              {{arabic_w2e($item->value)}}
                                          </div>

                                      @endforeach
                                  </div>
                              </div>

                          @endforeach
                      @endif
                  </div>

                </div>
              </div>



            </div>
          </div>

        </div>
    </div>

</div>
