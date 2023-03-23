<nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
  <a href="/" class="navbar-brand p-0">
      <img class="nav-img" src="/welcome/assets/img/logo/mrlogo_white.png" width="75px">
      <img class="nav-img-txt" src="/welcome/assets/img/logo/mrlogo_white_txt.png" width="120px">
      <!--<h1 class="m-0"><i class="fa fa-user-tie me-2"></i>Startup</h1>-->
  </a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="fa fa-bars"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
      <div class="navbar-nav ms-auto py-0">
          <a href="/" class="nav-item nav-link active">HOME</a>
          <a href="/about" class="nav-item nav-link">ABOUT</a>
          <a href="/brand?id=0" class="nav-item nav-link">OUR BRANDS</a>
          <a href="\service?id=0" class="nav-item nav-link">SERVICES</a>
          {{-- <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Brands</a>
              <div class="dropdown-menu m-0">
                  @foreach($brands as $brand)
                  <a href="/brand?id={{$brand->id}}" class="dropdown-item">{{$brand->brandName}}</a>
                  @endforeach
              </div>
          </div> --}}
          {{-- <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
              <div class="dropdown-menu m-0">
                @foreach( $services as $serv)
                  <a href="\service?id={{$serv->id}}" class="dropdown-item">{{$serv->serviceName}}</a>
                @endforeach
              </div>
          </div> --}}
          <a href="/contact" class="nav-item nav-link">Contact</a>
      </div>
      <!-- <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton> -->

  </div>
</nav>
