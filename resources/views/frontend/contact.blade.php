@extends('frontend.layouts.main2')

@section('content')
    <!--Contents-->
    <main class="contact-page style-5">
        <!-- ====== start contact page ====== -->
        <section class="community section-padding style-5">
            <div class="container" style="margin-top: 150px;">
                <div class="section-head text-center style-4 mb-40">
                    <small class="title_small">Contact us</small>
                    <h2 class="mb-20">Get In <span> Touch </span> </h2>
                    <p>We will contact again after receive your request in 24h</p>
                </div>
                <div class="content rounded-pill">
                    <div class="commun-card">
                        <div class="icon icon-45">
                            <img src="{{ asset('assets/frontend/images/icons/mail3d.png') }}" alt="">
                        </div>
                        <div class="inf">
                            <h6>info@amazonpublishcenter.com</h6>
                        </div>
                    </div>
                    <div class="commun-card">
                        <div class="icon icon-45">
                            <img src="{{ asset('assets/frontend/images/icons/map3d.png') }}" alt="">
                        </div>
                        <div class="inf">
                            <h6>Office 4111 182-184 High Street North, East Ham, London E6 2JA. UK</h6>
                        </div>
                    </div>
                    <div class="commun-card">
                        <div class="icon icon-45">
                            <img src="{{ asset('assets/frontend/images/icons/msg3d.png') }}" alt="">
                        </div>
                        <div class="inf">
                            <h6>+1 361 355 4874</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact section-padding pt-0 style-6">
            <div class="container">
                <div class="content">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            @include('frontend.partials.contactform')
                        </div>
                    </div>
                    <img src="{{ asset('assets/frontend/images/icons/contact_a.png') }}" alt="" class="contact_a">
                    <img src="{{ asset('assets/frontend/images/icons/contact_message.png') }}" alt=""
                        class="contact_message">
                </div>
            </div>
        </section>
        <!-- ====== end contact page ====== -->

        <!-- ====== start contact page ====== -->
        <div class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24219.60999175365!2d-73.9764341314902!3d40.64198229194528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25b400c94a227%3A0x18e2a4d3fb21f0ec!2sFlatbush%2C%20Brooklyn%2C%20NY%2C%20USA!5e0!3m2!1sen!2seg!4v1651361759450!5m2!1sen!2seg"
                height="500" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- ====== start contact page ====== -->
    </main>
    <!--End-Contents-->
@endsection
