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

        <!-- carousel  -->
        @include('welcome.components.carousel')
        <!-- carousel End  -->
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

    <!-- Fullscreen banner -->
    <div class="modal fade" id="bannerModel" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, 0.6);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <!-- <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div> -->
                    <a href="#" type="button" data-bs-dismiss="modal">
                        <img src="/newdesigin/img/banner/Blue.png" class="mx-auto d-block"  style = "height: auto;
                        max-width: 75%;"/>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Full screen banner End -->


    <!-- Facts Start -->
    @include('welcome.components.facts')
    <!-- Facts Start -->

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

    <!-- Load banner -->
    <script type="text/javascript">
    $(window).on('load', function() {
        $('#bannerModel').modal('show');
    });
    </script>



</body>

</html>
