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
                                <span>Fiction Ghost Writers</span><br>
                                 Are At Your Service <br>
                            </h2>
                            <p class="">
                                We offer every service to support the realization of your writing goals. We only require
                                your idea.
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
                        <div class="col-lg-6 order-2 order-lg-0">
                            <div class="section-head mb-30 style-5">
                                <h2> <span>Fiction Ghost Writing</span>
                                    Amenities Are Available For You.
                                </h2>
                            </div>
                            <p>
                                Everyone has a fascinating tale to share, in our opinion, at Amazon Publish Center. But, you
                                do not want to put in the effort of writing it down page by page. Additionally, you must
                                have great language skills to recount the occurrences accurately. Our expert fiction
                                ghostwriting services have made creating fiction books for publication incredibly
                                straightforward.
                            </p>
                        </div>
                        <div class="col-lg-6 order-0 order-lg-2">
                            <div class="">
                                <img src="{{ asset('assets/frontend/images/about/best-img7.png') }}" alt="">
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
                                <img src="{{ asset('assets/frontend/images/about/best-img11.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="section-head mb-30 style-5">
                                <h2>
                                    <span>Suspense And Thriller</span> Novel Ghostwriting Services
                                </h2>
                            </div>
                            <p>
                                Investigators try to solve crimes in some of the most read literary works. These detective
                                novels are classified as suspense and thrillers. These books assist the reader feel a sense
                                of mystery and suspense, as the name would imply. We distinguish that a thriller should
                                never get boring.
                            </p>
                            <a href="page-contact-5.html"
                                class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold mt-50">
                                <span> Book A Free Demo </span>
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
                                <img src="{{ asset('assets/frontend/images/about/best-img12.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-4 order-2 order-lg-0">
                            <div class="section-head mb-30 style-5">
                                <h2> <span>Romance Fiction</span> Ghostwriting Facilities </h2>
                            </div>
                            <p>
                                If you're seeking publications that appeal to a broad readership, romance fiction is the way
                                to go. Essentially, these stories revolve around a relationship between two people or their
                                desire to have one.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end about ====== -->


    </main>
    <!--End-Contents-->
@endsection
