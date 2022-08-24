<header class="style-6" style="border-bottom-left-radius: 50px; border-bottom-right-radius: 50px; margin-bottom: 50px;">
    <div class="content">
        <div class="swiper-bg-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="image-container" style="background-image: url('assets/frontend/images/bg1.jpg')"></div>
                </div>
                <div class="swiper-slide">
                    <div class="image-container" style="background-image: url('assets/frontend/images/bg2.jpg');">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="image-container" style="background-image: url('assets/frontend/images/bg3.jpg');">
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <!-- ====== start navbar ====== -->
        <nav class="navbar navbar-expand-lg navbar-light style-6" id="topnav" style="background-color: transparent">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('assets/frontend/images/logoupdate.png') }}" width="50%" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="true" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" aria-expanded="true" style="flex-grow: 0;" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" style="color: #fff" href="/">
                                HOME
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"style="color: #fff" href="{{ route('about') }}">
                                ABOUT
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" style="color: #fff" href="#" id="navbarDropdown2" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                SERVICES
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                <li><a class="dropdown-item" href="{{ route('book-writing') }}">Book Writing</a></li>
                                <li><a class="dropdown-item" href="{{ route('book-publishing') }}">Book Publishing</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('book-marketing') }}">Book Marketing</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('book-formating') }}">Book Formating</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('video-book-trailers') }}">Video Book
                                        Trailers</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('social-media-marketing') }}">Social Media
                                        Marketing</a></li>
                                <li><a class="dropdown-item" href="{{ route('interactive-ebooks') }}">Interactive
                                        E-books</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('creative-writing') }}">Creative Writing</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('press-release-writing') }}">Press Release
                                        Writing</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('editingProofReading') }}">Editing and
                                        Proofreading</a></li>
                                <li><a class="dropdown-item" href="{{ route('bookCoverDesign') }}">Book Cover
                                        Design</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('amazon-marketing') }}">Amazon
                                        Marketing</a></li>
                                <li><a class="dropdown-item" href="{{ route('seo-writing') }}">SEO Writing</a></li>
                                <li><a class="dropdown-item" href="{{ route('audio-books') }}">Audio Books</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle"style="color: #fff" href="#" id="navbarDropdown2" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                GHOST WRITING
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                <li><a class="dropdown-item" href="{{ route('fiction') }}">FICTION</a></li>
                                <li><a class="dropdown-item" href="{{ route('beauty') }}">BEAUTY GHOSTWRTING</a></li>
                                <li><a class="dropdown-item" href="{{ route('business') }}">BUSINESS GHOSTWRTING</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('fantasy') }}">FANTASY GHOSTWRTING</a></li>
                                <li><a class="dropdown-item" href="{{ route('medical') }}">MEDICAL GHOSTWRTING</a></li>
                                <li><a class="dropdown-item" href="{{ route('screenplay') }}">SCREENPLAY
                                        GHOSTWRTING</a></li>
                                <li><a class="dropdown-item" href="{{ route('nonfiction') }}">NONFICTION
                                        GHOSTWRTING</a></li>
                                <li><a class="dropdown-item" href="{{ route('blog-writing') }}">BLOG GHOSTWRTING</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: #fff" href="{{ route('portfolio') }}">
                                PORTFOLIO
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color: #fff" href="{{ route('contact') }}">
                                CONTACT
                            </a>
                        </li>
                    </ul>
                    <div class="nav-side">
                        <div class="d-flex align-items-center">
                            @auth
                                <a href="{{ route('dashboard') }}"
                                    class="search-icon me-4 border border-2 p-2 rounded-circle">
                                    <i class="bi bi-person"></i>
                                </a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- ====== end navbar ====== -->
        <div class="container-fluid" style=" margin-top: 80px;">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="info" style="margin-top: 40px;">
                        <h6
                            style="text-align: left!important; color: #000; background-color: #fff; width: 80%; padding: 10px; border-radius: 10px">
                            Amazon Publish Center</h6>
                        <h1 style="text-align: left!important;">
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
                                <a href="{{ route('about') }}"
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
                    <form class="mt-sm-2" style="width: 100%; background-color: #fff; padding: 20px; border-radius: 20px;"
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
                            <div style="width: 49%">
                                <select name="region" required style="padding: 20px;" class="form-control"
                                    id="">
                                    <option value="">-- Select Your Current Region --</option>
                                    @foreach ($regions as $region)
                                        <option value="{{ $region->id }}">{{ $region->name }}</option>
                                    @endforeach
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
                            <button class="btn text-white" style="background-color: #f39732; width: 100%;">
                                Done
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
