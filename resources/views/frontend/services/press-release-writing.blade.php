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
                            <h2 class="mb-20">Experienced PR <br>
                                <span> Writing Services </span>
                            </h2>
                            <p>
                                Write your press release that makes your manuscript a bestseller with our press release
                                writing services. </p>
                        </div>
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
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum quod amet molestias
                                voluptatibus velit inventore, in similique. Nesciunt animi sint itaque consequatur
                                architecto, quod molestiae facere magni. Magnam, tenetur nemo?
                            </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>Tempting <br>Content</h3>
                            <hr>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum quod amet molestias
                                voluptatibus velit inventore, in similique. Nesciunt animi sint itaque consequatur
                                architecto, quod molestiae facere magni. Magnam, tenetur nemo?
                            </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>Expert <br>Writers</h3>
                            <hr>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum quod amet molestias
                                voluptatibus velit inventore, in similique. Nesciunt animi sint itaque consequatur
                                architecto, quod molestiae facere magni. Magnam, tenetur nemo?
                            </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>Timely <br>Delivery</h3>
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
                                <img src="{{ asset('assets/frontend/images/about/best-creative.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="info">
                                <div class="section-head style-4">
                                    <small class="title_small">Amazon Publish Center</small>
                                    <h2 class="mb-30">We Create <span> Phenomenal Content </span> </h2>
                                </div>
                                <p class="text mb-40">
                                    Defining readers' viewpoint, at Amazon Publishing Central, you can witness the most
                                    impressive excellence in singlehood. Our writers are well-versed and have a repertoire
                                    that showcases the best shades of expertise while emphasizing creativity. We are a group
                                    of talented ghostwriters who are determined to increase the quality of work by using our
                                    content. </p>
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
                                <a href="page-contact-5.html" class="btn rounded-pill bg-blue4 fw-bold text-white mt-50">
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


        <!-- ====== start team ====== -->
        <section class="team section-padding style-6">
            <div class="content">
                <div class="container">
                    <div class="section-head text-center style-4 mb-60">
                        <small class="title_small"> The Team Work </small>
                        <h2 class="mb-20"> Our <span> Leaders </span> </h2>
                        <p> The Professional Creative Team for Growth-up Works </p>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="team-card mb-30 mb-lg-0 style-6">
                                <div class="img img-cover">
                                    <img src="{{ asset('assets/frontend/images/team/1.jpg') }}" alt="">
                                    <div class="social-icons">
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-github"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="info">
                                    <a class="d-block" href="#">
                                        <h6>Michael Edwards</h6>
                                    </a>
                                    <small>CEO Founder</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="team-card mb-30 mb-lg-0 style-6">
                                <div class="img img-cover">
                                    <img src="{{ asset('assets/frontend/images/team/5.jpg') }}" alt="">
                                    <div class="social-icons">
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-github"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="info">
                                    <a class="d-block" href="#">
                                        <h6>Bobby Kane</h6>
                                    </a>
                                    <small>CTO</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="team-card mb-30 mb-lg-0 style-6">
                                <div class="img img-cover">
                                    <img src="{{ asset('assets/frontend/images/team/3.jpg') }}" alt="">
                                    <div class="social-icons">
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-github"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="info">
                                    <a class="d-block" href="#">
                                        <h6>Robert Downey Jr</h6>
                                    </a>
                                    <small>Project Manager</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="team-card style-6">
                                <div class="img img-cover">
                                    <img src="{{ asset('assets/frontend/images/team/4.jpg') }}" alt="">
                                    <div class="social-icons">
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                        <a href="#">
                                            <i class="fab fa-github"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="info">
                                    <a class="d-block" href="#">
                                        <h6>Andrew Robertson</h6>
                                    </a>
                                    <small>Marketing Leader</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end team ====== -->

        @include('frontend.partials.book-slider')



    </main>
    <!--End-Contents-->
@endsection
