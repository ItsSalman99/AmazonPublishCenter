<div class="sidebar-wrapper">
    <div>
        <div class="logo-wrapper">
            <a href="/dashboard">
                <img class="img-fluid for-light" src="{{ asset('assets/frontend/images/newlogo.png') }}" width="30%"
                    alt="">
                <img class="img-fluid for-dark" src="{{ asset('assets/frontend/images/newlogo.png') }}" alt="">
            </a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
        </div>
        <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid"
                    src="../assets/images/logo/logo-icon.png" alt=""></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="index.html"><img class="img-fluid"
                                src="../assets/images/logo/logo-icon.png" alt=""></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6 class="">{{ env('APP_NAME') }}</h6>
                            <p class="">{{ Auth::user()->name }}</p>
                        </div>
                    </li>

                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="/admin/dashboard">
                            <i data-feather="home"></i>
                            <span>Dashboard</span></a>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{ route('regions.index') }}">
                            <i data-feather="globe"></i>
                            <span>Region</span></a>
                    </li>
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="{{ route('clients.index') }}">
                            <i data-feather="users"></i>
                            <span>Clients</span></a>
                    </li>
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
