@extends('frontend.layouts.main')

@section('content')
    <!--Contents-->
    <main>
        
        @include('frontend.partials.clients')
        
        <div class="container">
            <hr>
        </div>


        <!-- ====== start about ====== -->
        <section class="about style-6">
            <div class="container">
                <div class="content section-padding">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-5">
                            <div class="info">
                                <div class="section-head mb-40 style-6">
                                    <h2> Boost your business up to
                                        <span> <small>high level</small> </span>
                                    </h2>
                                </div>
                                <div class="text">
                                    Like any great agency, we are only as good as the result we deliver of our recent
                                    work. Our developers are committed to maintaining the highest web standards so that
                                    your site will withstand the test of time.
                                </div>
                                <div class="btns d-flex align-items-center mt-60">
                                    <a href="#"
                                        class="btn rounded-pill butn-blue6 hover-blue2 sm-butn fw-bold me-3">
                                        <span>
                                            About Us
                                            <i class="bi bi-arrow-right ms-1"></i>
                                        </span>
                                    </a>
                                    <a href="https://youtu.be/pGbIOC83-So?t=21" data-lity class="vid-btn">
                                        <i class="bi bi-play"></i>
                                        <span>
                                            See Our <br> Showreels
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="img">
                                <img src="assets/frontend/images/about/superman_3d.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="assets/frontend/images/about/about_s6_bubbles.png" alt="" class="bubbles rotate-center">
        </section>
        <!-- ====== end community ====== -->

        <!-- ====== start services ====== -->
        <section class="services section-padding style-6">
            <div class="container">
                <div class="section-head mb-40 text-center style-6">
                    <h2 class="mb-20">

                        <span> <small>Affordable</small> </span> Online Self-Publishing Agency.
                    </h2>
                    <p>Our strategy includes consistently evolving, to ensure we’re producing exceptional SEO for
                        business.</p>
                </div>
            </div>
            <div class="content">
                <div class="services-slider position-relative style-6">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a href="#" class="service-card style-6">
                                    <div class="icon">
                                        <img src="assets/frontend/images/icons/serv_icons/publisher.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>Self Pubishing</h5>
                                        <div class="text">
                                            You can provide the answers that your potential customers are trying to
                                            find, so you can become the industry.
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#" class="service-card style-6">
                                    <div class="icon">
                                        <img src="assets/frontend/images/icons/serv_icons/edit.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>Editing and Proofreading</h5>
                                        <div class="text">
                                            Get more website traffic, more customers & more online visibility with
                                            powerful SEO services.
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#" class="service-card style-6">
                                    <div class="icon">
                                        <img src="assets/frontend/images/icons/serv_icons/format.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>Formating</h5>
                                        <div class="text">
                                            Your website has to impress your visitors within just a few seconds
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#" class="service-card style-6">
                                    <div class="icon">
                                        <img src="assets/frontend/images/icons/serv_icons/magazine.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>Book Cover Design</h5>
                                        <div class="text">
                                            Get more website traffic, more customers for your social chanel
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#" class="service-card style-6">
                                    <div class="icon">
                                        <img src="assets/frontend/images/icons/serv_icons/trailer.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>Video Book Trailers</h5>
                                        <div class="text">
                                            Your website has to impress your visitors within just a few seconds. If it
                                            runs slow, if it feels outdated
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="#" class="service-card style-6">
                                    <div class="icon">
                                        <img src="assets/frontend/images/icons/serv_icons/seo.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>SEO</h5>
                                        <div class="text">
                                            Optimized your website on google result with PPC Marketing
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="#" class="btn rounded-pill butn-blue6 hover-blue2 sm-butn fw-bold me-3">
                        <span>
                            See All Our Services
                            <i class="bi bi-arrow-right ms-1"></i>
                        </span>
                    </a>
                </div>
            </div>
        </section>
        <!-- ====== end services ====== -->

        <!-- ====== start projects ====== -->
        <section class="projects style-6">
            <div class="content section-padding">
                <div class="container">
                    <div class="section-head mb-40 d-flex justify-content-between align-items-center style-6">
                        <h2 class="mb-20">
                            Features Projects
                        </h2>
                        <a href="#" class="small text-decoration-underline text-uppercase">See All
                            Projects</a>
                    </div>
                    <div class="slider-3items slider-style-6">
                        <div class="swiper-container pb-70">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="project-card style-6">
                                        <div class="img">
                                            <img src="assets/frontend/images/projects/4.png" alt="">
                                        </div>
                                        <div class="info">
                                            <h3 class="title">
                                                <a href="#">Okpay E-Wallet Optimized</a>
                                            </h3>
                                            <small class="color-blue6">
                                                <a href="#">SEO analysis</a>
                                            </small>
                                            <div class="text">
                                                Trust our top minds to eliminate workflow pain points, implement new
                                                tech & app.
                                            </div>
                                            <div class="tags">
                                                <span>
                                                    <a href="#">SEO Analysis</a>
                                                </span>
                                                <span>
                                                    <a href="#">Content Strategy</a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="project-card style-6">
                                        <div class="img">
                                            <img src="assets/frontend/images/projects/5.png" alt="">
                                        </div>
                                        <div class="info">
                                            <h3 class="title">
                                                <a href="#">e-Commerce Dashboard</a>
                                            </h3>
                                            <small class="color-blue6"> <a href="#">website design</a> & <a
                                                    href="#">develoment</a> </small>
                                            <div class="text">
                                                Trust our top minds to eliminate workflow pain points, implement new
                                                tech & app.
                                            </div>
                                            <div class="tags">
                                                <span><a href="#">WordPress</a></span>
                                                <span><a href="#">PHP</a></span>
                                                <span><a href="#">HTML/CSS</a></span>
                                                <span><a href="#">Figma</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="project-card style-6">
                                        <div class="img">
                                            <img src="assets/frontend/images/projects/7.png" alt="">
                                        </div>
                                        <div class="info">
                                            <h3 class="title"><a href="#">MLB Store
                                                    Instagram</a></h3>
                                            <small class="color-blue6"><a href="#">social media</a></small>
                                            <div class="text">
                                                Trust our top minds to eliminate workflow pain points, implement new
                                                tech & app.
                                            </div>
                                            <div class="tags">
                                                <span><a href="#">Social</a></span>
                                                <span><a href="#">Instagram</a></span>
                                                <span><a href="#">Followers</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="project-card style-6">
                                        <div class="img">
                                            <img src="assets/frontend/images/projects/5.png" alt="">
                                        </div>
                                        <div class="info">
                                            <h3 class="title"><a href="#">e-Commerce
                                                    Dashboard</a></h3>
                                            <small class="color-blue6"><a href="#">website design</a> & <a
                                                    href="#">develoment</a></small>
                                            <div class="text">
                                                Trust our top minds to eliminate workflow pain points, implement new
                                                tech & app.
                                            </div>
                                            <div class="tags">
                                                <span><a href="#">WordPress</a></span>
                                                <span><a href="#">PHP</a></span>
                                                <span><a href="#">HTML/CSS</a></span>
                                                <span><a href="#">Figma</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ====== pagination ====== -->
                        <div class="swiper-pagination"></div>

                        <!-- ====== arrows ====== -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end projects ====== -->

        <!-- ====== start choose us ====== -->
        <section class="choose-us section-padding style-6">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-6">
                        <div class="img">
                            <img src="assets/frontend/images/choose_us/man_arrow.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="info">
                            <div class="section-head mb-20 style-6">
                                <h2> Why Choose Amazon Pubish Center </span>
                                </h2>
                            </div>
                            <div class="text mb-50">
                                We are passionate about our work. Our designers stay ahead of the curve to provide
                                engaging and user-friendly website designs to make your business stand out
                            </div>
                            <ul>
                                <li class="d-flex mb-40">
                                    <small
                                        class="icon-60 bg-gray rounded-circle color-blue4 d-inline-flex align-items-center justify-content-center me-4 flex-shrink-0">
                                        <img src="assets/frontend/images/icons/ch4.png" alt="">
                                    </small>
                                    <div class="inf">
                                        <h5>Affordable Price</h5>
                                        <p class="fs-12px color-666 mt-2">
                                            Nanotechnology immersion along the information high will close the loop on
                                            focusing solely
                                        </p>
                                    </div>
                                </li>
                                <li class="d-flex mb-40">
                                    <small
                                        class="icon-60 bg-gray rounded-circle color-blue4 d-inline-flex align-items-center justify-content-center me-4 flex-shrink-0">
                                        <img src="assets/frontend/images/icons/ch5.png" alt="">
                                    </small>
                                    <div class="inf">
                                        <h5>Top-notch Experts Consulting</h5>
                                        <p class="fs-12px color-666 mt-2">
                                            Our top-notch Experts with much years of experience certail will give best
                                            solutions for your business
                                        </p>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <small
                                        class="icon-60 bg-gray rounded-circle color-blue4 d-inline-flex align-items-center justify-content-center me-4 flex-shrink-0">
                                        <img src="assets/frontend/images/icons/ch6.png" alt="">
                                    </small>
                                    <div class="inf">
                                        <h5>Dedicated Support 24/7</h5>
                                        <p class="fs-12px color-666 mt-2">
                                            Customer support is always our number one priority.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <img src="assets/frontend/images/about/about_s6_bubbles.png" alt="" class="bubbles rotate-center">
        </section>
        <!-- ====== end choose us ====== -->


        <!-- ====== start testimonials ====== -->
        <div class="testimonials style-6">
            <div class="container">
                <div class="row gx-0 align-items-center justify-content-between">
                    <div class="col-lg-4">
                        <div class="testi-slider style-6 slider-style-6">
                            <div class="icon mb-50">
                                <i class="fas fa-quote-right"></i>
                            </div>
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="testi-card">
                                            <div class="text">
                                                I don’t know what else to say, this is something that you haven’t seen
                                                before. Unique design, lightweight, and outstanding support. Itekseo always
                                                a pleasure to work!
                                            </div>
                                            <div class="author mt-30">
                                                <span class="color-000 fw-bold text-capitalize">Conor Martinelli</span>
                                                <p class="fs-10px"> Director at <a href="#"
                                                        class="text-decoration-underline color-blue6"> Ecoland Resort &
                                                        Hotel </a> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="img">
                            <img src="assets/frontend/images/testimonials/users_6.png" alt="" class="">
                            <img src="assets/frontend/images/testimonials/bubbls.png" alt="" class="bubbls rotate-center">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ====== end testimonials ====== -->


        <!-- ====== start numbers ====== -->
        <section class="numbers section-padding style-6">
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="number-card style-6">
                                <h2 class="me-4">
                                    <span class="counter">12</span> +
                                </h2>
                                <div class="text">
                                    Years <br> of Experience
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="number-card style-6">
                                <h2 class="me-4">
                                    <span class="counter">1565</span>
                                </h2>
                                <div class="text">
                                    Projects <br> completed
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="number-card style-6 border-0">
                                <h2 class="me-4">
                                    <span class="counter">265</span>
                                </h2>
                                <div class="text">
                                    Satisfied clients on <br> 24 countries
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end numbers ====== -->


        <!-- ====== start team ====== -->
        <section class="team section-padding style-6">
            <div class="content">
                <div class="container">
                    <div class="row items align-items-end mb-50">
                        <div class="col-lg-7">
                            <div class="section-head mb-0 style-6">
                                <h2 class="mb-0"> Our Leaders
                                </h2>
                            </div>
                        </div>
                        <div class="col-lg-5 text-end">
                            <a class="text-decoration-underline text-uppercase mb-4" href="#">See All our team</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="team-card mb-30 mb-lg-0 style-6">
                                <div class="img img-cover">
                                    <img src="assets/frontend/images/team/1.jpg" alt="">
                                    <div class="social-icons">
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-github"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="info">
                                    <a class="d-block" href="#">
                                        <h6>Michael Edwards</h6>
                                    </a>
                                    <small>CEO Founder</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="team-card mb-30 mb-lg-0 style-6">
                                <div class="img img-cover">
                                    <img src="assets/frontend/images/team/5.jpg" alt="">
                                    <div class="social-icons">
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-github"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="info">
                                    <a class="d-block" href="#">
                                        <h6>Bobby Kane</h6>
                                    </a>
                                    <small>CTO</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="team-card mb-30 mb-lg-0 style-6">
                                <div class="img img-cover">
                                    <img src="assets/frontend/images/team/3.jpg" alt="">
                                    <div class="social-icons">
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-github"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="info">
                                    <a class="d-block" href="#">
                                        <h6>Robert Downey Jr</h6>
                                    </a>
                                    <small>Project Manager</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="team-card style-6">
                                <div class="img img-cover">
                                    <img src="assets/frontend/images/team/4.jpg" alt="">
                                    <div class="social-icons">
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-github"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="info">
                                    <a class="d-block" href="#">
                                        <h6>Andrew Robertson</h6>
                                    </a>
                                    <small>Marketing Leader</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end team ====== -->


        <!-- ====== start blog ====== -->
        <section class="blog section-padding style-6">
            <div class="container">
                <div class="section-head mb-70 style-6 text-center">
                    <h2 class="mb-20"> Latest from our blog
                    </h2>
                    <p class="color-666">Get the latest articles from our press, discuss & share</p>
                </div>
                <div class="content">
                    <div class="blog-card style-6">
                        <a href="#" class="img img-cover d-block">
                            <img src="assets/frontend/images/blog/9.png" alt="">
                        </a>
                        <div class="info">
                            <div class="date">
                                <a href="#"
                                    class="small color-blue6 fs-12px pe-3 border-end brd-gray text-uppercase fw-bold me-3">
                                    news </a>
                                <small class="op-6 fs-12px"> <i class="far fa-clock"></i> Posted on </small>
                                <a href="#" class="fs-12px">3 Days ago</a>
                            </div>
                            <h4 class="blog-title">
                                <a href="#">Workflow Strategy for E-shop</a>
                            </h4>
                            <div class="text">
                                If there’s one way that wireless technology has changed the way we work, it’s that will
                                everyone is now connected [...]
                            </div>
                            <div class="d-flex small mt-20 align-items-center justify-content-between op-9">
                                <div class="l_side d-flex align-items-center">
                                    <span
                                        class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue2 p-2 me-2  text-white">
                                        a
                                    </span>
                                    <a href="#">
                                        <small class="text-muted">By</small> David
                                    </a>
                                </div>
                                <div class="r-side mt-1">
                                    <i class="bi bi-chat-left-text me-1"></i>
                                    <a href="#">24</a>
                                    <i class="bi bi-eye ms-4 me-1"></i>
                                    <a href="#">774k</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-card card-center style-6">
                        <a href="#" class="img img-cover d-block">
                            <img src="assets/frontend/images/blog/10.png" alt="">
                        </a>
                        <div class="info">
                            <div class="date">
                                <a href="#"
                                    class="small color-blue6 fs-12px pe-3 border-end brd-gray text-uppercase fw-bold me-3">
                                    news </a>
                                <small class="op-6 fs-12px"> <i class="far fa-clock"></i> Posted on </small>
                                <a href="#" class="fs-12px">12 Days ago</a>
                            </div>
                            <h4 class="blog-title">
                                <a href="#">6 Tips To Help You Build Your Social Media Effeciency</a>
                            </h4>
                            <div class="text">
                                If there’s one way that wireless technology has changed the way we work, it’s that will
                                everyone is now connected [...]
                            </div>
                            <div class="d-flex small mt-20 align-items-center justify-content-between op-9">
                                <div class="l_side d-flex align-items-center">
                                    <span
                                        class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue2 p-2 me-2  text-white">
                                        a
                                    </span>
                                    <a href="#">
                                        <small class="text-muted">By</small> David
                                    </a>
                                </div>
                                <div class="r-side mt-1">
                                    <i class="bi bi-chat-left-text me-1"></i>
                                    <a href="#">24</a>
                                    <i class="bi bi-eye ms-4 me-1"></i>
                                    <a href="#">774k</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="blog-card style-6">
                        <a href="#" class="img img-cover d-block">
                            <img src="assets/frontend/images/blog/11.png" alt="">
                        </a>
                        <div class="info">
                            <div class="date">
                                <a href="#"
                                    class="small color-blue6 fs-12px pe-3 border-end brd-gray text-uppercase fw-bold me-3">
                                    news </a>
                                <small class="op-6 fs-12px"> <i class="far fa-clock"></i> Posted on </small>
                                <a href="#" class="fs-12px">12 Days ago</a>
                            </div>
                            <h4 class="blog-title">
                                <a href="#">The Trend of Marketing With Tiktok, Should or not?</a>
                            </h4>
                            <div class="text">
                                If there’s one way that wireless technology has changed the way we work, it’s that will
                                everyone is now connected [...]
                            </div>
                            <div class="d-flex small mt-20 align-items-center justify-content-between op-9">
                                <div class="l_side d-flex align-items-center">
                                    <span
                                        class="icon-10 rounded-circle d-inline-flex justify-content-center align-items-center text-uppercase bg-blue2 p-2 me-2  text-white">
                                        a
                                    </span>
                                    <a href="#">
                                        <small class="text-muted">By</small> David
                                    </a>
                                </div>
                                <div class="r-side mt-1">
                                    <i class="bi bi-chat-left-text me-1"></i>
                                    <a href="#">24</a>
                                    <i class="bi bi-eye ms-4 me-1"></i>
                                    <a href="#">774k</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end blog ====== -->


        <!-- ====== start contact ====== -->
        <section class="contact section-padding style-6">
            <div class="container">
                <div class="section-head mb-60 style-6 text-center">
                    <h2 class="mb-20"> Get free consultation
                    </h2>
                    <p class="color-666">We will contact again after receive your request in 24h</p>
                </div>
                <div class="content">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <form action="{{ route('clients.store') }}" method="POST" class="form">
                                @csrf
                                <p class="text-center text-danger fs-12px mb-30">The field is required mark as *</p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group mb-20">
                                            <input type="text" name="name" class="form-control"
                                                placeholder="Name" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-20">
                                            <input type="email" name="email" class="form-control"
                                                placeholder="Email Address *" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-20">
                                            <input type="tel" name="contact" class="form-control"
                                                placeholder="Phone Number" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-20">
                                            <input type="text" name="profession" class="form-control"
                                                placeholder="Your profession" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-20">
                                            <select class="form-select" name="region" required>
                                                <option value="">-- Select Your Current Region --</option>
                                                @foreach ($regions as $region)
                                                    <option value="{{ $region->id }}">{{ $region->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea name="message" required rows="10" class="form-control" placeholder="How can we help you?"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <input type="submit" value="Send Your Request"
                                            class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold text-light">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <img src="assets/frontend/images/icons/contact_a.png" alt="" class="contact_a">
                    <img src="assets/frontend/images/icons/contact_message.png" alt="" class="contact_message">
                </div>
            </div>
        </section>
        <!-- ====== end contact ====== -->
    </main>
    <!--End-Contents-->
@endsection
