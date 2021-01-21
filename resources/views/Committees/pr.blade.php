@extends('layout.master')
@section('title')
    Open Source Community | PR Commitee
@endsection
@section('cssFile')
<link rel="stylesheet" href="{{asset('css/queries/committiee.css')}}" />
<link rel="stylesheet" href="{{asset('css/committee.css')}}" />
@endsection
@section('content')
<div class="container">

    <section class="hero flex">
        <div class="writables">
            <h1 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0" class="committee-name">PR
                Committee</h1>
            <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="250" class="committee-desciption">
                <strong>
                    Voice and the image of OSC.
                </strong>
                Our mission is to let the people know who we are and what we do by teaching our members Soft
                skills and we are responsible for the connection between the college and OSC.
                Also we concur with sponsers to support our work.

            </p>
            <a data-aos="fade-up" data-aos-duration="1000" data-aos-delay="750" class="btn" id="hero-btn"
                href="{{route('reg-closed')}}">
                Register to PR committee
                <ion-icon name="arrow-forward-outline"></ion-icon>
            </a>
        </div>
        <img class="committee-illustration" src="{{asset('assets/committe_illustrations/Pr.svg')}}">
    </section>
</div>
@endsection
>>>>>>> main
