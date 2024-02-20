<!DOCTYPE html>
<html lang="en" dir="rtl">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style >
    .stretch-card>.card {
  width: 100%;
  min-width: 100%
}

body {
  background-color: #f9f9fa;
  text-align: right;
}

.flex {
  -webkit-box-flex: 1;
  -ms-flex: 1 1 auto;
  flex: 1 1 auto
}

@media (max-width:991.98px) {
  .padding {
      padding: 1.5rem
  }
}

@media (max-width:767.98px) {
  .padding {
      padding: 1rem
  }
}

.padding {
  padding: 3rem
}

.card {
  box-shadow: none;
  -webkit-box-shadow: none;
  -moz-box-shadow: none;
  -ms-box-shadow: none
}

.card {
  position: relative;
  display: flex;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: border-box;
  border: 1px solid #3da5f;
  border-radius: 0
}

.card .card-block {
 padding: 1.25rem;
 text-align: right;
}

h6 {
 font-size: 16px !important;
}

.text-c-green {
 color: #2ed8b6;
}

.m-l-10 {
 margin-left: 10px;
}

.proj-progress-card .progress {
 height: 6px;
 overflow: visible;
 margin-bottom: 10px;
}

.proj-progress-card .progress .progress-bar {
 position: relative;
}

.progress .progress-bar {
 height: 100%;
 color: inherit;
}

.bg-c-red {
 background: #FF5370;
}

.proj-progress-card .progress .progress-bar.bg-c-red:after {
 border: 3px solid #FF5370;
}

.proj-progress-card .progress .progress-bar:after {
 content: "";
 background: #fff;
 position: absolute;
 right: -6px;
 top: -4px;
 border-radius: 50%;
 width: 15px;
 height: 15px;
}

.bg-c-blue {
 background: #4099ff;
}

.proj-progress-card .progress .progress-bar.bg-c-blue:after {
 border: 3px solid #4099ff;
}

.proj-progress-card .progress .progress-bar.bg-c-green:after {
 border: 3px solid #2ed8b6;
}

.bg-c-green {
 background: #2ed8b6;
}

.bg-c-yellow {
 background: #FFB64D;
}

.proj-progress-card .progress .progress-bar.bg-c-yellow:after {
 border: 3px solid #FFB64D;
}

.m-b-30 {
 margin-bottom: 30px;
}

.text-c-red {
 color: #FF5370;
}
.header{
  text-align: center;
}
.line{
  text-align: right;
}

    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  </head>
  <body>
    <div class="header">
     <h1>التقرير التفصيلي للمقررات </h1>
     <img src="{{asset('img/1.png')}}" alt="pic1">
     </div>
    <div class="line">
     <div class="line" ></div>
        <div class="">
          <h2> اسم الدورة  </h2>
       </div>

        <div class="">
          <h2>     عدد المصوتين </h2>
       </div>
       <div class="">
          <h2>اسم الاستبيان  </h2>
       </div>
     </div>
    <div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex ">

<div class="col-xl-12">

  <div class="card proj-progress-card">
      <div class="card-block">
        <h4>السؤال الاول</h4>
          <div class="row">
              <div class="col-xl-3 col-md-6">
                  <h6>ممتاز </h6>
                  <h5 class="m-b-30 f-w-700">89%</h5>
                  <div class="progress">
                      <div class="progress-bar " style="width:25%"></div>
                  </div>
              </div>
              <div class="col-xl-3 col-md-6">
                  <h6>جيد جدا</h6>
                  <h5 class="m-b-30 f-w-700">89%</h5>
                  <div class="progress">
                      <div class="progress-bar " style="width:65%"></div>
                  </div>
              </div>
              <div class="col-xl-3 col-md-6">
                  <h6>جيد</h6>
                  <h5 class="m-b-30 f-w-700">89%</h5>
                  <div class="progress">
                      <div class="progress-bar " style="width:85%"></div>
                  </div>
              </div>
              <div class="col-xl-3 col-md-6">
                  <h6>ضعيف</h6>
                  <h5 class="m-b-30 f-w-700">89%</h5>
                  <div class="progress">
                      <div class="progress-bar " style="width:45%"></div>
                  </div>
              </div>
          </div>
      </div>
  </div>


</div>



        </div>
    </div>
</div>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" ></script>

  </body>
</html>
