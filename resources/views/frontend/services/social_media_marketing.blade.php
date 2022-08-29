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
                            <small class="title_small">Social Media Marketing</small>
                            <h2 class="mb-20">Increase Your Engagement & Sales With Our
                                Social Media<span> Marketing Services </span> </h2>
                            <p>
                                Are you seeking a productive strategy to increase your company's website traffic, new
                                clientele, and brand recognition? If so, you should use social media! Build a powerful
                                social media presence by checking out our social media marketing service.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="content mb-100 pb-100 border-1 border-bottom brd-gray">
                        <div class="img">
                            <img src="{{ asset('assets/frontend/images/icons/serv_icons/fb.png') }}" width="50%"
                                alt="" class="mt-30">
                        </div>
                        <div class="img">
                            <img src="{{ asset('assets/frontend/images/icons/serv_icons/instagram.png') }}" width="50%"
                                alt="" class="mt-60">
                        </div>
                        <div class="img">
                            <img src="{{ asset('assets/frontend/images/icons/serv_icons/twitter.png') }}" width="50%"
                                alt="" class="mt-20">
                        </div>
                        <div class="img">
                            <img src="{{ asset('assets/frontend/images/icons/serv_icons/youtube.png') }}" width="50%"
                                alt="" class="mt-80">
                        </div>
                    </div>
                </div>
                <img src="{{ asset('assets/frontend/images/about/intg_back.png') }}" alt="" class="intg-back">
            </div>

            <section class="features pt-70 pb-70 style-4" style="background-color: transparent">
                <div class="container">
                    <div class="section-head text-center style-4">
                        <small class="title_small bg-white">Amazon Publish Center</small>
                        <h2 class="mb-70"> <span>Social Media</span> Marketing Services </h2>
                    </div>
                    <div class="content">
                        <div class="features-card m-2">
                            <h3>Facebook<br> Advertising</h3>
                            <hr>
                            <p>
                                With the largest social media network in the world, Facebook advertising services may help
                                your company grow its customer base online, raise brand awareness, and enhance lead
                                generation and revenue-generating activities.
                            </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>Instagram<br> Advertising</h3>
                            <hr>
                            <p>
                                Thanks to its more than one billion monthly users, Instagram gives your business unrivaled
                                access to your target market. It can be difficult for a company to stand out on the
                                platform. For this reason, businesses spend money on Amazon Publish Center's expert
                                Instagram marketing services.
                            </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>Twitter<br> Advertising</h3>
                            <hr>
                            <p>
                                With more than 500 million daily posts and around 336 million monthly active users, Twitter
                                is a social media behemoth that keeps growing by the second. Despite the overwhelming volume
                                of messages, our highly skilled Twitter advertising firm will assist your company cut
                                through the din and making sure that your voice is heard.
                            </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>LinkedIn<br> Advertising</h3>
                            <hr>
                            <p>
                                More than half a billion active users make up the audience of LinkedIn, which started as a
                                modest resume hub. Comparable social media juggernauts aside, LinkedIn stands out for its
                                ability to efficiently target and connect with professionals worldwide.
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
                                <img src="{{ asset('assets/frontend/images/about/best-img4.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="info">
                                <div class="section-head style-4">
                                    <small class="title_small">Amazon Publish Center</small>
                                    <h2 class="mb-30">Grow Your ROI With<span> Social Media Marketing </span> </h2>
                                </div>
                                <p class="text mb-40">
                                    Utilize Amazon Publish Center's social media services to increase your return on
                                    investment (ROI) from websites like Facebook, Instagram, and LinkedIn. Your company can
                                    start increasing its brand exposure and revenue from social media with our affordable
                                    social media management services, which also provide you access to AI-powered insights.
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
