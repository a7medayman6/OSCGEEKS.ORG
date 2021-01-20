@extends('layout.master')
@section('title')
    Open Source Community | Game Commitee
@endsection
@section('cssFile')
<link rel="stylesheet" href="{{asset('css/queries/committiee.css')}}" />
<link rel="stylesheet" href="{{asset('css/committee.css')}}" />
@endsection
@section('content')
<div class="container">

    <section class="hero flex">
        <div class="writables">
            <h1 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0" class="committee-name">Game
                Committee</h1>
            <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="250" class="committee-desciption">
                <strong>
                    Bringing imagination to intractivity.
                </strong>
                In game committee we develop games using
                <strong>
                    <a href="https://bit.ly/34vvxC6" target="_blank">Godot</a>
                </strong>
                Open Source Game Engine using C# Or
                GDScript To make 2D and 3D
                games.
            </p>
            <a data-aos="fade-up" data-aos-duration="1000" data-aos-delay="750" class="btn" id="hero-btn"
                href="{{route('reg-closed')}}">
                Register to game committee
                <ion-icon name="arrow-forward-outline"></ion-icon>
            </a>
        </div>
        <img class="committee-illustration" src="{{asset('assets/committe_illustrations/Game.svg')}}">
    </section>
</div>
@endsection