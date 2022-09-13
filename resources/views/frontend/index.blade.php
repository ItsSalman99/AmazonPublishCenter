@extends('frontend.layouts.main')

@section('content')
    <!--Contents-->
    <main>

        @include('frontend.partials.pop-up')

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
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="img">
                                <img src="assets/frontend/images/about/best-img3.png" width="100%" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                        Our editing team and ghostwriter specialists undergo a thorough hiring procedure to ensure we
                        provide the highest standard.
                    </p>
                </div>
            </div>
            <div class="content">
                <div class="services-slider position-relative style-6">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <a class="service-card style-6">
                                    <div class="icon">
                                        <img src="assets/frontend/images/icons/serv_icons/publisher.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>Self Pubishing</h5>
                                        <div class="text">
                                            We provide a hassle-free book self-publication process, whether you're a
                                            seasoned author or a first-time writer.
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="service-card style-6">
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
                                <a class="service-card style-6">
                                    <div class="icon">
                                        <img src="assets/frontend/images/icons/serv_icons/format.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>Formating</h5>
                                        <div class="text">
                                            We concentrate on offering a top-notch and professional format that adheres to
                                            the norms of the industry. </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="service-card style-6">
                                    <div class="icon">
                                        <img src="assets/frontend/images/icons/serv_icons/magazine.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>Book Cover Design</h5>
                                        <div class="text">
                                            Our team of expert book cover designers creates beautiful book covers that will
                                            make your book stand out.
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="service-card style-6">
                                    <div class="icon">
                                        <img src="assets/frontend/images/icons/serv_icons/trailer.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>Video Book Trailers</h5>
                                        <div class="text">
                                            As one of the best-ghostwriting services in the USA, our professional
                                            ghostwriters produce book trailer videos for marketing and promotion.
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a class="service-card style-6">
                                    <div class="icon">
                                        <img src="assets/frontend/images/icons/serv_icons/seo.png" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>SEO</h5>
                                        <div class="text">
                                            Our writers will create content for landing and sales pages that convert well
                                            using top SEO.
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
                                We have assisted numerous companies, brands, and people excelling in their respective
                                industries. </div>
                            <ul>
                                <li class="d-flex mb-40">
                                    <div class="inf">
                                        <h5>Privacy And Reliability Guaranteed</h5>
                                        <p class="fs-12px color-666 mt-2">
                                            We trail strict procedures to ensure the security of your data and information.
                                        </p>
                                    </div>
                                </li>
                                <li class="d-flex mb-40">
                                    <div class="inf">
                                        <h5>Experienced Team of Ghostwriters</h5>
                                        <p class="fs-12px color-666 mt-2">
                                            All of our available ghostwriters are native English speakers who are
                                            knowledgeable about the subtleties of the language and skilled writers. </p>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <div class="inf">
                                        <h5>Market-Competitive Prices</h5>
                                        <p class="fs-12px color-666 mt-2">
                                            No additional fees or royalties are associated with our ghostwriting services.
                                            We give our patrons flexible payment options and pricing that are competitive
                                            with the market.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end choose us ====== -->


        <!-- ====== start numbers ====== -->
        @include('frontend.partials.numbers')
        <!-- ====== end numbers ====== -->

        @include('frontend.partials.clients-reviews')

        @include('frontend.partials.our-writers')

        <!-- ====== start contact ====== -->
        <section class="contact section-padding style-6">
            <div class="container">
                <div class="section-head mb-60 style-6 text-center">
                    <h2 class="mb-20"> Get free consultation</h2>
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
