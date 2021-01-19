@extends('layout.master')
@section('title')
    Open Source Community | Projects Commitee
    @endsection
    @section('cssFile')
<link rel ="stylesheet" href="{{asset('css/style.css')}}">
@endsection
@section('content')
<div class="topTopic">
<img class="c_logo" src="{{asset('committees_img/Projects.svg')}}" alt="Icon Pic">
    	<h1 class="monospace"> Project Committee</h1>
        <div>
          <p class="description">We work collaboratively to transform an idea into a well developed project. <br>
              Our objective is to gain knowledge and experience in different fields of computer science,
               while helping others to move a step forward.</p>
          
      </div>
  	</div>
      @endsection