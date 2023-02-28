<div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row content">
          @php
            $about = $cmsText->aboutUsText;
            $length = strlen($about)/2;
            $split = str_split($about , $length);

          @endphp
          @guest
          <div class="col-lg-6">
            <p>
              {{$split[0]}}
            </p>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              {{$split[1]}}
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
          @endguest
          @auth
          <livewire:aboutus /> 
          @endauth
        </div>

      </div>