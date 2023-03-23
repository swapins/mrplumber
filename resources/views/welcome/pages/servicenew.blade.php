@extends('layouts.innerpage')
@section('main')

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">Our Services</h5>
                    <h1 class="mb-0">Plumbing and Services</h1>
                </div>
                <div class="d-flex align-items-start mb-3">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        @foreach ($services as $serv )
                        @php
                            if ($serv->id == 1){
                                $active = "active";
                            }else{
                                $active = "";
                            }
                        @endphp
                        <button class="nav-link {{$active}} text-md-start" id="v-pills-{{$serv->id}}-tab" data-bs-toggle="pill" data-bs-target="#v-pills-{{$serv->id}}" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">
                            {{str_replace("PLUMBING","",strtoupper($serv->serviceName))}}
                        </button>
                        @endforeach

                      {{-- <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
                      <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>
                      <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button> --}}
                    </div>
                    <div class="tab-content" id="v-pills-tabContent">
                    @foreach ($services as $serv )
                            @php
                            if ($serv->id == 1){
                                $activelink = "active";
                            }else{
                                $activelink = "";
                            }
                            @endphp
                        <div class="tab-pane fade show {{$activelink}}" id="v-pills-{{$serv->id}}" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <h5><i class="bi bi-activity"></i>{{strtoupper($serv->serviceName)}}</h5>
                            <p style="text-align: justify;">{{$serv->dec}}</p>
                            <a type="button" class="btn btn-primary" href="\service?id={{$serv->id}}">Know More</a>
                        </div>
                    @endforeach
                    {{-- <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
                    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
                    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div> --}}
                    </div>
                </div>

{{--

                            [id] => 1
                            [serviceName] => Commercial Plumbing
                            [iconName] =>  buildings
                            [dec] => A commercial plumber is a professional who specializes in servicing plumbing
                            fixtures in a variety of different commercial business settings.
                            [enable] => 1
                            [imagePath] =>
                            [created_at] =>
                            [updated_at] =>
    --}}

                <div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Call to ask any question</h5>
                        <h4 class="text-primary mb-0">{{$cmsText->phoneNo}}</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <livewire:contact :services="$services"/>
            </div>
        </div>
    </div>
</div>



@endsection
