@extends('layout.master')
@section('title')
    Open Source Community | Art Commitee
@endsection
@section('cssFile')
<link rel="stylesheet" href="{{asset('css/queries/committiee.css')}}" />
<link rel="stylesheet" href="{{asset('css/committee.css')}}" />
@endsection
@section('content')

<div class="container">
	<section class="hero flex">
		<div class="writables">
			<h1 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="0" class="committee-name">Art
				Committee</h1>
			<p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="250" class="committee-desciption">
				<strong>Let your imagination lead your way.</strong>
				We are the designers of OSC, as we design the Posters,
				Banners, T-shirt design, IDs, and Facebook
				Posts, by using open source tools like
				<strong><a href="https://bit.ly/37xnq9R" target="_blank">Gimp</a></strong>
				&
				<strong><a href="https://bit.ly/3mxije9" target="_blank">Inkscape</a></strong>.
			</p>
			<a data-aos="fade-up" data-aos-duration="1000" data-aos-delay="750" class="btn" id="hero-btn"
				href="registeration-closed.html">
				Register to art committee
				<ion-icon name="arrow-forward-outline"></ion-icon>
			</a>
		</div>
		<img class="committee-illustration" src="{{asset('assets/committe_illustrations/Art.svg')}}">
	</section>
</div>
@endsection