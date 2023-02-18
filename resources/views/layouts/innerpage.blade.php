<!DOCTYPE html>
<html lang="en">

<head>
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
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">
        @include('welcome.components.logo')
        @include('welcome.components.nav')
    </div>

  </header><!-- End Header -->

  <main id="main">
    @yield('main')
    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg">
        @include('welcome.sections.clients')
    </section>
    <!-- End Cliens Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
        @include('welcome.sections.cta')
    </section>
    <!-- End Cta Section -->
  </main>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    @include('welcome.components.footer')
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  @include('welcome.components.scripts')
 
</body>

</html>