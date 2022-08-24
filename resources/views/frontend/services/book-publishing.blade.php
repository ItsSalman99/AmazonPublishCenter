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
                            <small class="title_small">BOOKS PUBLISHING SERVICES</small>
                            <h2 class="mb-20"><span>Self-Publishing</span> A Book Can Be Solid.</span> </h2>
                            <p>Get the benefit of a book publisher online, and rest easy!</p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="content mb-100 pb-100 border-1 border-bottom brd-gray">
                        <div class="img">
                            <img src="{{ asset('assets/frontend/images/icons/serv_icons/audio-book4.png') }}" width="80%"
                                alt="" class="mt-30">
                        </div>
                        <div class="img">
                            <img src="{{ asset('assets/frontend/images/icons/serv_icons/right-arrow.png') }}" width="70%"
                                alt="" class="mt-60">
                        </div>
                        <div class="img">
                            <img src="{{ asset('assets/frontend/images/icons/serv_icons/lowprice.png') }}" width="80%"
                                alt="" class="mt-60">
                        </div>
                        <div class="img">
                            <img src="{{ asset('assets/frontend/images/icons/serv_icons/right-arrow.png') }}" width="70%"
                                alt="" class="mt-60">
                        </div>
                        <div class="img">
                            <img src="{{ asset('assets/frontend/images/icons/serv_icons/world.png') }}" width="80%"
                                alt="" class="mt-20">
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{ asset('assets/frontend/images/about/intg_back.png') }}" alt="" class="intg-back">
            </div>


            <section class="features pt-70 pb-70 style-4" style="background-color: transparent">
                <div class="container">
                    <div class="section-head text-center style-4">
                        <small class="title_small bg-white">Amazon Publish Center</small>
                        <h2 class="mb-70"> Book Publishing <span> Services </span> </h2>
                    </div>
                    <div class="content">
                        <div class="features-card m-2">
                            <h3>Editing<br> & Formatting</h3>
                            <hr>
                            <p>
                                You can easily get help from our book editors and ghostwriters to proofread your copy. Our
                                editors have an excellent eye for detail and ensure every article is free of mistakes. Give
                                us a chance to improve your manuscript by having one of our talented editors do a thorough
                                evaluation.
                            </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>Self <br>Publishing</h3>
                            <hr>
                            <p>
                                Your work will receive the attention it deserves with the help of our self-book publishing
                                service. We ensure we're doing everything in our power to support your success.
                            </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>Promotion <br> Service</h3>
                            <hr>
                            <p>
                                After you publish your book, our team starts to make different successful strategies to
                                promote your work and gather readers as much as possible to make your book a huge success.
                            </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>Distribution <br> Service</h3>
                            <hr>
                            <p>
                                The final phase is for you to enjoy the results of your diligence, endurance, and
                                commitment. All payments will be made to your bank account immediately. The royalties you
                                receive are not reduced. </p>
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
                                <img src="{{ asset('assets/frontend/images/about/best-img15.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="info">
                                <div class="section-head style-4">
                                    <small class="title_small">AMAZON PUBLISH CENTER</small>
                                    <h2 class="mb-30">
                                        Why Should You Hire A
                                        <span>Book Publishing Company? </span>
                                    </h2>
                                </div>
                                <p class="text mb-40">
                                    Several authors self-published their novels. Why is it any different from yours? We have
                                    the ideal solution for you. Self-publishing books require a lot more time and effort
                                    than it appears to. You must first prepare your book and get it professionally edited.
                                    It takes a lot of time and effort to do this alone. There is too much information in one
                                    line, but you next need to create your covers, get in touch with a developer, and wait
                                    for it to decide to be released. Be at ease; we'll guide you through the procedure. It
                                    can frequently take a long time until your book is released. A self-published book can
                                    be less expensive than the latter choice.
                                </p>
                                <ul>
                                    <li class="d-flex align-items-center mb-3">
                                        <small
                                            class="icon-30 bg-gray rounded-circle color-blue4 d-inline-flex align-items-center justify-content-center me-3">
                                            <i class="fas fa-tag"></i>
                                        </small>
                                        <h6 class="fw-bold">Competent Authors</h6>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <small
                                            class="icon-30 bg-gray rounded-circle color-blue4 d-inline-flex align-items-center justify-content-center me-3">
                                            <i class="fas fa-sync"></i>
                                        </small>
                                        <h6 class="fw-bold">Infinite Modifications</h6>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <small
                                            class="icon-30 bg-gray rounded-circle color-blue4 d-inline-flex align-items-center justify-content-center me-3">
                                            <i class="fas fa-text-width"></i>
                                        </small>
                                        <h6 class="fw-bold">24/7 Support</h6>
                                    </li>
                                </ul>
                                <a href="{{ route('contact') }}" class="btn rounded-pill bg-blue4 fw-bold text-white mt-50">
                                    <small> Free Consultation </small>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="{{ asset('assets/frontend/images/about/about_s4_lines.png') }}" alt="" class="lines">
                <img src="{{ asset('assets/frontend/images/about/about_s4_bubble.png') }}" alt="" class="bubble">
            </div>
        </section>
        <!-- ====== end about ====== -->

        @include('frontend.partials.our-writers')

        @include('frontend.partials.end-section')

    </main>
    <!--End-Contents-->
@endsection
