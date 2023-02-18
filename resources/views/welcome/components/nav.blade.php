<nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="/#about">About</a></li>
          <li><a class="nav-link scrollto" href="/#services">Brands</a></li>
          <li><a class="nav-link   scrollto" href="/#faq">FAQ</a></li>
          <li><a class="nav-link   scrollto" href="/#why-us">Why Us</a></li>
          <!--<li><a class="nav-link scrollto" href="#team">Team</a></li>
          -->
          <li class="dropdown"><a href="#"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              @foreach( $services as $serv)
              <li><a href="/services?id={{$serv->id}}"><i class="bi bi-{{trim($serv->iconName)}} fs-4"></i>&nbsp;&nbsp;{{$serv->serviceName}}</a></li>
              @endforeach
              
              <li class="dropdown"><a href="#"><span><i class="bi bi-bucket fs-4"></i>&nbsp;&nbsp;Maintaince</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="/services?id=0"><i class="bi bi-building fs-4"></i>&nbsp;&nbsp;Appartemts</a></li>
                  <li><a href="/services?id=0"><i class="bi bi-cart fs-4"></i>&nbsp;&nbsp;Malls</a></li>
                  <li><a href="/services?id=0"><i class="bi bi-hospital fs-4"></i>&nbsp;&nbsp;Hospitals</a></li>
                </ul>
              </li>
              
            </ul>
          </li> 
        
        <li><a class="nav-link scrollto" href="/#skills">Projects</a></li>
        <li><a class="nav-link scrollto" href="/#contact">Contact</a></li>

          <!--<li><a class="getstarted scrollto" href="#about">Get Started</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->