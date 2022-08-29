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
                            <h2 class="mb-20">
                                <span>Business Ghostwriting</span>
                                <br> Services
                            </h2>
                            <p class="">
                                Develop your thought leadership skills and strengthen your brand.
                            </p>
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
                                <h2>
                                    Who We Are
                                </h2>
                            </div>
                            <p>
                                We are a group of former publishing executives and #1 New York Times bestselling business
                                ghostwriters who work together to develop your book and carry out an effective publishing
                                strategy.

                            </p>
                        </div>
                        <div class="col-lg-8 order-0 order-lg-2">
                            <div class="">
                                <img src="{{ asset('assets/frontend/images/about/best-img17.png') }}" alt="">
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
                                <img src="{{ asset('assets/frontend/images/about/best-img18.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="section-head mb-30 style-5">
                                <h2> Professional
                                    <span> Business Ghostwriting </span>
                                </h2>
                            </div>
                            <p>
                                If you run a business, writing a book may not be your cup of tea. However, our business
                                ghostwriter services can assist you if you want to write a book using your ideas.
                            </p>
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
                                <img src="{{ asset('assets/frontend/images/about/best-img19.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 order-2 order-lg-0">
                            <div class="section-head mb-30 style-5">
                                <h2> Proficient
                                    <span> Business Ghostwriting. </span>
                                </h2>
                            </div>
                            <p>
                                There aren't many ghostwriters who understand how to create a book that will sell. However,
                                we have a superb team of business ghostwriters who know the subject and can turn all your
                                business ideas into reality. As a result, our clients can rely on us from the moment they
                                have a concept for a book to the time it is published by one of the reputable big five
                                publishing firms.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end about ====== -->


    </main>
    <!--End-Contents-->
@endsection
