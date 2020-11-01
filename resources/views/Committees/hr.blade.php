@extends('layout.master')
@section('title')
    Open Source Community | HR Commitee
    @endsection
    @section('cssFile')
<link rel ="stylesheet" href="{{asset('css/style.css')}}">
@endsection
@section('content')
<div class="topTopic">
<img class="c_logo" src="{{asset('committees_img/HR.svg')}}" alt="Icon Pic">
    	<h1 class="monospace"> HR Committee</h1>
    	 <div>
          <p class="description">Our main responsibility is interviewing people aspiring to be in our community and making sure they are fit for their roles.
<br> A HR member joins each committee to make sure each that everything is going according to plan
Teaching new comers how to do an interview, have responsibility and be excellent decision makers.</p>
          
      </div>
  	</div>
      @endsection