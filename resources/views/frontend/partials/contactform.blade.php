<form action="{{ route('clients.store') }}" method="POST" class="form">
    @csrf
    <p class="text-center text-danger fs-12px mb-30">The field is required mark as *</p>
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group mb-20">
                <input type="text" name="name" class="form-control"
                    placeholder="Name" required>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group mb-20">
                <input type="email" name="email" class="form-control"
                    placeholder="Email Address *" required>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group mb-20">
                <input type="tel" name="contact" class="form-control"
                    placeholder="Phone Number" required>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group mb-20">
                <input type="text" name="profession" class="form-control"
                    placeholder="Your profession" required>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group mb-20">
                <select class="form-select" name="region" required>
                    <option value="">-- Select Your Current Region --</option>
                    @foreach ($regions as $region)
                        <option value="{{ $region->id }}">{{ $region->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group">
                <textarea name="message" required rows="10" class="form-control" placeholder="How can we help you?"></textarea>
            </div>
        </div>
        <div class="col-lg-12 text-center">
            <input type="submit" value="Send Your Request"
                class="btn rounded-pill blue5-3Dbutn hover-blue2 sm-butn fw-bold text-light">
        </div>
    </div>
</form>