<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('frontend/fonts/style.css')}}">

  <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">

  <!-- Style -->
  <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

  <title>Login Page, Gyano - Online Courses & Education System</title>
  <style>
    @media (max-width: 960px) {
      .img-log {
        display: none;
      }
    }

    body{
        background-color: #11408A;
    }
  </style>
</head>

<body>
  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2 img-log" style="background-image: url('{{asset('frontend/img/aboutus/log.jpg')}}');">
    </div>
    <div class="contents order-2 order-md-1">
    @yield('content')
</div>
  </div>
  <script src="{{asset('frontend/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('frontend/js/popper.min.js')}}"></script>
  <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('frontend/js/main.js')}}"></script>
</body>

</html>