<div class="pop-up" id="pop-up">
    <div class="row justify-content-between" style="border: 10px solid #000; border-radius: 40px; background-color: #e6e6e6; height: 100%">
        <div class="col-lg-6 popimg">
            <img src="{{ asset('/assets/frontend/images/sale.jpeg') }}" class="pop-img">
        </div>
        <div class="col-lg-6 pop-form">
            <div>
                <a onclick="closePopUp()" class="float-end close-pop" style="font-size: 40px; margin-right: 20px">
                    &times;
                </a>
            </div>
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
            <br><br>
            <h2 class="text-center pop-h2">
                Get Ready To Become A Best Seller!
            </h2>
            <div style="width: 80%; margin: 0 auto;">
                <form  action="{{ route('clients.store') }}" method="POST">
                    @csrf
                    <div class="d-flex justify-content-between my-2">
                        <div style="width: 48%">
                            <input type="text" placeholder="Your Nice Name?" class="form-control p-2"
                                style="border: 2px solid #ddd;">
                        </div>
                        <div style="width: 48%">
                            <input type="tel" placeholder="Your Phone?" class="form-control p-2"
                                style="border: 2px solid #ddd;">
                        </div>
                    </div>
                    <div class="my-2">
                        <input type="email" placeholder="Your Email?" class="form-control p-2"
                            style="border: 2px solid #ddd;">
                    </div>
                    <div class="my-2">
                        <select name="region" required class="form-control" id="">
                            <option value="">-- Select Your Current Region --</option>
                            @foreach ($regions as $region)
                                <option value="{{ $region->id }}">{{ $region->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="my-2">
                        <input type="text" placeholder="Your Profession?" class="form-control p-2"
                            style="border: 2px solid #ddd;">
                    </div>
                    <div class="my-2">
                        <textarea name="message" id="" required class="form-control" placeholder="Your message"></textarea>
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
