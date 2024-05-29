<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Dashboard - Gyano Student Pannel</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="" rel="icon">
    <link href="" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files {{asset('backend/')}} -->
    <link href="{{asset('backend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('backend/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{asset('backend/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{asset('backend/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('backend/vendor/simple-datatables/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Template Main CSS File -->
    <link href="{{asset('backend/css/style.css')}}" rel="stylesheet">

</head>

<body>
    @yield('content')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script>
        $(document).ready(function () {
                $('.counter-value').each(function () {
                    $(this).prop('Counter', 0).animate({
                        Counter: $(this).text()
                    }, {
                        duration: 3500,
                        easing: 'swing',
                        step: function (now) {
                            $(this).text(Math.ceil(now));
                        }
                    });
                });
            });
    </script>

    <!-- Vendor JS Files -->
    <script src="{{asset('backend/vendor/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('backend/vendor/chart.js/chart.umd.js')}}"></script>
    <script src="{{asset('backend/vendor/echarts/echarts.min.js')}}"></script>
    <script src="{{asset('backend/vendor/quill/quill.min.js')}}"></script>
    <script src="{{asset('backend/vendor/simple-datatables/simple-datatables.js')}}"></script>
    <script src="{{asset('backend/vendor/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('backend/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('backend/js/main.js')}}"></script>

</body>

</html>