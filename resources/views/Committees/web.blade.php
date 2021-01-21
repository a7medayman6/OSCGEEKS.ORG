@extends('layout.master')
@section('title')
    Open Source Community | Web Committee
@endsection
@section('cssFile')
<link rel="stylesheet" href="{{asset('css/queries/committiee.css')}}"/>
<link rel="stylesheet" href="{{asset('css/committee.css')}}"/>
@endsection
@section('content')
<div class="container">
    <section class="hero flex">
        <div class="writables">
            <h1 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0" class="committee-name">Web
                Committee</h1>
            <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="250" class="committee-desciption">
                <strong>
                    A Place for Web Rockstars.
                </strong>
                In Web Committee we focus on both the front end & the back end of websites & web applications.
                We operate using modern technlogies and methodologies and that what sets us apart.
            </p>
            <a data-aos="fade-up" data-aos-duration="1000" data-aos-delay="750" class="btn" id="hero-btn"
                href="registeration-closed.html">
                Register to web committee
                <ion-icon name="arrow-forward-outline"></ion-icon>
            </a>
        </div>
        <img class="committee-illustration" src="{{asset('assets/committe_illustrations/Web.svg')}}">
    </section>
</div>
@endsection
