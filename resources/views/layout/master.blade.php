<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1">
          

        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>	
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/style2.css')}}">
        <link rel="stylesheet" media="handheld, only screen and (max-device-width: 990px)" href="{{asset('css/Home_mobile.css')}}" />
        
        @yield('cssFile')
        <link rel="stylesheet"  media="screen" href="{{asset('css/Home.css')}}">
        <link rel="icon" href="{{asset('img/logo22.png')}}"> 
        <link rel="stylesheet" href="{{asset('css/footer.css')}}"/>
        <link href="{{asset('style/all.css')}}" rel="stylesheet">
        <style>
          
</style>
    </head>
    <body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light  transparent  top_navbar ">
            <div class="navbar-brand navbar_left_part"  >
                <img src="{{asset('img/logo osc@2x.png')}}" alt="OSC Logo" id="logo_at_Navbar"> 
                <img src="{{asset('img/Open Source Community.png')}}" alt="Open Source Community" id="OSC_img">

            </div>
              <div class="toggle-navbar-image"></div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon_ "> 
                <img src="{{asset('img/Rectangle 47.png')}}" class="nav_bar1">
                <img src="{{asset('img/Rectangle 47.png')}}" class="nav_bar2">
                <img src="{{asset('img/Rectangle 47.png')}}" class="nav_bar3">
              </span>
            </button>
          
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto  navbar_right_part">
                <li class="nav-item active">
                  <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Communities 
                    <i class="arrow down"></i>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <div class="dropdown_menu_part float-left">
                      <div class="dropdown_left_part float-left">
                        <a class="dropdown-item" href="{{route('art.view')}}"><img src="{{asset('img/paint-palette.png')}}" alt="Art"> Art & Desgin</a>
                        <a class="dropdown-item" href="{{route('linux.view')}}"> <img src="{{asset('img/linux.png')}}" alt="Linux"> Linux</a> 
                        <a class="dropdown-item" href="{{route('web.view')}}"><img src="{{asset('img/web-browser.png')}}" alt="Web"> Web</a>
                        <a class="dropdown-item" href="{{route('hr.view')}}"><img src="{{asset('img/Human Resource-Job Search-Magnifying Glass-Paper-Search.png')}}" alt="HR"> HR</a> 
                        <a class="dropdown-item" href="{{route('pr.view')}}"><img src="{{asset('img/public-relation.png')}}" alt="PR"> PR</a>
                        <a class="dropdown-item" href="{{route('lr.view')}}"><img src="{{asset('img/order.png')}}" alt="LR"> LR</a>
                      </div>
                      <div class="dropdown_right_part float-right">
                         <a class="dropdown-item" href="{{route('blender.view')}}"><img src="{{asset('img/Blender.png')}}" alt="Blender"> Blender</a>
                         <a class="dropdown-item" href="{{route('game.view')}}"><img src="{{asset('img/game-controller.png')}}" alt="Game"> Game</a> 
                         <a class="dropdown-item" href="{{route('projects.view')}}"><img src="{{asset('img/project-management.png')}}" alt="Projects"> Projects</a>
                        
                         <a class="dropdown-item" href="{{route('ccc.view')}}"><img src="{{asset('img/video-camera.png')}}" alt="CCC"> CCC</a>
                      </div>
                    </div>
                </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="#aboutus">About</a>
                </li>
              </ul>
            
            </div>
          </nav>
<!--  Navbar -->

<!-- Background -->
          <div class="Home_background">
            <img src="{{asset('img/BG 1.png')}}" id="img1">
            <img src="{{asset('img/Path 140.png')}}" id="img3">
            <img src="{{asset('img/Ellipse 8.png')}}" id="img4">
            <img src="{{asset('img/Ellipse 7.png')}}" id="img5">
            <img src="{{asset('img/Ellipse 9.png')}}" id="img6">
            <img src="{{asset('img/Ellipse 10.png')}}" id="img7">
          </div>
<!-- Background -->
@section('content')





<div class="info">
  <div class="img1about">
    <img id="aboutus" src="{{asset('img/About.png')}}" data-aos="fade-right" data-aos-duration="3000">
  </div>
  <div class="story" data-aos="fade-right" data-aos-duration="3000">
    <h1>Our Vision</h1>
    <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet<br>
    Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet<br>
    Lorem ipsum dolor sit amet</p>
  </div>
  <div class="story" data-aos="fade-left" data-aos-duration="3000">
    <h1>Our Mission</h1>
    <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet<br>
    Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet<br>
    Lorem ipsum dolor sit amet</p>
  </div>
</div>

 




<div class="contact" >
			<div class="container">
				<div class="row" data-aos="fade-up" data-aos-duration="3000">
					<div class="part-2 col-lg-7 col-md-7 col-sm-12 col-xs-12">
						<img src="{{asset('img/img.png')}}" alt="contact-img" style="width: 100%;">
					</div>
					<div class="part-1 col-lg-5 col-md-5 col-sm-12 col-xs-12">
						<h3 class="hhh">Contact Us</h3>
						<form>
							<input  class="form-control" type="text" placeholder="first name">
							<input  class="form-control" typt="text" placeholder="last name">
							<input  class="form-control" type="text" placeholder="E-mail">
							<textarea placeholder="Your Message..." style="height:200px"></textarea>
							</form>
							<button type="submit" class="btn btn-primary btn-md">Send</button>
					</div>
					
				</div>
			</div>
    </div>
    <div class="fotter">
      <div class="left-side">
          <img src="{{asset('img/logo22.png')}}"  alt="OSC" >
          <h1 class="fotTitle">Open Source Community</h1>
          <p class="fotDescription">FCIS Student Activity</p>
          <p class="cpy">Copyright OSC &copy 2020</p>
      </div>          
      <div class="right-side">
          <h4>Follow Up Social Media</h4>
          
          <ul>
            <li><i class="fab fa-twitter fa-1x"></i></li>
              <li><i class="fab fa-facebook-f fa-1x"></i></li>
              
              <li><i class="fab fa-instagram fa-1x"></i></li>
              <li><i class="fab fa-youtube fa-1x"></i></li>
          </ul>
      </div>
    </div>
<script type="text/javascript" src="{{asset('js/Home.js')}}"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
  AOS.init();
</script>
    </body>
</html>
