@extends('frontend.layouts.main2')

@section('content')
    <!--Contents-->
    <main class="about-page style-5">

        <!-- ====== start about ====== -->
        <section class="about section-padding style-4">
            <div class="integration">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-head text-center style-4">
                            <small class="title_small">Amazon Marketing</small>
                            <h2 class="mb-20">We Got The <span>Amazon Marketing Experts</span>
                            </h2>
                            <p>
                                Searching for a website to register your Amazon? Check out our author promotion services on
                                Amazon. </p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="content mb-100 pb-100 border-1 border-bottom brd-gray">
                        <div class="img">
                            <img src="{{ asset('assets/frontend/images/about/book1.png') }}" alt="" class="mt-30">
                        </div>
                        <div class="img">
                            <img src="{{ asset('assets/frontend/images/about/book2.png') }}" alt="" class="mt-60">
                        </div>
                        <div class="img">
                            <img src="{{ asset('assets/frontend/images/about/book3.png') }}" alt="" class="mt-20">
                        </div>
                        <div class="img">
                            <img src="{{ asset('assets/frontend/images/about/book4.png') }}" alt="" class="mt-80">
                        </div>
                    </div>
                </div>
                <img src="{{ asset('assets/frontend/images/about/intg_back.png') }}" alt="" class="intg-back">
            </div>

            <section class="features pt-70 pb-70 style-4" style="background-color: transparent">
                <div class="container">
                    <div class="section-head text-center style-4">
                        <small class="title_small bg-white">Amazon Publish Center</small>
                        <h2 class="mb-70"> Amazon Marketing <span> Services </span> </h2>
                    </div>
                    <div class="content">
                        <div class="features-card m-2">
                            <h3>Amazon Keyword <br>Optimization</h3>
                            <hr>
                            <p>
                                With Amazon keyword optimization, adding each description following the supplied keywords
                                for any good or service is simple.
                            </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>Pricing <br>Plan</h3>
                            <hr>
                            <p>
                                Amazon's pricing policy enables customers to get goods and services for less money. At
                                Amazon Publish Center, we employ an ideal pricing technique that aids in resolving
                                price-related concerns.
                            </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>Amazon Product<br> Title Optimization</h3>
                            <hr>
                            <p>
                                By optimizing the titles of Amazon products, customers may quickly identify the services and
                                goods they're looking for.
                            </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>Product <br>Image Optimization</h3>
                            <hr>
                            <p>
                                Because of the expertise of our professionals in optimizing product images, customers can
                                pick and choose the exact item they need.
                            </p>
                        </div>
                    </div>
                </div>
                <img src="{{ asset('assets/frontend/images/feat_circle.png') }}" alt="" class="img-circle">
            </section>

            <div class="content frs-content">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-6">
                            <div class="img mb-30 mb-lg-0">
                                <img src="{{ asset('assets/frontend/images/about/best-img12.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="info">
                                <div class="section-head style-4">
                                    <small class="title_small">Amazon Publish Center</small>
                                    <h2 class="mb-30">Thrive On <span> Amazon </span>
                                    </h2>
                                </div>
                                <p class="text mb-40">

                                    Whether it's listing content or photographs, Amazon Publish Center assists you in
                                    optimizing the title of the product that will be posted on Amazon. We also walk you
                                    through the procedure of quickly building your brand on Amazon. For books and writers,
                                    we provide various well-known Amazon marketing services to boost sales. Whether it's
                                    Amazon keyword optimization, price strategy, Amazon product title optimization, or
                                    product image optimization, we take care of every small detail. Your Amazon listing
                                    optimization strategy increases your sales volume, click-through rate (CTR), search
                                    visibility, and conversion rates (CR).
                                </p>
                                <ul>
                                    <li class="d-flex align-items-center mb-3">
                                        <small
                                            class="icon-30 bg-gray rounded-circle color-blue4 d-inline-flex align-items-center justify-content-center me-3">
                                            <i class="fas fa-tag"></i>
                                        </small>
                                        <h6 class="fw-bold">Filtering notes using matched keywords</h6>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <small
                                            class="icon-30 bg-gray rounded-circle color-blue4 d-inline-flex align-items-center justify-content-center me-3">
                                            <i class="fas fa-sync"></i>
                                        </small>
                                        <h6 class="fw-bold">Automatically sync in real time</h6>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <small
                                            class="icon-30 bg-gray rounded-circle color-blue4 d-inline-flex align-items-center justify-content-center me-3">
                                            <i class="fas fa-text-width"></i>
                                        </small>
                                        <h6 class="fw-bold">Complete note editor with rich text options</h6>
                                    </li>
                                </ul>
                                <a href="{{ route('contact') }}" class="btn rounded-pill bg-blue4 fw-bold text-white mt-50">
                                    <small> Free Register </small>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="{{ asset('assets/frontend/images/about/about_s4_lines.png') }}" alt="" class="lines">
            </div>
        </section>
        <!-- ====== end about ====== -->

        @include('frontend.partials.our-writers')

        @include('frontend.partials.end-section')



    </main>
    <!--End-Contents-->
@endsection
