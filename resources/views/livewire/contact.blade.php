<div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
        <div class="row">
            <div class="form-group col-md-6">
                <label for="name">Your Name</label>
                <input type="text" wire:model="contact.name" class="form-control" required>
            </div>
        <div class="form-group col-md-6">
            <label for="name">Your Email</label>
            <input type="email" class="form-control" wire:model="contact.email" required>
        </div>
        </div>
        <div class="form-group">
            <label for="name">Subject</label>
            <input type="text" class="form-control" wire:model="contact.subject" required>
        </div>
        <div class="form-group">
            <label for="name">Message</label>
            <textarea class="form-control" wire:model="contact.message" rows="10" required></textarea>
        </div>
        <div class="my-3">
            <div class="loading">Loading</div>
            @error('contact.email')
            <div class="error-message">{{$message}}</div>
            @enderror
            @if (session()->has('message'))
            <div class="alert alert-success">
                Your message has been sent. Thank you!
            </div>
            @endif
        </div>
        <div class="text-center"><button type="submit" wire:click="save">Send Message</button></div>
    </form>
</div>
