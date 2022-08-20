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
                                    <h2> Your Story
                                        <span> <small>Our Words</small> </span>
                                    </h2>
                                </div>
                                <div class="text">
                                    Put your thoughts into powerful words and tell the world about your experiences. Hire
                                    one of our skilled ghostwriters, and we'll produce insightful, engaging material for
                                    you.
                                </div>
                                <div class="btns d-flex align-items-center mt-60">
                                    <a href="#" class="btn rounded-pill butn-blue6 hover-blue2 sm-butn fw-bold me-3">
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
                        We Offer a Range of Professional
                        <span> <small>Ghostwriting</small> </span> Services
                    </h2>
                    <p>
                        Our editing team and ghostwriter specialists undergo a thorough hiring procedure to ensure we provide the highest standard.
                    </p>
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
                                            We provide a hassle-free book self-publication process, whether you're a seasoned author or a first-time writer.
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
                                            Our team of seasoned book editors and proofreaders will polish your manuscript.
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
                                            We concentrate on offering a top-notch and professional format that adheres to the norms of the industry.                                        </div>
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
                                            Our team of expert book cover designers creates beautiful book covers that will make your book stand out.
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
                                            As one of the best-ghostwriting services in the USA, our professional ghostwriters produce book trailer videos for marketing and promotion.
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
                                            Our writers will create content for landing and sales pages that convert well using top SEO.
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end services ====== -->

        <!-- ====== start projects ====== -->
        @include('frontend.partials.book-slider')
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
                                <h2> Why Should You Hire Us? </span>
                                </h2>
                            </div>
                            <div class="text mb-50">
                                We have assisted numerous companies, brands, and people excelling in their respective industries.                            </div>
                            <ul>
                                <li class="d-flex mb-40">
                                    <small
                                        class="icon-60 bg-gray rounded-circle color-blue4 d-inline-flex align-items-center justify-content-center me-4 flex-shrink-0">
                                        <img src="assets/frontend/images/icons/ch4.png" alt="">
                                    </small>
                                    <div class="inf">
                                        <h5>Privacy And Reliability Guaranteed</h5>
                                        <p class="fs-12px color-666 mt-2">
                                            We trail strict procedures to ensure the security of your data and information.
                                        </p>
                                    </div>
                                </li>
                                <li class="d-flex mb-40">
                                    <small
                                        class="icon-60 bg-gray rounded-circle color-blue4 d-inline-flex align-items-center justify-content-center me-4 flex-shrink-0">
                                        <img src="assets/frontend/images/icons/ch5.png" alt="">
                                    </small>
                                    <div class="inf">
                                        <h5>Experienced Team of Ghostwriters</h5>
                                        <p class="fs-12px color-666 mt-2">
                                            All of our available ghostwriters are native English speakers who are knowledgeable about the subtleties of the language and skilled writers.                                        </p>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <small
                                        class="icon-60 bg-gray rounded-circle color-blue4 d-inline-flex align-items-center justify-content-center me-4 flex-shrink-0">
                                        <img src="assets/frontend/images/icons/ch6.png" alt="">
                                    </small>
                                    <div class="inf">
                                        <h5>Market-Competitive Prices</h5>
                                        <p class="fs-12px color-666 mt-2">
                                            No additional fees or royalties are associated with our ghostwriting services. We give our patrons flexible payment options and pricing that are competitive with the market.
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

        
        <!-- ====== start numbers ====== -->
        @include('frontend.partials.numbers')
        <!-- ====== end numbers ====== -->

        @include('frontend.partials.clients-reviews')

        <!-- ====== start team ====== -->
        <section class="team section-padding style-6">
            <div class="content">
                <div class="container">
                    <div class="row items align-items-end mb-50">
                        <div class="col-lg-7">
                            <div class="section-head mb-0 style-6">
                                <h2 class="mb-0"> 
                                    Our Writers
                                </h2>
                            </div>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end team ====== -->


        <!-- ====== start blog ====== -->
        {{-- <section class="blog section-padding style-6">
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
        </section> --}}
        <!-- ====== end blog ====== -->

        <!-- ====== start contact ====== -->
        <section class="contact section-padding style-6">
            <div class="container">
                <div class="section-head mb-60 style-6 text-center">
                    <h2 class="mb-20"> Get free consultation
                    </h2>
                    <p class="color-666">We will contact again after receive your request in 24h</p>
                </div>
                <div class="content" style="background-color: #ddd; border: 10px solid #000;">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            @include('frontend.partials.contactform')
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
