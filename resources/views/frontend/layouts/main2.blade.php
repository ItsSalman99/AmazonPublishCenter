<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="HTML5 Template Iteck Multi-Purpose themeforest" />
    <meta name="description" content="Iteck - Multi-Purpose HTML5 Template" />
    <meta name="author" content="" />

    <!-- Title  -->
    <title> {{ env('APP_NAME') }} </title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/frontend/images/newlogo.png') }}" title="Favicon" sizes="16x16" />

    <!-- ====== bootstrap icons cdn ====== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
        integrity="sha384-xeJqLiuOvjUBq3iGOjvSQSIlwrpqjSHXpduPd6rQpuiM3f5/ijby8pCsnbu5S81n" crossorigin="anonymous">

    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/lib/bootstrap.min.css') }}">


    <!-- ====== font family ====== -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/lib/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/lib/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/lib/jquery.fancybox.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/lib/lity.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/lib/swiper.min.css') }}" />

    <!-- ====== global style ====== -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}" />
</head>

<body>

    <!-- ====== start loading page ====== -->
    <div id="preloader">
    </div>
    <!-- ====== end loading page ====== -->

    @include('frontend.partials.pop-up')

    <!-- ====== start header ====== -->
    @include('frontend.partials.nav')
    <!-- ====== end header ====== -->


    @yield('content')

    @include('frontend.partials.clients')

    <!-- ====== start footer ====== -->
    @include('frontend.partials.footer')
    <!-- ====== end footer ====== -->

    <!-- ====== start to top button ====== -->
    <a href="#"
        class="to_top bg-gray rounded-circle icon-40 d-inline-flex align-items-center justify-content-center">
        <i class="bi bi-chevron-up fs-6 text-dark"></i>
    </a>
    <!-- ====== end to top button ====== -->

    <!-- ====== request ====== -->
    <script src="assets/frontend/js/lib/jquery-3.0.0.min.js"></script>
    <script src="assets/frontend/js/lib/jquery-migrate-3.0.0.min.js"></script>
    <script src="assets/frontend/js/lib/bootstrap.bundle.min.js"></script>
    <script src="assets/frontend/js/lib/wow.min.js"></script>
    <script src="assets/frontend/js/lib/jquery.fancybox.js"></script>
    <script src="assets/frontend/js/lib/lity.js"></script>
    <script src="assets/frontend/js/lib/swiper.min.js"></script>
    <script src="assets/frontend/js/lib/jquery.waypoints.min.js"></script>
    <script src="assets/frontend/js/lib/jquery.counterup.js"></script>
    <script src="assets/frontend/js/lib/pace.js"></script>
    <script src="assets/frontend/js/lib/scrollIt.min.js"></script>
    <script src="assets/frontend/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    @include('sweetalert::alert')

</body>


<!-- Mirrored from smartinnovates.com/items/iteck/html/home-marketing-startup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Aug 2022 15:10:56 GMT -->

</html>
