<!-- ====== start navbar ====== -->
<nav class="navbar navbar-expand-lg navbar-light style-6" id="topnav" style="background-color: transparent">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/frontend/images/logos/newlogo.png') }}" width="60%" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" style="flex-grow: 0;" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" style="color: #000;" href="/">
                        HOME
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #000;" href="{{ route('about') }}">
                        ABOUT
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="color: #000;" href="#" id="navbarDropdown2"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                        <li><a class="dropdown-item" href="{{ route('press-release-writing') }}">Press Release
                                Writing</a></li>
                        <li><a class="dropdown-item" href="{{ route('editingProofReading') }}">Editing and
                                Proofreading</a></li>
                        <li><a class="dropdown-item" href="{{ route('bookCoverDesign') }}">Book Cover Design</a></li>
                        <li><a class="dropdown-item" href="{{ route('amazon-marketing') }}">Amazon Marketing</a></li>
                        <li><a class="dropdown-item" href="{{ route('seo-writing') }}">SEO Writing</a></li>
                        <li><a class="dropdown-item" href="{{ route('audio-books') }}">Audio Books</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="color: #000;" href="#" id="navbarDropdown2"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                    <a class="nav-link" style="color: #000;" href="{{ route('portfolio') }}">
                        PORTFOLIO
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #000;" href="{{ route('contact') }}">
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
