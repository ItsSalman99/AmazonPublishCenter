@extends('frontend.layouts.main2')

@section('content')
    <!--Contents-->
    <main class="services-page style-5">
        <!-- ====== start features ====== -->
        <section class="features section-padding pt-50 style-5"
            style="border-bottom-right-radius: 50px;border-bottom-left-radius: 50px">
            <div class="container" style="margin-top: 200px;">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-head text-center mb-60 style-5">
                            <h2 class="mb-20"> <span>Premium Screenplay</span>
                                <br>
                                Ghostwriting
                                at Amazon Publishing Center
                            </h2>
                            <p class="">
                                Hire us to have hassle-free access to professional screenplay ghostwriting services.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end features ====== -->


        <!-- ====== start about ====== -->
        <section class="about pt-0 pb-150 style-5">
            <div class="content">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 order-2 order-lg-0">
                            <div class="section-head mb-30 style-5">
                                <h2> <span>Marvelous Screenplay</span> Ghostwriting
                                </h2>
                            </div>
                            <p>
                                Some components are necessary when developing a screenplay. However, only industry
                                professionals are aware of that. A superb mix of seasoned and up-and-coming screenplay
                                ghostwriters may be found at Amazon Publish Center. They collaborate to offer clients
                                outstanding screenplay ghostwriter services. They are aware of every component that makes up
                                the best screenplays.
                            </p>
                            <a href="javascript:void(Tawk_API.toggle())"
                                class="btn rounded-pill bg-blue4 fw-bold text-white mt-50">
                                <small> Chat With Us </small>
                            </a>
                        </div>
                        <div class="col-lg-8 order-0 order-lg-2">
                            <div class="">
                                <img src="{{ asset('assets/frontend/images/about/best-img4.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <div class="">
                                <img src="{{ asset('assets/frontend/images/about/best-img7.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="section-head mb-30 style-5">
                                <h2>
                                    Looking for a <span>screenwriter</span> to hire?
                                </h2>
                            </div>
                            <p>
                                We are the screenwriter for hire you need if you need someone to take on your movie or TV
                                idea and polish it up so it can be pitched to studio heads. The following essay examines
                                screenwriting, its elements, and what qualities you should seek in a screenplay ghostwriter.
                                You may find it educational if you're new to writing for movies and television. Should we
                                start?
                            </p>
                            <a href="javascript:void(Tawk_API.toggle())"
                                class="btn rounded-pill bg-blue4 fw-bold text-white mt-50">
                                <small> Chat With Us </small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-8 order-0 order-lg-2">
                            <div class="">
                                <img src="{{ asset('assets/frontend/images/about/best-img10.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 order-2 order-lg-0">
                            <div class="section-head mb-30 style-5">
                                <h2> <span>Affordable Screenplay</span> Ghostwriting Services
                                </h2>
                            </div>
                            <p>
                                Amazon Publish Center is the ideal screenplay ghostwriting company for individuals
                                interested in learning more about the most recent Netflix or Hollywood material.
                            </p>
                            <a href="javascript:void(Tawk_API.toggle())"
                                class="btn rounded-pill bg-blue4 fw-bold text-white mt-50">
                                <small> Chat With Us </small>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end about ====== -->


    </main>
    <!--End-Contents-->
@endsection
