<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <link rel="stylesheet" href="{{asset('bootstrap-4.6.2/dist/css/bootstrap.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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
        .thick-blue-border{
          height: 5px;
          background-color: blue;
          width: 94%;
          margin-left: auto;
          margin-right: auto;
        }
        .white-text{
            color:white;
        }
        .white-ul{
          color: white;
        }
        .list-group-item {
        text-align: center !important;
        }     
        .card-header,
        .list-group-item {
        text-align: center !important;
        }
        .centered-text{
          
        text-align: center !important;


        }
        .container-2{
          margin-left: auto;
        margin-right: auto;
    
        display: grid;
        width: 94%;
        grid-template-columns: 1fr 1fr ;
        column-gap: 0;
        }
        .students{
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
        grid-template-columns:  1fr ;
        column-gap: 0px;
  
        }
       
        .teachers{
margin-top: 200px;
}
  
        
        






   @media (max-width: 1000px) {
  .container-1 {
    grid-template-columns: 1fr;
    justify-items: center;


  }.box box2{
    width: 100%;
  }
  .Electronic-system-state,.system-state{
    margin-right:73px;
  } 
  .container-2{
          margin-left: auto;
        margin-right: auto;
    
        display: grid;
        width: 94%;
        grid-template-columns: 1.5fr 1fr ;
        column-gap: 0;
        }
  
  .my-cards{
          z-index: 1;
          margin-bottom: 500px;
        }
  
  .box1, .box2{
    width: 90%;

  }
  .individual-units{
    width: 10%;
  }
.teachers{
margin-top: 100px;
}
.container-2{
  display: grid;
  grid-template-columns: 1fr;
}
 .the-grid{
          padding-left: 13%;
        }
        .title{
          margin-right: 3%;
          margin-top: 0px;
          font-size:16px;

        }
  
}
</style>
</head>
<body class="bg-grey-30">
<div class="container-fluid mb-1 shadow-sm">
    <nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-between">
                <img class="navbar-brand" src="/img/logo.png" style="width:70px;height: 70px;">
                
            
                <h5 class="text-center title">
                  رسوم  وأعمدة بيانية توضح تقييمات الطلاب والمعلمين لنظام التعليم الإلكتروني 
                </h5>
                <div></div>
           
    </nav>
</div>



  


  
  <div class="container mt-5 mb-5 my-cards">
    <div class="row text-center ">
      <div class="col card rounded-2 m-1">
      <div class="counter">
  
  <h2 class="timer count-title count-number text-bold" data-to="100" data-speed="1500">500</h2>
   <p class="count-text">الدورات</p>
   <div class="row">
    <div class="col">
      <h2 class="timer count-title count-number" data-to="100" data-speed="1500">300</h2>
      <p class="count-text ">المنهية</p>
    </div>
    <div class="col">
      <h2 class="timer count-title count-number" data-to="100" data-speed="1500">200</h2>
      <p class="count-text ">المنعقدة</p>

    </div>
    <div class="col">
      <h2 class="timer count-title count-number" data-to="100" data-speed="1500">200</h2>
      <p class="count-text ">المستقبلية</p>

    </div>
  </div>
</div>
      </div>
      <div class="col card rounded-2  m-1">
        <div class="counter">
    
    <h2 class="timer count-title count-number text-bold" data-to="100" data-speed="1500">500</h2>
     <p class="count-text">الدورات</p>
     <div class="row">
      <div class="col">
        <h2 class="timer count-title count-number" data-to="100" data-speed="1500">300</h2>
        <p class="count-text ">المنهية</p>
      </div>
      <div class="col">
        <h2 class="timer count-title count-number" data-to="100" data-speed="1500">200</h2>
        <p class="count-text ">المنعقدة</p>
  
      </div>
      <div class="col">
        <h2 class="timer count-title count-number" data-to="100" data-speed="1500">200</h2>
        <p class="count-text ">المستقبلية</p>
  
      </div>
    </div>
  </div>
        </div>
        <div class="col card rounded-2  m-1">
          <div class="counter">
      
      <h2 class="timer count-title count-number text-bold" data-to="100" data-speed="1500">500</h2>
       <p class="count-text">الدورات</p>
       <div class="row">
        <div class="col">
          <h2 class="timer count-title count-number" data-to="100" data-speed="1500">300</h2>
          <p class="count-text ">المنهية</p>
        </div>
        <div class="col">
          <h2 class="timer count-title count-number" data-to="100" data-speed="1500">200</h2>
          <p class="count-text ">المنعقدة</p>
    
        </div>
        <div class="col">
          <h2 class="timer count-title count-number" data-to="100" data-speed="1500">200</h2>
          <p class="count-text ">المستقبلية</p>
    
        </div>
      </div>
    </div>
          </div>
</div>




<div class="container-1">
 <!-- <div class="box box1">
    <div style="background-color: gainsboro;border-style: solid;margin-right: 27px;width: 70%;border-style: none;padding-right: 50px;" class="rounded-bottom py-1">
        تقييم الطلاب والمعلمين لنظام إدارة التعليم
    </div>
    <div id="chart" style="width: 100%;margin-top: 0px;">
    </div>
    
  </div>-->
  <div class="box box2" style="margin-top:-48.5px auto;width:80%;margin-right:auto;margin-left:auto;">

    <div class="mt-5 rounded-top mb-5 " style="background-color: gainsboro;color: blue;margin-top:-50px;margin-left:auto;width:34%;padding-right: 50px;">تقييمات المعلم والطالب لكل من</div>
   <div class="card">
    <div style="display: grid;grid-template-columns: 0.9fr 3fr 3fr 3fr;column-gap:0;border-color:gainsboro;padding-top:16px;padding-right:8px;">
        <div class="students">
            طلاب
            <div  class="teachers">            <span>معلمين</span>
            </div>


        </div>
        <div style="display: flex;flex-direction: column;">
            <div>
                الدورات

            </div>
            <div id="chart-five" style="width: 100%;">
                
            </div>
            <div id="chart-eight" style="width: 100%;">

            </div>
            
        </div>          
        <div style="display: flex;flex-direction: column;">
            <div>
                المقررات
                
            </div>
            <div id="chart-six" style="width: 100%;">
                
            </div>
            <div id="chart-nine"  style="width: 100%;">

            </div>

        </div>
        <div style="display: flex;flex-direction: column;">
            <div>
                المعلم
                
                
            </div>
            <div id="chart-seven" style="width: 106%;margin-top:-3px;">
                
            </div>

        </div>
    </div>
</div>
</div>
<div class="container-1">
 

  
  <div class="box box2" style="margin-top:-48.5px auto;width:80%;margin-right:auto;margin-left:auto;">

    <div class="mt-5 rounded-top mb-5 " style="background-color: gainsboro;color: blue;margin-top:-50px;margin-left:auto;width:34%;padding-right: 50px;">تقييمات المعلم والطالب لكل من</div>
    

        </div>
    
</div>

    </div>
    <div style="background-color: gainsboro;border-style: solid;margin-left: auto;width: 28%;border-style: none;padding-right: 50px;margin-bottom:30px;margin-top:30px;margin-right:10%;" class="rounded-bottom py-1 individual-units">
    تقييم الطلاب والمعلمين لكل وحدة على حدة
    </div>
    <div class="part-2 firt-grid-column">
        <div id="chart-three" style="width: 80%;margin-left:auto;margin-right:auto;border-color:gainsboro;padding-bottom:12px;">

        </div>
   </div>
   
   </div>
   <div class="container-2" style='margin-left:auto;margin-top:30px;width:80%;margin-right:auto;'>
    <div class="first-div" style="">
  
   <div class="mt-4 m-2" style="background-color: white;margin-top:30px;">التقييم العام للوحدات/للوحدة</div>
            <div class="card" id="chart-ten"></div> 
    </div>        
    <div class="box box3" style='padding-left:15%;margin-top:10px;width:100%'>
    <div style="display:flex;flex-direction:column;justify-content: center;align-items: center;margin-bottom: 35px;margin-right:20%;padding-top:40px;" class="the-grid">
        <div style="background-color: rgb(0, 110, 255);color: white;border-radius: 8px;padding: 5px;margin-bottom: 10px;margin-left:0px;" class=" system-state"> تقييم أفراد الوحدات</div>
        <div style="background-color: white;color: blue;border-radius: 8px;padding: 5px;border-style: solid;border-color: blue;border-width: 1px;margin-left:0px;" class=" Electronic-system-state">للتعليم الإلكتروني</div>
    </div>
    
    <div style="display:flex;flex-direction:column;justify-content: center;align-items: center;width: 80%;margin-top: 0;margin-left:-100px;margin-right:20%;" >
        <div style="display: flex;justify-content: space-between;align-items: center;"><span>مج1</span><span id="ball-1"style="height: 16px;
        width: 16px;
        background-color:#bbb ;
        border-radius: 50%;
        display: inline-block;
        margin-right: 30px;
       "></span>
       </div>

       <div style="display: flex;justify-content: space-between;align-items: center;"><span>مج2</span><span id="ball-2" style="height: 16px;
        width: 16px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        margin-right: 30px;
       "></span>
       </div>

       <div style="display: flex;justify-content: space-between;align-items: center;"><span>مج3</span><span id="ball-3" style="height: 16px;
        width: 16px;
        background-color:#bbb ;
        border-radius: 50%;
        display: inline-block;
        margin-right: 30px;
       "></span>
       </div>

       <div style="display: flex;justify-content: space-between;align-items: center;"><span>مج4</span><span id="ball-4" style="height: 16px;
        width: 16px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        margin-right: 30px;
       "></span>
       </div>

       <div style="display: flex;justify-content: space-between;align-items: center;"><span>مج5</span><span id="ball-5" style="height: 16px;
        width: 16px;
        background-color:#bbb ;
        border-radius: 50%;
        display: inline-block;
        margin-right: 30px;
       "></span>
       </div>

       <div style="display: flex;justify-content: space-between;align-items: center;"><span>مج6</span><span id="ball-6" style="height: 16px;
        width: 16px;
        background-color:#bbb ;
        border-radius: 50%;
        display: inline-block;
        margin-right: 30px;
       "></span>
       </div>

       <div style="display: flex;justify-content: space-between;align-items: center;"><span>المركز</span><span id="ball-7" style="height: 16px;
        width: 16px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        margin-right: 19px;
       "></span>
       </div>

       <div style="display: flex;justify-content: space-between;align-items: center;"><span>المعهد</span><span  id="ball-8" style="height: 16px;
        width: 16px;
        background-color:#bbb;
        border-radius: 50%;
        display: inline-block;
        margin-right: 13px;
       "></span>
       </div>
       <div class="mt-5"> متوسط تقييم الوحدة أقل من %70 <span   style="height: 16px;
        width: 16px;
        background-color:#bbb;
        border-radius: 50%;
        display: inline-block;
        margin-right: 13px;
       "></span></div>
       <div style="padding-bottom:12px;"> متوسط تقييم الوحدة أعلى من أو يساوي %70 <span   style="height: 16px;
        width: 16px;
        background-color:green;
        border-radius: 50%;
        display: inline-block;
        margin-right: 13px;
       "></span></div>

       <div></div>
       <div>
        

</div>
</div>
</div>

</div>
<@php
$dashbord=App\Models\Dashboard::get()->pluck('name');   

@endphp
  






<div class="card m-3">
 <div class="float_right m-1">
  <h2> التقييم الكلي لكل الوحدات</h2>
  
 </div>
 <div id="percent" class="part-2 firt-grid-column">
 </div>
</div>



   
</div>
<div class="row d-flex justify-content-center m-3">
 <div class="card  mx-1">
   <div class="float-right m-1">
     <h1>تقييم الوحدات بناء على التقسيم</h1>
   </div>
<div id="chart22" class="part-2 firt-grid-column ">
</div>
   </div>
 </div>

<div class="row d-flex justify-content-center">
 <div class="card col-sm-5 mx-1">
<b>
   التقييم الكلي للوحدة <b>{{auth()->user()->unit->name ?? "لا يوجد وحدة" }}</b>  
 </b>
<div id="chart_my_unit" class="part-2 firt-grid-column ">
     </div>
    </div>
<div class="card col-sm-5 mx-1">
 <b>
   التقييم الكلي للوحدة <b>{{auth()->user()->unit->name ?? "لا يوجد وحدة" }}</b>  
 </b>
<div id="chart_all" class="part-2 firt-grid-column " style="margin: 10px">
</div>
</div>

   </div>
       </div>
</div>
<
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script>

  var options = {
series: [{
name: 'ممتاز',
data: <?php echo json_encode( $data['myFirstData']); ?>
}, {
name:'جيد جدا',
data: <?php echo json_encode(  $data['mySecondData']); ?>
}, {
name: 'جيد',
data: <?php echo json_encode( $data['myThirdData']); ?>
},{
name: 'ضعيف',
data:  <?php echo json_encode( $data['myFourthData']); ?>
}
],
chart: {
type: 'bar',
height: 350,
stacked: true,
stackType: '100%',
toolbar: {
  show: true,
  tools: {
    download: false // Set this property to false to remove the download icon
  }
}

},
plotOptions: {
bar: {
horizontal: true,
barWidth: 5 // Change this value to change the width of bars

},
},
stroke: {
width: 1,
colors: ['#fff']
},
title: {
text: ''
},
xaxis: {




categories:['تقييم المعلمين للمقررات','تقييم المعلمين للدورات','تقييم الطلاب للمعلمين','تقييم الطلاب للمقررات','تقييم الطلاب للدورات']
},
yaxis: {
labels: {
  style: {
    colors: 'black',
    fontSize: '12.5px' // Change this value to the desired font size

   // Change this value to the desired color
  }
}
},

//tooltip: {
//y: {
//formatter: function (val) {
//return  val+'%'

//}}},
fill: {
opacity: 1

},
// colors:['#0d5331', '#d14a2e','#b27a4d', '#bbb'],

legend: {
position: 'top',
horizontalAlign: 'left',
offsetX: 40
}

};

var chart = new ApexCharts(document.querySelector("#chart"), options);
chart.render();

//second chart
var options = {
series: [{
name: 'بيانات الدورة',
data: [36]
}, {
name: 'دخول النظام',
data: [36]
}],
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
categories: ['مركز التدريب'],
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
    return  val 
  }
}
}
};

var chartTwo = new ApexCharts(document.querySelector("#chart-two"), options);
chartTwo.render();


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
// colors:['#0d5331', '#d14a2e','#b27a4d', '#bbb','#4a2ed1']
};

var chartThree = new ApexCharts(document.querySelector("#chart-three"), options);
chartThree.render();



//Fourth chart
var options = {

series: [{
name: 'اختبارات',
data: [90]
}, {
name: 'الزيارات',
data: [30]
}],
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
categories: ['المعلم'],
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
  return  val 
}
}
}
};

var chartFour = new ApexCharts(document.querySelector("#chart-four"), options);
chartFour.render();

//chart five"the first donut chart"
var options = {
series: <?php echo json_encode($data['courseStudent']); ?>,
labels: ["ممتاز", "جيد جداً", "جيد", "ضعيف"],
chart: {
type: 'pie',
},
responsive: [{
breakpoint: 480,
options: {
chart: {
  width: '100%'
},
legend: {
  position: 'bottom'
}
}
}],
// colors:['#0d5331', '#d14a2e','#b27a4d', '#bbb']

};

var chartFive = new ApexCharts(document.querySelector("#chart-five"), options);
chartFive.render();


//chart six"the second donut chart"
var options = {
series:  <?php echo json_encode($data['materialStudent']); ?>,
labels: ["ممتاز", "جيد جداً", "جيد", "ضعيف"],

chart: {
type: 'pie',
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

};

var chartSix = new ApexCharts(document.querySelector("#chart-six"), options);
chartSix.render();

//chart seven"the third donut chart"
var options = {
series: <?php echo json_encode($data['teacherStudent']); ?>,
labels: ["أوافق بشدة","أوافق", "لا أوافق", "لا أوافق بشدة"],
chart: {
type: 'pie',
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

};

var chartSeven = new ApexCharts(document.querySelector("#chart-seven"), options);
chartSeven.render();


//chart seven"the third donut chart"
var options = {
series: <?php echo json_encode($data['courseTeacher']); ?>,
labels:["ممتاز", "جيد جداً", "جيد", "ضعيف"],
chart: {
type: 'pie',
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

};

var chartEight = new ApexCharts(document.querySelector("#chart-eight"), options);
chartEight.render();

//chart seven"the fourth donut chart"
var options = {
series: <?php echo json_encode($data['materialTeacher']); ?>,
labels: ["ممتاز", "جيد جداً", "جيد", "ضعيف"],
chart: {
type: 'pie',
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

};

var chartNine = new ApexCharts(document.querySelector("#chart-nine"), options);
chartNine.render();


var options = {
series: [{
name: 'التقييم العام',
data: <?php echo json_encode( $data['unitsEvaluation']); ?>


}],
chart: {
type: 'bar',
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
enabled: false
},
stroke: {
show: true,
width: 2,
colors: ['transparent']
},
xaxis: {
categories: ['مج1', 'مج2', 'مج3', 'مج4', 'مج5', 'مج6', 'المعهد', 'مركز التدريب'],
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



// trainingCenterEvaluation Evaluation
var trainingCenterEvaluation=<?php echo $data['unitEvaluation_1'];?>;
if(trainingCenterEvaluation>=70){
let ball_7=document.getElementById('ball-7');
ball_7.style.backgroundColor='green';
}

//institute Evaluation
var institute=<?php echo $data['unitEvaluation_2'];?>;
if(institute>=70){
let ball_8=document.getElementById('ball-8');
ball_8.style.backgroundColor='green';
}

//group_6 Evaluation
var group_6=<?php echo $data['unitEvaluation_3'];?>;
if(group_6>=70){
let ball_6=document.getElementById('ball-6');
ball_6.style.backgroundColor='green';
}  

//group_5 Evaluation
var group_5=<?php echo $data['unitEvaluation_4'];?>;
if(group_5>=70){
let ball_5=document.getElementById('ball-5');
ball_5.style.backgroundColor='green';
}

//group_4 Evaluation
var group_4=<?php echo $data['unitEvaluation_5'];?>;
if(group_4>=70){
let ball_4=document.getElementById('ball-4');
ball_4.style.backgroundColor='green';
}

//group_3 Evaluation
var group_3=<?php echo $data['unitEvaluation_6'];?>;
if(group_3>=70){
let ball_3=document.getElementById('ball-3');
ball_3.style.backgroundColor='green';
}

//group_2 Evaluation
var group_2=<?php echo $data['unitEvaluation_7'];?>;
if(group_2>=70){
let ball_2=document.getElementById('ball-2');
ball_2.style.backgroundColor='green';
}

//group_1 Evaluation
var group_1=<?php echo $data['unitEvaluation_8'];?>;
if(group_1>=70){
let ball_1=document.getElementById('ball-1');
ball_1.style.backgroundColor='green';
}


var options = {
      series: [{
      name: 'TEAM A',
      type: 'column',
      data: []
    },  {
      name: 'TEAM C',
      type: 'line',
      data:  []
    }],
      chart: {
      height: 350,
      type: 'line',
      stacked: false,
    },
    stroke: {
      width: [0, 2, 5],
      curve: 'smooth'
    },
    plotOptions: {
      bar: {
        columnWidth: '50%'
      }
    },
    
    fill: {
      opacity: [0.85, 0.25, 1],
      gradient: {
        inverseColors: false,
        shade: 'light',
        type: "vertical",
        opacityFrom: 0.85,
        opacityTo: 0.55,
        stops: [0, 100, 100, 100]
      }
    },
    labels:[],
    markers: {
      size: 0
    },
    xaxis: {
      type: 'int'
    },
    yaxis: {
      title: {
        text: 'التقيمات',
      },
      min: 0
    },
    tooltip: {
      shared: true,
      intersect: false,
      y: {
        formatter: function (y) {
          if (typeof y !== "undefined") {
            return y.toFixed(2) + "التقييمات";
          }
          return y;
    
        }
      }
    }
    };

    var chart = new ApexCharts(document.querySelector("#percent1"), options);
    chart.render()





    var options = {
          series: [{
          name: 'درجات الوحدات',
          type: 'column',
          data: <?php echo json_encode(array_values($sum_per_units)) ?>
        },  {
          name: ' الدرجات للعام',
          type: 'line',
          data:  <?php echo json_encode(array_values($sum_per_units)) ?>
        }],
          chart: {
          height: 350,
          type: 'line',
          stacked: false,
          
        },
        stroke: {
          width: [0, 2, 5],
          curve: 'smooth'
        },
        plotOptions: {
          bar: {
            columnWidth: '50%'
          }
        },
        
        fill: {
          opacity: [0.85, 0.25, 1],
          gradient: {
            inverseColors: false,
            shade: 'light',
            type: "vertical",
            opacityFrom: 0.85,
            opacityTo: 0.55,
            stops: [0, 100, 100, 100]
          }
        },
        labels: <?php echo json_encode(array_keys($sum_per_units)) ?> ,
        markers: {
          size: 0
        },
        xaxis: {
          type: 'text'
        },
        yaxis: {
          title: {
            text: 'Points',
          },
          min: 0
        },
        tooltip: {
          shared: true,
          intersect: false,
          y: {
            formatter: function (y) {
              if (typeof y !== "undefined") {
                return y.toFixed(2) + " points";
              }
              return y;
        
            }
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#percent"), options);
        chart.render()

      


        var options = {
          series: <?php echo json_encode(array_values($items_my_courses)) ?>,
          chart: {
          type: 'donut',
        },
        responsive: [{
          breakpoint: 480,
          options: {
            chart: {
              width: 35
            },
            legend: {
              position: 'bottom'
            }
          }
        }],
        labels: <?php echo json_encode(array_keys($items_my_courses)) ?>,
  dataLabels: {
    formatter: (val, { seriesIndex, w }) => w.config.series[seriesIndex] // <--- HERE
  }
        };

        var chart = new ApexCharts(document.querySelector("#chart_all"), options);
        chart.render();



        // <?php echo json_encode(array_values($dashbord_my_sum)) ?>


        var options = {
          series: <?php echo json_encode(array_values($dashbord_my_sum)) ?>,
          chart: {
          type: 'donut',
        },
        responsive: [{
          breakpoint: 480,
          options: {
            chart: {
              width: 35
            },
            legend: {
              position: 'bottom'
            }
          }
        }],
        labels: <?php echo json_encode(array_keys($dashbord_my_sum)) ?>,
  dataLabels: {
    formatter: (val, { seriesIndex, w }) => w.config.series[seriesIndex] // <--- HERE
  }
        };

        var chart = new ApexCharts(document.querySelector("#chart_my_unit"), options);
        chart.render();


        var options = {
          series: [{
          name: <?php echo json_encode($dashbord[0]) ?>,
    
        }, {
          name:  <?php echo json_encode($dashbord[1]) ?>,
   
        }, {
          name:  <?php echo json_encode($dashbord[2]) ?>,

        }],
          chart: {
          type: 'bar',
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
          enabled: false
        },
        stroke: {
          show: true,
          width: 2,
          colors: ['transparent']
        },
        xaxis: {
          categories: <?php echo json_encode(array_keys($item_sum[1])) ?>,
        },
        yaxis: {
          title: {
            text: '$ (thousands)'
          }
        },
        fill: {
          opacity: 1
        },
        tooltip: {
          y: {
            formatter: function (val) {
              return val + " %"
            }
          }
        }
        };

        var chart = new ApexCharts(document.querySelector("#chart22"), options);
        chart.render();



       










</script>


</body>
</html>
