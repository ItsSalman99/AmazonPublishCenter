<header class="style-6">
    <div class="content main-container">
        <!-- ====== start navbar ====== -->
        <nav class="navbar navbar-expand-lg navbar-light style-6" style="background-color: transparent">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('assets/frontend/images/newlogo.png') }}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" style="flex-grow: 0;" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/">
                                HOME
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">
                                ABOUT
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                SERVICES
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                <li><a class="dropdown-item" href="{{ route('book-writing') }}">Book Writing</a></li>
                                <li><a class="dropdown-item" href="{{ route('book-publishing') }}">Book Publishing</a></li>
                                <li><a class="dropdown-item" href="{{ route('book-marketing') }}">Book Marketing</a></li>
                                <li><a class="dropdown-item" href="{{ route('book-formating') }}">Book Formating</a></li>
                                <li><a class="dropdown-item" href="{{ route('video-book-trailers') }}">Video Book Trailers</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('social-media-marketing') }}">Social Media
                                        Marketing</a></li>
                                <li><a class="dropdown-item" href="{{ route('interactive-ebooks') }}">Interactive E-books</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('creative-writing') }}">Creative Writing</a></li>
                                <li><a class="dropdown-item" href="{{ route('press-release-writing') }}">Press Release Writing</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('editingProofReading') }}">Editing and
                                        Proofreading</a></li>
                                <li><a class="dropdown-item" href="{{ route('bookCoverDesign') }}">Book Cover Design</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('amazon-marketing') }}">Amazon Marketing</a></li>
                                <li><a class="dropdown-item" href="{{ route('seo-writing') }}">SEO Writing</a></li>
                                <li><a class="dropdown-item" href="{{ route('audio-books') }}">Audio Books</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                GHOST WRITING
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                                <li><a class="dropdown-item" href="{{ route('fiction') }}">FICTION</a></li>
                                <li><a class="dropdown-item" href="{{ route('beauty') }}">BEAUTY GHOSTWRTING</a></li>
                                <li><a class="dropdown-item" href="{{ route('business') }}">BUSINESS GHOSTWRTING</a></li>
                                <li><a class="dropdown-item" href="{{ route('fantasy') }}">FANTASY GHOSTWRTING</a></li>
                                <li><a class="dropdown-item" href="{{ route('medical') }}">MEDICAL GHOSTWRTING</a></li>
                                <li><a class="dropdown-item" href="{{ route('screenplay') }}">SCREENPLAY GHOSTWRTING</a></li>
                                <li><a class="dropdown-item" href="{{ route('nonfiction') }}">NONFICTION GHOSTWRTING</a></li>
                                <li><a class="dropdown-item" href="{{ route('blog-writing') }}">BLOG GHOSTWRTING</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">
                                CONTACT
                            </a>
                        </li>
                    </ul>
                    <div class="nav-side">
                        <div class="d-flex align-items-center">
                            @auth
                                <a href="{{ route('dashboard') }}" class="search-icon me-4 border border-2 p-2 rounded-circle">
                                    <i class="bi bi-person"></i>
                                </a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- ====== end navbar ====== -->
        <div class="container" style="margin-top: 80px;">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="info">
                        <h6 style="text-align: left!important; color: #fff;">Amazon Publish Center</h6>
                        <h1 style="text-align: left!important;">
                            <span> <small>#1 Amazon</small> </span> Publish Central Company in USA.
                        </h1>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form style="background-color: #fff; padding: 20px; border-radius: 20px; margin-top: 40px;"
                        action="{{ route('clients.store') }}" method="POST">
                        @csrf
                        <h4 class="text-center my-4">
                            Fill out your correct details to register, our experts will contact you!
                        </h4>
                        <div class="my-2">
                            <input type="text" style="padding:20px" name="name" placeholder="Your Nice Name?"
                                class="form-control" required id="">
                        </div>
                        <div class="my-2">
                            <input type="tel" style="padding:20px" name="contact" placeholder="Your Contact"
                                class="form-control" required id="">
                        </div>
                        <div class="my-2">
                            <input type="text" style="padding:20px" name="email" placeholder="Your Email"
                                class="form-control" required id="">
                        </div>
                        <div class="my-2">
                            <select name="region" required style="padding: 20px;" class="form-control"
                                id="">
                                <option value="">-- Select Your Current Region --</option>
                                @foreach ($regions as $region)
                                    <option value="{{ $region->id }}">{{ $region->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="my-2">
                            <input type="text" style="padding:20px" name="profession"
                                placeholder="Your Profession" class="form-control" required id="">
                        </div>
                        <div class="my-2">
                            <textarea name="message" id="" required class="form-control" style="height: 150px; resize: none"
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
    <img src="assets/frontend/images/about/about_s6_bubbles.png" alt="" class="target-3d rotate-center">
    <br><br><br> <br><br><br><br>
    <img src="assets/frontend/images/header/head6_rating.png" alt="" class="head6-rating scale_up_down">
    <img src="assets/frontend/images/about/about_s6_bubbles.png" alt="" class="head6-charts scale_up_down">
    <img src="assets/frontend/images/about/about_s5_2_1.png" alt="" class="head6-rocket">
</header>
