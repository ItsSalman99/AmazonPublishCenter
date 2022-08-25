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
                            <small class="title_small">AUDIO BOOKS SERVICES</small>
                            <h2 class="mb-20">
                                <span>Audiobook</span> Narration Services
                            </h2>
                            <p>
                                You want to get your book concept made as an audiobook, right? You're covered by our
                                excellent staff members who are skilled in recording and narrating stories!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="content mb-100 pb-100 border-1 border-bottom brd-gray">
                        <div class="img">
                            <img src="{{ asset('assets/frontend/images/icons/serv_icons/audio-book.png') }}" width="80%"
                                alt="" class="mt-30">
                        </div>
                        <div class="img">
                            <img src="{{ asset('assets/frontend/images/icons/serv_icons/audio-book1.png') }}" width="70%"
                                alt="" class="mt-60">
                        </div>
                        <div class="img">
                            <img src="{{ asset('assets/frontend/images/icons/serv_icons/audio-book2.png') }}" width="70%"
                                alt="" class="mt-20">
                        </div>
                        <div class="img">
                            <img src="{{ asset('assets/frontend/images/icons/serv_icons/audio-book3.png') }}" width="70%"
                                alt="" class="mt-80">
                        </div>
                        <div class="img">
                            <img src="{{ asset('assets/frontend/images/icons/serv_icons/audio-book4.png') }}" width="80%"
                                alt="">
                        </div>
                    </div>
                </div>
                <img src="{{ asset('assets/frontend/images/about/intg_back.png') }}" alt="" class="intg-back">
            </div>

            <section class="features pt-70 pb-70 style-4" style="background-color: transparent">
                <div class="container">
                    <div class="section-head text-center style-4">
                        <small class="title_small bg-white">Amazon Publish Center</small>
                        <h2 class="mb-70"> Audio Books <span> Services </span> </h2>
                    </div>
                    <div class="content">
                        <div class="features-card m-2">
                            <h3>Digitally Audio
                                <br> Formats
                            </h3>
                            <hr>
                            <p>
                                Want to convert your audiobooks into a digital version that can be downloaded? We assist you
                                at the Amazon Publish Center in converting your audiobook into a downloadable digital
                                format.
                            </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>Windows
                                <br>media audio
                            </h3>
                            <hr>
                            <p>
                                By utilizing the suggested audio codecs for Microsoft's Windows Media Audio, we guarantee
                                the highest audio quality for audiobooks.
                            </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>Progressive
                                <br> audio coding
                            </h3>
                            <hr>
                            <p>
                                Is lossy digital audio compression a concern for them? Our professionals are knowledgeable
                                in both basic and sophisticated audio coding issues.
                            </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>Solid-state
                                digital
                            </h3>
                            <hr>
                            <p>
                                We use suggested and portable media players at Amazon Publish Center for public and school
                                libraries.
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
                                <img src="{{ asset('assets/frontend/images/about/best-img7.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="info">
                                <div class="section-head style-4">
                                    <small class="title_small">AMAZON PUBLISH CENTER</small>
                                    <h2 class="mb-30">
                                        Your Ultimate Resource of <span>Audiobook Services</span>
                                    </h2>
                                </div>
                                <p class="text mb-40">
                                    Each essential element that contributes to the greatest audiobook
                                    narration is understood by our very talented audiobook narrators, who incorporate it
                                    into their work. Our audiobook performers are skilled at maintaining consistency in
                                    solo-voice narration and narrations with numerous voices. We continually review our
                                    earlier audios to make sure that the caliber is preserved as well as to ensure
                                    consistency. While many people have strong writing abilities, our narrators excel at a
                                    somewhat uncommon skill: narrating an audiobook. Their specialty is using their expert
                                    narrating skills to leave a lasting impression on the listener.
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
                                <a href="{{ route('contact') }}" class="btn rounded-pill bg-blue4 fw-bold text-white mt-50">
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

        @include('frontend.partials.end-section')



    </main>
    <!--End-Contents-->
@endsection
