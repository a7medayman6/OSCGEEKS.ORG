@extends('layout.master')
@section('title')
    Open Source Community | HR Commitee
@endsection
@section('cssFile')
<link rel="stylesheet" href="{{asset('css/queries/committiee.css')}}" />
<link rel="stylesheet" href="{{asset('css/committee.css')}}" />
@endsection
@section('content')
<div class="container">
    <section class="hero flex">
        <div class="writables">
            <h1 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0" class="committee-name">HR
                Committee</h1>
            <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="250" class="committee-desciption">
                <strong>
                    Excellent decision makers.
                </strong>
                Our main responsibility is interviewing people aspiring
                to be in our community and making sure they are fit for their
                roles. A HR member joins each committee to make sure each
                that everything is going according to plan Teaching new comers how to
                do an interview, have responsibility and be excellent decision makers.
            </p>
            <a data-aos="fade-up" data-aos-duration="1000" data-aos-delay="750" class="btn" id="hero-btn"
                href="{{route('reg-closed')}}">
                Register to HR committee
                <ion-icon name="arrow-forward-outline"></ion-icon>
            </a>
        </div>
        <img class="committee-illustration" src="{{asset('assets/committe_illustrations/HR.svg')}}">
    </section>
</div>
@endsection
