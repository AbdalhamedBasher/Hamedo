@extends('layouts.main')
<br><br><br><br><br><br>
@section('content')
<div class="container">
    <form method="POST" action="{{ route('evaluationStore') }}" style="text-align: right;">
        @csrf
        <input type="hidden" name="material_id" value="{{$userSurvey->material_id}}">
        <input type="hidden" name="teacher_id" value="{{$userSurvey->teacher_id}}">

        @include('survey::standard', ['survey' => $survey])
    </form>
</div>



@endsection
