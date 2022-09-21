@php
use Jenssegers\Agent\Agent;

$agent = new Agent();
@endphp

<!DOCTYPE html>
<html lang="en">
@include('frontend.partials.head')
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

    <!-- ====== start header ====== -->
    @include('frontend.partials.nav')
    <!-- ====== end header ====== -->


    @yield('content')

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
