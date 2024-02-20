<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="{{ asset('jquery-3.6.0.min.js')}}" defer></script>
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
<script src="{{ asset('jquery-3.6.0.min.js')}}" defer></script>
</head>
<body class="bg-grey">
 
<div class="container-fluid mb-1 shadow-sm">
    <nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-between">
                <img class="navbar-brand" src="/img/logo.png" style="width:70px;height: 70px;">
                
            
                
                <div></div>
           
    </nav>
</div>

@php
 $dashbord=App\Models\Dashboard::get()->pluck('name');   

@endphp
   
<div class="card d-flex justify-content-center m-3 bg-white">
  <div class=" col-sm-6 col-md-4 col-lg-2 m-3">
    <div class="card mb-sm-3">
      <div class="card-header text-center">الدورات المنعقدة</div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item d-flex justify-content-center centered-text counter">

      
          
        </li>
      </ul>
      
    </div>
  </div>
  

</div>





<div class="card m-3">
  <div class="card-header">
    التقييم الكلي لكل الوحدات
  </div>
  <div id="percent" class="part-2 firt-grid-column">
  </div>
</div>



    
</div>
<div class="row d-flex justify-content-center m-3">
  <div class="card  mx-1">
    <div class="card-header">
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

   


    
<a class="btn btn-lg btn-success" href="{{ url('admin') }}">
  رجوع 
  </a> {{-- الدورة --}} 

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script>
      var options = {
series: [{
name: 'ممتاز',
data:[]
}, {
name:'جيد جدا',
data:[]
}, {
name: 'جيد',
data: []
},{
name: 'ضعيف',
data:  []
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
  series: [],
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
  series:  [],
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
  series: [],
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
  series: [],
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
  series: [],
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
  name: 'التقرير لكل الوحدات بالاسئلة',
  data: <?php echo json_encode(array_values($dashbord_unit_sum)) ?>


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
  categories: <?php echo json_encode(array_keys($dashbord_unit_sum)) ?>,
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
      return  val.toFixed(2)  
    }
  }
},
colors:['#0d5331', '#d14a2e','#b27a4d', '#bbb']
};

// <?php echo json_encode(array_values($dashbord_my_sum)) ?>




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
<script>
  </script>
</body>
</html>
