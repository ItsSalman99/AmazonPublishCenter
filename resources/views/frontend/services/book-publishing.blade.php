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
                            <h2 class="mb-20">Publish Your Own Book <br><span>Lowest Price.</span> </h2>
                            <p>Are you in search of the best American book publishing company? Let Amazon Publishing Central handle all aspects of publishing, from editing to distribution.                            </p>
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
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum quod amet molestias
                                voluptatibus velit inventore, in similique. Nesciunt animi sint itaque consequatur
                                architecto, quod molestiae facere magni. Magnam, tenetur nemo?
                            </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>Self <br>Publishing</h3>
                            <hr>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum quod amet molestias
                                voluptatibus velit inventore, in similique. Nesciunt animi sint itaque consequatur
                                architecto, quod molestiae facere magni. Magnam, tenetur nemo?
                            </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>Promotion <br> Service</h3>
                            <hr>
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum quod amet molestias
                                voluptatibus velit inventore, in similique. Nesciunt animi sint itaque consequatur
                                architecto, quod molestiae facere magni. Magnam, tenetur nemo?
                            </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>Distribution <br> Service</h3>
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
                                <img src="{{ asset('assets/frontend/images/about/book-publish.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="info">
                                <div class="section-head style-4">
                                    <small class="title_small">AMAZON PUBLISH CENTER</small>
                                    <h2 class="mb-30">
                                        <span>
                                            Top Self-Publishing </span>
                                            Service Online.
                                    </h2>
                                </div>
                                <p class="text mb-40">
                                    Amazon Publishing Central will allow you to see unrivaled talent in ghostwriting. Our
                                    experts create content that demonstrates unmatched professionalism and creativity.
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
                                <a href="page-contact-5.html" class="btn rounded-pill bg-blue4 fw-bold text-white mt-50">
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

        @include('frontend.partials.book-slider')

        <!-- ====== start Culture ====== -->
        <section class="culture section-padding style-5">
            <div class="section-head text-center style-4 mb-60">
                <small class="title_small"> Hire Us </small>
                <h2 class="mb-20"> <span>100% Genuine </span>, <span>100% Attractive</span>
                    Amazon <br> Publish Central Takes smoothest out <br> your writing journey. </h2>
                <p> More 15,000 Companies & partners trusted & choice </p>
            </div>
            <div class="container">
                <div class="d-flex justify-content-between" style="width: 30%; margin: 0 auto;">
                    <div>
                        <a href="#" class="btn rounded-pill bg-blue4 fw-bold text-white mt-50">
                            <small> Free Consultation </small>
                        </a>
                    </div>
                    <div>
                        <a href="#" class="btn rounded-pill bg-blue4 fw-bold text-white mt-50">
                            <small> </small>Quick Chat
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end Culture ====== -->



    </main>
    <!--End-Contents-->
@endsection
