<!DOCTYPE html>
<html lang="en">

<head>
  @livewireStyles
  @include('welcome.components.head')

  <!-- =======================================================
  * Template Name: Arsha - v4.10.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">
        @include('welcome.components.logo')
        @include('welcome.components.nav')
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>{{$cmsText->title}}</h1>
            @auth
              <livewire:hero />
            @endauth

          
          <h2>{{$cmsText->subTitle}}
            @auth
            <livewire:herotwo/>
            @endauth
          </h2>
          

          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            <a href="{{$cmsText->videourl}}" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
            @auth
            <livewire:heroyoutube/>
            @endauth
          </div>

        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="./welcome/assets/img/logo/bluelogo.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-- End Hero -->
  
  <main id="main">
    @yield('main')
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    @include('welcome.components.footer')
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @livewireScripts
  @include('welcome.components.scripts')

  



</body>
</html>