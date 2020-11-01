@extends('layout.master')
@section('title')
    Open Source Community | Blender Commitee
    @endsection
@section('cssFile')
<link rel ="stylesheet" href="{{asset('css/style.css')}}">
@endsection
@section('content')
<div class="topTopic">
<img class="c_logo" src="{{asset('committees_img/Blender.svg')}}" alt="Icon Pic">
        <h1 class="monospace">Blender Committee</h1>
        <div>
            <p class="description">we use Blender (open-source 3D computer graphics software) to make artworks.<br>
We are looking forward to developing our skills on blender and create more challenging artworks.</p>
           
        </div>
  	</div>
      @endsection