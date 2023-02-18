@extends('layouts.innerpage')
@section('main')
<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <ol>
      <li><a href="index.html">Home</a></li>
      <li>{{$service->serviceName}}</li>
    </ol>
  </div>
</section>
<!-- End Breadcrumbs -->

<section class="services section">
<div class="container" data-aos="fade-up">

<div class="section-title">
  <h2>{{$service->serviceName}}</h2>
  <p>{{$service->dec}}</p>
</div>

  <div class="row">
      <div class="col-md-6 col-sm-12 text-center">
        <img src="https://picsum.photos/300/300">
      </div>
  </div>
</div>
</section>

@endsection