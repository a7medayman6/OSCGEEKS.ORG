@extends('layout.master')
@section('title')
    Open Source Community | LR Commitee
@endsection
@section('cssFile')
<link rel="stylesheet" href="{{asset('css/queries/committiee.css')}}" />
<link rel="stylesheet" href="{{asset('css/committee.css')}}" />
@endsection
@section('content')
<div class="container">

    <section class="hero flex">
        <div class="writables">
            <h1 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0" class="committee-name">LR
                Committee</h1>
            <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="250" class="committee-desciption">
                <strong>
                    Share the logistics.
                </strong>
                We Share the logistics role and its importance through making hand crafts and organizing events
                in addition to their preparations. We are responsible for making good
                deals with the outer resources of OSC, printing posters and banners,
                and the other needed materials.
            </p>
            <a data-aos="fade-up" data-aos-duration="1000" data-aos-delay="750" class="btn" id="hero-btn"
                href="{{route('reg-closed')}}">
                Register to LR committee
                <ion-icon name="arrow-forward-outline"></ion-icon>
            </a>
        </div>
        <img class="committee-illustration" src="{{asset('assets/committe_illustrations/LR.svg')}}">
    </section>
</div>
@endsection

