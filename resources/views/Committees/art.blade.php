@extends('layout.master')
@section('title')
    Open Source Community | Art Commitee
	@endsection
@section('cssFile')
<link rel ="stylesheet" href="{{asset('css/style.css')}}">
@endsection
@section('content')
<div class="topTopic">
  		<img class="c_logo" src="{{asset('committees_img/Art.svg')}}" alt="Icon Pic">
    	<h1 class="monospace"> Art Committee</h1>
    	<div>
      		<p class="description"><strong>Let your imagination lead your way</strong>
				We are the designers of OSC, as we design the Posters, Banners, T-shirt design, IDs, and Facebook Posts, by using open source tools like <strong>Gimp</strong> & <strong>Inkscape</strong>.</p>
      		
    	</div>
  	</div>
@endsection