@extends('layout.master')
@section('title')
    Open Source Community | Web Committee
    @endsection
    @section('cssFile')
<link rel ="stylesheet" href="{{asset('css/style.css')}}">
@endsection
@section('content')
<div class="topTopic">
    <img class="c_logo" src="{{asset('committees_img/Web.svg')}}" alt="Icon Pic">
            <h1 class="monospace"> Web Committee</h1>
            <div>
            <p class="description"><strong>A Place for Web Rockstars.</strong><br>
            In Web Committee we focus on both the front end & the back end of websites & web applications.
            We operate using modern technlogies and methodologies and that what sets us apart.</p>
            
        </div>
  	</div>
      @endsection