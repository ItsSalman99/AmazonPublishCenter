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
                            <small class="title_small">Interactive E-Books</small>
                            <h2 class="mb-20"><span>Affordable E-Book Writing</span> Service at Your Feasibility.
                            </h2>
                            <p>
                                Our skilled ebook authors know how to increase your book's audience.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="content mb-100 pb-100 border-1 border-bottom brd-gray">
                        <div class="img">
                            <img src="{{ asset('assets/frontend/images/icons/serv_icons/interactive-ebook1.png') }}"
                                width="50%" alt="" class="mt-30">
                        </div>
                        <div class="img">
                            <img src="{{ asset('assets/frontend/images/icons/serv_icons/interactive-ebook2.png') }}"
                                width="50%" alt="" class="mt-60">
                        </div>
                        <div class="img">
                            <img src="{{ asset('assets/frontend/images/icons/serv_icons/interactive-ebook3.png') }}"
                                width="50%" alt="" class="mt-20">
                        </div>
                        <div class="img">
                            <img src="{{ asset('assets/frontend/images/icons/serv_icons/interactive-ebook4.png') }}"
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
                        <h2 class="mb-70"> Interactive Ebook <span> Services </span> </h2>
                    </div>
                    <div class="content">
                        <div class="features-card m-2">
                            <h3>Audio<br> Clips</h3>
                            <hr>
                            <p>
                                You can use audio samples for advertising your book using interactive ebooks. As a result,
                                we assist you in transferring any audible data from one user to another.
                            </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>Interactive<br> Checklists</h3>
                            <hr>
                            <p>
                                The experts provide interactive checklists within the document at Amazon Publish Center to
                                simplify the reading and editing process.
                            </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>Maps</h3>
                            <br><br>
                            <hr>
                            <p>
                                The interactive ebooks offered by Amazon Publish Center provide a variety of options. Within
                                the document, some of these include searching, panning, zooming in and out, etc.
                            </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>Animations & <br> Infographics</h3>
                            <hr>
                            <p>
                                Instead of giving the audience written content, we at Amazon Publish Center think animation
                                will engage them more effectively.
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
                                <img src="{{ asset('assets/frontend/images/about/best-img22.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="info">
                                <div class="section-head style-4">
                                    <small class="title_small">Amazon Publish Center</small>
                                    <h2 class="mb-30">Exposure to
                                        <span> Interactive Ebooks. </span>
                                    </h2>
                                </div>
                                <p class="text mb-40">
                                    You can get assistance from Amazon Publish Center using various interactive ebook
                                    services. Our interactive eBook conversion team achieves greater outcomes by utilizing
                                    the most recent and effective eBook conversion technologies and techniques. You don't
                                    need to look any out if you want to make fantastic interactive eBooks.
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
