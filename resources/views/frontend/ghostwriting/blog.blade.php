@extends('frontend.layouts.main2')

@section('content')
    <!--Contents-->
    <main class="services-page style-5">
        <!-- ====== start features ====== -->
        <section class="features section-padding pt-50 style-5"
            style="border-bottom-right-radius: 50px;border-bottom-left-radius: 50px">
            <div class="container" style="margin-top: 200px;">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-head text-center mb-60 style-5">
                            <h2 class="mb-20"> Professional & Affordable <br>
                                <span> Blog Writing Services.</span>
                            </h2>
                            <p class="">
                                Draw more of your target audience with our experienced and compelling blog ghostwriting
                                services </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end features ====== -->


        <!-- ====== start about ====== -->
        <section class="about pt-0 pb-150 style-5">
            <div class="content">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 order-2 order-lg-0">
                            <div class="section-head mb-30 style-5">
                                <h2> Article
                                    <span>Ghostwriting Service.</span>
                                </h2>
                            </div>
                            <p>Amazon Publishing Central is known for its professional team of screenplay ghostwriters, who
                                produce high-quality content every time. Our out-of-the-box thinking and high-quality output
                                are what we deliver to Hollywood, Hulu, or Netflix. .
                            </p>
                            <div class="line-links">
                                <a href="#">Sales Breakdown &amp; Funnel</a>
                                <a href="#">Abadoned Carts</a>
                                <a href="#">Revenue by Channel &amp; Devices</a>
                                <a href="#">Sales Forecast</a>
                            </div>
                        </div>
                        <div class="col-lg-8 order-0 order-lg-2">
                            <div class="">
                                <img src="{{ asset('assets/frontend/images/about/best-img10.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <div class="">
                                <img src="{{ asset('assets/frontend/images/about/best-img11.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="section-head mb-30 style-5">
                                <h2> Productive Blog
                                    <span> Ghostwriting Services </span>
                                </h2>
                            </div>
                            <p>
                                With Amazon Publish Center, choose from hundreds of payment gateways for your customers.
                                From PayPal to Stripe to Skrill, Visa Debit, Master Card, etc
                            </p>
                            <ul class="list-icon">
                                <li>
                                    <span class="icon">
                                        <i class="bi bi-check2"></i>
                                    </span>
                                    <h6>
                                        100% Guarantee Secure Payment
                                    </h6>
                                </li>
                                <li>
                                    <span class="icon">
                                        <i class="bi bi-check2"></i>
                                    </span>
                                    <h6>
                                        1% Extra Fees For All
                                    </h6>
                                </li>
                                <li>
                                    <span class="icon">
                                        <i class="bi bi-check2"></i>
                                    </span>
                                    <h6>
                                        Support Dispute &amp; Refund 24/7
                                    </h6>
                                </li>
                            </ul>
                            <a href="page-contact-5.html"
                                class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold mt-50">
                                <span> Book A Free Demo </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8 order-0 order-lg-2">
                            <div class="">
                                <img src="{{ asset('assets/frontend/images/about/best-img13.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 order-2 order-lg-0">
                            <div class="section-head mb-30 style-5">
                                <h2> Prefossional
                                    <span> Non-Fiction Service. </span>
                                </h2>
                            </div>
                            <p>The uploading and updating processes made by suppliers can be streamlined through
                                front-end dashboards that create better ease of access. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end about ====== -->


    </main>
    <!--End-Contents-->
@endsection
