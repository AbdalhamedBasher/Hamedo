<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <link href="assets/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">   
   <!-- <link rel="stylesheet" href="https://fontsgoogleapis.com/icon?family=Material+Icons">-->
 
    <script src="assets/apexcharts.min.js"></script>


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
        .course-class{
            margin-top:30%;

        }
        .material-class{
            margin-top:150%;
        }
        .teacher-class{
            margin-top:150%;
        }
       
        
        
         


       
       


        

   
       
        .teachers{
margin-top: 240px;
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
       
    .first-container {
    margin-top: 15%;
  }
  .course-class, .material-class, .teacher-class {
    margin-top: 30%;
  }
  .first-eval{
    height: 600px;
  }
  #chart{
    padding-left: -10%;
  }
  .green-ball{
    overflow: hidden;
  }.title{
    width:80%;
    font-size: 17px;
  }
  .green-ball-parent{
    white-space: nowrap;
  }

       
  
}
</style>
</head>
<body>
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
  <div class="row">
    <div class="col-12 col-sm-6 col-md-4 col-lg-2">
      <div class="card mb-sm-3">
        <div class="card-header text-center">الدورات المنعقدة</div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex justify-content-center centered-text">{{$numberOfCurrentCourses}}</li>
        </ul>
        
      </div>
    </div>
    <!-- Add five more cards here -->

    <div class="col-12 col-sm-6 col-md-4 col-lg-2 text-center">
      <div class="card mb-sm-3">
        <div class="card-header text-center">القادمة خلال شهر</div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex justify-content-center centered-text">{{$numberOfFutureCourses}}</li>
        </ul>
      </div>
    </div>


    <div class="col-12 col-sm-6 col-md-4 col-lg-2 text-center">
      <div class="card mb-sm-3">
        <div class="card-header text-center">عدد المتدربين</div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex justify-content-center centered-text">{{ $numberOfTrainees}}</li>
        </ul>
      </div>
    </div>


    <div class="col-12 col-sm-6 col-md-4 col-lg-2 text-center">
      <div class="card mb-sm-3">
        <div class="card-header text-center">عددالقوة </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex justify-content-center centered-text">{{$forceNumber}}</li>
        </ul>
      </div>
    </div>


    <div class="col-12 col-sm-6 col-md-4 col-lg-2 text-center">
      <div class="card mb-sm-3">
        <div class="card-header text-center"> عدد الطلاب الموجودين</div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex justify-content-center centered-text">{{$attendantsTotal}}</li>
        </ul>
      </div>
    </div>


    <div class="col-12 col-sm-6 col-md-4 col-lg-2 text-center">
      <div class="card">
        <div class="card-header text-center">عدد الطلاب  الغائبين</div>
        <ul class="list-group list-group-flush ">
          <li class="list-group-item d-flex justify-content-center centered-text">{{$totalAbsent}}</li>
        </ul>
      </div>
    </div>
   

  </div>
</div>
<hr class="thick-blue-border mx-5 mt-4 mb-5">
 


    <div style="background-color: gainsboro;border-style: solid;margin-right:15%;width: 30%;border-style: none;padding-right: 50px;" class="rounded-bottom py-1">
        تقييم الطلاب والمعلمين لنظام إدارة التعليم
    </div>
    <div id="chart" style="margin-left:15%;margin-right:15%;border-style: solid;border-width:12px;border-color:gainsboro;padding-left: -30%;" class="mt-5">
    </div>
  


    <div style="background-color: gainsboro;border-style: solid;width: 30%;border-style: none;padding-right: 50px;margin-bottom:30px;margin-top:30px;margin-right:auto;margin-left:55%;" class="rounded-bottom py-1 individual-units">
    تقييم الطلاب والمعلمين لكل وحدة على حدة
    </div>
    <div class="part-2 firt-grid-column">
        <div id="chart-three" style="width: 70%;margin-left:auto;margin-right:auto;border-style: solid;border-width:12px;border-color:gainsboro;padding-bottom:12px;">

        </div>
   </div>
   
   </div>
   <div class="container-2" style='margin-left:auto;margin-top:30px;width:70%;margin-right:auto;'>
    <div class="first-div" style="border-style: solid;border-width:9px;border-color:gainsboro;">
  
   <div class="mt-4" style="background-color: white;border-radius: 8px;padding: 5px;margin-top:30px;">   التقييم العام للوحدات</div>
            <div id="chart-ten"></div> 
    </div>        
    <div class="box box3" style='padding-left:15%;margin-top:0px;width:100%;border-style: solid;border-width:9px;border-color:gainsboro;'>
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
       <div style="padding-bottom:12px;" class="green-ball-parent"> متوسط تقييم الوحدة أعلى من أو يساوي %70 <span class="green-ball"  style="height: 16px;
        width: 16px;
        background-color:green;
        border-radius: 50%;
        display: inline-block;
        margin-right: 13px;
       "></span></div>

       <div></div>

</div>
</div>
</div>
</div>
<script src="assets/bootstrap.bundle.min.js"></script>

<script>
      var options = {
series: [{
name: 'ممتاز',
data: <?php echo json_encode( $myFirstData); ?>
}, {
name:'جيد جدا',
data: <?php echo json_encode( $mySecondData); ?>
}, {
name: 'جيد',
data: <?php echo json_encode( $myThirdData); ?>
},{
name: 'ضعيف',
data:  <?php echo json_encode( $myFourthData); ?>
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
        fontSize: '10.3px' // Change this value to the desired font size

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
  colors:['#0d5331', '#d14a2e','#b27a4d', '#bbb'],

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
  data:<?php echo json_encode($firstEvaluation); ?>

}, {
  name: 'تقييم الطلاب للمقررات',
  data:<?php echo json_encode($secondEvaluation); ?>


},
{
    name:'تقييم الطلاب للمعلمين',
    data:<?php echo json_encode($thirdEvaluation); ?>



},
{
    name:' تقييم المعلمين للدورات',
    data:<?php echo json_encode($fourthEvaluation); ?>



},
{
    name:' تقييم المعلمين للمقررات',
    data:<?php echo json_encode($fifthEvaluation); ?>



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
  categories:['مج6','مج5','مج4','مج3','مج2', 'مج1','المعهد','المركز']

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
console.log(chartThree);


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
  series: <?php echo json_encode($courseStudent); ?>,
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
  colors:['#0d5331', '#d14a2e','#b27a4d', '#bbb']

};

var chartFive = new ApexCharts(document.querySelector("#chart-five"), options);
chartFive.render();


//chart six"the second donut chart"
var options = {
  series:  <?php echo json_encode($materialStudent); ?>,
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
  colors:['#0d5331', '#d14a2e','#b27a4d', '#bbb']

};

var chartSix = new ApexCharts(document.querySelector("#chart-six"), options);
chartSix.render();

//chart seven"the third donut chart"
var options = {
  //series: <?php echo json_encode($teacherStudent); ?>,
    series:[65,66,33,67] ,

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
  colors:['#0d5331', '#d14a2e','#b27a4d', '#bbb']

};

var chartSeven = new ApexCharts(document.querySelector("#chart-seven"), options);
chartSeven.render();


//chart seven"the third donut chart"
var options = {
  series: <?php echo json_encode($courseTeacher); ?>,
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
  colors:['#0d5331', '#d14a2e','#b27a4d', '#bbb']

};

var chartEight = new ApexCharts(document.querySelector("#chart-eight"), options);
chartEight.render();

//chart seven"the fourth donut chart"
var options = {
  series: <?php echo json_encode($materialTeacher); ?>,
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
  colors:['#0d5331', '#d14a2e','#b27a4d', '#bbb']

};

var chartNine = new ApexCharts(document.querySelector("#chart-nine"), options);
chartNine.render();


var options = {
  series: [{
  name: 'التقييم العام',
  data: <?php echo json_encode( $unitsEvaluation); ?>


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
  categories: ['مج1', 'مج2', 'مج3', 'مج4', 'مج5', 'مج6', 'المعهد', 'المركز'],
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
colors:'#0d5331'
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
var trainingCenterEvaluation=<?php echo $unitEvaluation_1;?>;
if(trainingCenterEvaluation>=70){
  let ball_7=document.getElementById('ball-7');
  ball_7.style.backgroundColor='green';
}

//institute Evaluation
var institute=<?php echo $unitEvaluation_2;?>;
if(institute>=70){
  let ball_8=document.getElementById('ball-8');
  ball_8.style.backgroundColor='green';
}

//group_6 Evaluation
var group_6=<?php echo $unitEvaluation_3;?>;
if(group_6>=70){
  let ball_6=document.getElementById('ball-6');
  ball_6.style.backgroundColor='green';
}  

//group_5 Evaluation
var group_5=<?php echo $unitEvaluation_4;?>;
if(group_5>=70){
  let ball_5=document.getElementById('ball-5');
  ball_5.style.backgroundColor='green';
}

//group_4 Evaluation
var group_4=<?php echo $unitEvaluation_5;?>;
if(group_4>=70){
  let ball_4=document.getElementById('ball-4');
  ball_4.style.backgroundColor='green';
}

//group_3 Evaluation
var group_3=<?php echo $unitEvaluation_6;?>;
if(group_3>=70){
  let ball_3=document.getElementById('ball-3');
  ball_3.style.backgroundColor='green';
}

//group_2 Evaluation
var group_2=<?php echo $unitEvaluation_7;?>;
if(group_2>=70){
  let ball_2=document.getElementById('ball-2');
  ball_2.style.backgroundColor='green';
}

//group_1 Evaluation
var group_1=<?php echo $unitEvaluation_8;?>;
if(group_1>=70){
  let ball_1=document.getElementById('ball-1');
  ball_1.style.backgroundColor='green';
}


















</script>

</body>
</html>
