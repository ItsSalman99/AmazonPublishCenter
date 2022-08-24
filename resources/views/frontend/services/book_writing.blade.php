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
                            <small class="title_small">BOOK WRITING SERVICES</small>
                            <h2 class="mb-20">Start Your Voyage To Be A Best Seller With Our <span>Professional Book Writing
                                    Services!</span> </h2>
                            <p>We offer book writing services that transform concepts into sensible and pertinent language.
                                Working with our authors is a pleasure because of their innovative approaches to bringing
                                ideas to life on paper.
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
                        <div class="img">
                            <img src="{{ asset('assets/frontend/images/about/book5.png') }}" alt="">
                        </div>
                    </div>
                </div>
                <img src="{{ asset('assets/frontend/images/about/intg_back.png') }}" alt="" class="intg-back">
            </div>


            <section class="features pt-70 pb-70 style-4" style="background-color: transparent">
                <div class="container">
                    <div class="section-head text-center style-4">
                        <small class="title_small bg-white">Amazon Publish Center</small>
                        <h2 class="mb-70"> Book Writing <span> Services </span> </h2>
                    </div>
                    <div class="content">
                        <div class="features-card m-2">
                            <h3>Various <br> Specialized Genres</h3>
                            <hr>
                            <p>
                                Our writers are experts in writing in a vast diversity of genres when it comes to book
                                writing, so all you have to do is to pick your genre and let us know, and we will do the
                                hard work for you.
                            </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>Client <br> Communication</h3>
                            <hr>
                            <p>
                                We make sure that our client is satisfied and is being heard all the time. Our writers are
                                always available for you. You can contact us anytime you are feeling troubled.
                            </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>Personalized <br> Service</h3>
                            <hr>
                            <p>
                                You will get your work tailored the way you like it, as our writers will customize the
                                content just how you want it to.
                            </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>Book <br> Marketing</h3>
                            <hr>
                            <p>
                                After we finish your book, we can even market it for you and help you get worthy type
                                readers for your book.
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
                                <img src="{{ asset('assets/frontend/images/about/book5.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="info">
                                <div class="section-head style-4">
                                    <small class="title_small">AMAZON PUBLISH CENTER</small>
                                    <h2 class="mb-30">It's Time You Share Your <span> Amazing Story!</span></h2>
                                </div>
                                <p class="text mb-40">
                                    Every tale, in our opinion, merits sharing. Our book writer for rent meticulously
                                    carried out your suggestion. Without effort and commitment, nothing can be achieved.
                                    These qualities enable our team to produce an intriguing product. We will require the
                                    necessary data to mold words into a tale. We refer to our project brief for creating a
                                    text as the first step toward your success. Our book writing services properly include
                                    the genuine meaning of our words. We promise our customers that we'll never cut corners
                                    on quality. </p>
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
                                <a href="javascript:void(Tawk_API.toggle())" class="btn rounded-pill bg-blue4 fw-bold text-white mt-50">
                                    <small> Chat With Us </small>
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
