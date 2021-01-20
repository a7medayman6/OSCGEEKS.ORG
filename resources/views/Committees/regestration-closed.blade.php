@extends('layout.master')
@section('title')
    Open Source Community | Regestration Closed
@endsection
@section('cssFile')
<link rel="stylesheet" href="{{asset('css/queries/registeration-closed.css')}}" />
<link rel="stylesheet" href="{{asset('css/registeration-closed.css')}}" />
@endsection
@section('content')
<div class="hero">
    <div class="container" data-aos="fade-up" data-aos-duration="1000">
        <h1 data-aos-duration="1000" data-aos-delay="0">Registeration is closed for the moment</h1>
        <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="250" id="registeration-p">Sorry, We don't
            accept registerations at the moment. Waiting for you next
            season!</p>
        <a data-aos="fade-up" data-aos-duration="1000" data-aos-delay="750" class="btn" id="hero-btn"
            href="{{route('homePage')}}">
            Go home
            <ion-icon name="arrow-back-outline"></ion-icon>
        </a>
    </div>
</div>
@endsection