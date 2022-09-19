<!-- ====== start navbar ====== -->
<nav class="navbar navbar-expand-lg navbar-light style-6" style="background-color: transparent">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/frontend/images/logo.png') }}" width="90%" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" aria-expanded="true" style="flex-grow: 0;" id="navbarSupportedContent">
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
                            <a class="nav-link service-link" style="color: #000; font-size: 22px;"
                                href="{{ route('book-writing') }}">Book Writing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link service-link" style="color: #000; font-size: 22px;"
                                href="{{ route('book-publishing') }}">Book
                                Publishing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link service-link" style="color: #000; font-size: 22px;"
                                href="{{ route('book-marketing') }}">Book
                                Marketing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link service-link" style="color: #000; font-size: 22px;"
                                href="{{ route('video-book-trailers') }}">Video
                                Book
                                Trailers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link service-link" style="color: #000; font-size: 22px;"
                                href="{{ route('social-media-marketing') }}">Social
                                Media
                                Marketing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link service-link" style="color: #000; font-size: 22px;"
                                href="{{ route('interactive-ebooks') }}">Interactive E-Book
                                Designs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link service-link" style="color: #000; font-size: 22px;"
                                href="{{ route('creative-writing') }}">Creative
                                Writing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link service-link" style="color: #000; font-size: 22px;"
                                href="{{ route('press-release-writing') }}">Press
                                Release
                                Writing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link service-link" style="color: #000; font-size: 22px;"
                                href="{{ route('editingProofReading') }}">Editing
                                and
                                ProofReading</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link service-link" style="color: #000; font-size: 22px;"
                                href="{{ route('bookCoverDesign') }}">Book Cover
                                Desing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link service-link" style="color: #000; font-size: 22px;"
                                href="{{ route('amazon-marketing') }}">Amazon
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
                            <a class="nav-link service-link" style="color: #000; font-size: 22px;"
                                href="{{ route('fiction') }}">FICTION</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link service-link" style="color: #000; font-size: 22px;"
                                href="{{ route('beauty') }}">BEAUTY
                                GHOSTWRITING</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link service-link" style="color: #000; font-size: 22px;"
                                href="{{ route('business') }}">BUSINESS
                                GHOSTWRITING</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link service-link" style="color: #000; font-size: 22px;"
                                href="{{ route('fantasy') }}">FANTASY
                                GHOSTWRITING</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link service-link" style="color: #000; font-size: 22px;"
                                href="{{ route('medical') }}">MEDICAL
                                GHOSTWRITING</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link service-link" style="color: #000; font-size: 22px;"
                                href="{{ route('screenplay') }}">SCREENPLAY
                                GHOSTWRITING</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link service-link" style="color: #000; font-size: 22px;"
                                href="{{ route('nonfiction') }}">NONFICTION
                                GHOSTWRITING</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link service-link" style="color: #000; font-size: 22px;"
                                href="{{ route('blog-writing') }}">BLOG
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
