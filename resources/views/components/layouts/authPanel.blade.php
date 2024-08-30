<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>UMKM Masohi</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('ds/img/favicon.png')}}" rel="icon">
    <link href="{{asset('ds/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('ds/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('ds/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('ds/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('ds/vendor/quill/quill.snow.css')}}" rel="stylesheet">
    <link href="{{asset('ds/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
    <link href="{{asset('ds/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('ds/vendor/simple-datatables/style.css')}}" rel="stylesheet">
    <link href="{{asset('ds/css/style.css')}}" rel="stylesheet">
    @stack('css')
    @livewireStyles
    @livewireScripts
</head>

<body>
    <main class="container-fuid py-2">
        @yield('content')
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <script src="{{asset('ds/vendor/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('ds/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('ds/vendor/chart.js/chart.umd.js')}}"></script>
    <script src="{{asset('ds/vendor/echarts/echarts.min.js')}}"></script>
    <script src="{{asset('ds/vendor/quill/quill.min.js')}}"></script>
    <script src="{{asset('ds/vendor/simple-datatables/simple-datatables.js')}}"></script>
    <script src="{{asset('ds/vendor/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('ds/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('ds/js/main.js')}}"></script>
    @stack('scripts')
</body>

</html>