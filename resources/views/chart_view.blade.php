



<head>
    <link rel="stylesheet" href="{{asset('bootstrap-4.6.2/dist/css/bootstrap.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="{{ asset('font-awesome-4.7.0/css/font-awesome.css') }}" rel="stylesheet" />
    <script src="{{ asset('js/jquery-3.6.0.min.js')}}" defer></script>
    <script src="{{ asset('js/apexchart.js')}}"></script>
    <title>لوحة التحكم</title>
    <style>
      .navbar-nav {
        margin: auto;
      }
  
  
      .nav-item {
        background-color: green;
        margin: 0 5px;
  
      }
  
      .card hr {
        width: 100%;
        margin: 0;
      }
  
      .thick-blue-border {
        height: 5px;
        background-color: blue;
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
  
  
  
  
  
      #percent1 {
        max-width: 650px;
        margin: 35px auto;
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
  
        .box box2 {
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
  
  <body style="">
  
    <div class="container-fluid mb-1 shadow-sm">
      <nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-between">
        <img class="navbar-brand" src="/img/logo.png" style="width:70px;height: 70px;">
  
  
        <h5 class="text-center title fw-bold">
          رسوم وأعمدة بيانية توضح تقييمات الطلاب والمعلمين لنظام التعليم الإلكتروني للنشرة [{{$year}}]
        </h5>
        <div></div>
        <a href="{{route('admin.home')}}" class="btn btn-primary fixed"> الصفحة الرئيسية</a>
      </nav>
    </div>
  
  
  
  
  
  
  
  
    <div class="row text-center m-1">
      <div class="col card rounded-2  m-1 shadow-sm hover:">
        <div class="counter">
          <div class="card-body">
            <div class="row">
              <div class="col-6">
                <h2 class="fw-bold text-right" data-to="100" data-speed="1500">{{$card['all_courses']}}
                </h2>
                <p class="fw-bold text-right">الدورات</p>
              </div>
              <div class="col-6">
                <i class="fa fa fa-desktop text-left" style="font-size: 5rem"></i>
              </div>
            </div>
          </div>
          <div class="card-footer bg-white">
            <div class="row">
              <div class="col">
                <div class="col-5 col-md-4">
                  <div class="icon-big text-center icon-warning">
                    <i class="nc-icon nc-favourite-28 text-primary"></i>
                  </div>
                </div>
                <h2 class="timer count-title count-number fw-bold" data-to="100" data-speed="1500">
                  {{$card['fininshed_courses']}}</h2>
                <p class="count-text fw-bold">منتهية</p>
              </div>
              <div class="col">
                <h2 class="timer count-title count-number fw-bold" data-to="100" data-speed="1500">
                  {{$card['now_courses']}}</h2>
                <p class="count-text fw-bold">المنعقدة</p>
  
              </div>
              <div class="col">
                <h2 class="timer count-title count-number fw-bold" data-to="100" data-speed="1500">
                  {{$card['future_courses']}}
                </h2>
                <p class="count-text fw-bold">مجدولة</p>
  
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col card rounded-2  m-1 shadow-sm hover:">
        <div class="counter">
          <div class="card-body">
            <div class="row">
              <div class="col-6">
                <h2 class="fw-bold text-right" data-to="100" data-speed="1500">
                  {{$card['past_students']+$card['now_students']}}
                </h2>
                <p class="fw-bold text-right">الحضور</p>
              </div>
              <div class="col-4">
                <i class="fa fa-users" style="font-size: 5rem"></i>
              </div>
            </div>
          </div>
          <div class="card-footer bg-white">
            <div class="row">
              <div class="col">
                <div class="col-5 col-md-4">
                  <div class="icon-big text-center icon-warning">
                    <i class="nc-icon nc-favourite-28 text-primary"></i>
                  </div>
                </div>
                <h2 class="timer count-title count-number fw-bold" data-to="100" data-speed="1500">
                  {{$card['past_students']+$card['now_students']-$card['absent_students']}}</h2>
                <p class="count-text fw-bold">الحضور</p>
              </div>
              <div class="col">
                <h2 class="timer count-title count-number fw-bold" data-to="100" data-speed="1500">
                  {{$card['absent_students']}}</h2>
                <p class="count-text fw-bold">الغياب</p>
  
              </div>
  
            </div>
          </div>
        </div>
      </div>
      {{-- 'future_student'=>$future_student,'now_students'=> $now_students,'past_student'=> $past_student --}}
      <div class="col card rounded-2  m-1 shadow-sm hover:">
        <div class="counter">
          <div class="card-body">
            <div class="row">
              <div class="col-6">
                <h2 class="fw-bold text-right" data-to="100" data-speed="1500">
                  {{$card['past_students']+$card['now_students']+$card['future_students']}}
                </h2>
                <p class="fw-bold text-right">القوى</p>
              </div>
              <div class="col-4">
                <i class="fa fa-graduation-cap" style="font-size: 5rem"></i>
              </div>
            </div>
          </div>
          <div class="card-footer bg-white">
            <div class="row">
              <div class="col">
                <div class="col-5 col-md-4">
                  <div class="icon-big text-center icon-warning">
                    <i class="nc-icon nc-favourite-28 text-primary"></i>
                  </div>
                </div>
                <h2 class="timer count-title count-number fw-bold" data-to="100" data-speed="1500">
                  {{-- past_student --}}
                  {{$card['past_students']}}</h2>
                <p class="count-text fw-bold">المتخرجين</p>
              </div>
              <div class="col">
                <h2 class="timer count-title count-number fw-bold" data-to="100" data-speed="1500">
                  {{$card['now_students']}}</h2>
                <p class="count-text fw-bold">الدارسين</p>
  
              </div>
              <div class="col">
                <h2 class="timer count-title count-number fw-bold" data-to="100" data-speed="1500">
                  {{$card['future_students']}}
                </h2>
                <p class="count-text fw-bold">المتوقعين</p>
  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card m-2 bg-slate-300">
  
      <div class="card-body">
  
  
        <div class="row mb-4">
          <h2 style="font-family: Helvetica, Arial, sans-serif; text-primary text-secondary" class="text-center m-2">
            تقييم الطلاب
          </h2>
  
        </div>
        <div class="row">
          <div class="col-4">
            <h3 class="text-center bg-silver"
              style="font-family: Helvetica, Arial, sans-serif; text-primary text-secondary">الدورات</h3>
            <div id="chart-five" style="width:30rem;  min-height:321.7px;background-color:azure"
              class="px-5h-100 d-inline-block">
  
            </div>
            <div class="container collapse fade alert alert-dark res" role="alert" id="collapseExample">
              This is a collapsible of alert and the above buttons
              shows and hides the alert respectively.
            </div>
          </div>
          <div class="col-4">
            <h3 class="text-center bg-silver m-2"
              style="font-family: Helvetica, Arial, sans-serif; text-primary text-secondary">
              المقررات
            </h3>
            <div id="chart-six" style="width:30rem; min-height:321.7px; background-color:azure"
              class="px-5h-100 d-inline-block">
  
            </div>
          </div>
  
  
          <div class="col-4">
            <h3 class="text-center m-2" style="font-family: Helvetica, Arial, sans-serif; text-primary text-secondary">
              معلمين
            </h3>
            <div id="chart-seven" style="width:30rem; min-height:321.7px; background-color:azure;"
              class="px-5h-100 d-inline-block">
  
            </div>
  
  
          </div>
        </div>
      </div>
  
  
  
    </div>
  
  
    </div>
  
  
  
  
    <div class="card mx-2 bg-slate-300">
      <div class="row mt-3">
        <div class="row">
          <h2 style="font-family: Helvetica, Arial, sans-serif; text-primary text-secondary" class="text-center my-3">
            تقييم المعلمين
          </h2>
  
  
        </div>
        <div class=" card-body row">
  
          <div class="col-4 mx-2">
            <h3 class="text-center bg-silver"
              style="font-family: Helvetica, Arial, sans-serif; text-primary text-secondary">الدورات</h3>
  
            <div id="chart-eight" style="width:30rem;  min-height:321.7px; background-color:azure"
              class="px-5h-100 d-inline-block">
  
            </div>
          </div>
          <div class="col-4 mx-1">
            <h3 class="text-center m-2" style="font-family: Helvetica, Arial, sans-serif; text-primary text-secondary">
              المقررات
            </h3>
            <div id="chart-nine" style="width:30rem;  min-height:321.7px; background-color:azure"
              class="px-5h-100 d-inline-block">
  
            </div>
          </div>
        </div>
  
      </div>
    </div>
  
  
  
    <div class="card m-2">
  
      <div
        style="border-style: solid;margin-left: auto;border-style: none;margin-bottom:30px;margin-top:30px;margin-right:1%;"
        class="rounded-bottom py-1 individual-units" class="row-sm">
        <h3 style="font-family: Helvetica, Arial, sans-serif; text-primary text-secondary"> تقييم الطلاب والمعلمين لكل
          وحدة على حدة</h3>
  
      </div>
      <div id="chart-three" style="background-color:azure;padding-bottom:12px;" class="col-12 m-2 pl-2">
  
      </div>
      <div class="" style='margin-top:30px;width:100%;'>
  
        <div class="first-div" style="">
          <h3 style="font-family: Helvetica, Arial, sans-serif; text-primary text-secondary"> التقييم العام للوحدات/للوحدة
          </h3>
  
  
          <div class="" id="chart-ten"></div>
        </div>
  
  
  
      </div>
    </div>
  
    </div>
  
    @php $dashbord=App\Models\Dashboard::get()->Toarray();
  
    @endphp
  
  
  
    <div class="card m-3">
      <div class="float_right m-1">
        <h3 style="font-family: Helvetica, Arial, sans-serif; text-primary text-secondary"> متابعة تقييم لأنظمة التعليم
          الإلكتروني </h3>
  
      </div>
      <div id="percent" class="part-2 firt-grid-column">
      </div>
    </div>
  
  
  
  
    </div>
  
  
  
    <div class="row d-flex justify-content-center m-3">
      <div class="card  mx-1 bg-slate-50">
        <div class="float-right m-1">
          <h3 style="font-family: Helvetica, Arial, sans-serif; text-primary text-secondary">متابعة تقييم لأنظمة التعليم
            الإلكتروني
  
          </h3>
  
        </div>
        <h6>
          [مجال التقييم]
        </h6>
        <div id="chart22" class="part-2 firt-grid-column ">
        </div>
      </div>
    </div>
  
    </div>
  
  
  
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
  
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel"> </h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <table class="table table-bordered table-striped table-hover">
              <thead>
                <th>الوحدة</th>
                <th>رمز الدورة</th>
              </thead>
              <tbody id="test"></tbody>
            </table>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary ml-2">إضافة</button>
          </div>
  
        </div>
      </div>
    </div>
  </body>



<script>
//Third chart
var options = {
  series: [{
  name: 'تقييم الطلاب للدورات',
  data:<?php echo json_encode($data['firstEvaluation']); ?>

}, {
  name: 'تقييم الطلاب للمقررات',
  data:<?php echo json_encode($data['secondEvaluation']); ?>


},
{
    name:'تقييم الطلاب للمعلمين',
    data:<?php echo json_encode($data['thirdEvaluation']); ?>



},
{
    name:' تقييم المعلمين للدورات',
    data:<?php echo json_encode($data['fourthEvaluation']); ?>



},
{
    name:' تقييم المعلمين للمقررات',
    data:<?php echo json_encode($data['fifthEvaluation']); ?>



} 
  
  

],
  chart: {
  type: 'bar',
  height: 350
},
plotOptions: {
  bar: {
    horizontal: false,
    columnWidth: '50%',
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
  categories:['مج6','مج5','مج4','مج3','مج2', 'مج1','المعهد' ,'مركز التدريب']

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
      return  val+'%'
    }
  }
},
  colors:['#0d5331', '#d14a2e','#b27a4d', '#bbb','#4a2ed1']
};

var chartThree = new ApexCharts(document.querySelector("#chart-three"), options);
chartThree.render();


</script>