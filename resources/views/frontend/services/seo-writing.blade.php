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
                            <h2 class="mb-20"> Leading
                                SEO <br>
                                <span> Writing Services </span>
                            </h2>
                            <p>
                                Hire SEO content writer today to publish the finest blogs through Amazon Publishing Center.
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
                                <br>  Content</h3>
                            <hr>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum quod amet molestias
                                voluptatibus velit inventore, in similique. Nesciunt animi sint itaque consequatur
                                architecto, quod molestiae facere magni. Magnam, tenetur nemo?
                            </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>Guest Blogs <br>and Articles</h3>
                            <hr>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum quod amet molestias
                                voluptatibus velit inventore, in similique. Nesciunt animi sint itaque consequatur
                                architecto, quod molestiae facere magni. Magnam, tenetur nemo?
                            </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>SEO <br>Blogs</h3>
                            <hr>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum quod amet molestias
                                voluptatibus velit inventore, in similique. Nesciunt animi sint itaque consequatur
                                architecto, quod molestiae facere magni. Magnam, tenetur nemo?
                            </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>Social
                                <br>Media Content</h3>
                            <hr>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum quod amet molestias
                                voluptatibus velit inventore, in similique. Nesciunt animi sint itaque consequatur
                                architecto, quod molestiae facere magni. Magnam, tenetur nemo?
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
                                    <h2 class="mb-30">Grow
                                        On
                                        <span> Amazon. </span>
                                    </h2>
                                </div>
                                <p class="text mb-40">
                                    It is said, " DONT JUDGE A BOOK BY ITS COVER." But, most of the time, it's always the
                                    cover representing your book. Hire a book cover designer with Amazon Publishing Central
                                    and be stress-free. We are all you need. Narratives are influential when associated with
                                    the beauty of art. Whatever kind of book, crime thriller, or fiction you're looking to
                                    publish, our designers can make a fantastic cover for your book. </p>
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
