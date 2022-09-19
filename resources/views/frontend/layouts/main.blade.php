<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Title  -->
    <title>{{ config('app.name') }} - Ghostwriting Services by The Professionals</title>

    <!-- Favicon -->
    <link rel="favicon icon" href="{{ asset('assets/frontend/images/newlogo.png') }}" title="Favicon" sizes="16x16" />

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/lib/bootstrap.min.css') }} ">


    <link rel="stylesheet" href="{{ asset('assets/frontend/css/lib/swiper.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('assets/frontend/css/lib/jquery.fancybox.css') }}" />
    <!-- ====== global style ====== -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/bgswiper-slider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/lib/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/lib/owl.carousel.min.css') }}">
</head>

<body>

    <!-- ====== start loading page ====== -->
    <div class="preloader">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ====== end loading page ====== -->

    {{-- @include('frontend.partials.pop-up') --}}

    <!-- ====== start header ====== -->
    @include('frontend.partials.header')
    <!-- ====== end header ====== -->


    @yield('content')

    <!-- ====== start footer ====== -->
    @include('frontend.partials.footer')
    <!-- ====== end footer ====== -->

    <!-- ====== request ====== -->
    <script src="{{ asset('assets/frontend/js/lib/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/lib/jquery-migrate-3.0.0.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/lib/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/lib/wow.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/lib/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/lib/lity.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/lib/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/lib/jquery.counterup.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/lib/pace.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/lib/mixitup.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/lib/scrollIt.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/lib/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/lib/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/frontend/js/main.js') }}"></script>

    @include('sweetalert::alert')
    <script>
        // ---------- portfolio mixitup -----------
        var containerEl = document.querySelector('.mix-container');

        var mixer = mixitup(containerEl);
    </script>

</body>


<!-- Mirrored from smartinnovates.com/items/iteck/html/home-marketing-startup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Aug 2022 15:10:56 GMT -->

</html>
