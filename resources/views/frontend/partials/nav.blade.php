
<!-- ====== start navbar ====== -->
<nav class="navbar navbar-expand-lg navbar-light style-6" style="background-color: transparent">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/frontend/images/newlogo.png') }}" alt="">
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
                    <a class="nav-link dropdown-toggle" style="color: #000;" href="#" id="navbarDropdown2" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        SERVICES
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                        <li><a class="dropdown-item" href="{{ route('book-writing') }}">Book Writing</a></li>
                        <li><a class="dropdown-item" href="{{ route('book-publishing') }}">Book Publishing</a></li>
                        <li><a class="dropdown-item" href="{{ route('book-marketing') }}">Book Marketing</a></li>
                        <li><a class="dropdown-item" href="#">Book Formating</a></li>
                        <li><a class="dropdown-item" href="#">Video Book Trailers</a></li>
                        <li><a class="dropdown-item" href="#">Social Media Marketing</a></li>
                        <li><a class="dropdown-item" href="#">Interactive E-books</a></li>
                        <li><a class="dropdown-item" href="#">Creative Writing</a></li>
                        <li><a class="dropdown-item" href="#">Press Release Writing</a></li>
                        <li><a class="dropdown-item" href="#">Editing and Proofreading</a></li>
                        <li><a class="dropdown-item" href="#">Book Cover Design</a></li>
                        <li><a class="dropdown-item" href="#">Amazon Marketing</a></li>
                        <li><a class="dropdown-item" href="#">SEO Writing</a></li>
                        <li><a class="dropdown-item" href="{{ route('audio-books') }}">Audio Books</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="color: #000;" href="#" id="navbarDropdown2" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        GHOST WRITING
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                        <li><a class="dropdown-item" href="#">FICTION</a></li>
                        <li><a class="dropdown-item" href="#">BEAUTY GHOSTWRTING</a></li>
                        <li><a class="dropdown-item" href="#">BEAUTY GHOSTWRTING</a></li>
                        <li><a class="dropdown-item" href="#">BUSINESS GHOSTWRTING</a></li>
                        <li><a class="dropdown-item" href="#">FANTASY GHOSTWRTING</a></li>
                        <li><a class="dropdown-item" href="#">MEDICAL GHOSTWRTING</a></li>
                        <li><a class="dropdown-item" href="#">SCREENPLAY GHOSTWRTING</a></li>
                        <li><a class="dropdown-item" href="#">NONFICTION GHOSTWRTING</a></li>
                        <li><a class="dropdown-item" href="#">BLOG GHOSTWRTING</a></li>
                    </ul>
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
                        <a href="#" class="search-icon me-4 border border-2 p-2 rounded-circle">
                            <i class="bi bi-person"></i>
                        </a>
                    @endauth
                    <a href="#" style="color: #000;" class="btn rounded-pill butn-blue6 hover-blue2 sm-butn fw-bold">
                        <span>
                            <i class="bi bi-chat-dots me-1"></i>
                            Let’s Chat!
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>