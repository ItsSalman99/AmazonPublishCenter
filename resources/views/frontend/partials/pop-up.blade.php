<div class="pop-up" id="pop-up">
    <div class="row"
        style="border: 10px solid #000; border-radius: 40px; background-color: #e6e6e6; height: 100%">
        <div class="col-lg-6 popimg">
            <a onclick="closePopUp()" class="float-end close-pop" style="font-size: 40px; margin-right: 20px">
                &times;
            </a>
        </div>
        <div class="col-lg-6 pop-form">
            <div id="the-final-countdown">
                <p style="font-size: 20px">Time Left</p>
                <div class="d-flex justify-content-center mt-4">
                    <div>
                        <span id="hours"></span>
                    </div>
                    <div>
                        <span id="mins"></span>
                    </div>
                    <div>
                        <span id="secs"></span>
                    </div>
                </div>
            </div>
            <h2 class="text-center pop-h2">
                Get Ready To Become A Best Seller!
            </h2>
            <div style="width: 80%; margin: 0 auto;">
                <form action="{{ route('clients.store') }}" method="POST">
                    @csrf
                    <div class="d-flex justify-content-between my-2">
                        <div style="width: 48%">
                            <input type="text" placeholder="Your Nice Name?" class="form-control p-2"
                                style="border: 2px solid #ddd;" required>
                        </div>
                        <div style="width: 48%">
                            <input type="tel" placeholder="Your Phone?" class="form-control p-2"
                                style="border: 2px solid #ddd;" required>
                        </div>
                    </div>
                    <div class="my-2">
                        <input type="email" placeholder="Your Email?" class="form-control p-2"
                            style="border: 2px solid #ddd;" required>
                    </div>
                    <div class="my-2" id="on-change">
                        <select name="region" id="select-region" required style="padding: 20px;" class="form-control">
                            <option value="">-- Select Your Current Region --</option>
                            <option value="1">Canada</option>
                            <option value="2">Australia</option>
                            <option value="3">United States (US)</option>
                            <option value="4">United Kingdom (UK)</option>
                        </select>
                    </div>
                    <div class="my-2">
                        <input type="text" placeholder="Your Profession?" class="form-control p-2"
                            style="border: 2px solid #ddd;" required>
                    </div>
                    <div class="my-2">
                        <textarea name="message" id="" required class="form-control" placeholder="Your message" required></textarea>
                    </div>
                    <div class="my-2">
                        <button class="btn w-100 text-white" style="background-color: #f39732; width: 100%;">
                            Send
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
