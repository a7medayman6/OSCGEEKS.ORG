@extends('layout.master')
@section('title')
    Open Source Community | Linux Commitee
    @endsection
    @section('cssFile')
<link rel ="stylesheet" href="{{asset('css/style.css')}}">
@endsection
@section('content')
<div class="topTopic">
<img class="c_logo" src="{{asset('committees_img/Linux.svg')}}" alt="Icon Pic">
    	<h1 class="monospace"> Linux Committee</h1>
      <div>
          <p class="description"><strong>A place for all linux enthusiasts.</strong><br> 

We are interested in Linux, System administration, and Cyber security. We have study groups for each field.
We are looking forward to establish a wide community for security and linux in our collage.</p>
         
      </div>
  	</div>
      @endsection