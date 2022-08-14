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
    <title>{{ env('APP_NAME') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/frontend/images/fav.png" title="Favicon" sizes="16x16" />

    <!-- ====== bootstrap icons cdn ====== -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
        integrity="sha384-xeJqLiuOvjUBq3iGOjvSQSIlwrpqjSHXpduPd6rQpuiM3f5/ijby8pCsnbu5S81n" crossorigin="anonymous">

    <!-- bootstrap 5 -->
    <link rel="stylesheet" href="assets/frontend/css/lib/bootstrap.min.css">

    <!-- ====== font family ====== -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="assets/frontend/css/lib/all.min.css" />
    <link rel="stylesheet" href="assets/frontend/css/lib/animate.css" />
    <link rel="stylesheet" href="assets/frontend/css/lib/jquery.fancybox.css" />
    <link rel="stylesheet" href="assets/frontend/css/lib/lity.css" />
    <link rel="stylesheet" href="assets/frontend/css/lib/swiper.min.css" />

    <!-- ====== global style ====== -->
    <link rel="stylesheet" href="assets/frontend/css/style.css" />
</head>

<body>

    <!-- ====== start loading page ====== -->
    <div id="preloader">
    </div>
    <!-- ====== end loading page ====== -->
    <!-- ====== start header ====== -->
    @include('frontend.partials.header')
    <!-- ====== end header ====== -->


    @yield('content')

    <!-- ====== start footer ====== -->
    <footer class="style-6 border-top brd-gray">
        <div class="container">
            <div class="row gx-0 justify-content-between">
                <div class="col-lg-3">
                    <div class="items">
                        <div class="title">
                            Itekseo - Best for SEO/Marketing
                        </div>
                        <ul>
                            <li class="color-666 mb-2">
                                <i class="bi bi-house me-1"></i>
                                <small>223 Thatcher Road St, Manhattan</small>
                            </li>
                            <li class="color-666 mb-2">
                                <i class="bi bi-phone me-1"></i>
                                <small>+031 5689 89 98</small>
                            </li>
                            <li class="color-666 mb-2">
                                <i class="bi bi-envelope me-1"></i>
                                <small>contact@itecksolution.co</small>
                            </li>
                        </ul>
                        <div class="socail-icons">
                            <a href="https://www.smartinnovates.com/items/iteck/html/twiter.com"
                                class="icon-35 rounded-circle bg-gray overflow-hidden d-inline-flex align-items-center justify-content-center text-gray me-2">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.smartinnovates.com/items/iteck/html/facebook.com"
                                class="icon-35 rounded-circle bg-gray overflow-hidden d-inline-flex align-items-center justify-content-center text-gray me-2">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://www.smartinnovates.com/items/iteck/html/instagram.com"
                                class="icon-35 rounded-circle bg-gray overflow-hidden d-inline-flex align-items-center justify-content-center text-gray">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="items">
                        <div class="title">
                            Services
                        </div>
                        <ul>
                            <li>
                                <a href="#">SEO Analysis</a>
                            </li>
                            <li>
                                <a href="#">Content Strategy</a>
                            </li>
                            <li>
                                <a href="#">Growth Hacking</a>
                            </li>
                            <li>
                                <a href="#">Social Media</a>
                            </li>
                            <li>
                                <a href="#">Web Design & Develoment</a>
                            </li>
                            <li>
                                <a href="#">Google/FB Ads</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="items">
                        <div class="title">
                            Information
                        </div>
                        <ul>
                            <li>
                                <a href="#"> About Itekseo </a>
                            </li>
                            <li>
                                <a href="#"> Investors </a>
                            </li>
                            <li>
                                <a href="#"> Blog </a>
                            </li>
                            <li>
                                <a href="#"> Contact </a>
                            </li>
                            <li>
                                <a href="#"> How It Works </a>
                            </li>
                            <li>
                                <a href="#"> Pricing Plan </a>
                            </li>
                            <li>
                                <a href="#"> Covid-19 Update </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="items">
                        <div class="title">
                            Newsletter
                        </div>
                        <small class="color-666">Register now to get latest updates on <br> promotions & coupons.
                        </small>
                        <form action="https://smartinnovates.com/items/iteck/html/contact.php" class="form mt-30"
                            method="post">
                            <div class="form-group">
                                <span class="icon">
                                    <i class="bi bi-envelope"></i>
                                </span>
                                <input type="text" placeholder="Enter your email">
                                <button> <i class="bi bi-send"></i> </button>
                            </div>
                        </form>
                        <small class="color-666 fst-italic mt-20">By subscribing, you accepted the our <a
                                href="#" class="fst-normal text-dark">Policy.</a> </small>
                    </div>
                </div>
            </div>
            <div class="foot">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="logo">
                            <img src="assets/frontend/images/logo_home6.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <small class="small">
                            © 2022 Copyrights by <small class="fw-bold text-decoration-underline">Amazon Publish Center.</small>
                            All Rights Reserved.
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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
</body>


<!-- Mirrored from smartinnovates.com/items/iteck/html/home-marketing-startup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Aug 2022 15:10:56 GMT -->

</html>
