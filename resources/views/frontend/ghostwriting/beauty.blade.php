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
                                The <span>Optimum Beauty Ghostwriter</span> <br> at your service.
                            </h2>
                            <p class="">
                                For your next project, use the Beauty Ghostwriting Agency.
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
                                <h2> Impressive
                                    <span> Beauty Ghostwriting. </span>
                                </h2>
                            </div>
                            <p>
                                Will you soon introduce a new beauty product? It is a comparison of ten accessories that
                                help with beauty. It is challenging to stay knowledgeable, given the growth of this business
                                and the monthly introduction of new items. But not for our ghostwriters for beauty. The team
                                at Amazon Publish Center includes writers for beauty blogs and magazines that thoroughly
                                understand hair, makeup, skincare, and fashion.
                            </p>
                            <a href="javascript:void(Tawk_API.toggle())" class="btn rounded-pill bg-blue4 fw-bold text-white mt-50">
                                <small> Chat With Us </small>
                            </a>
                        </div>
                        <div class="col-lg-8 order-0 order-lg-2">
                            <div class="">
                                <img src="{{ asset('assets/frontend/images/about/best-img13.png') }}" alt="">
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
                                <img src="{{ asset('assets/frontend/images/about/best-img14.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="section-head mb-30 style-5">
                                <h2> Our <span> Ghostwriters </span> In The News
                                </h2>
                            </div>
                            <p>
                                Our staff of ghostwriters has a knack for writing, and their excellent ghostwriting
                                abilities have frequently been highlighted by reputable media sites like The New York Times.
                                By creating a book, our ghostwriters have successfully assisted our clients in becoming
                                well-known authors.
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
                                <img src="{{ asset('assets/frontend/images/about/best-img15.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 order-2 order-lg-0">
                            <div class="section-head mb-30 style-5">
                                <h2> <span>Beauty Ghostwriters</span> Firm
                                </h2>
                            </div>
                            <p>
                                A large range of subtopics falls under the umbrella of the overarching issue of beauty. The
                                beauty writers at Amazon Publish Center have in-depth knowledge about the makeup and
                                efficacy of cosmetics, and they offer advice based on their expertise.
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
