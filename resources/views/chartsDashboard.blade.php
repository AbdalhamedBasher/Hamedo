<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>

  <link rel="stylesheet" href="{{asset('css/bootstrap5_2.css')}}">
  {{-- <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script> --}}
  <script src="{{ asset('js/jquery.3.7.0.min.js')}}"></script>
  <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('js/dataTables.min.js')}}"></script>
  {{--
  public\js\jquery.3.7.0.min.js

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" --}} {{--
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> --}}
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link href="{{ asset('font-awesome-4.7.0/css/font-awesome.css') }}" rel="stylesheet" />
  <script src="{{ asset('js/jquery-3.6.0.min.js')}}" defer></script>
  <script src="{{ asset('js/apexchart.js')}}"></script>
  <link href="{{ asset('css/jquery.dataTables.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/buttons.dataTables.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/select.dataTables.min.css') }}" rel="stylesheet" />
  <script src="{{ asset('js/jquery.3.7.0.min.js')}}"></script>
  {{-- <script src="https://cdn.datatables.net/v/bs4/dt-1.13.6/b-2.4.2/datatables.min.js"></script> --}}
  <title>لوحة التحكم</title>
  <style>
    .navbar-nav {
      margin: auto;
    }


    .nav-item {
      background-color: rgb(17, 115, 91);
      margin: 0 5px;

    }

    .spec_card {

      /* box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      margin-bottom: 2rem !important;
      max-height: 28.5rem !important;

      overflow-y: scroll;
      min-height: 28.5rem !important; */
    }

    .dataTables_wrapper .dataTables_scroll div.dataTables_scrollBody {
      overflow-y: scroll !important;
      max-height: 20rem !important;
    }

    .card hr {
      width: 100%;
      margin: 0;
    }

    .thick-blue-border {
      height: 5px;
      background-color: rgb(17, 115, 91);
      width: 94%;
      margin-left: auto;
      margin-right: auto;
    }

    .white-text {
      color: white;
    }

    .white-ul {
      color: white;
    }

    .list-group-item {
      text-align: center !important;
    }

    .card-header,
    .list-group-item {
      text-align: center !important;
    }

    .centered-text {

      text-align: center !important;


    }

    .container-2 {
      margin-left: auto;
      margin-right: auto;

      display: grid;
      width: 94%;
      grid-template-columns: 1fr 1fr;
      column-gap: 0;
    }

    .students {
      margin-top: 35%;
    }


    .apexcharts-pie-label {
      font-size: 20px;
    }

    .apexcharts-legend-text {
      font-size: 20px !important !important;
      width: max-content !important;
      padding-left: 0px !important;
      margin-left: 0px !important;
      text-overflow: ellipsis;
    }

    .apexcharts-tooltip {
      font-size: 20px !important;
    }

    .apexcharts-legend-series {
      font-size: 1.5rem !important;

    }

    .apexcharts-legend {
      width: max-content !important;
    }

    #percent1 {
      max-width: 650px;
      margin: 35px auto;
    }


    .car .card-header {
      background-color: whitesmoke !important;
    }





    .container-1 {
      margin-left: auto;
      margin-right: auto;

      display: grid;
      width: 100%;
      grid-template-columns: 1fr;
      column-gap: 0px;

    }

    .teachers {
      margin-top: 200px;
    }









    @media (max-width: 1000px) {
      .container-1 {
        grid-template-columns: 1fr;
        justify-items: center;


      }

      .box .box2 {
        width: 100%;
      }

      .Electronic-system-state,
      .system-state {
        margin-right: 73px;
      }

      .container-2 {
        margin-left: auto;
        margin-right: auto;

        display: grid;
        width: 94%;
        grid-template-columns: 1.5fr 1fr;
        column-gap: 0;
      }

      /* .my-cards {
        z-index: 1;
        margin-bottom: 500px;
      } */

      .box1,
      .box2 {
        width: 90%;

      }

      .individual-units {
        width: 10%;
      }

      .teachers {
        margin-top: 100px;
      }

      .container-2 {
        display: grid;
        grid-template-columns: 1fr;
      }

      .the-grid {
        padding-left: 13%;
      }

      .title {
        margin-right: 3%;
        margin-top: 0px;
        font-size: 16px;

      }

    }
  </style>
</head>

<body style="background-color:rgb(245, 246, 247)" onload="space_load()">

  <div class="container-fluid mb-1 shadow-sm" style="background-color: whitesmoke">
    <nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-between">

      {{-- <img class="navbar-brand" src="/img/logo.png" style="width:70px;height: 70px;"> --}}


      <h5 class="text-center title fw-bold">
        رسوم وأعمدة بيانية توضح تقييمات الطلاب والمعلمين لنظام التعليم الإلكتروني

      </h5>
      <br>



      <a href="{{route('admin.home')}}" class="btn btn-primary fixed"
        style="background-color: rgb(17, 115, 91); border-color:rgb(17, 115, 91)"> الصفحة الرئيسية</a>
    </nav>

    {{-- @dd($item_sum,$bar) --}}


  </div>
  <div class="col-12 d-flex" style="padding-right:9px: margin-top:8px">
    <div class="col-8 pr-3 pr"><select class="form-select m-3 yr" onchange="page_convert(this.value,$('.un').val())">
        <option> العام التدريبي</option>
        @foreach (\App\Models\trainingplanyear::get() as $item)

        <option value={{$item->id}} {{$item->id==$year->id?"selected":""}}> {{$item->name}}</option>
        @endforeach
      </select>
    </div>
    @if ( auth()->user()->roles[0]->id==1 )




    <div class="col-8 pr-3"><select class="form-select m-3 un" onchange="page_convert($('.yr').val(),this.value)">
        <option value="0">الوحدات</option>
        @foreach (\App\Models\unit::get() as $item)
        {{$item->id}}
        <option value={{$item->id}} {{$item->id==$unit?"selected":""}}> {{$item->id}}</option>
        @endforeach
      </select>
    </div>


    @else


    @endif
  </div>






  <div class="row text-center m-2 mt-3">

    <div class="col-lg-4 col-md-12 col-6 mb-4">
      <div class="card">
        <div class="card-body">
          <div class="card-title d-flex align-items-start justify-content-between">
            <div class="avatar flex-shrink-0">
              <div class="row">
                <div class="col">
                  <i class="fa fa fa-desktop text-right;" style="color:rgb(17, 115, 91) ;font-size:3rem"></i>
                </div>
                <div class="col">
                  <h3>الدورات</h3>
                </div>
              </div>
            </div>

          </div>
          <div class="row">
            <div class="col-4  ">
              <span class="d-block mb-1 text-secondary">منتهية</span>
              <h3 class="card-title mb-2" style="color:rgb(17, 115, 91);font-size:2.5rem;font-weight:bold">
                {{$card['fininshed_courses']}}</h3>
            </div>
            <div class="col-4   ">
              <span class="d-block mb-1 text-secondary">المنعقدة</span>
              <h3 class="card-title mb-2" style="color:rgb(17, 115, 91);font-size:2.5rem;font-weight:bold">
                {{$card['now_courses']}}</h3>
            </div>
            <div class="col-4  ">
              <span class="d-block mb-1 text-secondary">مجدولة</span>
              <h3 class="card-title mb-2" style="color:rgb(17, 115, 91);font-size:2.5rem;font-weight:bold">
                {{$card['future_courses']}}</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-12 col-6 mb-4">
      <div class="card">
        <div class="card-body">
          <div class="card-title d-flex align-items-start justify-content-between">
            <div class="avatar flex-shrink-0">
              <div class="row">
                <div class="col">
                  <i class="fa fa-users text-right;" style="color:rgb(17, 115, 91) ;font-size:3rem"></i>
                </div>
                <div class="col">
                  <h3>الحضور </h3>
                </div>
              </div>
            </div>

          </div>
          <div class="row">
            <div class="col-6">
              <span class="d-block mb-1 text-secondary">الحضور</span>
              <h3 class="card-title mb-2" style="color:rgb(17, 115, 91);font-size:2.5rem;font-weight:bold">
                {{$card['now_students']-$card['absent_students']}}</h3>
            </div>
            <div class="col-6">
              <span class="d-block mb-1 text-secondary">الغياب</span>
              <h3 class="card-title mb-2" style="color:rgb(17, 115, 91);font-size:2.5rem;font-weight:bold">
                {{$card['absent_students']}}</h3>
            </div>

          </div>
        </div>
      </div>
    </div>


    <div class="col-lg-4 col-md-12 col-6 mb-4">
      <div class="card">
        <div class="card-body">
          <div class="card-title d-flex align-items-start justify-content-between">
            <div class="avatar flex-shrink-0">
              <div class="row">
                <div class="col">
                  <i class="fa fa fa-graduation-cap text-right;" style="color:rgb(17, 115, 91) ;font-size:3rem"></i>
                </div>
                <div class="col">
                  <h3>الطلاب</h3>
                </div>
              </div>
            </div>

          </div>
          <div class="row">
            <div class="col-4">
              <span class="d-block mb-1 text-secondary">المتخرجين</span>
              <h3 class="card-title mb-2" style="color:rgb(17, 115, 91);font-size:2.5rem;font-weight:bold">
                {{$card['past_students']}}</h3>
            </div>
            <div class="col-4">
              <span class="d-block mb-1 text-secondary">الطلبة</span>
              <h3 class="card-title mb-2" style="color:rgb(17, 115, 91);font-size:2.5rem;font-weight:bold">
                {{$card['now_students']}}</h3>
            </div>
            <div class="col-4">
              <span class="d-block mb-1 text-secondary">المرشحين</span>
              <h3 class="card-title mb-2" style="color:rgb(17, 115, 91);font-size:2.5rem;font-weight:bold">
                {{$card['future_students']}}</h3>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- 'future_student'=>$future_student,'now_students'=> $now_students,'past_student'=> $past_student --}}

  </div>

  <h2 class="mt-4 m-2 mr-2">
    تقييم الطلاب
  </h2>
  <div class="row mb-4 mx-2">
    <div class="col-4">
      <div class="card" style="background-color:whitesomke">

        <div class="card-header bg-white">
          <h3 class="text-center bg-silver m-2">
            الدورات
          </h3>
        </div>
        <div class="card-body" style="margin: 0.5rem;">
          <div id="chart-five" style="width:30rem;" class="px-5h-100 d-inline-block m-1">

          </div>
        </div>

      </div>
    </div>
    <div class="col-4">
      <div class="card">
        <div class="card-header bg-white">
          <h3 class="text-center" id="">
            مجالات
            الاستبيان</h3>
        </div>
        <div class="card-body">
          <div class="col-md-8">


            <div>
              <button class="btn btn-sm btn-primary" style="background-color: rgb(17, 115, 91)"
                onclick="space_all('courseStudent',chartFive.w.config.series)">الكل</button>
            </div>



          </div>
          <div id="spaces_CourseStudent" class=""></div>
        </div>
      </div>

    </div>
    <div class="col-4">
      <div class="card spec_card" style="hight:100%">
        <div class="card-header bg-white">
          <h3 class="text-center title">
            تفاصيل
            الاستبيان</h3>
        </div>
        <div class="card-body mb-3">








          <table class="table table-striped datatable" class="mb-3" id="teacherTable">
            <thead>
              <tr id="#teacher">
                <th>#</th>
                <th>إسم الوحدة</th>
                <th> إسم الدورة</th>
                <th>رمز الدورة</th>

                <th>نسبة الإجابة </th>

              </tr>

            </thead>
            <tbody id="CourseStudentspaces_update">
              <tr>
                <td>&ensp;</td>
                <td>&ensp;</td>
                <td> &ensp;</td>
                <td> &ensp; </td>
                <td> &ensp; </td>
                <td> &ensp; </td>

              </tr>
              <tr>
                <td>&ensp;</td>
                <td>&ensp;</td>
                <td> &ensp;</td>
                <td> &ensp; </td>
                <td> &ensp; </td>
                <td> &ensp; </td>

              </tr>
              <tr>
                <td>&ensp;</td>
                <td>&ensp;</td>
                <td> &ensp;</td>
                <td> &ensp; </td>
                <td> &ensp; </td>
                <td> &ensp; </td>

              </tr>
              <tr>
                <td>&ensp;</td>
                <td>&ensp;</td>
                <td> &ensp;</td>
                <td> &ensp; </td>
                <td> &ensp; </td>
                <td> &ensp; </td>

              </tr>
              <tr>
                <td>&ensp;</td>
                <td>&ensp;</td>
                <td>&ensp;</td>
                <td>&ensp; </td>
                <td> &ensp; </td>
                <td> &ensp; </td>
              </tr>
              <tr>
                <td>&ensp;</td>
                <td>&ensp;</td>
                <td> &ensp;</td>
                <td>&ensp; </td>
                <td> &ensp; </td>
                <td> &ensp; </td>
              </tr>
              <tr>
                <td>&ensp;</td>
                <td>&ensp;</td>
                <td>&ensp;</td>
                <td> &ensp; </td>
                <td> &ensp; </td>
                <td> &ensp; </td>
              </tr>



            </tbody>
          </table>
        </div>
      </div>


    </div>
  </div>

  <div class="row mb-4 mx-2">
    <div class="col-4">
      <div class="card" style="background-color:whitesomke">

        <div class="card-header bg-white">
          <h3 class="text-center bg-silver m-2">
            المقررات
          </h3>
        </div>
        <div class="card-body" style="margin: 0.5rem;">
          <div id="chart-six" style="width:30rem;min-height: 363.7px" class="px-5h-100 d-inline-block m-1">

          </div>
        </div>

      </div>
    </div>
    <div class="col-4">
      <div class="card">
        <div class="card-header bg-white">
          <h3 class="text-center" id="">
            مجالات
            الاستبيان</h3>
        </div>
        <div class="card-body">
          <div class="col-md-8">

            <div>
              <button class="btn btn-sm btn-primary" style="background-color:rgb(17, 115, 91)"
                onclick="space_all('materialStudent',chartSix.w.config.series)">الكل</button>
            </div>




          </div>
          <div id="spaces_materialStudent" class=""></div>
        </div>
      </div>

    </div>
    <div class="col-4">
      <div class="card spec_card" style="hight:100%">
        <div class="card-header bg-white">
          <h3 class="text-center title">
            تفاصيل
            الاستبيان</h3>
        </div>
        <div class="card-body mb-3">








          <table class="table table-striped datatable" class="mb-3" id="teacherTable">
            <thead>
              <tr id="#teacher">
                <th>#</th>
                <th>إسم الوحدة</th>
                <th> إسم الدورة</th>
                <th>رمز الدورة</th>
                <th>نسبة الإجابة </th>

              </tr>

            </thead>
            <tbody id="materialStudentspaces_update">
              <tr>
                <td>&ensp;</td>
                <td>&ensp;</td>
                <td> &ensp;</td>
                <td> &ensp; </td>
                <td> &ensp; </td>


              </tr>
              <tr>
                <td>&ensp;</td>
                <td>&ensp;</td>
                <td> &ensp;</td>
                <td> &ensp; </td>
                <td> &ensp; </td>


              </tr>
              <tr>
                <td>&ensp;</td>
                <td>&ensp;</td>
                <td> &ensp;</td>
                <td> &ensp; </td>
                <td> &ensp; </td>


              </tr>
              <tr>
                <td>&ensp;</td>
                <td>&ensp;</td>
                <td> &ensp;</td>
                <td> &ensp; </td>
                <td> &ensp; </td>


              </tr>
              <tr>
                <td>&ensp;</td>
                <td>&ensp;</td>
                <td>&ensp;</td>
                <td>&ensp; </td>
                <td> &ensp; </td>
              </tr>
              <tr>
                <td>&ensp;</td>
                <td>&ensp;</td>
                <td> &ensp;</td>
                <td>&ensp; </td>
                <td> &ensp; </td>
              </tr>
              <tr>
                <td>&ensp;</td>
                <td>&ensp;</td>
                <td>&ensp;</td>
                <td> &ensp; </td>
                <td> &ensp; </td>
              </tr>



            </tbody>
          </table>
        </div>
      </div>


    </div>
  </div>
  <div class="row mb-4 mx-2">
    <div class="col-4">
      <div class="card" style="background-color:whitesomke">

        <div class="card-header bg-white">
          <h3 class="text-center m-2">
            معلمين
          </h3>
        </div>
        <div class="card-body " style="margin: 0.1rem;">
          <div id="chart-seven" style="width:30rem;  min-height:321.7px;" class="px-5h-100 d-inline-block mt-4 ">

          </div>
        </div>

      </div>
    </div>
    <div class="col-4">
      <div class="card">
        <div class="card-header bg-white">
          <h3 class="text-center" id="">
            مجالات
            الاستبيان</h3>
        </div>
        <div class="card-body">
          <div class="col-md-8">
            <div>
              <button class="btn btn-sm btn-primary" style="background-color:rgb(17, 115, 91)"
                onclick="space_all('teacherStudent',chartSeven.w.config.series)">الكل</button>
            </div>




          </div>
          <div id="spaces_teacherStudent" class=""></div>
        </div>
      </div>

    </div>
    <div class="col-4">
      <div class="card spec_card" style="hight:100%">
        <div class="card-header bg-white">
          <h3 class="text-center title">
            مجالات
            الاستبيان</h3>
        </div>
        <div class="card-body mb-3">








          <table class="table table-striped datatable" class="mb-3" id="teacherTable">
            <thead>
              <tr id="#teacher">
                <th>#</th>
                <th>إسم الوحدة</th>
                <th> إسم المعلم</th>

                <th>نسبة الإجابة </th>

              </tr>

            </thead>
            <tbody id="teacherStudentspaces_update">
              <tr>
                <td>&ensp;</td>
                <td>&ensp;</td>
                <td> &ensp;</td>
                <td> &ensp; </td>
                <td> &ensp; </td>


              </tr>
              <tr>
                <td>&ensp;</td>
                <td>&ensp;</td>
                <td> &ensp;</td>
                <td> &ensp; </td>
                <td> &ensp; </td>


              </tr>
              <tr>
                <td>&ensp;</td>
                <td>&ensp;</td>
                <td> &ensp;</td>
                <td> &ensp; </td>
                <td> &ensp; </td>


              </tr>
              <tr>
                <td>&ensp;</td>
                <td>&ensp;</td>
                <td> &ensp;</td>
                <td> &ensp; </td>
                <td> &ensp; </td>


              </tr>
              <tr>
                <td> &ensp; </td>
                <td>&ensp;</td>
                <td>&ensp;</td>
                <td>&ensp;</td>
                <td>&ensp; </td>
              </tr>
              <tr>
                <td> &ensp; </td>
                <td>&ensp;</td>
                <td>&ensp;</td>
                <td> &ensp;</td>
                <td>&ensp; </td>
              </tr>
              <tr>
                <td>&ensp;</td>
                <td>&ensp;</td>
                <td>&ensp;</td>
                <td> &ensp; </td>
                <td> &ensp; </td>
              </tr>


            </tbody>
          </table>
        </div>
      </div>


    </div>
  </div>


  <div class="row">
    <h2 class="mx-2 my-4">
      تقييم المعلمين
    </h2>


  </div>


  <div class="row mb-4 mx-2">
    <div class="col-4">
      <div class="card" style="background-color:whitesomke">

        <div class="card-header bg-white">
          <h3 class="text-center bg-silver m-2">
            الدورات
          </h3>
        </div>
        <div class="card-body" style="margin: 0.8rem;">
          <div id="chart-eight" style="width:30rem; min-height:321.7px;" class="px-5h-100 d-inline-block">

          </div>
        </div>

      </div>
    </div>
    <div class="col-4">
      <div class="card">
        <div class="card-header bg-white">
          <h3 class="text-center" id="">
            مجالات
            الاستبيان</h3>
        </div>
        <div class="card-body">
          <div class="col-md-8">

            <div>
              <button class="btn btn-sm btn-primary" style="background-color:rgb(17, 115, 91)"
                onclick="space_all('courseTeacher',chartEight.w.config.series)">الكل</button>
            </div>



          </div>
          <div id="spaces_courseTeacher" class=""></div>
        </div>
      </div>

    </div>
    <input type="hidden" id="id">
    <input type="hidden" name="" id="title2">
    <div class="col-4">
      <div class="card spec_card" style="hight:100%">
        <div class="card-header bg-white">
          <h3 class="text-center title">
            تفاصيل
            الاستبيان</h3>
        </div>
        <div class="card-body mb-3">








          <table class="table table-striped datatable" class="mb-3" id="teacherTable">
            <thead>
              <tr id="#teacher">
                <th>#</th>
                <th>إسم الوحدة</th>
                <th> إسم الدورة</th>
                <th>رمز الدورة</th>
                <th>نسبة الإجابة </th>

              </tr>

            </thead>
            <tbody id="courseTeacherspaces_details">
              <tr>
                <td>&ensp;</td>
                <td>&ensp;</td>
                <td> &ensp;</td>
                <td> &ensp; </td>
                <td> &ensp; </td>


              </tr>
              <tr>
                <td>&ensp;</td>
                <td>&ensp;</td>
                <td> &ensp;</td>
                <td> &ensp; </td>
                <td> &ensp; </td>


              </tr>
              <tr>
                <td>&ensp;</td>
                <td>&ensp;</td>
                <td> &ensp;</td>
                <td> &ensp; </td>
                <td> &ensp; </td>


              </tr>
              <tr>
                <td>&ensp;</td>
                <td>&ensp;</td>
                <td> &ensp;</td>
                <td> &ensp; </td>
                <td> &ensp; </td>


              </tr>
              <tr>
                <td>&ensp;</td>
                <td>&ensp;</td>
                <td>&ensp;</td>
                <td>&ensp; </td>
                <td> &ensp; </td>
              </tr>
              <tr>
                <td>&ensp;</td>
                <td>&ensp;</td>
                <td> &ensp;</td>
                <td>&ensp; </td>
                <td> &ensp; </td>
              </tr>
              <tr>
                <td>&ensp;</td>
                <td>&ensp;</td>
                <td>&ensp;</td>
                <td> &ensp; </td>
                <td> &ensp; </td>
              </tr>


            </tbody>
          </table>
        </div>
      </div>


    </div>
  </div>

  <div class="row mb-4 mx-2">
    <div class="col-4">
      <div class="card" style="background-color:whitesomke">

        <div class="card-header bg-white">
          <h3 class="text-center bg-silver m-2">
            المقررات
          </h3>
        </div>
        <div class="card-body">
          <div id="chart-nine" style="width:30rem; min-height:321.7px;margin: 0.6rem;" style="margin: 0.3rem"
            class="px-5h-100 d-inline-block">

          </div>
        </div>

      </div>
    </div>
    <div class="col-4">
      <div class="card">
        <div class="card-header bg-white">
          <h3 class="text-center" id="">
            مجالات
            الاستبيان</h3>
        </div>
        <div class="card-body">
          <div class="col-md-8">
            <div>
              <button class="btn btn-sm btn-primary" style="background-color:rgb(17, 115, 91)"
                onclick="space_all('materialTeacher',chartNine.w.config.series)">الكل</button>
            </div>





          </div>
          <div id="spaces_materialTeacher" class=""></div>
        </div>
      </div>

    </div>
    <div class="col-4">
      <div class="card spec_card" style="hight:100%">
        <div class="card-header bg-white">
          <h3 class="text-center title">
            تفاصيل
            الاستبيان</h3>
        </div>
        <div class="card-body mb-3">








          <table class="table table-striped datatable" class="mb-3" id="teacherTable">
            <thead>
              <tr id="#teacher">
                <th>#</th>
                <th>إسم الوحدة</th>
                <th> إسم الدورة</th>
                <th>رمز الدورة</th>
                <th>نسبة الإجابة </th>

              </tr>

            </thead>
            <tbody id="materialTeacherspaces_details">
              <tr>
                <td>&ensp;</td>
                <td>&ensp;</td>
                <td> &ensp;</td>
                <td> &ensp; </td>
                <td> &ensp; </td>


              </tr>
              <tr>
                <td>&ensp;</td>
                <td>&ensp;</td>
                <td> &ensp;</td>
                <td> &ensp; </td>
                <td> &ensp; </td>


              </tr>
              <tr>
                <td>&ensp;</td>
                <td>&ensp;</td>
                <td> &ensp;</td>
                <td> &ensp; </td>
                <td> &ensp; </td>


              </tr>
              <tr>
                <td>&ensp;</td>
                <td>&ensp;</td>
                <td> &ensp;</td>
                <td> &ensp; </td>
                <td> &ensp; </td>
                <td> &ensp; </td>

              </tr>
              <tr>
                <td>&ensp;</td>
                <td>&ensp;</td>
                <td>&ensp;</td>
                <td>&ensp; </td>
                <td> &ensp; </td>
              </tr>
              <tr>
                <td>&ensp;</td>
                <td>&ensp;</td>
                <td> &ensp;</td>
                <td>&ensp; </td>
                <td> &ensp; </td>
              </tr>
              <tr>
                <td>&ensp;</td>
                <td>&ensp;</td>
                <td>&ensp;</td>
                <td> &ensp; </td>
                <td> &ensp; </td>
              </tr>


            </tbody>
          </table>
        </div>
      </div>


    </div>
  </div>




  <div class="row m-2" style="display:none">


    <div class="col-7">
      <div class="card">
        <div class="card-header bg-white">
          <h3> التقييم العام
            للوحدات/للوحدة
          </h3>
        </div>
        <div class="card-body">
          <div class="" id="chart-ten"></div>
        </div>
      </div>
    </div>
    <div class="col-5">
      <div class="card">
        <div class="card-header bg-white">
          <h3> التقييم للوحدة</h3>
        </div>
        <div class="card-body">

          <div id="chart-three" style="">
          </div>
        </div>





      </div>
    </div>
  </div>

  </div>

  @php $dashbord=App\Models\Dashboard::get()->Toarray();

  @endphp

  <div class="row d-flex justify-content-center m-2">
    <div class="col-7">
      <div class="card   bg-slate-50">
        <div class="card-header bg-white">
          <h3>متابعة تقييم لأنظمة التعليم
            الإلكتروني

          </h3>


          <h6>

          </h6>
        </div>
        <div class="card-body">
          <div id="percent" class="part-2 firt-grid-column ">
          </div>
          {{-- percent --}}
        </div>
      </div>
    </div>
    <div class="col-5">
      <div class="card ">
        <div class="card-header bg-white py-3">
          <h3> متابعة تقييم لأنظمة
            التعليم
            الإلكتروني </h3>
        </div>
        <div class="card-body mb-2">

          <div id="chart22" class="part-2 firt-grid-column">
          </div>
        </div>
      </div>
    </div>



  </div>





  </div>


  </div>
  </div>

</body>
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script> --}}
<script>
  //


//Third chart




//Fourth chart


//chart five"the first donut chart"
var options = {
  chartOptions: {
    colors: ['#5C4742', '#A5978B', '#8D5B4C', '#5A2A27', '#C4BBAF']
  },
series: <?php echo json_encode(array_values($data['courseStudent'])); ?>,
labels: ["ممتاز", "جيد جدا", "جيد", "ضعيف"],
chart: {
type: 'pie',
    events: {
            dataPointSelection: (event, chartContext, config) => {

              spaces_details(config.w.config.labels[config.dataPointIndex],'courseStudent',  config.w.config.series,chartFive.w.config.colors[config.dataPointIndex])
      //  pie_chart_details( 'courseStudent',config.w.config.labels[config.dataPointIndex],config.dataPointIndex);// change


            }
          }

},
responsive: [{
breakpoint: 480,
options: {
chart: {
  width: '100%',



},
legend: {
  position: 'bottom'
}
}
}],
// colors:['#0d5331', '#d14a2e','#b27a4d', '#bbb']
tooltip: {

formatter: function (val) {
  return  val.toFixed(3) + "%"

}
},
dataLabels: {

          enabled: true,
          formatter: function (val) {
            return val.toFixed(2) + "%";
          },
        },
        colors:['#000685', '#003d03','#e3aa47', '#a31f34'],
        // this for colors
};

var chartFive = new ApexCharts(document.querySelector("#chart-five"), options);
chartFive.render();


//chart six"the second donut chart"
var options = {

series:  <?php echo json_encode($data['materialStudent']); ?>,
labels: ["ممتاز", "جيد جداً", "جيد", "ضعيف"],

chart: {
type: 'pie',
events: {
            dataPointSelection: (event, chartContext, config) => {

              spaces_details(config.w.config.labels[config.dataPointIndex],"materialStudent",config.w.config.series,chartSix.w.config.colors[config.dataPointIndex])
              $("#title").val("materialStudent");
            }
          }
},

responsive: [{
breakpoint: 480,
options: {

chart: {
  width: '25%'
},
legend: {
  position: 'bottom'
},
},

}],
  colors:['#000685', '#003d03','#e3aa47', '#a31f34'],
tooltip: {

formatter: function (val) {
  return  val.toFixed(2) + "%"

}
},
dataLabels: {
          enabled: true,
          formatter: function (val) {
            return val.toFixed(2) + "%";
          },
        }
};

var chartSix = new ApexCharts(document.querySelector("#chart-six"), options);
chartSix.render();

//chart seven"the third donut chart"
var options = {
series: <?php echo json_encode($data['teacherStudent']); ?>,
labels: ["ممتاز","جيد", "متوسط", "ضعيف"], // متوسط=> مقبول
chart: {
type: 'pie',

events: {
            dataPointSelection: (event, chartContext, config) => {

              spaces_details(config.w.config.labels[config.dataPointIndex],"teacherStudent",config.w.config.series,chartSeven.w.config.colors[config.dataPointIndex])

            }
          }
},

responsive: [{
breakpoint: 480,
options: {

chart: {
  width: '25%'
},
legend: {
  position: 'bottom'
},
},

}],
tooltip: {

formatter: function (val) {
  return  val.toFixed(2) + "%"

}
},
dataLabels: {
          enabled: true,
          formatter: function (val) {
            return val.toFixed(2) + "%";
          },

        },
        colors:['#000685', '#003d03','#e3aa47', '#a31f34'],

};

var chartSeven = new ApexCharts(document.querySelector("#chart-seven"), options);
chartSeven.render();


//chart seven"the third donut chart"
var options = {
series: <?php echo json_encode($data['courseTeacher']); ?>,
labels:["ممتاز", "جيد جداً", "جيد", "ضعيف"],
chart: {
type: 'pie',
events: {
            dataPointSelection: (event, chartContext, config) => {
              spaces_details2(config.w.config.labels[config.dataPointIndex],"courseTeacher",config.w.config.series,chartEight.w.config.colors[config.dataPointIndex])

            }
          }
},
responsive: [{
breakpoint: 480,
options: {
chart: {
  width: '25%',

},
legend: {
  position: 'bottom'
}
}
}],
// colors:['#0d5331', '#d14a2e','#b27a4d', '#bbb']
tooltip: {

formatter: function (val) {
  return  val.toFixed(2) + "%"

}
},
dataLabels: {
          enabled: true,
          formatter: function (val) {
            return val.toFixed(2) + "%";
          },
        },
        colors:['#000685', '#003d03','#e3aa47', '#a31f34'],
};

var chartEight = new ApexCharts(document.querySelector("#chart-eight"), options);
chartEight.render();

//chart seven"the fourth donut chart"
var options = {
series: <?php echo json_encode($data['materialTeacher']); ?>,
labels: ["ممتاز", "جيد جداً", "جيد", "ضعيف"],
chart: {
type: 'pie',
events: {
            dataPointSelection: (event, chartContext, config) => {
              spaces_details2(config.w.config.labels[config.dataPointIndex],"materialTeacher",config.w.config.series,chartNine.w.config.colors[config.dataPointIndex])

            }
          }
},
responsive: [{
breakpoint: 480,
options: {
chart: {
  width: '25%'
},
legend: {
  position: 'bottom'
}
}
}],
// colors:['#0d5331', '#d14a2e','#b27a4d', '#bbb']
tooltip: {

formatter: function (val) {
  return  val.toFixed(2) + "%"

}
},
dataLabels: {
          enabled: true,
          formatter: function (val) {
            return val.toFixed(2) + "%";
          },
        },
        colors:['#000685', '#003d03','#e3aa47', '#a31f34'],
};

var chartNine = new ApexCharts(document.querySelector("#chart-nine"), options);
chartNine.render();


var options = {
series: [{
name: 'التقييم العام',
data: <?php echo json_encode( $bar['total']); ?>


}],
chart: {
type: 'bar',
// pie_chart_details( 'materialTeacher',config.w.config.labels[config.dataPointIndex],'student_teacher');
events: {
            dataPointSelection: (event, chartContext, config) => {

              bar_chart_details(config.w.config.xaxis.categories[config.dataPointIndex]);
            }
          },
height: 350
},
plotOptions: {
bar: {
horizontal: false,
columnWidth: '55%',
endingShape: 'rounded'
},
},

dataLabels: {
enabled: true
},
stroke: {
show: true,
width: 2,
colors: ['transparent']
},
xaxis: {
categories: <?php echo json_encode( $bar['column']); ?>,
},
yaxis: {
title: {
text: ''
}
},
fill: {
opacity: 1
},
tooltip: {
y: {
formatter: function (val) {
  return  val + "%"
}
}
},

};

var chartTen = new ApexCharts(document.querySelector("#chart-ten"), options);
chartTen.render();


//chart seven"the third donut chart"
var options = {
series: [10, 90],
labels: ['غير جيد','جيد'],
chart: {
type: 'donut',
},
responsive: [{
breakpoint: 480,
options: {
chart: {
  width: 100
},
legend: {
  position: 'bottom'
}
}
}]
};

var chartEleven = new ApexCharts(document.querySelector("#chart-eleven"), options);
chartEleven.render();



    var options = {
          series: [{
          name: "نسبة الوحدة" ,
          data: <?php echo json_encode(array_keys($item_sum["data"]))?>
        }],
          chart: {
          height: 350,
          type: 'bar',
          events: {
            dataPointSelection: (event, chartContext, config) => {

              bar_chart_details2(chartContext.w.config.xaxis.categories[config.dataPointIndex]);
            }
          },
        },
        plotOptions: {
          bar: {
            borderRadius: 10,
            dataLabels: {
              position: 'top', // top, center, bottom
            },
          }
        },
        dataLabels: {
          enabled: true,
          formatter: function (val) {
            return val + "%";
          },
          offsetY: -20,
          style: {
            fontSize: '12px',
            colors: ["#304758"]
          }
        },

        xaxis: {
          categories: <?php echo json_encode(array_values($item_sum["data"]))?>,
          position: 'top',
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false
          },
          crosshairs: {
            fill: {
              type: 'gradient',
              gradient: {
                colorFrom: '#D8E3F0',
                colorTo: '#BED1E6',
                stops: [0, 100],
                opacityFrom: 0.4,
                opacityTo: 0.5,
              }
            }
          },
          tooltip: {
            enabled: true,
          }
        },
        colors:["#304758"],
        yaxis: {
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false,
          },
          labels: {
            show: false,
            formatter: function (val) {
              return val + "%";
            }
          }

        },
        title: {
          text: 'ترتيب الوحدة أنظمة التعليم الألكتروني والأنظمة المساعدة لها (Model / نظام التقييم)',
          floating: true,
          offsetY: 330,
          align: 'center',
          style: {
            color: '#444'
          }
        }

        };

        var percent = new ApexCharts(document.querySelector("#percent"), options);
        percent.render();








        var options = {

          series: [],
          chart: {

          type: 'bar',
          height: 350,

        },
        plotOptions: {
          bar: {
            borderRadius: 10,
            horizontal: false,
            columnWidth: '55%',
            endingShape: 'rounded'
          },
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          show: true,
          width: 2,
          colors: ['transparent']
        },
        xaxis: {
          categories: [],
        },
        colors: ["#000685", '#005813', '#cfc044'],
        // here colors
        yaxis: {
          title: {
            number: ''
          }
        },
        fill: {
          opacity: 1
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return val.toFixed(2) + " %"
            }
          }
        }
        };

        var chart22 = new ApexCharts(document.querySelector("#chart22"), options);
        chart22.render();
        let ids;

 function pie_chart_details(chart_name,values,a) {
  $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
  $.ajax({
               type:'GET',
               url:<?php echo json_encode($year->id) ?>+'/details/'+values+'/chart/'+chart_name,

               success:function(data) {
                  $("#test").html(data);


                  $('#exampleModal').modal('show');
                  // $('#myModal').modal('toggle');
               }
            });





 }

 var options = {
          series: [{
          name: 'مجالات',
          data: []
        }],
          chart: {
          height: 350,
          type: 'bar',

events: {
    dataPointSelection: (event, chartContext, config) => {

// spaces_update_teacher(space,value,chart,total)

      spaces_update_teacher(chartContext.w.globals.seriesNames[0],chartContext.w.globals.labels[config.dataPointIndex],"materialTeacher",chartNine.w.config.series);


    }
    }
        },
        plotOptions: {
          bar: {
            borderRadius: 10,
            dataLabels: {
              position: 'top', // top, center, bottom
            },
          }
        },
        dataLabels: {
          enabled: true,
          formatter: function (val) {
            return val + "%";
          },
          offsetY: -20,
          style: {
            fontSize: '12px',
            colors: ["#304758"]
          }
        },
        // here spaces
        xaxis: {
          categories: [],
          position: 'top',
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false
          },
          crosshairs: {
            fill: {
              type: 'gradient',
              gradient: {
                colorFrom: '#D8E3F0',
                colorTo: '#BED1E6',
                stops: [0, 100],
                opacityFrom: 0.4,
                opacityTo: 0.5,
              }
            }
          },
          tooltip: {
            enabled: true,
          }
        },
        colors: ["rgb(17, 115, 91)"],
        yaxis: {
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false,
          },
          labels: {
            show: false,
            formatter: function (val) {
              return val + "%";
            }
          }

        },
        title: {
          text: 'المجالات ',
          floating: true,
          offsetY: 330,
          align: 'center',
          style: {
            color: '#444'
          }
        }
        };

        var spaces_materialTeacher = new ApexCharts(document.querySelector("#spaces_materialTeacher"), options);
        spaces_materialTeacher.render();


        // spaces_CourseStudent

        var options = {
          series: [{
          name: 'مجالات',
          data: []
        }],
          chart: {
          height: 350,
          type: 'bar',

events: {
    dataPointSelection: (event, chartContext, config) => {

      spaces_update_teacher(chartContext.w.globals.seriesNames[0],chartContext.w.globals.labels[config.dataPointIndex],"courseTeacher",chartEight.w.config.series);


    }
    }
        },
        plotOptions: {
          bar: {
            borderRadius: 10,
            dataLabels: {
              position: 'top', // top, center, bottom
            },
          }
        },
        dataLabels: {
          enabled: true,
          formatter: function (val) {
            return val + "%";
          },
          offsetY: -20,
          style: {
            fontSize: '12px',
            colors: ["#304758"]
          }
        },
        // here spaces
        xaxis: {
          categories: [],
          position: 'top',
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false
          },
          crosshairs: {
            fill: {
              type: 'gradient',
              gradient: {
                colorFrom: '#D8E3F0',
                colorTo: '#BED1E6',
                stops: [0, 100],
                opacityFrom: 0.4,
                opacityTo: 0.5,
              }
            }
          },
          tooltip: {
            enabled: true,
          }
        },
        colors: ["rgb(17, 115, 91)"],
        yaxis: {
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false,
          },
          labels: {
            show: false,
            formatter: function (val) {
              return val + "%";
            }
          }

        },
        title: {
          text: 'المجالات ',
          floating: true,
          offsetY: 330,
          align: 'center',
          style: {
            color: '#444'
          }
        }
        };

        var spaces_courseTeacher = new ApexCharts(document.querySelector("#spaces_courseTeacher"), options);
        spaces_courseTeacher.render();





 var options = {
          series: [{
          name: 'مجالات',
          data: []
        }],
          chart: {
          height: 350,
          type: 'bar',

events: {
    dataPointSelection: (event, chartContext, config) => {

      spaces_update(chartContext.w.globals.seriesNames[0],chartContext.w.globals.labels[config.dataPointIndex],"CourseStudent",chartFive.w.config.series);


    }
    }
        },
        plotOptions: {
          bar: {
            borderRadius: 10,
            dataLabels: {
              position: 'top', // top, center, bottom
            },
          }
        },
        colors: ["rgb(17, 115, 91)"],
        dataLabels: {
          enabled: true,
          formatter: function (val) {
            return val + "%";
          },
          offsetY: -20,
          style: {
            fontSize: '12px',
            colors: ["#304758"]
          }
        },
        // here spaces
        xaxis: {
          categories: [],
          position: 'top',
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false
          },
          crosshairs: {
            fill: {
              type: 'gradient',
              gradient: {
                colorFrom: '#D8E3F0',
                colorTo: '#BED1E6',
                stops: [0, 100],
                opacityFrom: 0.4,
                opacityTo: 0.5,
              }
            }
          },
          tooltip: {
            enabled: true,
          }
        },
        yaxis: {
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false,
          },
          labels: {
            show: false,
            formatter: function (val) {
              return val + "%";
            }
          }

        },
        title: {
          text: 'المجالات ',
          floating: true,
          offsetY: 330,
          align: 'center',
          style: {
            color: '#444'
          }
        }
        };

        var spaces_CourseStudent = new ApexCharts(document.querySelector("#spaces_CourseStudent"), options);
        spaces_CourseStudent.render();
        // spaces_materialStudent

        var options = {
          series: [{
          name: 'مجالات',
          data: []
        }],
          chart: {
          height: 350,
          type: 'bar',

events: {
    dataPointSelection: (event, chartContext, config) => {
      chartSix.w.config.series
      spaces_update(chartContext.w.globals.seriesNames[0],chartContext.w.globals.labels[config.dataPointIndex],"materialStudent",chartSix.w.config.series);


    }
    }
        },
        plotOptions: {
          bar: {
            borderRadius: 10,
            dataLabels: {
              position: 'top', // top, center, bottom
            },
          }
        },
        dataLabels: {
          enabled: true,
          formatter: function (val) {
            return val + "%";
          },
          offsetY: -20,
          style: {
            fontSize: '12px',
            colors: ["#304758"]
          }
        },
        colors: ["rgb(17, 115, 91)"],
        // here spaces
        xaxis: {
          categories: [],
          position: 'top',
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false
          },
          crosshairs: {
            fill: {
              type: 'gradient',
              gradient: {
                colorFrom: '#D8E3F0',
                colorTo: '#BED1E6',
                stops: [0, 100],
                opacityFrom: 0.4,
                opacityTo: 0.5,
              }
            }
          },
          tooltip: {
            enabled: true,
          }
        },
        yaxis: {
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false,
          },
          labels: {
            show: false,
            formatter: function (val) {
              return val + "%";
            }
          }

        },
        title: {
          text: 'المجالات ',
          floating: true,
          offsetY: 330,
          align: 'center',
          style: {
            color: '#444'
          }
        }
        };

        var spaces_materialStudent = new ApexCharts(document.querySelector("#spaces_materialStudent"), options);
        spaces_materialStudent.render();

        var options = {
          series: [{
          name: 'مجالات',
          data: []
        }],
          chart: {
          height: 350,
          type: 'bar',

events: {
    dataPointSelection: (event, chartContext, config) => {

      spaces_update(chartContext.w.globals.seriesNames[0],chartContext.w.globals.labels[config.dataPointIndex],"teacherStudent",chartSeven.w.config.series);


    }
    }
        },
        plotOptions: {
          bar: {
            borderRadius: 10,
            dataLabels: {
              position: 'top', // top, center, bottom
            },
          }
        },
        colors: ["rgb(17, 115, 91)"],
        dataLabels: {
          enabled: true,
          formatter: function (val) {
            return val + "%";
          },
          offsetY: -20,
          style: {
            fontSize: '12px',
            colors: ["#304758"]
          }
        },
        // here spaces
        xaxis: {
          categories: [],
          position: 'top',
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false
          },
          crosshairs: {
            fill: {
              type: 'gradient',
              gradient: {
                colorFrom: '#D8E3F0',
                colorTo: '#BED1E6',
                stops: [0, 100],
                opacityFrom: 0.4,
                opacityTo: 0.5,
              }
            }
          },
          tooltip: {
            enabled: true,
          }
        },
        yaxis: {
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false,
          },
          labels: {
            show: false,
            formatter: function (val) {
              return val + "%";
            }
          }

        },
        title: {
          text: 'المجالات ',
          floating: true,
          offsetY: 330,
          align: 'center',
          style: {
            color: '#444'
          }
        }
        };

        var spaces_teacherStudent = new ApexCharts(document.querySelector("#spaces_teacherStudent"), options);
        spaces_teacherStudent.render();










        var options = {
          series: [{
          name: 'مجالات',
          data: []
        }],
          chart: {
          height: 350,
          type: 'bar',

    width: "100%",

        },
        plotOptions: {
          bar: {
            borderRadius: 10,
            dataLabels: {
              position: 'top', // top, center, bottom+
              formatter: function (val) {
            return val.substr(0,8);
          },
            },
          }
        },
        dataLabels: {
          enabled: true,
          formatter: function (val) {
            return val + "%";
          },
          offsetY: -20,
          style: {
            fontSize: '12px',
            colors: ["#304758"]
          }
        },
        colors: ["rgb(17, 115, 91)"],
        // here spaces
        xaxis: {
          categories: [],
          position: 'top',
          labels: {
    rotate: 0,
    formatter: function (value) {
      return value;
    },
    trim: true,

  },
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false
          },
          crosshairs: {
            fill: {
              type: 'gradient',
              gradient: {
                colorFrom: '#D8E3F0',
                colorTo: '#BED1E6',
                stops: [0, 100],
                opacityFrom: 0.4,
                opacityTo: 0.5,
              }
            }
          },
          tooltip: {
            enabled: true,
          }
        },
        yaxis: {
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false,
          },
          labels: {
            show: false,
            formatter: function (val) {
              return val + "%";
            }
          }

        },
        title: {
          text: 'المجالات ',
          floating: true,
          offsetY: 500,
          align: 'center',
          style: {
            color: '#444'
          }
        }
        };

        var spaces2 = new ApexCharts(document.querySelector("#spaces2"), options);
        spaces2.render();



        var options = {
          series: [{
          name: 'مجالات',
          data: []
        }],
          chart: {
          height: 350,
          type: 'bar',

    width: "100%",

        },
        plotOptions: {
          bar: {
            borderRadius: 10,
            dataLabels: {
              position: 'top', // top, center, bottom+
              formatter: function (val) {
            return val.substr(0,8);
          },
            },
          }
        },
        dataLabels: {
          enabled: true,
          formatter: function (val) {
            return val + "%";
          },
          offsetY: -20,
          style: {
            fontSize: '12px',
            colors: ["#304758"]
          }
        },
        colors: ["rgb(17, 115, 91)"],
        // here spaces
        xaxis: {
          categories: [],
          position: 'top',
          labels: {
    rotate: 0,
    formatter: function (value) {
      return value;
    },
    trim: true,

  },
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false
          },
          crosshairs: {
            fill: {
              type: 'gradient',
              gradient: {
                colorFrom: '#D8E3F0',
                colorTo: '#BED1E6',
                stops: [0, 100],
                opacityFrom: 0.4,
                opacityTo: 0.5,
              }
            }
          },
          tooltip: {
            enabled: true,
          }
        },
        yaxis: {
          axisBorder: {
            show: false
          },
          axisTicks: {
            show: false,
          },
          labels: {
            show: false,
            formatter: function (val) {
              return val + "%";
            }
          }

        },
        title: {
          text: 'المجالات ',
          floating: true,
          offsetY: 500,
          align: 'center',
          style: {
            color: '#444'
          }
        }
        };

        var spaces3 = new ApexCharts(document.querySelector("#spaces3"), options);
        spaces3.render();


 function bar_chart_details(values) {


  $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
  $.ajax({
               type:'GET',
               url:$(location).attr('href')+'/bar/'+values,

               success:function(data2) {


                var ar=data2.data;
                var o=[];
                $.each(ar, function (key, val) {

                       o.push({name : key,
                          data : val})

            });

                 chartThree.updateSeries(o);
                 chartThree.updateOptions({
      xaxis: {
        categories: data2.column //ie ["a","b","c","d"]
      },
      color:["#ffff"]
})

               }
            });





 }
function total_sum( total) {
  var sum=0;
  $.each(total, function (key, val) {
sum+=val;
  });
  return sum;
}












 function spaces_details(values=0,chart,total,color="blue") {


var unit=<?php echo json_encode($unit) ?>;


  $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
  $.ajax({
               type:'GET',

               url:$(location).attr('href')+'/value/'+values+"/"+chart+"/"+total,

               success:function(data2) {

                var ar=data2.space;
                var title=[];
                var o=[];

                $.each(ar, function (key, val) {

                       o.push(val);
                          title.push(key)

             });
            // o.push({name:values})
            switch (chart) {
  case "courseStudent":

  spaces_CourseStudent.updateSeries([{
                   data : o,
                   name : values
                 }]
                  );
  spaces_CourseStudent.updateOptions({
      xaxis: {
        categories: title
      },
      colors:[color]

});

    break;
    case "materialStudent":
    spaces_materialStudent.updateSeries([{
                   data : o,
                   name : values
                 }]
                  );
                  spaces_materialStudent.updateOptions({
      xaxis: {
        categories: title
      },
      colors:[color]
})
// teacherStudent

    break;
    case "teacherStudent":
    spaces_teacherStudent.updateSeries([{
                   data : o,
                   name : values
                 }]
                  );
                  spaces_teacherStudent.updateOptions({
      xaxis: {
        categories: title
      },
      colors:[color]
})
break;
  default:
    break;
}





               }

            });


               }

               function spaces_details2(values,chart,total,color) {

var chart_val;
var unit=<?php echo json_encode($unit) ?>;


  $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
  $.ajax({
               type:'GET',

               url:$(location).attr('href')+'/value/'+values+"/"+chart+"/"+total,

               success:function(data2) {

                var ar=data2.space;
                var title=[];
                var o=[];

                $.each(ar, function (key, val) {

                       o.push(val);
                          title.push(key)

             });
            // o.push({name:values})
  switch (chart) {
    case "materialTeacher":
    spaces_materialTeacher.updateSeries([{
                   data : o,
                   name : values
                 }]
                  );
                  spaces_materialTeacher.updateOptions({
      xaxis: {
        categories: title
      },
      colors:[color]
})
      break;
      case "courseTeacher":

    spaces_courseTeacher.updateSeries([{
                   data : o,
                   name : values
                 }]
                  );
                  spaces_courseTeacher.updateOptions({
      xaxis: {
        categories: title
      },
      colors:[color]
})
      break;
      // courseTeacher
    default:
      break;
  }









               }

            });


               }







function bar_chart_details2(values) {
  if (values!== null || values !== undefined) {
    chart22.updateSeries([]);
                 chart22.updateOptions({
      xaxis: {
        categories: []
      }
})
  }
  $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
  $.ajax({
               type:'GET',

               url:$(location).attr('href')+'/bar2/'+values,

               success:function(data2) {

                var ar=data2.data;
                var o=[];

                $.each(ar, function (key, val) {

                       o.push({name : key,
                          data : val})

            });
                  chart22.updateSeries(o);
                 chart22.updateOptions({
      xaxis: {
        categories: data2.title
      }
})

               }
            });





 }

 function page_convert(year,unit=0) {

 location.href = "http://127.0.0.1:8000/admin/evaluationchart/"+<?php echo json_encode($year->id) ?>+"/unit/"+unit;

 }

 function spaces_update(space,value,chart,total) {


  $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
  $.ajax({
               type:'GET',
               url:$(location).attr('href')+'/space_details/'+space+'/value/'+value+"/"+chart+"/"+total,

               success:function(data2) {

                var ar=data2.space;

                var title=[];
                var o=[];

$("#"+chart+"spaces_update").html(data2);


               }

            });


               }

               function spaces_update_teacher(space,value,chart,total) {
//  var chart=$("#title2").val();

  $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
  $.ajax({
               type:'GET',
               url:$(location).attr('href')+'/space_details/'+space+'/value/'+value+"/"+chart+"/"+total,

               success:function(data2) {

                var ar=data2.space;
                var title=[];
                var o=[];

$("#"+chart+"spaces_details").html(data2);


               }

            });


               }


               if ($('.form-check-input #CourseStudentch').attr("checked")) {

               }
               function space_all(chart,total) {


 var unit=<?php echo json_encode($unit) ?>;

var s= $(location).attr('href');

   $.ajaxSetup({
             headers: {
                 'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
             }
         });
   $.ajax({
                type:'GET',
                // http://127.0.0.1:8000/admin/evaluationchart/1/unit/0/space_all/materialStudent/12.24.36
                url:$(location).attr('href')+'/space_all/'+chart+"/"+total,

                success:function(data2) {

                 var ar=data2.data;
                 var title=[];
                 var o=[];

                 $.each(ar, function (key,val) {

                        o.push(val);
                           title.push(key)

              });

             switch (chart) {
   case "courseStudent":

   spaces_CourseStudent.updateSeries([{
                    data : o,
                    name : title
                  }]
                   );

   spaces_CourseStudent.updateOptions({
       xaxis: {
         categories: title
       },
       colors:["#304758"]
 })
     break;
     case "materialStudent":
     spaces_materialStudent.updateSeries([{
                    data : o,
                    name : []
                  }]
                   );
                   spaces_materialStudent.updateOptions({
       xaxis: {
         categories: title
       },
       colors:["#304758"]
 })
 // teacherStudent
     break;
     case "teacherStudent":
     spaces_teacherStudent.updateSeries([{
      data : o,
                    name : []
                  }]
                   );
                   spaces_teacherStudent.updateOptions({
       xaxis: {
         categories: title
       },
       colors:["#304758"]
 })
 break;
 case "materialTeacher":

    spaces_materialTeacher.updateSeries([{
                   data : o,
                   name : []
                 }]
                  );
                  spaces_materialTeacher.updateOptions({
      xaxis: {
        categories: title
      },
      colors:["#304758"]
})
      break;
      case "courseTeacher":

    spaces_courseTeacher.updateSeries([{
                   data : o,
                   name : []
                 }]
                  );
                  spaces_courseTeacher.updateOptions({
      xaxis: {
        categories: title
      },
      colors:["#304758"]
})
      break;
      // courseTeacher

   default:
     break;
 }





                }

             });

                }


             function space_load() {
              space_all('courseStudent',chartFive.w.config.series);
              space_all('courseTeacher',chartEight.w.config.series)
              space_all('materialTeacher',chartEight.w.config.series);
              space_all('materialStudent',chartSix.w.config.series)
              space_all('teacherStudent',chartSeven.w.config.series)

             }

</script>



</html>
