@extends('layout.master')
@section('title')
    Open Source Community | Game Commitee
    @endsection
    @section('cssFile')
<link rel ="stylesheet" href="{{asset('css/style.css')}}">
@endsection
@section('content')
<div class="topTopic">
<img class="c_logo" src="{{asset('committees_img/Game.svg')}}" alt="Icon Pic">
    	<h1 class="monospace"> Game Committee</h1>
    	 <div>
          <p class="description">Is the committee which developing games using Godot Open Source Game Engine 
              with using C# Or GDScript To make 2D and 3D games.</p>
          
      </div>
  	</div>
      @endsection