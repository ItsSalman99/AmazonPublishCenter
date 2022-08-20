@extends('frontend.layouts.main2')

@section('content')
    <!--Contents-->
    <main class="portfolio-page style-1">
        <!-- ====== start portfolio-projects ====== -->
        <section class="portfolio-projects section-padding pt-50 style-1 bg-white">
            <div class="container" style="margin-top: 150px;">
                <div class="section-head text-center style-4 mb-40">
                    <small class="title_small">Amazon Publish Center</small>
                    <h2 class="mb-20">Some Of <span>Amazon Publish Center</span> Company's Successful Creations</h2>
                    <p>We have an experienced team of production and inspection personnel to ensure quality.</p>
                </div>
                <div class="controls">
                    <button type="button" class="control" data-bs-filter="all">All</button>
                    <button type="button" class="control" data-bs-filter=".consultation">Children</button>
                    <button type="button" class="control" data-bs-filter=".security">Fiction</button>
                    <button type="button" class="control" data-bs-filter=".website">Auto Biography</button>
                    <button type="button" class="control" data-bs-filter=".design">Action & Adventure</button>
                    <button type="button" class="control" data-bs-filter=".cloud">Classics</button>
                    <button type="button" class="control" data-bs-filter=".development">Comic</button>
                </div>
                <section class="portfolio style-1">
                    <div class="content">
                        <div class="row mix-container">
                            <div class="col-lg-4 mix cloud design">
                                <div class="portfolio-card mb-50">
                                    <div class="img">
                                        <img src="{{ asset('assets/frontend/images/projects/4.png') }}" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>
                                            <a href="page-single-project-5.html"> Okpay E-Wallet Optimized </a>
                                        </h5>
                                        <small class="d-block color-main text-uppercase">SEO analysis</small>
                                        <div class="text">
                                            Trust our top minds to eliminate workflow pain points, implement new tech &
                                            app.
                                        </div>
                                        <div class="tags">
                                            <a href="#">SEO Analysis</a>
                                            <a href="#">Content Strategy</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mix website development cloud">
                                <div class="portfolio-card mb-50">
                                    <div class="img">
                                        <img src="{{ asset('assets/frontend/images/projects/5.png') }}" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>
                                            <a href="page-single-project-5.html"> e-Commerce Dashboard </a>
                                        </h5>
                                        <small class="d-block color-main text-uppercase">website design &
                                            develoment</small>
                                        <div class="text">
                                            Trust our top minds to eliminate workflow pain points, implement new tech &
                                            app.
                                        </div>
                                        <div class="tags">
                                            <a href="#">WordPress</a>
                                            <a href="#">PHP</a>
                                            <a href="#">HTML/CSS</a>
                                            <a href="#">Figma</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mix design consultation">
                                <div class="portfolio-card mb-50">
                                    <div class="img">
                                        <img src="{{ asset('assets/frontend/images/projects/7.png') }}" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>
                                            <a href="page-single-project-5.html"> Crypto Blockchain </a>
                                        </h5>
                                        <small class="d-block color-main text-uppercase">Data security</small>
                                        <div class="text">
                                            Trust our top minds to eliminate workflow pain points, implement new tech &
                                            app.
                                        </div>
                                        <div class="tags">
                                            <a href="#">Security</a>
                                            <a href="#">Management</a>
                                            <a href="#">Backup & Recovery</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mix cloud design">
                                <div class="portfolio-card mb-50">
                                    <div class="img">
                                        <img src="{{ asset('assets/frontend/images/projects/1.png') }}" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>
                                            <a href="page-single-project-5.html"> Car Rental Dashboard </a>
                                        </h5>
                                        <small class="d-block color-main text-uppercase">UI/UX Design</small>
                                        <div class="text">
                                            Trust our top minds to eliminate workflow pain points, implement new tech &
                                            app.
                                        </div>
                                        <div class="tags">
                                            <a href="#">HTML/CSS</a>
                                            <a href="#">Figma</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mix security cloud">
                                <div class="portfolio-card mb-50">
                                    <div class="img">
                                        <img src="{{ asset('assets/frontend/images/projects/2.png') }}" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>
                                            <a href="page-single-project-5.html"> Encrypt Blockchain </a>
                                        </h5>
                                        <small class="d-block color-main text-uppercase">Data security, it
                                            consultation</small>
                                        <div class="text">
                                            Trust our top minds to eliminate workflow pain points, implement new tech &
                                            app.
                                        </div>
                                        <div class="tags">
                                            <a href="#">Data Security</a>
                                            <a href="#">Python</a>
                                            <a href="#">Data Backup</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mix development consultation">
                                <div class="portfolio-card">
                                    <div class="img">
                                        <img src="{{ asset('assets/frontend/images/projects/6.png') }}" alt="">
                                    </div>
                                    <div class="info">
                                        <h5>
                                            <a href="page-single-project-5.html"> Robotchat AI Development </a>
                                        </h5>
                                        <small class="d-block color-main text-uppercase">machine learning</small>
                                        <div class="text">
                                            Trust our top minds to eliminate workflow pain points, implement new tech &
                                            app.
                                        </div>
                                        <div class="tags">
                                            <a href="#">AI</a>
                                            <a href="#">Machine Learning</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="#" class="btn rounded-pill bg-blue4 fw-bold text-white me-4" target="_blank">
                            <small> Show More (24) </small>
                        </a>
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
                                <h2 class="mb-20"> Access your business potentials today & find opportunity for <span>
                                        bigger success </span> </h2>
                            </div>
                            <div class="butns mt-70">
                                <a href="page-contact-app.html" class="btn rounded-pill bg-blue4 fw-bold text-white me-4"
                                    target="_blank">
                                    <small> Start A Project Now </small>
                                </a>
                                <a href="page-about-app.html" class="btn rounded-pill hover-blue4 fw-bold border-blue4"
                                    target="_blank">
                                    <small> See Pricing & Plan </small>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="{{ asset('') }}assets/img/contact_globe.svg" alt="" class="contact_globe">
        </section>
        <!-- ====== end portfolio-projects ====== -->


    </main>
    <!--End-Contents-->
@endsection
