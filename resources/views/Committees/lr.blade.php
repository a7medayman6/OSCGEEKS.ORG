@extends('layout.master')
@section('title')
    Open Source Community | LR Commitee
    @endsection
    @section('cssFile')
<link rel ="stylesheet" href="{{asset('css/style.css')}}">
@endsection
@section('content')
<div class="topTopic">
<img class="c_logo" src="{{asset('committees_img/LR.svg')}}" alt="Icon Pic">
    	<h1 class="monospace"> LR Committee</h1>
    	 <div>
          <p class="description">Share the logistics role and its importance through making hand crafts and organizing events in addition to their preparations. We are responsible for making good deals with the outer resources of OSC, printing posters and banners, and the other needed materials.</p>
         
      </div>
  	</div>
      @endsection