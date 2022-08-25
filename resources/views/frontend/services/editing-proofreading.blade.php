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
                            <h2 class="mb-20">Our Professional <br> <span>Editing & Proofreading</span> Services
                            </h2>
                            <p>
                                Say goodbye to incomplete and subpar draughts! We provide highly engaging and expert text
                                for your manuscripts.
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
                        <h2 class="mb-70"> Editing & <span> Proofreading Services </span> </h2>
                    </div>
                    <div class="content">
                        <div class="features-card m-2">
                            <h3>Business Editing <br>& Proofreading</h3>
                            <hr>
                            <p>
                                Our qualified editors satisfy the demands of business executives while keeping in mind a
                                long-term company plan or memo. Give your business in good hands.
                            </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>Resume Editing <br>& Proofreading</h3>
                            <hr>
                            <p>
                                Want to emphasize skills in the best possible way? The first thing a resume needs to do is
                                catch the employer's eye. At the Amazon Publish Center, we monitor compliance with corporate
                                policies.
                            </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>Academic Editing <br> & Proofreading</h3>
                            <hr>
                            <p>
                                We ensure no grammatical, spelling, structural, or punctuation issues in your work. Thus,
                                authors from the Amazon Publish Center are the best option.
                            </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>Writer Editing<br> & Proofreading</h3>
                            <hr>
                            <p>
                                It might be challenging to review a book and adhere to excellent writing devoid of errors.
                                Because of this, our editors complete their work quickly.
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
                                <img src="{{ asset('assets/frontend/images/about/best-img14.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="info">
                                <div class="section-head style-4">
                                    <small class="title_small">Amazon Publish Center</small>
                                    <h2 class="mb-30">Professional <span>Editing And Proof-Reading</span> Service
                                    </h2>
                                </div>
                                <p class="text mb-40">
                                    Our Amazon Publish Center service of editing and proofreading covers all of it with
                                    correcting your grammatical errors and providing stylish references. We proofread and
                                    make modifications following your document, topic matter, and intended readership. Our
                                    publishing managers are native English speakers who have through a rigorous evaluation
                                    process to determine their proofreading expertise and subject knowledge.
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
