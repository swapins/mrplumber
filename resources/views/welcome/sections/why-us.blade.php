<div class="container-fluid" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">
            <div class="content">
              <h3>KEEP YOUR PLUMBING RUNNING AT PEAK EFFICIENCY<strong> Very Affordable!!</strong></h3>
              <p>
              At Mr Plumber, our top priority is to make sure any plumbing service, repair, or installation that you are in need of is an easy process and never becomes a headache. Our Preferred Customer Maintenance Plan is a simple and inexpensive plan to make sure your home’s plumbing is always running at its peak efficiency.
              </p>
            </div>
            <div class="accordion-list">
              <ul>
                @foreach($services->take(4) as $service)

                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>0{{$service->id}}</span> {{$service->serviceName}} <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse" data-bs-parent=".accordion-list">
                    <p class="text-justify-left">
                      {{$service->dec}}
                    </p>
                  </div>
                </li>
                @endforeach
               
              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>
      </div>