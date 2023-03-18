<div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
    <form wire:submit.prevent="save">
        <div class="row g-3">
            <div class="col-xl-12">
                <input type="text" class="form-control bg-light border-0" placeholder="Your Name" style="height: 55px;"
                wire:model="contact.name">
            </div>
            <div class="col-12">
                <input type="email" class="form-control bg-light border-0" 
                wire:model="contact.email" placeholder="Your Email" style="height: 55px;">
            </div>
            <div class="col-12">
                <select class="form-select bg-light border-0" style="height: 55px;" wire:model="contact.subject">
                    <option selected>Select A Service</option>
                    @foreach($services as $service)
                    <option value="{{$service->serviceName}}">{{$service->serviceName}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12">
                <textarea class="form-control bg-light border-0" rows="3" placeholder="Message" wire:model="contact.message"></textarea>
            </div>
            @if (session()->has('message'))
            <div class="alert alert-success">
                Your message has been sent. Thank you!
            </div>
            @endif

            <div class="col-12">
                <button class="btn btn-dark w-100 py-3" type="submit">Request A Quote</button>
            </div>
        </div>
    </form>
</div>
