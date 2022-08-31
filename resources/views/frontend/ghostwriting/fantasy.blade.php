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
                            <h2 class="mb-20">
                                <span> Fantasy Ghostwriting </span> <br> Company Near Me
                            </h2>
                            <p class="">
                                Join our expert fantasy novel ghostwriters on a journey into the world of ideas.
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
                                <h2>
                                    <span>Experience unparalleled </span> ghostwriting services
                                </h2>
                            </div>
                            <p>
                                You may see ghostwriting at its highest level of genius at Amazon Publish Center. Our
                                writers craft knowledgeable content that displays genuine professionalism while showcasing
                                inventiveness.
                            </p>
                            <a href="javascript:void(Tawk_API.toggle())" class="btn rounded-pill bg-blue4 fw-bold text-white mt-50">
                                <small> Chat With Us </small>
                            </a>
                        </div>
                        <div class="col-lg-8 order-0 order-lg-2">
                            <div class="">
                                <img src="{{ asset('assets/frontend/images/about/best-img20.png') }}" alt="">
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
                                <img src="{{ asset('assets/frontend/images/about/best-img21.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="section-head mb-30 style-5">
                                <h2> Fabulous <span>Fantasy Ghostwriting</span>
                                </h2>
                            </div>
                            <p>
                                A perfectionist is always meticulous, and a fantasy fiction writer should share this trait.
                                A variety of skilled fantasy ghostwriters with a strong command of language and grammar are
                                available from Amazon Publish Center. They are quite knowledgeable in writing fantasy
                                fiction and conducting research. They consequently interpret and offer tales that reflect
                                the message and information ingrained in its core.
                            </p>
                            <a href="javascript:void(Tawk_API.toggle())" class="btn rounded-pill bg-blue4 fw-bold text-white mt-50">
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
                                <img src="{{ asset('assets/frontend/images/about/best-img22.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 order-2 order-lg-0">
                            <div class="section-head mb-30 style-5">
                                <h2>
                                    <span>Leading Fantasy</span> Ghostwriting Services
                                </h2>
                            </div>
                            <p>
                                We deliver the most entertaining books by professional fantasy story writers with
                                outstanding writing styles and captivating reads.
                            </p>
                            <a href="javascript:void(Tawk_API.toggle())" class="btn rounded-pill bg-blue4 fw-bold text-white mt-50">
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
