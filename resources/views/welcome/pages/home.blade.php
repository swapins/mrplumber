@extends('layouts.welcome')
@section('hero')
    @include('welcome.sections.hero')
@endsection
@section('main')
    
    <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            @include('welcome.sections.clients')
        </section>
    <!-- End Cliens Section -->

    <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            @include('welcome.sections.about')
        </section>
    <!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us section-bg">
            @include('welcome.sections.why-us')
        </section>
    <!-- End Why Us Section -->

    <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills">
            @include('welcome.sections.skills')
        </section>
    <!-- End Skills Section -->

    <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            @include('welcome.sections.services')
        </section>
    <!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            @include('welcome.sections.cta')
        </section>
    <!-- End Cta Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq section-bg">
            @include('welcome.sections.faq')
        </section>
    <!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            @include('welcome.sections.contact')
        </section>
    <!-- End Contact Section -->
@endsection