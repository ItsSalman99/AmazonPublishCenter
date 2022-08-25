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
                            <small class="title_small">Book Cover Design</small>
                            <h2 class="mb-20"><span>Professional Book Cover</span> <br> Designers for Hire
                            </h2>
                            <p>
                                Do you want your book to stand out on the shelves of a bookstore among the hundreds of
                                others? To do that, people employ book cover designers. You ought to follow suit. Purchase a
                                top-notch book cover design from us.
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
                        <h2 class="mb-70"> Book <span> Cover Services </span> </h2>
                    </div>
                    <div class="content">
                        <div class="features-card m-2">
                            <h3>Custom eBook<br> Cover Design</h3>
                            <hr>
                            <p>
                                In our opinion, the front and back of the book cover are the first things readers notice. As
                                a result, we design the front and back at Amazon Publish Center following your
                                specifications.
                            </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>Print Book <br>Cover Design</h3>
                            <hr>
                            <p>
                                We ensure the print book cover design matches the information in your paperback. In this
                                area, our designers are skilled.
                            </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>Illustrated Book<br> Cover Design</h3>
                            <hr>
                            <p>
                                The illustration on the book cover can best convey the idea of your novel. Our illustrators
                                and designers create front and back covers perfect for your story.
                            </p>
                        </div>
                        <div class="features-card m-2">
                            <h3>Photographic <br> Cover Design</h3>
                            <hr>
                            <p>
                                The story inside is complemented by our book's photograph on the cover. We understand how to
                                draw interest with a stunning book cover design.
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
                                <img src="{{ asset('assets/frontend/images/about/best-img13.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="info">
                                <div class="section-head style-4">
                                    <small class="title_small">Amazon Publish Center</small>
                                    <h2 class="mb-30">
                                        <span>Book Cover Designs</span> that Catch Everyone's Eyes
                                    </h2>
                                </div>
                                <p class="text mb-40">
                                    Do not magistrate a book by its cover is a proverb that was probably not coined by a
                                    talented front cover designer. In the real world of our reality, individuals do make
                                    snap judgments based on a book's cover. And honestly, when they go to the bookshop, most
                                    customers won't even give your book a second glance. No matter how magnificent your book
                                    may be, if you want people to pick it up and look inside, it must pique their interest
                                    enough to keep gazing at it until they feel driven to do so. If you want the same for
                                    your book, get in touch with us so we can create a cover that astounds readers and draws
                                    them in.
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
