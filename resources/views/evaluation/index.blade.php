@extends('layouts.main1')
<br><br><br><br><br><br>
@section('content')
<div class="container mx-auto" >
    <br />
    <div class="flex items-center markdown">
        <h1 style="font-size: 2em;"><b>التقييم</b></h1> || {{ auth()->guard('evaluation')->user()->username }}
    </div>
    <br/>

    @if(Session::has('message'))
        <p class="alert alert-danger" style="direction: rtl;text-align: right;">{{ Session::get('message') }}</p>
    @endif
    <div class="row">
      @php
        $user=  auth()->guard('evaluation')->user();
       $answer= App\Models\Answer::where(['material_id'=>NUll ,'teacher_id'=>NUll,'user_id'=>$user->id])->first();


      @endphp
      @if (is_null($answer))

      <div class="col-xl-3 col-sm-6 col-12">
        <div class="card  display: inline-block"  style="width: 15rem;">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="icon-pencil primary font-large-2 float-left"></i>
                </div>
                <div class="media-body text-right">
                  <h3> تقييم الدورة </h3>
                  <a href="{{route('evaluationCourses')}}" class="stretched-link"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @else
      <div class="col-xl-3 col-sm-6 col-12">
        <div class="card  display: inline-block"  style="width: 15rem;">
          <div class="card-content" style="background: green;">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="icon-pencil primary font-large-2 float-left"></i>
                </div>
                <div class="media-body text-right">
                  <h3> تقييم الدورة </h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endif

      <div class="col-xl-3 col-sm-6 col-12">
        <div class="card display: inline-block">
          <div class="card-content" >
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="icon-pencil primary font-large-2 float-left"></i>
                </div>
                <div class="media-body text-right">
                  <h3>تقييم المقرر </h3>
                <a href="{{route('evaluationMaterials')}}" class="stretched-link"></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @if(auth()->guard('evaluation')->user()->type=="S")

      <div class="col-xl-3 col-sm-6 col-12">
        <div class="card display: inline-block">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="icon-pencil primary font-large-2 float-left"></i>
                </div>
                <div class="media-body text-right">
                  <h3>تقييم المعلم</h3>
                <a href="{{route('evaluationTeachers')}}" class="stretched-link"></a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
     
      @else
      <div></div>
      @endif
    </div>



</div>
