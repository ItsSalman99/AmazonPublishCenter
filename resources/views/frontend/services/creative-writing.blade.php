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
                            <small class="title_small">Creative Writing</small>
                            <h2 class="mb-20">Transform Your Story
                                <span> With Creative Writing </span>
                            </h2>
                            <p>
                                Our premium creative writing services can provide your company with the competitive edge you
                                want.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="content mb-100 pb-100 border-1 border-bottom brd-gray">
                        <div class="img">
                            <img src="{{ asset('assets/frontend/images/icons/serv_icons/creative-writing.png') }}"
                                width="50%" alt="" class="mt-30">
                        </div>
                        <div class="img">
                            <img src="{{ asset('assets/frontend/images/icons/serv_icons/creative-writing1.png') }}"
                                width="50%" alt="" class="mt-60">
                        </div>
                        <div class="img">
                            <img src="{{ asset('assets/frontend/images/icons/serv_icons/creative-writing2.png') }}"
                                width="50%" alt="" class="mt-20">
                        </div>
                        <div class="img">
                            <img src="{{ asset('assets/frontend/images/icons/serv_icons/creative-writing3.png') }}"
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
                        <h2 class="mb-70"> Creative Writing <span> Services </span> </h2>
                    </div>
                    <div class="content">
                        <div class="features-card m-2">
                            <h3>Diverse <br> Specialized Genres</h3>
                            <hr>
                            <p>
                                The Amazon Publish Center's writing staff has years of experience offering professional
                                ghostwriting services. We have offered our expertise in the area of specialized writing in a
                                variety of genres.
                            </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>Customized <br>Service</h3>
                            <hr>
                            <p>
                                We appoint a specialized writer knowledgeable in that field when a client contacts us about
                                a particular category or content genre.
                            </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>Customer <br>Communication</h3>
                            <hr>
                            <p>
                                The Amazon Publish Center's creative staff ensures that projects are finished on schedule
                                and to the client's satisfaction. Thus, we maintain continual contact with the consumers to
                                ensure that our services satisfy their needs.
                            </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>Book <br>Marketing</h3>
                            <hr>
                            <p>
                                Regardless of the requirement to choose a ghostwriter, we go above and above by not only
                                offering excellent writing services but also actively advertising the book.
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
                                <img src="{{ asset('assets/frontend/images/about/best-img18.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="info">
                                <div class="section-head style-4">
                                    <small class="title_small">Amazon Publish Center</small>
                                    <h2 class="mb-30">Experience Unparalleled <span> Creative Writing Services </span>
                                    </h2>
                                </div>
                                <p class="text mb-40">
                                    We provide innovative writing services while paying close attention to the demands of
                                    our clients. In a crowded digital age, the necessity for attention-grabbing text has
                                    never been more crucial. Amazon Publish Center assists you in discovering the unique
                                    qualities of your company, and we will create brand-new content for you to share with
                                    your audience.
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
