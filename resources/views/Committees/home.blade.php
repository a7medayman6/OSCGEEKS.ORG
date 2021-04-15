@extends('layout.master')
@section('title')
    Open Source Community | Home
@endsection
@section('cssFile')

<link rel="stylesheet" href="{{asset('css/queries/app.css')}}" />
<link rel="stylesheet" href="{{asset('css/front.css')}}" />
@endsection
@section('content')

<div class="container">
  <section class="hero flex">
      <div>
          <h1 data-aos="fade-up" data-aos-duration="750" data-aos-delay="0">We are Open Source Community</h1>

          <p data-aos="fade-up" data-aos-duration="750" data-aos-delay="150">Our goal is to make you ready for
              real world Jobs &
              Challenges.
              Good enough for you? Register now</p>
          <a data-aos="fade-up" data-aos-duration="750" data-aos-delay="500" class="btn" id="hero-btn"
              href="{{route('registrationView')}}">
              Register now
              <ion-icon name="arrow-forward-outline"></ion-icon>
          </a>
      </div>
      <img class="hero-img" src="assets/hero.svg">
  </section>
</div>

<div class="committiees spacer">
  <div class="container">
      <h2>Our Committees</h2>
      <p>What sets us apart from the others is our many great committees.
          Checkout every committee <br> and choose your place.
      </p>
  </div>

  <div class="committees-container gallery js-flickity" data-flickity-options='{ "wrapAround": true }'
      id="committees-container">
      <a class="committee" href="{{route('art.view')}}">
          <div>
              <img src="assets/committe_icons/art.png" alt="Art committee">
              <p class="commmittee-name">
                  Art
                  <ion-icon name="arrow-forward-outline"></ion-icon>
              </p>
          </div>
      </a>
      <a class="committee" href="{{route('linux.view')}}">
          <div>
              <img src="assets/committe_icons/linux.png" alt="Linux committee">
              <p class="commmittee-name">
                  Linux
                  <ion-icon name="arrow-forward-outline"></ion-icon>
              </p>
          </div>
      </a>
      <a class="committee" href="{{route('eh.view')}}">
          <div>
              <img src="assets/committe_icons/english.png" alt="English Heroes committee">
              <p class="commmittee-name">
                  English Heroes
                  <ion-icon name="arrow-forward-outline"></ion-icon>
              </p>
          </div>
      </a>
      <a class="committee" href="{{route('ccc.view')}}">
          <div>
              <img src="assets/committe_icons/ccc.png" alt="CCC committee">
              <p class="commmittee-name">
                  CCC
                  <ion-icon name="arrow-forward-outline"></ion-icon>
              </p>
          </div>
      </a>
      <a class="committee" href="{{route('web.view')}}">
          <div>
              <img src="assets/committe_icons/web.png" alt="Web dev. committee">
              <p class="commmittee-name">
                  Web
                  <ion-icon name="arrow-forward-outline"></ion-icon>
              </p>
          </div>
      </a>
      <a class="committee" href="{{route('hr.view')}}">
          <div>
              <img src="assets/committe_icons/hr.png" alt="HR committee">
              <p class="commmittee-name">
                  HR
                  <ion-icon name="arrow-forward-outline"></ion-icon>
              </p>
          </div>
      </a>
      <a class="committee" href="{{route('pr.view')}}">
          <div>
              <img src="assets/committe_icons/pr.png" alt="PR committee">
              <p class="commmittee-name">
                  PR
                  <ion-icon name="arrow-forward-outline"></ion-icon>
              </p>
          </div>
      </a>
      <a class="committee" href="{{route('lr.view')}}">
          <div>
              <img src="assets/committe_icons/lr.png" alt="LR committee">
              <p class="commmittee-name">
                  LR
                  <ion-icon name="arrow-forward-outline"></ion-icon>
              </p>
          </div>
      </a>
      <a class="committee" href="{{route('blender.view')}}">
          <div>
              <img src="assets/committe_icons/blender.png" alt="Blender committee">
              <p class="commmittee-name">
                  Blender
                  <ion-icon name="arrow-forward-outline"></ion-icon>
              </p>
          </div>
      </a>
      <a class="committee" href="{{route('game.view')}}">
          <div>
              <img src="assets/committe_icons/game.png" alt="Game committee">
              <p class="commmittee-name">
                  Game
                  <ion-icon name="arrow-forward-outline"></ion-icon>
              </p>
          </div>
      </a>
      <a class="committee" href="{{route('projects.view')}}">
          <div>
              <img src="assets/committe_icons/projects.png" alt="Projects committee">
              <p class="commmittee-name">
                  Project
                  <ion-icon name="arrow-forward-outline"></ion-icon>
              </p>
          </div>
      </a>
  </div>
</div>
@endsection
