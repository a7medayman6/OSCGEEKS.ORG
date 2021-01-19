@extends('layout.master')
@section('title')
    Open Source Community | Home
    @endsection
@section('cssFile')
<link rel="stylesheet"  media="screen" href="{{asset('css/Home.css')}}">
@endsection
@section('content')
    <!-- Home -->
    <div class="Home_Middle_Part">
             <div class="Home_top_part">
                 <div class="home_title ">
                     <h1> We are Open Source Community</h1>
                     <p>Our goal is to make you ready for real world Jobs & Challenges. <br> Good enough for you? Register now</p> 
                 <a href="{{route('registrationView')}}" ><button style="width:auto !important" type="button" class="btn btn-warning btn_style regiteration_btn" disabled>Regestration is closed</button></a>
  
                </div>
                 <div class="home_image ">
                     <img src="img/Img22.png"> 
                 </div>
                 <img  id="img2">
             </div>
             
             <div class="extra_description"> 
                 <h3>Our Committees</h3>
                 <p>What sets us apart from the others is our many great committees. Checkout every committee and choose your place.</p>
             </div>
        </div>
<!--Home -->     
<!-- Communities-->
<div class="cards_container">
<div class="cards" id="cards_list" >
  <!--community 1-->
<div class="card" style="width: 18rem;" >
  <img class="card-img-top" src="img/slider-home/Group 50@2x.png" alt="Card image cap">
  <div class="card-body crd_body">
    <h5 class="card-title">Art</h5>
    
    <a href="{{route('art.view')}}"><button type="button" class="btn btn-warning btn_style" >Go</button></a>
  </div>
</div> 
 <!--community 2-->
 <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/slider-home/Group 60@2x.png" alt="Card image cap">
  <div class="card-body crd_body">
    <h5 class="card-title">Linux</h5>
  
    <a href="{{route('linux.view')}}"><button type="button" class="btn btn-warning btn_style" >Go</button></a>
  </div>
</div> 
 <!--community 3-->
 <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/slider-home/Group 57@2x.png" alt="Card image cap">
  <div class="card-body crd_body">
    <h5 class="card-title">CCC</h5>

    <a href="{{route('ccc.view')}}"><button type="button" class="btn btn-warning btn_style" >Go</button></a>

  </div>
</div> 
 <!--community 4-->
 <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/slider-home/Group 58@2x.png" alt="Card image cap">
  <div class="card-body crd_body">
    <h5 class="card-title">English Heroes</h5>
    
    <a href="{{route('eh.view')}}"><button type="button" class="btn btn-warning btn_style" >Go</button></a>

  </div>
</div> 
 <!--community 5-->
 <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/slider-home/Group 59@2x.png" alt="Card image cap">
  <div class="card-body crd_body">
    <h5 class="card-title">Web</h5>
   
    <a href="{{route('web.view')}}"><button type="button" class="btn btn-warning btn_style" >Go</button></a>

  </div>
</div> 
 <!--community 6-->
 <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/slider-home/Group 54@2x.png" alt="Card image cap">
  <div class="card-body crd_body">
    <h5 class="card-title">HR</h5>
    
    <a href="{{route('hr.view')}}"><button type="button" class="btn btn-warning btn_style" >Go</button></a>
  </div>
</div> 
 <!--community 7-->
 <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/slider-home/Group 55@2x.png" alt="Card image cap">
  <div class="card-body crd_body">
    <h5 class="card-title">PR</h5>
    
    <a href="{{route('pr.view')}}"><button type="button" class="btn btn-warning btn_style" >Go</button></a>
  </div>
</div> 
 <!--community 8-->
 <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/slider-home/Group 53@2x.png" alt="Card image cap">
  <div class="card-body crd_body">
    <h5 class="card-title">LR</h5>
    
    <a href="{{route('lr.view')}}"><button type="button" class="btn btn-warning btn_style" >Go</button></a>
  </div>
</div> 
 <!--community 9-->
 <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/slider-home/Group 1@2x.png" alt="Card image cap">
  <div class="card-body crd_body">
    <h5 class="card-title">Blender</h5>
    
    <a href="{{route('blender.view')}}"><button type="button" class="btn btn-warning btn_style" >Go</button></a>
  </div>
</div> 
 <!--community 10-->
 <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/slider-home/Group 52@2x.png" alt="Card image cap">
  <div class="card-body crd_body">
    <h5 class="card-title">Game</h5>
   
    <a href="{{route('game.view')}}"><button type="button" class="btn btn-warning btn_style" >Go</button></a>
  </div>
</div> 
 <!--community 11-->
 <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="img/slider-home/Group 56@2x.png" alt="Card image cap">
  <div class="card-body crd_body">
    <h5 class="card-title">Projects</h5>
    
    <a href="{{route('projects.view')}}"><button type="button" class="btn btn-warning btn_style" >Go</button></a>
  </div>
</div> 
 <!--community 12-->
  
</div>
<div class="arrows_swap">
 <button onclick="Move_Menu_left()"><img src="img/Arrow L.png" id="left-arrow"></button>
 <button onclick="Move_Menu_right()"><img src="img/Arrow R.png" id="right-arrow"></button>
</div>
</div>
@endsection
