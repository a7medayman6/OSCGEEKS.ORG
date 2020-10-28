@extends('layout.master')
@section('title')
    Open Source Community | PR Commitee
    @endsection
    @section('cssFile')
<link rel ="stylesheet" href="{{asset('css/style.css')}}">
@endsection
@section('content')
<div class="topTopic">
<img class="c_logo" src="committees_img/PR.svg" alt="Icon Pic">
    	<h1 class="monospace"> PR Committee</h1>
    	 <div>
          <p class="description">Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet 
             Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet <br>Lorem ipsum dolor sit amet</p>
          <p class="linkage monospace"> See Our Project On <a href="url"><img class="behance" src="committees_img/behance-logo.png" style="width: 68px; height:68px" alt="behance logo"></a> </p>
      </div>
  	</div>
      @endsection