@extends('layout.master')
@section('title')
    Open Source Community | English Heroes Commitee
@endsection
@section('cssFile')
<link rel="stylesheet" href="{{asset('css/queries/committiee.css')}}" />
<link rel="stylesheet" href="{{asset('css/committee.css')}}" />
@endsection
@section('content')
<div class="container">

    <section class="hero flex">
        <div class="writables">
            <h1 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0" class="committee-name">English
                Heroes Committee</h1>
            <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="250" class="committee-desciption">
                <strong>
                    Fluency is a must nowdays.
                </strong>
                Our main goal as English heroes is to make every members feel comfortable using English in every
                day life and also in
                their professional careers, wether it is helping them make their CVs or write official Emails.
                Preparing workshops for each committee to help them develop more skills useful for them in their
                tasks and help make the
                community more fluent in English
            </p>
            <a data-aos="fade-up" data-aos-duration="1000" data-aos-delay="750" class="btn" id="hero-btn"
                href="{{route('reg-closed')}}">
                Register to English committee
                <ion-icon name="arrow-forward-outline"></ion-icon>
            </a>
        </div>
        <img class="committee-illustration" src="{{asset('assets/committe_illustrations/eh.svg')}}">
    </section>
</div>
@endsection