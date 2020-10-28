@extends('layout.master')
@section('title')
    Open Source Community | About Us
    @endsection
@section('cssFile')
<link rel="stylesheet" href="style/bootstrap.min.css">
		<link rel="stylesheet" href="style/font/css/all.css">
        <link rel="stylesheet" href="style/style.css">
@endsection
@section('content')
<div class="about-us">
			<div class="container">
				<div class="row">
					<div class="part-1 col-lg-8 col-md-8 col-sm-12 col-xs-12">
						<h2>About Us</h2>
						<p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet </p>
					</div>
					<div class="part-2 col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<img src="img/About.png" alt="about-img">
					</div>
				</div>
			</div>
		</div>
		
		<!--end about-us-->
		
		
		<!--our-story-->
		
		<div class="our-story">
			<div class="container-story">
				<div class="row">
					<div class="part-3 col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<h3>Our Story</h3>
						<p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet<br> Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet<br> Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet <br> Lorem ipsum dolor sit amet  </p>
					</div>
				</div>
			</div>
		</div>
		
		<!--end our-story-->
		
		
		<!--our-values-->
		
		<div class="our-values">
			<div class="container">
				<div class="row">
					<div class="part-1 col-lg-8 col-md-8 col-sm-12 col-xs-12">
						<h2>Our Values</h2>
						<p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet </p>
					</div>
					<div class="part-2 col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<img src="img/Value.png" alt="value-img">
					</div>
				</div>
			</div>
		</div>
		
		<!--end our-values-->
		
		
		<script src="{{asset('js/jQuery.js')}}"></script>
		<script src="{{asset('js/bootstrap.min.js')}}"></script>
		<script src="{{asset('js/script.js')}}"></script>
		@endsection
	