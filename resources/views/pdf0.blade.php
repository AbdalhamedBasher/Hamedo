
<!DOCTYPE html>
<html dir="rtl" lang="en">
<head>
<meta charset="utf-8">
<title>كشف المستخدمين</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="{{ asset('css/date.css') }}">
<link rel="stylesheet" href="{{ asset('css/data1.css') }}">
</head>
<body>
<div id="wrapper">
 <div class="line" style="margin: 40px 0;"></div>
  <div class="container">
   <div class="header">
    <h1>بيانات المستخدمين</h1>
    <img src="{{asset('img/1.png')}}" alt="pic1">
    </div>
    <div class="col-6">
                <h2> اسم الوحدة:  </h2>
             </div>

             <div class="col-6">
                <h2> رقم الدورة : </h2>
             </div>
              <div class="col-12">
                <h2>عدد المستخدمين الذي تم إنشاءه : </h2>
             </div>
             <div class="col-12">
                <h2>اسم الدورة:  </h2>
             </div>
    <div class="sixteen columns">
      <table class="spacing-table">
        @foreach($users as $user)
        <tr>
        <td>
الرتبة
        </td>
        <td>
        <p>{{$user->name}} </p>
        </td>
        <td>
        <p>{{$user->name}}</p>
        <p style='margin-bottom: 0px !important;'>Password: 12345</p>
        </td>
        </tr>
      @endforeach



      </table>
</div>
<div>
</div>
</div>
</div>

</div>

</body>
</html>
