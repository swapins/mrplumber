@extends('layouts.innerpage')
@section('main')

<!-- Service Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Our Brands</h5>
            <h1 class="mb-0">We deal with all major brands in India and overseas</h1>
        </div>
        <div class="row g-5">
            @foreach($brands as $brand)
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="center mb-2">
                        <img src="{{$brand->logo}}" width="120px"/>
                    </div>
                    <h4 class="mb-3">{{$brand->brandName}}&trade;</h4>
                    <p class="m-0">{{$brand->curatedText}}</p>
                    <a class="btn btn-lg btn-primary rounded" href="/brand?id={{$brand->id}}">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            @endforeach
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                    <h3 class="text-white mb-3">Call Us For Quote</h3>
                    <p class="text-white mb-3">
                       we will be always avilable to answer your personalised requirements
                    </p>
                    <h2 class="text-white mb-0">{{$cmsText->phoneNo}}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->



@endsection
