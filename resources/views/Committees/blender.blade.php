@extends('layout.master')
@section('title')
    Open Source Community | Blender Commitee
@endsection
@section('cssFile')
<link rel="stylesheet" href="{{asset('css/queries/committiee.css')}}" />
<link rel="stylesheet" href="{{asset('css/committee.css')}}" />
@endsection
@section('content')
<div class="container">
    <section class="hero flex">
        <div class="writables">
            <h1 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0" class="committee-name">Blender
                Committee</h1>
            <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="250" class="committee-desciption">
                <strong>
                    Wholesome 3D creations.
                </strong>
                We use <br>
                <strong>
                    <a href="https://bit.ly/3pfrbah" target="_blank">Blender</a>
                </strong>
                (open-source 3D computer graphics software)
                to make artworks. We are looking forward to developing our
                skills on blender and create more challenging artworks.
            </p>
            <a data-aos="fade-up" data-aos-duration="1000" data-aos-delay="750" class="btn" id="hero-btn"
                href="registeration-closed.html">
                Register to Blender committee
                <ion-icon name="arrow-forward-outline"></ion-icon>
            </a>
        </div>
        <img class="committee-illustration" src="{{asset('assets/committe_illustrations/Blender.svg')}}">
    </section>
</div>
@endsection

