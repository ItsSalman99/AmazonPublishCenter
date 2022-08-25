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
                            <small class="title_small">SEO WRITING</small>
                            <h2 class="mb-20">
                                <span>SEO Content Writers</span> for Hire <br>
                            </h2>
                            <p>
                                Our expert SEO writers will help you outrank the competition and give your website the high
                                rating it requires to attract more people with keyword-rich content!
                            </p>
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
                        <h2 class="mb-70"> SEO Writing <span> Services </span> </h2>
                    </div>
                    <div class="content">
                        <div class="features-card m-2">
                            <h3>SEO Web
                                <br> Content
                            </h3>
                            <hr>
                            <p>
                                By including relevant keywords, the SEO web content creation services at Amazon Publish
                                Center drive traffic to your website and enable customers to find your goods and services.
                            </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>Guest Blogs <br>and Articles</h3>
                            <hr>
                            <p>
                                It is crucial to provide relevant content on venues outside of the website. We ensure you
                                have better search results at Amazon Publish Center, which benefits your website.
                            </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>SEO <br>Blogs</h3>
                            <hr>
                            <p>
                                Blogs are essential for regular updates to maintain your website relevant for search
                                engines. Our SEO blog writing services assist clients in locating the appropriate audience.
                            </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>Social
                                <br>Media Content
                            </h3>
                            <hr>
                            <p>
                                Search engine optimization is considered insufficient without social media content and
                                strategy. Our social media content services boost online rankings for businesses.
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
                                <img src="{{ asset('assets/frontend/images/about/best-img10.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="info">
                                <div class="section-head style-4">
                                    <small class="title_small">Amazon Publish Center</small>
                                    <h2 class="mb-30">Best <span>SEO Content Writers</span> for Hire
                                    </h2>
                                </div>
                                <p class="text mb-40">
                                    Our SEO content writers at Amazon Publish Centers are skilled at determining the
                                    keywords that drive the most traffic to your website since we recognize the requirement
                                    for search engine optimization techniques. They are skilled at utilizing the most recent
                                    search techniques to produce SEO material that promotes turning visitors into customers.
                                    We research your website and the services you offer, and our SEO content writers
                                    customize them to the people most likely to be interested in your offerings. Due to
                                    their impressive SEO expertise, our authors know which keywords and phrases to emphasize
                                    and how to use them to your best advantage.
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
