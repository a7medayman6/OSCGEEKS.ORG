@extends('layout.master')
@section('title')
    Open Source Community | CCC Commitee
    @endsection
    @section('cssFile')
<link rel ="stylesheet" href="{{asset('css/style.css')}}">
@endsection
@section('content')
<div class="topTopic">
<img class="c_logo" src="{{asset('committees_img/CCC.svg')}}" alt="Icon Pic">
    	<h1 class="monospace"> CCC Committee</h1>
    	 <div>
          <p class="description"><strong>Bring your mind up.</strong><br>
            CCC is the shortcut of content creating committee, we are the animated creativity in the community.
            CCC is the school of content creating in OSC, here you can learn script writing, animation, voice over, montage, photography and videography.</p>
          
      </div>
  	</div>
    @endsection