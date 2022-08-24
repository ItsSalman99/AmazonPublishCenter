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
                            <small class="title_small">About Amazon Publish Center</small>
                            <h2 class="mb-20">
                                Offering <span>Ghostwriting Solutions</span> To Satisfy All Your Publication Needs
                            </h2>
                            <p>The writers at Amazon Publish Center will sum up your thoughts exactly. Our team of experts
                                will aid your journey to become a best-selling novel. We cordially invite you to collaborate
                                with the top professionals in the ghostwriting field.</p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="content mb-100 pb-100 border-1 border-bottom brd-gray">
                        <div class="img">
                            <img src="{{ asset('assets/frontend/images/about/amazon.png') }}" width="80%" alt=""
                                class="mt-30">
                        </div>
                        <div class="img">
                            <img src="{{ asset('assets/frontend/images/about/kobo.png') }}" width="80%" alt=""
                                class="mt-60">
                        </div>
                        <div class="img">
                            <img src="{{ asset('assets/frontend/images/about/barnesnoble.png') }}" width="80%"
                                alt="" class="mt-20">
                        </div>
                        <div class="img">
                            <img src="{{ asset('assets/frontend/images/about/IngramSpark.png') }}" width="80%"
                                alt="" class="mt-80">
                        </div>
                        <div class="img">
                            <img src="{{ asset('assets/frontend/images/about/scribd.png') }}" width="80%" alt="">
                        </div>
                    </div>
                </div>
                <img src="{{ asset('assets/frontend/images/about/intg_back.png') }}" alt="" class="intg-back">
            </div>

            <div class="container">
                <div class="main-vid" style="">
                    <img src="{{ asset('assets/frontend/images/vid_banner5.png') }}" alt=""
                        style="border: 10px solid #000; border-radius: 20px">
                    <a href="https://youtu.be/pGbIOC83-So?t=21" data-lity="" class="play-icon">
                        <i class="fas fa-play"></i>
                    </a>
                </div>
            </div>

            <div class="content sec-content">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-5 order-2 order-lg-0">
                            <div class="info">
                                <div class="section-head style-4">
                                    <small class="title_small">Amazon Publish Center</small>
                                    <h2 class="mb-30">We're On A <span> Mission... </span> </h2>
                                </div>
                                <p class="text mb-40">
                                    To make working with independent contractors simple and pleasurable. We are
                                    revolutionizing how companies and individuals obtain the content they require by
                                    emphasizing premium content and first-rate customer service. </p>
                                <div class="faq style-3 style-4">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading1">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapse1" aria-expanded="true"
                                                    aria-controls="collapse1">
                                                    Create and Save your notes with multi-media
                                                </button>
                                            </h2>
                                            <div id="collapse1" class="accordion-collapse collapse show"
                                                aria-labelledby="heading1" data-bs-parent="#accordionExample"
                                                style="">
                                                <div class="accordion-body">
                                                    Images, videos, PDFs and audio files are supported. Create math
                                                    expressions and diagrams directly from the app. Take photos with the
                                                    mobile app and save them to a note.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading2">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse2"
                                                    aria-expanded="false" aria-controls="collapse2">
                                                    Web Clipper Extension
                                                </button>
                                            </h2>
                                            <div id="collapse2" class="accordion-collapse collapse"
                                                aria-labelledby="heading2" data-bs-parent="#accordionExample"
                                                style="">
                                                <div class="accordion-body">
                                                    Images, videos, PDFs and audio files are supported. Create math
                                                    expressions and diagrams directly from the app. Take photos with the
                                                    mobile app and save them to a note.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading3">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse3"
                                                    aria-expanded="false" aria-controls="collapse3">
                                                    Protect your note with lock
                                                </button>
                                            </h2>
                                            <div id="collapse3" class="accordion-collapse collapse"
                                                aria-labelledby="heading3" data-bs-parent="#accordionExample"
                                                style="">
                                                <div class="accordion-body">
                                                    Images, videos, PDFs and audio files are supported. Create math
                                                    expressions and diagrams directly from the app. Take photos with the
                                                    mobile app and save them to a note.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 order-0 order-lg-2">
                            <div class="img mb-30 mb-lg-0">
                                <img src="{{ asset('assets/frontend/images/about/best-img1.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <img src="assets/img/about/about_s4_bubble2.png" alt="" class="bubble2">
            </div>

            <div class="content frs-content">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-6">
                            <div class="img mb-30 mb-lg-0">
                                <img src="{{ asset('assets/frontend/images/about/best-img3.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="info">
                                <div class="section-head style-4">
                                    <small class="title_small">Amazon Publish Center</small>
                                    <h2 class="mb-30">Born From A Longing To Deliver <span> Better Service </span> </h2>
                                </div>
                                <p class="text mb-40">
                                    The Amazon Publish Center was founded to provide customers with what they had been
                                    looking for. Customers can establish genuine connections with this truly collaborative
                                    and seamless content creation platform!
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
                                <a href="javascript:void(Tawk_API.toggle())" class="btn rounded-pill bg-blue4 fw-bold text-white mt-50">
                                    <small> Chat With Us </small>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="{{ asset('assets/frontend/images/about/about_s4_lines.png') }}" alt="" class="lines">
            </div>

            <section class="features pt-70 pb-70 style-4">
                <div class="container">
                    <div class="section-head text-center style-4">
                        <small class="title_small bg-white">Amazon Publish Center</small>
                        <h2 class="mb-70"> Why Choose <span> Amazon Publish Center? </span> </h2>
                    </div>
                    <div class="content">
                        <div class="features-card">
                            <div class="icon img-contain">
                                <img src="{{ asset('assets/frontend/images/icons/fe1.png') }}" alt="">
                            </div>
                            <h6>Fast <br> Delivery</h6>
                        </div>
                        <div class="features-card">
                            <div class="icon img-contain">
                                <img src="{{ asset('assets/frontend/images/icons/fe2.png') }}" alt="">
                            </div>
                            <h6>Fresh <br> Content</h6>
                        </div>
                        <div class="features-card">
                            <div class="icon img-contain">
                                <img src="{{ asset('assets/frontend/images/icons/fe3.png') }}" alt="">
                                <span
                                    class="label icon-40 alert-success text-success rounded-circle small text-uppercase fw-bold">
                                    new
                                </span>
                            </div>
                            <h6>Dedicated <br> Ghostwriters</h6>
                        </div>
                        <div class="features-card">
                            <div class="icon img-contain">
                                <img src="{{ asset('assets/frontend/images/icons/fe4.png') }}" alt="">
                            </div>
                            <h6>Non-plagiarized <br> Content</h6>
                        </div>
                        <div class="features-card">
                            <div class="icon img-contain">
                                <img src="{{ asset('assets/frontend/images/icons/fe5.png') }}" alt="">
                            </div>
                            <h6>Creative <br> Plots</h6>
                        </div>
                    </div>
                </div>
                <img src="{{ asset('assets/frontend/images/feat_circle.png') }}" alt="" class="img-circle">
            </section>

        </section>
        <!-- ====== end about ====== -->


        <!-- ====== start team ====== -->
        @include('frontend.partials.our-writers')
        <!-- ====== end team ====== -->

        @include('frontend.partials.book-slider')

        @include('frontend.partials.faq-section')


        @include('frontend.partials.clients')

    </main>
    <!--End-Contents-->
@endsection
