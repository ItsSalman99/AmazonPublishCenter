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
                            <small class="title_small">Book Formatting Service</small>
                            <h2 class="mb-20">Professional & Outstanding<span> Book Formatting Services. </span> </h2>
                            <p>
                                We create your book's layout, inside design, and book cover following the criteria demanded
                                by print-on-demand publishers.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="content mb-100 pb-100 border-1 border-bottom brd-gray">
                        <div class="img">
                            <img src="{{ asset('assets/frontend/images/icons/serv_icons/writing.png') }}" width="50%"
                                alt="" class="mt-30">
                        </div>
                        <div class="img">
                            <img src="{{ asset('assets/frontend/images/icons/serv_icons/writing1.png') }}" width="50%"
                                alt="" class="mt-60">
                        </div>
                        <div class="img">
                            <img src="{{ asset('assets/frontend/images/icons/serv_icons/writing2.png') }}" width="50%"
                                alt="" class="mt-20">
                        </div>
                        <div class="img">
                            <img src="{{ asset('assets/frontend/images/icons/serv_icons/writing4.png') }}" width="50%"
                                alt="" class="mt-80">
                        </div>
                        <div class="img">
                            <img src="{{ asset('assets/frontend/images/icons/serv_icons/writing3.png') }}" width="50%"
                                alt="" class="mt-80">
                        </div>
                    </div>
                </div>
                <img src="{{ asset('assets/frontend/images/about/intg_back.png') }}" alt="" class="intg-back">
            </div>

            <section class="features pt-70 pb-70 style-4" style="background-color: transparent">
                <div class="container">
                    <div class="section-head text-center style-4">
                        <small class="title_small bg-white">Amazon Publish Center</small>
                        <h2 class="mb-70"> Book Formating <span> Services </span> </h2>
                    </div>
                    <div class="content">
                        <div class="features-card m-2">
                            <h3>Kindle & Ebook <br> Formatting</h3>
                            <hr>
                            <p>
                                The EPUB file is the primary ebook format used by Amazon and other online retailers [such as
                                Apple goods, Kobos, Nooks, and Android devices]. On the awning of any device, your text will
                                display stylishly and, more importantly, be readable, thanks to the expertise and experience
                                of our designers.
                            </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>Print Book <br> Formatting</h3>
                            <hr>
                            <p>
                                Many of the same factors must be handled skillfully when formatting a book for print,
                                including typeface, font size, margins, page breaks, headers, line spacing, chapter breaks,
                                etc. We create a print-ready PDF edition of your book that satisfies the requirements of the
                                majority of print-on-demand publishers.
                            </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>Children's <br>Book</h3>
                            <hr>
                            <p>
                                Unlike novels for older children and adults, picture books have several unique requirements.
                                Knowing that their writing and illustrations—both language and images—are in capable hands,
                                authors and illustrators can relax.
                            </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>Hard <br>Cover</h3>
                            <hr>
                            <p>
                                Unlike novels for older children and adults, picture books have several unique requirements.
                                Knowing that their writing and illustrations—both language and images—are in capable hands,
                                authors and illustrators can relax.
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
                                <img src="{{ asset('assets/frontend/images/about/best-img3.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="info">
                                <div class="section-head style-4">
                                    <small class="title_small">Amazon Publish Center</small>
                                    <h2 class="mb-30">Give high importance to <span> Book Formatting </span> </h2>
                                </div>
                                <p class="text mb-40">
                                    We comprehend the importance of a book's formatting. Nobody can afford to submit work
                                    riddled with grammatical or structural faults. Even the simplest issue can make writing
                                    difficult. Because of this, our authors at Amazon Publish Center highly value book
                                    formatting. They understand that it requires careful attention and that even a minor
                                    mistake is unacceptable. 
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
                                <a href="javascript:void(Tawk_API.toggle())" class="btn rounded-pill bg-blue4 fw-bold text-white mt-50">
                                    <small> Chat With Us </small>
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
        @include('frontend.partials.our-writers')
        <!-- ====== end team ====== -->

        @include('frontend.partials.end-section')



    </main>
    <!--End-Contents-->
@endsection
