<!DOCTYPE html>
<html lang="en">

<head>
    @include('welcome.components.head')

    <!-- =======================================================
    * Template Name: SPM - v4.10.0
    * Template URL:
    * Author: swapin vidya
    * License: /license/
    ======================================================== -->
    <!-- Livewire -->
    @livewireStyles
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    @include('welcome.components.topbar')
    <!-- Topbar End -->

    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <!-- Nav -->
        @include('welcome.components.nav')
        <!-- Nav End -->
        @php
            if (request()->routeIs('about')){
                $url = "../newdesigin/img/carousel-1.jpg";
            }
            elseif (request()->routeIs('brand')){
                $url = "../newdesigin/img/bg/01.jpg";
            }
            elseif (request()->routeIs('service')){
                $url = "../newdesigin/img/bg/02.jpg";
            }
            elseif (request()->routeIs('quote')){
                $url = "../newdesigin/img/bg/quote.jpg";
            }
            else{
                $url = "../newdesigin/img/bg/contact.jpg";
            }
        @endphp
        <div class="container-fluid bg-primary py-5 bg-header"
            style="
                margin-bottom: 10px;
                background-size: cover;
                background: linear-gradient(rgba(9, 30, 62, .7), rgba(9, 30, 62, .5)),
                url({{$url}});
                background-repeat: no-repeat;
                background-size: cover;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">

                    @if (request()->routeIs('about'))
                    <h1 class="display-4 text-white animated zoomIn">About Us</h1>
                    <a href="/" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="{{ url()->previous() }}" class="h5 text-white">About</a>
                    @elseif (request()->routeIs('brand'))
                    <h1 class="display-4 text-white animated zoomIn">Brands</h1>
                    <a href="/" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="{{ url()->previous() }}" class="h5 text-white">Brand</a>

                    @elseif (request()->routeIs('service'))
                    <h1 class="display-4 text-white animated zoomIn">Services we offer</h1>
                    <a href="/" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="{{ url()->previous() }}" class="h5 text-white">Services</a>

                    @elseif (request()->routeIs('quote'))
                    <h1 class="display-4 text-white animated zoomIn">Free Quote</h1>
                    <a href="/" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="{{ url()->previous() }}" class="h5 text-white">Quote</a>

                    @else
                    <h1 class="display-4 text-white animated zoomIn">Contact</h1>
                    <a href="/" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="{{ url()->previous() }}" class="h5 text-white">Contact</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Carousel End -->

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->



    @yield('main')


    <!-- Vendor Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    @foreach($brands as $barnd)
                        <img src="{{$barnd->logo}}" alt="">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->


    <!-- Footer Start -->
    @include('welcome.components.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- Livewire -->
    @livewireScripts
    <!-- JavaScript Libraries -->
    @include('welcome.components.scripts')





</body>

</html>
