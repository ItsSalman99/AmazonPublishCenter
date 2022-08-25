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
                            <small class="title_small">Press Release Writing</small>
                            <h2 class="mb-20">Best <span> Press Release </span> <br> Writing Services <br>
                            </h2>
                            <p>
                                Offering to write insightful press releases to expand the reach of your company.
                        </div>
                        </p>
                    </div>
                </div>
                <div class="container">
                    <div class="content mb-100 pb-100 border-1 border-bottom brd-gray">
                        <div class="img">
                            <img src="{{ asset('assets/frontend/images/icons/serv_icons/press-release1.png') }}"
                                width="50%" alt="" class="mt-30">
                        </div>
                        <div class="img">
                            <img src="{{ asset('assets/frontend/images/icons/serv_icons/press-release2.png') }}"
                                width="50%" alt="" class="mt-60">
                        </div>
                        <div class="img">
                            <img src="{{ asset('assets/frontend/images/icons/serv_icons/press-release3.png') }}"
                                width="50%" alt="" class="mt-20">
                        </div>
                        <div class="img">
                            <img src="{{ asset('assets/frontend/images/icons/serv_icons/press-release4.png') }}"
                                width="50%" alt="" class="mt-80">
                        </div>
                    </div>
                </div>
                <img src="{{ asset('assets/frontend/images/about/intg_back.png') }}" alt="" class="intg-back">
            </div>

            <section class="features pt-70 pb-70 style-4" style="background-color: transparent">
                <div class="container">
                    <div class="section-head text-center style-4">
                        <small class="title_small bg-white">Amazon Publish Center</small>
                        <h2 class="mb-70"> Press Release Writing <span> Services </span> </h2>
                    </div>
                    <div class="content">
                        <div class="features-card m-2">
                            <h3>Broad Distribution <br> Networks</h3>
                            <hr>
                            <p>
                                By connecting with top-tier search engines, media networks, tv, blogs, or journals, your
                                company can gain immediate exposure with us. Our PR services are perfect for publicizing
                                major announcements, establishing brands, and offering fresh goods and services.
                            </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>Tempting <br>Content</h3>
                            <hr>
                            <p>
                                The press release writers at Amazon Publish Center are adept at creating 100% original,
                                interesting, and captivating content for your press release that holds the audience's
                                attention. Additionally, we provide PR-optimized content that is distributed via search
                                engines.
                            </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>Expert <br>Writers</h3>
                            <hr>
                            <p>
                                At Amazon Pubish Center, our skilled staff of PR writers is renowned for providing
                                professional press release writing services in various markets at competitive prices. For
                                businesses, our writers produce powerful press releases.
                            </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>Timely <br>Delivery</h3>
                            <hr>
                            <p>
                                Our PR writers ensure the work is accurate and delivered on schedule. Despite our quick
                                response times, our writers ensure the quality of the work is upheld. We are producing a
                                compelling PR and distributing it to various locations.
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
                                <img src="{{ asset('assets/frontend/images/about/best-img17.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="info">
                                <div class="section-head style-4">
                                    <small class="title_small">Amazon Publish Center</small>
                                    <h2 class="mb-30">Amplify your <span> Brand Voice </span> </h2>
                                </div>
                                <p class="text mb-40">
                                    With the aid of our press release ghostwriting services, you can get in touch with a
                                    press release writer with the knowledge and abilities to disseminate compelling text.
                                    You will receive a crafted press release that delivers your brand message and aids in
                                    luring new clients to your service based on your preferences. Want to publicize a new
                                    product or upcoming event with a fantastic press release? Our team of skilled press
                                    release writers can prepare a news release for your company that is both clear and
                                    concise.
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
