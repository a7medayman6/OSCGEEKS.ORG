<html>
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="{{asset('css/common.css')}}" />
  
      @yield('cssFile')
      
      <link rel="stylesheet" href="{{asset ('css/queries.css')}}" />
  
      <link rel="stylesheet" href="{{asset('css/svg-heading.css')}}" />
  
      <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
          

        <title>@yield('title')</title>
        
        

        <style>
          
</style>
    </head>
    <body class="light">
      <img data-aos="fade-down-right" data-aos-duration="1500" data-aos-delay="1000" id="hero-bg"
        src="{{asset('assets/hero-bg.png')}}">

    <header id="myHeader">
        <dev class="container flex">
            <a class="logo flex" href="{{route('homePage')}}">
                <img src="{{asset('assets/logo.svg')}}">
                <h3>Open Source Community</h3>
            </a>
            <nav class="main-nav" id="main-nav">
                <ul class="flex">
                    <li>
                        <a class="nav-link {{ (request()->routeIs('homePage')) ? 'active' : ' ' }}" href="{{route('homePage')}}">
                            <ion-icon class="left-icon" name="planet-outline"></ion-icon>
                            Home
                        </a>
                    </li>
                    <li>
                        <button class="nav-link flex " id="btn-committees">
                            <ion-icon class="left-icon" name="people-circle-outline"></ion-icon>
                            Committees
                            <ion-icon id="down-arrow" name="chevron-down-outline"></ion-icon>
                        </button>
                    </li>
                    <li>
                        <a class="nav-link {{ (request()->routeIs('aboutUs.view')) ? 'active' : ' ' }}" href="{{route('aboutUs.view')}}">
                            <ion-icon class="left-icon" name="information-circle-outline"></ion-icon>
                            About
                        </a>
                    </li>
                </ul>
            </nav>
            <button class="btn-hamburger" id="btn-hamburger">
                <ion-icon id="ham" name="menu"></ion-icon>
                <ion-icon id="close" name="close"></ion-icon>
            </button>
            <nav class="hamburger-nav" id="hamburger-nav">
                <ul>
                    <li>
                        <a class="nav-link {{ (request()->routeIs('homePage')) ? 'active' : ' ' }}" href="{{route('homePage')}}">
                            <ion-icon class="left-icon" name="planet-outline"></ion-icon>
                            Home
                        </a>
                    </li>
                    <li>
                        <button class="nav-link flex" id="ham-btn-committees">
                            <ion-icon class="left-icon" name="people-circle-outline"></ion-icon>
                            Committees
                            <ion-icon id="ham-down-arrow" name="chevron-forward-outline"></ion-icon>
                        </button>
                    </li>
                    <li>
                        <a class="nav-link {{ (request()->routeIs('aboutUs.view')) ? 'active' : ' ' }}" href="{{route('aboutUs.view')}}">
                            <ion-icon class="left-icon" name="information-circle-outline"></ion-icon>
                            About
                        </a>
                    </li>
                </ul>
            </nav>
        </dev>
        <div class="commmittees-ham-nav" id="commmittees-ham-nav">
            <div class="top">
                <button id="btn-back">
                    <ion-icon name="arrow-back-sharp"></ion-icon>
                    <h3>Committees</h3>
                </button>
            </div>
            <div class="bottom">
                <a class="ham-dropdown-item" href="{{route('art.view')}}">
                    <img src="{{asset('assets/icons-small/art.svg')}}" alt="art committee">
                    Art & design
                </a>
                <a class="ham-dropdown-item" href="{{route('linux.view')}}">
                    <img src="{{asset('assets/icons-small/linux.svg')}}" alt="linux committee">
                    Linux
                </a>
                <a class="ham-dropdown-item" href="{{route('web.view')}}">
                    <img src="{{asset('assets/icons-small/web.svg')}}" alt="web committee">
                    Web
                </a>
                <a class="ham-dropdown-item" href="{{route('hr.view')}}">
                    <img src="{{asset('assets/icons-small/hr.svg')}}" alt="hr committee">
                    HR
                </a>
                <a class="ham-dropdown-item" href="{{route('pr.view')}}">
                    <img src="{{asset('assets/icons-small/pr.svg')}}" alt="pr committee">
                    PR
                </a>
                <a class="ham-dropdown-item" href="{{route('lr.view')}}">
                    <img src="{{asset('assets/icons-small/lr.svg')}}" alt="lr committee">
                    LR
                </a>
                <a class="ham-dropdown-item" href="{{route('blender.view')}}">
                    <img src="{{asset('assets/icons-small/blender.svg')}}" alt="blender committee">
                    Blender
                </a>
                <a class="ham-dropdown-item" href="{{route('game.view')}}">
                    <img src="{{asset('assets/icons-small/game.svg')}}" alt="game committee">
                    Game
                </a>
                <a class="ham-dropdown-item" href="{{route('projects.view')}}">
                    <img src="{{asset('assets/icons-small/projects.svg')}}" alt="projects committee">
                    Projects
                </a>
                <a class="ham-dropdown-item" href="{{route('eh.view')}}">
                    <img src="{{asset('assets/icons-small/english.svg')}}" alt="english committee">
                    English
                </a>
                <a class="ham-dropdown-item" href="{{route('ccc.view')}}">
                    <img src="{{asset('assets/icons-small/ccc.svg')}}" alt="ccc">
                    CCC
                </a>
            </div>
        </div>
        <div class="container dropdown">
            <div class="lhs">
                <a class="dropdown-item" href="{{route('art.view')}}">
                    <img src="{{asset('assets/icons-small/art.svg')}}" alt="art committee">
                    Art & design
                </a>
                <a class="dropdown-item" href="{{route('linux.view')}}">
                    <img src="{{asset('assets/icons-small/linux.svg')}}" alt="linux committee">
                    Linux
                </a>
                <a class="dropdown-item" href="{{route('web.view')}}">
                    <img src="{{asset('assets/icons-small/web.svg')}}" alt="web committee">
                    Web
                </a>
                <a class="dropdown-item" href="{{route('hr.view')}}">
                    <img src="{{asset('assets/icons-small/hr.svg')}}" alt="hr committee">
                    HR
                </a>
                <a class="dropdown-item" href="{{route('pr.view')}}">
                    <img src="{{asset('assets/icons-small/pr.svg')}}" alt="pr committee">
                    PR
                </a>
                <a class="dropdown-item" href="{{route('lr.view')}}">
                    <img src="{{asset('assets/icons-small/lr.svg')}}" alt="lr committee">
                    LR
                </a>
            </div>
            <div class="rhs">
                <a class="dropdown-item" href="{{route('blender.view')}}">
                    <img src="{{asset('assets/icons-small/blender.svg')}}" alt="blender committee">
                    Blender
                </a>
                <a class="dropdown-item" href="{{route('game.view')}}">
                    <img src="{{asset('assets/icons-small/game.svg')}}" alt="game committee">
                    Game
                </a>
                <a class="dropdown-item" href="{{route('projects.view')}}">
                    <img src="{{asset('assets/icons-small/projects.svg')}}" alt="projects committee">
                    Projects
                </a>
                <a class="dropdown-item" href="{{route('eh.view')}}">
                    <img src="{{asset('assets/icons-small/english.svg')}}" alt="english committee">
                    English
                </a>
                <a class="dropdown-item" href="{{route('ccc.view')}}">
                    <img src="{{asset('assets/icons-small/ccc.svg')}}" alt="ccc">
                    CCC
                </a>
            </div>
        </div>
    </header>
    <main id="myMain">


@yield('content')


<div class="container bootstrap-container-modify">
  <section class="contact spacer">
      <img src="{{asset('assets/contact.svg')}}">
      <div class="form-container floating">
          <h2>Contact us</h2>
          <form action="{{ route('send') }}" method="POST">
            @csrf
              <input type="text" placeholder="email" name="email">
              <div class="name">
                  <input name="name" marker="name" type="text" placeholder="name">
                  <input name="number" marker="name" type="tel" placeholder="phone number">
              </div>
              <textarea name="message" placeholder="message"></textarea>
              <input class="btn" id="hero-btn" type="submit" value="Submit">
          </form>
      </div>
  </section>
</div>
</main>
<footer> 
<div class="container bootstrap-container-modify">
  <div class="credits">
      <a class="logo" href="index.html">
          <img src="{{asset('assets/logo.svg')}}" alt="OSC logo">
      </a>
      <div class="writables">
          <h2 id="long-name">Open Source Community</h2>
          <h2 id="initials">O.S.C</h2>
          <h4>FCIS Student Activity</h4>
          <h5 style="font-size: 0.83em;">Copyright OSC © 2021, All rights are reserved</h5>
      </div>
  </div>
  <div class="social-media">
      <h4>Follow us on social media</h4>
      <a id="twitter" href="https://bit.ly/3reqLT1" target="_blank">
          <ion-icon name="logo-twitter"></ion-icon>
      </a>
      <a id="facebook" href="https://bit.ly/3nz3xVL" target="_blank">
          <ion-icon name="logo-facebook"></ion-icon>
      </a>
      <a id="instagram" href="https://bit.ly/37zl9eE" target="_blank">
          <ion-icon name="logo-instagram"></ion-icon>
      </a>
      <a id="youtube" href="https://bit.ly/3p7RNK1" target="_blank">
          <ion-icon name="logo-youtube"></ion-icon>
      </a>
  </div>
</div>
</footer>
    
<script type="module" src="https://unpkg.com/ionicons@5.2.3/dist/ionicons/ionicons.esm.js"></script>
<script nomodule="" src="https://unpkg.com/ionicons@5.2.3/dist/ionicons/ionicons.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="{{asset('js/app.js')}}"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
@yield('scripts')
</body>
</html>
