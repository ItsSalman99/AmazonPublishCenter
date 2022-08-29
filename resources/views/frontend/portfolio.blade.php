@extends('frontend.layouts.main2')

@section('content')
    <!--Contents-->
    <main class="portfolio-page style-1">
        <!-- ====== start portfolio-projects ====== -->
        <section class="portfolio-projects section-padding pt-50 style-1 bg-white">
            <div class="container" style="margin-top: 150px;">
                <div class="section-head text-center style-4 mb-40">
                    <small class="title_small">Amazon Publish Center</small>
                    <h2 class="mb-20">
                        Our Magnificent <br> <span>Successful Creation</span>
                    </h2>
                    <p>
                        We are proud of what we do. We want you to have a look at our magnificent portfolio. 
                        <br>
                        We have an experienced team of production and inspection personnel to ensure quality.
                    </p>
                </div>
                <div class="controls">
                    <button type="button" class="control" data-filter="all">All</button>
                    <button type="button" class="control" data-filter=".children">Children</button>
                    <button type="button" class="control" data-filter=".fiction">Fiction</button>
                    <button type="button" class="control" data-filter=".auto-biography">Auto Biography</button>
                    <button type="button" class="control" data-filter=".action-adventure">Action & Adventure</button>
                    <button type="button" class="control" data-filter=".classics">Classics</button>
                    <button type="button" class="control" data-filter=".comic">Comic</button>
                </div>
                <section class="portfolio style-1">
                    <div class="content">
                        <div class="row mix-container">
                            <div class="col-lg-4 mix children">
                                <div class="portfolio-card mb-50">
                                    <img src="{{ asset('assets/frontend/images/about/children/book1.jpg') }}" width="70%"
                                        alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 mix development children">
                                <div class="portfolio-card">
                                    <img src="{{ asset('assets/frontend/images/about/children/book2.jpg') }}" width="70%"
                                        alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 mix fiction">
                                <div class="portfolio-card mb-50">
                                    <img src="{{ asset('assets/frontend/images/about/fictions/book1.jpg') }}" width="70%"
                                        alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 mix fiction">
                                <div class="portfolio-card mb-50">
                                    <img src="{{ asset('assets/frontend/images/about/fictions/book2.jpg') }}" width="70%"
                                        alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 mix auto-biography">
                                <div class="portfolio-card mb-50">
                                    <img src="{{ asset('assets/frontend/images/about/autobiography/book1.jpg') }}"
                                        width="70%" alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 mix auto-biography">
                                <div class="portfolio-card mb-50">
                                    <img src="{{ asset('assets/frontend/images/about/autobiography/book2.jpg') }}"
                                        width="70%" alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 mix cloud action-adventure">
                                <div class="portfolio-card mb-50">
                                    <img src="{{ asset('assets/frontend/images/about/actionadventures/book1.jpg') }}"
                                        width="70%" alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 mix cloud action-adventure">
                                <div class="portfolio-card mb-50">
                                    <img src="{{ asset('assets/frontend/images/about/actionadventures/book2.jpg') }}"
                                        width="70%" alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 mix classics">
                                <div class="portfolio-card mb-50">
                                    <img src="{{ asset('assets/frontend/images/about/classics/book1.jpg') }}" width="70%"
                                        alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 mix classics">
                                <div class="portfolio-card mb-50">
                                    <img src="{{ asset('assets/frontend/images/about/classics/book2.jpg') }}" width="70%"
                                        alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 mix comic">
                                <div class="portfolio-card mb-50">
                                    <img src="{{ asset('assets/frontend/images/about/comics/book1.jpg') }}" width="70%"
                                        alt="">
                                </div>
                            </div>
                            <div class="col-lg-4 mix comic">
                                <div class="portfolio-card mb-50">
                                    <img src="{{ asset('assets/frontend/images/about/comics/book2.jpg') }}" width="70%"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>
        <section class="download section-padding style-5 bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="content text-center">
                            <div class="section-head text-center style-4">
                                <h2 class="mb-20"> 
                                    Ready To Get Your <span> Work </span> Done With <span> Us </span>?    
                                </h2>
                            </div>
                            <div class="butns mt-70">
                                <a href="{{ route('contact') }}" class="btn rounded-pill bg-blue4 fw-bold text-white me-4"
                                    target="_blank">
                                    <small> Start A Project Now </small>
                                </a>
                                <a href="javascript:void(Tawk_API.toggle())" class="btn rounded-pill hover-blue4 fw-bold border-blue4">
                                    <small> Live Chat Support </small>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{ asset('assets/frontend/images/contact_globe.svg') }}" alt="" class="contact_globe">
        </section>
        <!-- ====== end portfolio-projects ====== -->


    </main>
    <!--End-Contents-->
@endsection
