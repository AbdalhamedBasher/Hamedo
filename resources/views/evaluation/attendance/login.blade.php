<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="{{ asset('css/bootstrap.min1.css') }}" >
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

<title>نظام الحضور و الإنصراف</title>
<link href="{{ asset('css/login.css') }}" rel="stylesheet" />
</head>
<body>
      <div class="demo-container">
      <div class="container">
      <div class="row">
      <div class="col-lg-6 col-12 mx-auto">
      <div class="text-center image-size-small position-relative">
      <img src="{{asset('img/logo.png')}}" class="rounded-circle bg-white">
      @include('sweetalert::alert')
      </div>
      <div class="p-5 bg-white rounded shadow-lg border-black">
        <h2 class="mb-2 text-center pt-5"> نظام الحضور </h2>
        <h3 class="mb-2 text-center pt-5">تسجيل الدخول </h3>

      <form method="POST" action="{{ route('attendancepostLogin') }}">
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
