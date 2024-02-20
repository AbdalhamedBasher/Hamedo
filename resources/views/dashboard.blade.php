<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <title>لوحةالتحكم</title>
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
          width: 92%;
        }
        .white-text{
            color:white;
        }
        .white-ul{
          color: white;
        }
        .list-group-item {
        text-align: center;
        }
        .card-header,
        .list-group-item {
        text-align: center;
        }
        @media (max-width: 576px) {
        .main-grid {
        grid-template-columns: 1fr;
        }
        .first-grid-column,
        .second-grid-column,
        .third-grid-column {
        width: 90%;
        }
        }


        
      </style>
</head>
<body>
    <div class="container-fluid mb-1 shadow-sm" style="height: 80px;">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid">
            <image class="navbar-brand" src="logo (1).png" style="width:70px;height: 70px;"></image>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ms-auto white-ul">
                <li class="nav-item rounded">
                  <a class="nav-link white-text" href="#">الجداول</a>
                </li>
                <li class="nav-item rounded">
                  <a class="nav-link white-text" href="#">التمام</a>
                </li>
                <li class="nav-item rounded">
                  <a class="nav-link white-text" href="#">بطاقات</a>
                </li>
                <li class="nav-item rounded">
                  <a class="nav-link white-text" href="#">التقييم</a>
                </li>
                <li class="nav-item rounded">
                  <a class="nav-link white-text" href="#">المراجعة</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
    </div>
      

   
      
      <div class="container mt-5 mb-5">
      <div class="row">
        <div class="col-12 col-sm-6 col-md-4 col-lg-2">
          <div class="card mb-sm-3">
            <div class="card-header" style="text-align: center !important;">الدورات المنعقدة</div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item" style="text-align: center !important;">{{$numberOfCurrentCourses}}</li>
            </ul>
            
          </div>
        </div>
        <!-- Add five more cards here -->

        <div class="col-12 col-sm-6 col-md-4 col-lg-2 text-center">
          <div class="card mb-sm-3">
            <div class="card-header" style="text-align: center !important;">القادمة خلال شهر</div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item" style="text-align: center !important;">{{$numberOfFutureCourses}}</li>
            </ul>
          </div>
        </div>


        <div class="col-12 col-sm-6 col-md-4 col-lg-2 text-center">
          <div class="card mb-sm-3">
            <div class="card-header">عدد المتدربين</div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">{{ $numberOfTrainees}}</li>
            </ul>
          </div>
        </div>


        <div class="col-12 col-sm-6 col-md-4 col-lg-2 text-center">
          <div class="card mb-sm-3">
            <div class="card-header">القوة</div>
            <ul class="list-group list-group-flush text-center">
              <li class="list-group-item text-center">{{$forceNumber}}</li>
            </ul>
          </div>
        </div>


        <div class="col-12 col-sm-6 col-md-4 col-lg-2 text-center">
          <div class="card mb-sm-3">
            <div class="card-header">الموجود</div>
            <ul class="list-group list-group-flush text-center">
              <li class="list-group-item text-center">318</li>
            </ul>
          </div>
        </div>


        <div class="col-12 col-sm-6 col-md-4 col-lg-2 text-center">
          <div class="card">
            <div class="card-header">غير موجود</div>
            <ul class="list-group list-group-flush text-center">
              <li class="list-group-item">{{$mostCommonValue}}</li>
            </ul>
          </div>
        </div>
       
    
      </div>
    </div>
    <hr class="thick-blue-border mx-5 mt-4 mb-5">
     
    



    <div style="display: grid;grid-template-columns: 1fr 1fr 200px;" class="main-grid container-fluid">
        <div class="first-grid-column">
            <div style="background-color: gainsboro;border-style: solid;margin-right: 40px;width: 50%;border-style: none;padding-right: 50px;" class="rounded-bottom py-1">
                تقييم الوحدات/الوحدة لنظام إدارة التعليم
            </div>
            <div id="chart" style="width: 80%;">
            </div>
            <div style="display: flex;">
                <div id="chart-two" style="width: 26%;">
    
                </div>
                <div id="chart-three" style="width: 26%;">
        
                </div>
                <div id="chart-four" style="width: 26%;">
                </div>
            </div>
        </div>

        <div class="second-grid-column container-fluid">
            <div class="mt-5 rounded-top mb-5 px-3 py-1 container-fluid" style="background-color: gainsboro;color: blue;">تقييمات المعلم والطالب لكل من</div>
            <div style="display: grid;grid-template-columns: 1fr 1fr 1fr ;">
                <div style="display: flex;flex-direction: column;">
                    <div>
                        الدورات

                    </div>
                    <span style="margin-right: -60px;">طلاب</span>

                    <div id="chart-five" style="width: 100%;">
                        
                    </div>
                    <span style="margin-right: -60px;">معلمين</span>

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
                    <div id="chart-seven" style="width: 100%;">
                        
                    </div>

                </div>


            </div>
            <div class="mt-4 mb-4">
                <div class="rounded-top px-3 py-1" style="background-color: gainsboro;">المهام</div>
            </div>
            <div>
              <div class="btn-group">
                  <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">جداول الدورات بإنتظار التعميد</button>
                  <div class="dropdown-menu">
                      <a href="#" class="dropdown-item">جدول الدورةالأولى</a>
                      <a href="#" class="dropdown-item">جدول الدورة الثانية</a>
                      <a href="#" class="dropdown-item">جدول الدورة الثالثة</a>
                  </div>
              </div>
              <div class="btn-group">   
                  <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">جداول صادرة</button>
                  <div class="dropdown-menu">
                      <a href="#" class="dropdown-item">الجدول الأول</a>
                      <a href="#" class="dropdown-item">الجدول الثاني</a>
                      <a href="#" class="dropdown-item">الجدول الثالث</a>
                  </div>
              </div>
            </div>  
            <div class="mt-4" style="background-color: white;border-radius: 8px;padding: 5px;border-style: solid;border-width: 1px;">التقييم العام للوحدات/للوحدة</div>
            <div id="chart-ten"></div>
        </div>
        <div style="display:grid;grid-template-columns: 200px;" class="third-grid-column">
          <div style="display:flex;flex-direction:column;justify-content: center;align-items: center;margin-bottom: 0;">
              <div style="background-color: rgb(0, 110, 255);color: white;border-radius: 8px;padding: 5px;margin-bottom: 10px;" class="btn">حالة الأنظمة</div>
              <div style="background-color: white;color: blue;border-radius: 8px;padding: 5px;border-style: solid;border-color: blue;border-width: 1px;" class="btn">التعليم الإلكتروني</div>
          </div>
          
          <div style="display:flex;flex-direction:column;justify-content: center;align-items: center;width: 80%;margin-top: 0;" >
              <div style="display: flex;justify-content: space-between;align-items: center;"><span>مج1</span><span style="height: 16px;
              width: 16px;
              background-color: green;
              border-radius: 50%;
              display: inline-block;
              margin-right: 30px;
             "></span>
             </div>
  
             <div style="display: flex;justify-content: space-between;align-items: center;"><span>مج2</span><span style="height: 16px;
              width: 16px;
              background-color: green;
              border-radius: 50%;
              display: inline-block;
              margin-right: 30px;
             "></span>
             </div>
  
             <div style="display: flex;justify-content: space-between;align-items: center;"><span>3مج</span><span style="height: 16px;
              width: 16px;
              background-color: green;
              border-radius: 50%;
              display: inline-block;
              margin-right: 30px;
             "></span>
             </div>
  
             <div style="display: flex;justify-content: space-between;align-items: center;"><span>مج4</span><span style="height: 16px;
              width: 16px;
              background-color: #bbb;
              border-radius: 50%;
              display: inline-block;
              margin-right: 30px;
             "></span>
             </div>
  
             <div style="display: flex;justify-content: space-between;align-items: center;"><span>مج5</span><span style="height: 16px;
              width: 16px;
              background-color: green;
              border-radius: 50%;
              display: inline-block;
              margin-right: 30px;
             "></span>
             </div>
  
             <div style="display: flex;justify-content: space-between;align-items: center;"><span>مج6</span><span style="height: 16px;
              width: 16px;
              background-color: green;
              border-radius: 50%;
              display: inline-block;
              margin-right: 30px;
             "></span>
             </div>
  
             <div style="display: flex;justify-content: space-between;align-items: center;"><span>المركز</span><span style="height: 16px;
              width: 16px;
              background-color: #bbb;
              border-radius: 50%;
              display: inline-block;
              margin-right: 19px;
             "></span>
             </div>
  
             <div style="display: flex;justify-content: space-between;align-items: center;"><span>المعهد</span><span style="height: 16px;
              width: 16px;
              background-color: green;
              border-radius: 50%;
              display: inline-block;
              margin-right: 13px;
             "></span>
             </div>
          </div> 
          <div style="display: grid;grid-template-columns: 1fr;">
            <div class="mx-5">البنية التحتية</div>
            <div id="chart-eleven" style="width: 100%;"></div>
          </div>
             
          </div>
          
        </div>
  
             
              
          </div>
          
  
           
        </div>
       
       
    </div> 


       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script >
        var options = {
series: [{
name: 'نظام التعليم الإلكتروني',
data: <?php echo json_encode($myData); ?>
}, {
name: 'مركز التدريب',
data: [53, 32, 33, 52, 13, 43, 32,32]
}, {
name: 'المعلم',
data: [12, 17, 11, 9, 15, 11, 20,37]
}],
chart: {
type: 'bar',
height: 350,
stacked: true,
stackType: '100%'
},
plotOptions: {
bar: {
horizontal: true,
},
},
stroke: {
width: 1,
colors: ['#fff']
},
title: {
text: '100% Stacked Bar'
},
xaxis: {
categories:['المركز','المعهد','مج6','مج5','مج4','مج3','مج2','مج1']
},
////tooltip: {
//y: {
//formatter: function (val) {
 // return val;
//}
//}
//},
fill: {
opacity: 1

},
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
      text: '$ (thousands)'
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
  name: 'طلاب',
  data: [25]
}, {
  name: 'تقييم الطلاب',
  data: [35]
},
{
    name: 'تقييم المعلمين',
    data: [65]
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
  series: <?php echo json_encode($evaluation); ?>,
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

var chartFive = new ApexCharts(document.querySelector("#chart-five"), options);
chartFive.render();


//chart six"the second donut chart"
var options = {
  series:  <?php echo json_encode($evaluation); ?>,
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

var chartSix = new ApexCharts(document.querySelector("#chart-six"), options);
chartSix.render();

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

var chartSeven = new ApexCharts(document.querySelector("#chart-seven"), options);
chartSeven.render();


//chart seven"the third donut chart"
var options = {
  series: [15, 85],
  labels:["ممتاز", "جيد جداً", "جيد", "ضعيف"],
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

var chartEight = new ApexCharts(document.querySelector("#chart-eight"), options);
chartEight.render();

//chart seven"the fourth donut chart"
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

var chartNine = new ApexCharts(document.querySelector("#chart-nine"), options);
chartNine.render();


var options = {
  series: [{
  name: 'التقييم العام',
  data: [90, 75, 45, 60, 70, 80, 100, 80]
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
}
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















    </script>
</body>
</html>