<div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3><img src="./welcome/assets/img/logo/bluelogo.png" width="200px"></h3>
            <p>
              {{$cmsText->addressText}} <br>
              INDIA, PIN<br>
              India <br><br>
              <strong>Phone:</strong> {{$cmsText->phoneNo}}<br>
              <strong>Email:</strong> {{$cmsText->email}}<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/#services">Brands</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              @foreach($services as $serv)
              <li><i class="bx bx-chevron-right"></i> <a href="/services?id={{$serv->id}}">{{$serv->serviceName}}</a></li>
              @endforeach
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Let’s connect on! We post a lot of tips and tricks to help save time with your strategy so that you can make your business. Feel free to follow me there and drop a comment to say hello!</p>
            <div class="social-links mt-3">
              <a href="{{$cmsText->twitter}}" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="{{$cmsText->facebook}}" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="{{$cmsText->instagram}}" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="{{$cmsText->linkedIn}}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>{{$cmsText->copyRight}}</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="/">Swapin vidya</a>
      </div>
    </div>