@extends('layout.master')
@section('title')
    Open Source Community | CCC Commitee
@endsection
@section('cssFile')
<link rel="stylesheet" href="{{asset('css/queries/committiee.css')}}" />
<link rel="stylesheet" href="{{asset('css/committee.css')}}" />
@endsection
@section('content')
<div class="container">

  <section class="hero flex">
      <div class="writables">
          <h1 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0" class="committee-name">CC
              Committee</h1>
          <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="250" class="committee-desciption">
              <strong>
                  Bring your mind up.
              </strong>
              CCC is the shortcut of content creating committee, we are the animated creativity in the
              community. CCC is the school of
              content creating in OSC, here you can learn script writing, animation, voice over, montage,
              photography and videography.
          </p>
          <a data-aos="fade-up" data-aos-duration="1000" data-aos-delay="750" class="btn" id="hero-btn"
              href="registeration-closed.html">
              Register to CCC
              <ion-icon name="arrow-forward-outline"></ion-icon>
          </a>
      </div>
      <img class="committee-illustration" src="{{asset('assets/committe_illustrations/CCC.svg')}}">
  </section>
</div>
@endsection