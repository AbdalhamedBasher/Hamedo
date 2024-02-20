@extends('layouts.main1')
<br><br><br><br><br><br>
@section('content')
<div class="container mx-auto" >
    <br />
    <div class="flex items-center markdown">
        <h1 style="font-size: 2em;"><b>التقييم</b></h1> || {{ auth()->guard('evaluation')->user()->name }}
    </div>
    <br />
    <div class="row">
      @foreach($materials as $materia)
         

          @if($materia->done =="1")
                <div class="col-xl-3 col-sm-6 col-12" >
                    <div class="card  display: inline-block"  >
                        <div class="card-content"style="background: green;">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="icon-pencil primary font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3 style="color: white;">{{$materia->material->name}} </h3>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card  display: inline-block"  >
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">
                                        <i class="icon-pencil primary font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3>{{$materia->material->name}} </h3>
                                        <a href="{{route('evaluationMaterial',$materia->material->id)}}" class="stretched-link"></a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
          @endif

    @endforeach

    </div>



</div>
