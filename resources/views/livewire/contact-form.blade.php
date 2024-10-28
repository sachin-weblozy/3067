<form wire:submit.prevent="submit" class="form mt-5 mt-lg-0">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group mb-30">
                <label>Full name <span class="color-orange1"> * </span></label>
                <input type="text" wire:model="name" class="form-control" placeholder="Your name">
                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group mb-30">
                <label>Email address <span class="color-orange1"> * </span></label>
                <input type="text" wire:model="email" class="form-control" placeholder="Your email address">
                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group mb-30">
                <label>Phone <span class="color-999"> (optional) </span></label>
                <input type="text" wire:model="phone" class="form-control" placeholder="Your phone number">
                @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="col-lg-12">
            <div class="form-group mb-30">
                <label>Message</label>
                <textarea rows="6" wire:model="message" placeholder="Write your message here" class="form-control"></textarea>
                @error('message') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success mt-2">{{ session('success') }}</div>
    @endif
    <button type="submit" class="butn hover-bg-orange1 text-capitalize bg-white rounded-pill mt-40">
        <span>Send Your Message <i class="fal fa-arrow-up-right ms-2"></i></span>
    </button>
</form>
