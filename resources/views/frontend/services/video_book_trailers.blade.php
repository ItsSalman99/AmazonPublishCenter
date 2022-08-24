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
                            <small class="title_small">Video Book Trailers</small>
                            <h2 class="mb-20">We Deliver The Best <span> Video Trailer Services </span> Suitable For Every
                                Budget</h2>
                            <p>
                                You can get the ideal video trailers from Amazon Publish Center. We fill in the gap in your
                                puzzle. </p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="content mb-100 pb-100 border-1 border-bottom brd-gray">
                        <div class="img">
                            <img src="{{ asset('assets/frontend/images/icons/serv_icons/book-video-trailer.png') }}"
                                width="50%" alt="" class="mt-30">
                        </div>
                        <div class="img">
                            <img src="{{ asset('assets/frontend/images/icons/serv_icons/book-video-trailer1.png') }}"
                                width="50%" alt="" class="mt-60">
                        </div>
                        <div class="img">
                            <img src="{{ asset('assets/frontend/images/icons/serv_icons/book-video-trailer2.png') }}"
                                width="50%" alt="" class="mt-20">
                        </div>
                        <div class="img">
                            <img src="{{ asset('assets/frontend/images/icons/serv_icons/book-video-trailer3.png') }}"
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
                        <h2 class="mb-70"> Video Book Trailers <span> Services </span> </h2>
                    </div>
                    <div class="content">
                        <div class="features-card m-2">
                            <h3>Cinematic<br> Book Trailers</h3>
                            <hr>
                            <p>
                                The complexity of these trailers makes them the most creatively challenging. These book
                                teasers, which frequently resemble movie trailers, might be pricey but are worth it.
                            </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>Blurb <br> Trailers</h3>
                            <hr>
                            <p>
                                Usually, these trailers contain reviews or testimonies. Blurb trailers can be useful for
                                book promotion because most authors have them made before their books are published.
                            </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>Author<br>Profiles</h3>
                            <hr>
                            <p>
                                These book trailers typically show the author of the book speaking about the book in an
                                interview-style setting. The authors are advertising the book and the guy who came up with
                                the idea. </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>Docu <br> Trailers</h3>
                            <hr>
                            <p>
                                These are expanded versions of author profiles that resemble them. Docu-Trailers typically
                                use a documentary shooting technique where the author discusses the inspiration for the book
                                and what drove them to write it.
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
                                    <h2 class="mb-30">Offering <span> Books Video Trailer </span> Services For Aspiring
                                        Authors.</h2>
                                </div>
                                <p class="text mb-40">
                                    You can get the ideal video trailers from Amazon Publish Center. We complete your puzzle
                                    by adding the lone piece. You are effectively having a dialogue with your target
                                    audience by making video book trailers. We are aware of how significant that may be to
                                    readers. We ensure you receive the greatest possible product at a cost that works for
                                    you. We assist you in making a book trailer that will be interesting and entertaining to
                                    your audience. A book trailer essentially serves as a synopsis or introduction to the
                                    book. This makes it easier for you to interact with your audience.
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
        </section>
        <!-- ====== end about ====== -->

        @include('frontend.partials.our-writers')

        @include('frontend.partials.end-section')



    </main>
    <!--End-Contents-->
@endsection
