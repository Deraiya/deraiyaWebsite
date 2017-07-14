<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Déraiya | Home </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Person Minimal Portfolio Template">
    <meta name="keywords" content="Person HTML Template, Person Portfolio Template">
     <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,600,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Work+Sans:600,500,400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{('assets/css/animate.css')}}"> <!-- Resource style -->
    <link rel="stylesheet" href="{{('assets/css/ionicons.min.css')}}"> <!-- Resource style -->
    <link href="{{('assets/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
  </head>
  <body>
    <div class="wrapper">
    <div class="nav-trigger visible-xs visible-sm" role="button" title="sweet hamburger">
      <div class="hamburger">
        <div class="icon"></div>
      </div>
    </div>

    <div id="nav-menu">
          <ul class="navigation">
            <li><a href="{{route('index')}}">Home</a></li>
            <li><a href="{{route('about')}}">About</a></li>
            <!--<li><a href="portfolio.html">Work</a></li>-->
            <li><a href="{{route('contact')}}">Contact</a></li>
          </ul> <!-- cd-single-item-wrapper -->

          <div class="nav-social">
            <ul>
              <li><a href="https://twitter.com/DeraiyaTweets" target="_blank"><i class="ion-social-twitter-outline"></i></a></li>
              <li><a href="https://www.linkedin.com/company/deraiya#" target="_blank"><i class="ion-social-linkedin-outline"></i></a></li>
              <li><a href="https://github.com/Deraiya" target="_blank"><i class="ion-social-github"></i></a></li>
            </ul>
          </div>
          <p class="copyright-text">© 2017 Déraiya Consultancy Services</p>
      </div>


      <!-- Homepage Main Section-->
      <div class="main">
        <section class="split-home">
          <section class="left-section personal1 wow fadeIn" data-wow-delay="0.2s">
            <div>
              <h1 class="wow fadeInDown text-center " data-wow-delay=".5s" style="font-size: 250%; padding-top: 20%">"If not us, who?
                <br>If not now, when?"
              </h1>
              <!--<h1 class="wow fadeInDown text-right" style="color: #A1A1A1; padding-top: 1%;padding-bottom: 1%;padding-right: 2%"> -John F. Kennedy</h1>-->
              <h1 class="wow fadeInDown text-center " data-wow-delay=".5s" style="font-size: 100%; padding-top: 1%">
                Déraiya
              </h1>
              <div class="nav-social wow fadeInDown hidden-lg hidden-md">
                <ul>
                  <li><a href="https://twitter.com/DeraiyaTweets" target="_blank"><i class="ion-social-twitter-outline"></i></a></li>
                  <li><a href="https://www.linkedin.com/company/deraiya#" target="_blank"><i class="ion-social-linkedin-outline"></i></a></li>
                  <li><a href="https://github.com/Deraiya" target="_blank"><i class="ion-social-github"></i></a></li>
                </ul>
              </div>

              <div class="nav-social wow fadeInDown hidden-lg hidden-md" style="padding-top: 100%">
                <ul>
                  <li><i class="ion-chevron-down" style="color: white"></i></a></li>

                </ul>
              </div>
            </div>


          </section>
          <section class="right-section">
            <div class="top-nav hidden-xs hidden-sm wow fadeIn" data-wow-delay="0.3s">
              <ul>
                <li><a href="{{route('index')}}">Home</a></li>
            <li><a href="{{route('about')}}">About</a></li>
            <!--<li><a href="portfolio.html">Work</a></li>-->
            <li><a href="{{route('contact')}}">Contact</a></li>
              </ul>
            </div>
            <div class="main-logo">
            <a class="wow fadeIn" data-wow-delay="0.3s" href="{{route('index')}}"><img src="{{('assets/logo/Deraiya_Logo.png')}}" width="50%" height="50%" alt="Logo" /></a>
            </div>
            <div class="intro">
              <div class="intro-text">
                <!--<h4 class="wow fadeInDown" data-wow-delay="0.4s">Developer based in Reykjavik</h4>-->

                <p class="wow fadeInDown" data-wow-delay="0.6s">We don’t manage companies or deals – we manage futures. Being passionate
                  <br class="visible-lg ">  about yours is why we’re in this business. You deserve to be successful.
                  <br class="visible-lg">   Take a journey with us and
                  we’ll empower your potential. </p>
                <!--<a href="portfolio.html" class="btn-contact wow fadeInDown" data-wow-delay=".6s">View Portfolio</a>-->
              </div>
            </div>
            <div class="footer-personal text-center wow fadeInDown" data-wow-delay="0.7s">
           <span class="footer-credits">© 2017 Déraiya</span>
              <div class="nav-social">
                <ul>
                  <li><a href="https://twitter.com/DeraiyaTweets" target="_blank"><i class="ion-social-twitter-outline"></i></a></li>
                  <li><a href="https://www.linkedin.com/company/deraiya#" target="_blank"><i class="ion-social-linkedin-outline"></i></a></li>
                  <li><a href="https://github.com/Deraiya" target="_blank"><i class="ion-social-github"></i></a></li>
                </ul>
              </div>
          </div>
         </section>
       </section>
      </div><!-- Main-->
    </div><!-- Wrapper -->

    <!-- Jquery and Js Plugins -->
    <script type="text/javascript" src="{{('assets/js/jquery-2.1.1.js')}}"></script>
    <script type="text/javascript" src="{{('assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{('assets/js/plugins.js')}}"></script>
    <script type="text/javascript" src="{{('assets/js/menu.js')}}"></script>
    <script type="text/javascript" src="{{('assets/js/custom.js')}}"></script>
  </body>
</html>
