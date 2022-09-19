<header class="style-6" style="border-bottom-left-radius: 50px; border-bottom-right-radius: 50px; margin-bottom: 50px;">
    <div class="content">
        <div class="overlay"></div>
        <div class="swiper-bg-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="image-container">
                        <img src="/assets/frontend/images/bg1.jpg" id="bg1" width="100%" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image-container">
                        <img src="/assets/frontend/images/bg2.jpg" id="bg2" width="100%" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image-container">
                        <img src="/assets/frontend/images/bg3.jpg" id="bg3" width="100%" alt="">
                    </div>
                </div>
            </div>
        </div>

        <!-- ====== start navbar ====== -->
        <nav class="navbar navbar-expand-lg navbar-light style-6" style="background-color: transparent">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('assets/frontend/images/logo.png') }}" width="90%" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" aria-expanded="true" style="flex-grow: 0;"
                    id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0" aria-expanded="true" id="navbarSupportedContent">
                        <li class="nav-item">
                            <a class="nav-item " href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-item " href="{{ route('about') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-item " href="#">Services</a>
                            <ul>
                                <div style="padding: 40px">
                                    <h1 class="service-h1">Amazon Publishing Center Services</h1>
                                </div>
                                <br>
                                <li class="nav-item">
                                    <a class="nav-link service-link" style="color: #000; font-size: 22px;" href="{{ route('book-writing') }}">Book Writing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link service-link" style="color: #000; font-size: 22px;" href="{{ route('book-publishing') }}">Book
                                        Publishing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link service-link" style="color: #000; font-size: 22px;" href="{{ route('book-marketing') }}">Book
                                        Marketing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link service-link" style="color: #000; font-size: 22px;" href="{{ route('video-book-trailers') }}">Video
                                        Book
                                        Trailers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link service-link" style="color: #000; font-size: 22px;" href="{{ route('social-media-marketing') }}">Social
                                        Media
                                        Marketing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link service-link" style="color: #000; font-size: 22px;"
                                        href="{{ route('interactive-ebooks') }}">Interactive E-Book
                                        Designs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link service-link" style="color: #000; font-size: 22px;" href="{{ route('creative-writing') }}">Creative
                                        Writing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link service-link" style="color: #000; font-size: 22px;" href="{{ route('press-release-writing') }}">Press
                                        Release
                                        Writing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link service-link" style="color: #000; font-size: 22px;" href="{{ route('editingProofReading') }}">Editing
                                        and
                                        ProofReading</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link service-link" style="color: #000; font-size: 22px;" href="{{ route('bookCoverDesign') }}">Book Cover
                                        Desing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link service-link" style="color: #000; font-size: 22px;" href="{{ route('amazon-marketing') }}">Amazon
                                        Markeiting</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-item " href="#">Ghostwriting Services</a>
                            <ul>
                                <div style="padding: 40px">
                                    <h1 class="service-h1">Amazon Publishing Center GhostWriting Services</h1>
                                </div>
                                <br>
                                <li class="nav-item">
                                    <a class="nav-link service-link" style="color: #000; font-size: 22px;" href="{{ route('fiction') }}">FICTION</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link service-link" style="color: #000; font-size: 22px;" href="{{ route('beauty') }}">BEAUTY
                                        GHOSTWRITING</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link service-link" style="color: #000; font-size: 22px;" href="{{ route('business') }}">BUSINESS
                                        GHOSTWRITING</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link service-link" style="color: #000; font-size: 22px;" href="{{ route('fantasy') }}">FANTASY
                                        GHOSTWRITING</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link service-link" style="color: #000; font-size: 22px;" href="{{ route('medical') }}">MEDICAL
                                        GHOSTWRITING</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link service-link" style="color: #000; font-size: 22px;" href="{{ route('screenplay') }}">SCREENPLAY
                                        GHOSTWRITING</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link service-link" style="color: #000; font-size: 22px;" href="{{ route('nonfiction') }}">NONFICTION
                                        GHOSTWRITING</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link service-link" style="color: #000; font-size: 22px;" href="{{ route('blog-writing') }}">BLOG
                                        GHOSTWRITING</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-item " href="{{ route('portfolio') }}">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-item " href="{{ route('contact') }}">Contact</a>
                        </li>
                    </ul>
                </div>
        </nav>
        <!-- ====== end navbar ====== -->

        <div class="container-fluid" style=" margin-top: 180px;">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="info" style="margin-top: 40px;">
                        <h6
                            style="text-align: left!important; color: #fff; background-color: #f4972e; width: 80%; padding: 10px; border-radius: 10px">
                            Amazon Publish Center</h6>
                        <h1 style="text-align: left!important;color: #fff">
                            Choose The Best Ghostwriting Services
                        </h1>
                        <div class="btns d-flex align-items-center mt-60">
                            <div>
                                <a href="javascript:void(Tawk_API.toggle())"
                                    class="btn rounded-pill butn-blue6 hover-blue2 sm-butn fw-bold me-3">
                                    <span>
                                        Chat With Us
                                        <i class="bi bi-chat ms-1"></i>
                                    </span>
                                </a>
                            </div>
                            <div>
                                <a style="" href="{{ route('about') }}"
                                    class="btn rounded-pill butn-blue6 hover-blue2 sm-butn fw-bold me-3">
                                    <span>
                                        About Us
                                        <i class="bi bi-arrow-right ms-1"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form class="mt-sm-2"
                        style="width: 100%; background-color: #fff; padding: 20px; border-radius: 20px;"
                        action="{{ route('clients.store') }}" method="POST">
                        @csrf
                        <h2 class="text-center my-4">
                            Book Your Consultation Right Away!
                        </h2>
                        <div class="d-flex justify-content-between my-2">
                            <div style="width: 49%">
                                <input type="text" style="padding:20px" name="name" placeholder="Your Name?"
                                    class="form-control" required id="">
                            </div>
                            <div style="width: 49%">
                                <input type="tel" style="padding:20px" name="contact"
                                    placeholder="Your Contact Number" class="form-control" required id="">
                            </div>
                        </div>
                        <div class="my-2">
                            <input type="text" style="padding:20px" name="email" placeholder="Your Email"
                                class="form-control" required id="">
                        </div>
                        <div class="d-flex justify-content-between my-2">
                            <div style="width: 49%" id="on-change">
                                <select name="region" id="select-region" required style="padding: 20px;"
                                    class="form-control">
                                    <option value="">-- Select Your Current Region --</option>

                                </select>
                            </div>
                            <div style="width: 49%">
                                <input type="text" style="padding:20px" name="profession"
                                    placeholder="Your Profession" class="form-control" required id="">
                            </div>
                        </div>
                        <div class="my-2">
                            <textarea name="message" id="" required class="form-control" style="height: 100px; resize: none"
                                placeholder="Your message"></textarea>
                        </div>
                        <div class="my-2">
                            <button class="btn text-white" style="background-color: #f4972e; width: 100%;">
                                Done
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
