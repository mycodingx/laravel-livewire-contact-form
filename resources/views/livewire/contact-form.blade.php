<div class="row">
    <div class="col-md-6 one">
        Laravel Livewire Contact Form
    </div>
    <div class="col-md-6 mt-auto mb-auto pl-5 pr-5">
        <h1 class="heading">Let's Get Started</h1>
        <h5 class="sub-heading">Put your information here, and we will contact you soon..!!</h5>
        @if(\Illuminate\Support\Facades\Session::has('success'))
            <div class="alert alert-success">Your message was submitted successfully..!!</div>
        @endif
        <form wire:submit.prevent="submit" class="mt-4">
            <div class="row">
                <div class="col-md-6">
                    <input type="text" class="form-control @error('firstName') is-invalid @enderror"
                           placeholder="First Name"
                           wire:model="firstName">
                    @error('firstName') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control @error('lastName') is-invalid @enderror"
                           placeholder="Last Name" wire:model="lastName">
                    @error('lastName') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <input type="number" class="form-control @error('phone') is-invalid @enderror"
                           placeholder="Phone" wire:model="phone">
                    @error('phone') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
                <div class="col-md-6">
                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                           placeholder="Email" wire:model="email">
                    @error('email') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-12">
                    <label for="message" class="font-weight-bold">Message</label>
                    <textarea wire:model="message" class="form-control @error('message') is-invalid @enderror"
                              id="message" placeholder="Type your message here..!!"
                              rows="5"></textarea>
                    @error('message') <span class="invalid-feedback">{{ $message }}</span> @enderror
                </div>
            </div>
            <button class="btn btn-primary mt-4" type="submit">Send</button>
        </form>
    </div>
</div>
