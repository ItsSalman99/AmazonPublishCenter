<header class="style-6">
    <div class="content">
        <!-- ====== start navbar ====== -->
        <nav class="navbar navbar-expand-lg navbar-light style-6">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="assets/frontend/images/newlogo.png" class="logo" alt="">
                </a>
                <div class="float-right">
                    <ul class="navbar-nav">
                        <li class="nav-item m-2 chatbtn">
                            <a href="#" class="btn mr-4 rounded-pill butn-blue6 hover-blue2 sm-butn fw-bold">
                                <span>
                                    <i class="bi bi-chat-dots me-1"></i>
                                    Let’s Chat
                                </span>
                            </a>
                        </li>
                        <li class="nav-item ml-2">
                            <a onclick="OpenCloseNav()" href="javascript:void(0)" class="hamburger-menubtn">&#9776</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="sidebar" id="sidemenu">
            <a href="javascript:void(0)" class="crossbtn" onclick="OpenCloseNav()">&#10006</a>
            <br><br><br><br>
            <hr>
            <ul>
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>

        <!-- ====== end navbar ====== -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="info">
                        <h6 style="text-align: left!important;">Amazon Publish Center</h6>
                        <h1 style="text-align: left!important;">#1 Amazon Publish Central Company in USA.</small>
                            </span></h1>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form style="background-color: #fff; padding: 20px; border-radius: 20px; margin-top: 40px;">
                        @csrf
                        <h4 class="text-center my-4">
                            Fill out your correct details to register, our experts will contact you!
                        </h4>
                        <div class="my-2">
                            <input type="text" style="padding:20px" name="name" placeholder="Your Nice Name?"
                                class="form-control" required id="">
                        </div>
                        <div class="my-2">
                            <input type="text" style="padding:20px" name="name" placeholder="Your Contact"
                                class="form-control" required id="">
                        </div>
                        <div class="my-2">
                            <input type="text" style="padding:20px" name="name" placeholder="Your Email"
                                class="form-control" required id="">
                        </div>
                        <div class="my-2">
                            <select name="region" required style="padding: 20px;" class="form-control" id="">
                                <option value="">-- Select Your Current Region --</option>
                                <option value="1">United States</option>
                            </select>
                        </div>
                        <div class="my-2">
                            <input type="text" style="padding:20px" name="profession" placeholder="Your Profession"
                                class="form-control" required id="">
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
    {{-- <img src="assets/frontend/images/header/hand_megaphone.png" alt="" class="hand-mega slide_up_down">
    <img src="assets/frontend/images/header/target_3d.png" alt="" class="target-3d rotate-center">
    <img src="assets/frontend/images/header/head6_rating.png" alt="" class="head6-rating scale_up_down">
    <img src="assets/frontend/images/header/header5_linechart.png" alt=""
        class="head6-charts scale_up_down">
    <img src="assets/frontend/images/header/rocket.png" alt="" class="head6-rocket"> --}}
</header>
