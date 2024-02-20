<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="{{ asset('css/bootstrap.min1.css') }}" >
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

<title>نظام التقييم</title>
<link href="{{ asset('css/login.css') }}" rel="stylesheet" />
<style>
      @font-face {
          font-family: 'OptimusPrinceps';
      src: url('{{asset('/fonts/almarai/Almarai-Bold.ttf')}}');
  }
      *{
          
  font-family: 'OptimusPrinceps' !important;
      
      }
      ul{
          
          font-family: 'OptimusPrinceps';
              
              }
  </style>
</head>
<body>
      <div class="demo-container">
      <div class="container">
      <div class="row">
      <div class="col-lg-6 col-12 mx-auto">
      <div class="text-center image-size-small position-relative">
      <img src="{{asset('img/1.png')}}" class="rounded-circle bg-white">

      </div>
      <div class="p-5 bg-white rounded shadow-lg">
      <h2 class="mb-2 text-center pt-5">تسجيل الدخول </h2>

      <form method="POST" action="{{ route('postLogin') }}">
            @csrf
            <label class="font-500">اسم المستخدم</label>
            <input name="username" class="form-control form-control-lg mb-3" type="text">
            <label class="font-500">كلمة المرور</label>
            <input name="password" class="form-control form-control-lg" type="password">
            <br>
            <button class="btn btn-success btn-lg w-100 shadow-lg">الدخول </button>
      </form>
      <div class="text-center pt-4">
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
<script src="{{ asset('js/jquery.slim.min.js') }}" ></script>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}" ></script>
</body>
</html>
