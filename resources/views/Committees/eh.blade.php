@extends('layout.master')
@section('title')
    Open Source Community | English Heroes Commitee
    @endsection
    @section('cssFile')
<link rel ="stylesheet" href="{{asset('css/style.css')}}">
@endsection
@section('content')
<div class="topTopic">
<img class="c_logo" src="{{asset('committees_img/eh.svg')}}" alt="Icon Pic">
    	<h1 class="monospace"> English Heroes </h1>
    	 <div>
          <p class="description">Our main goal as English heroes is to make every members feel comfortable using English in every day life
               and also in their professional careers, wether it is helping them make their CVs or write official Emails.<br>
Preparing workshops for each committee to help them develop more skills useful for them in their tasks and help make the community more fluent in English
      </div>
  	</div>
      @endsection