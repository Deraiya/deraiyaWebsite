<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Déraiya | About Us</title>
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
          <p class="copyright-text">© 2017 Déraiya</p>
      </div>

      <!-- Homepage Main Section-->
      <div class="main">
        <section class="split-home">
          <section class="left-section personal2 wow fadeIn" data-wow-delay="0.2s">
                <div class="hidden-lg"
                        style="
                padding: 8px;
                position: fixed;
                top: 14px;
                left: 20px;
                border-radius: 50px;
                z-index: 111;
                transition: all 400ms ease-in;
">
                    <a class="wow fadeIn" data-wow-delay="0.3s" href="index.html#"><img src="{{('assets/logo/Deraiya_Logo_White.png')}}" width="20%" height="20%" alt="Logo"  /></a>
                </div>

              <div class="hidden-lg hidden-md text-center" style="padding-top: 100%">


                  <div class="nav-social wow fadeInDown"style="padding-top: 60%;padding-bottom: 40%">
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
            <div class="about">
              <div class="col-md-12">
                <div class="about-intro">
                  <h4 class="wow fadeInDown" data-wow-delay="0.4s">About Us</h4>
                  <h1 class="wow fadeInDown" data-wow-delay="0.5s">Déraiya Consultancy Services is a Global IT Consulting Firm that serves leading businesses,
                      governments, non governmental organizations, and not-for-profits. We help our clients make lasting improvements to their performance and realize
                      their most important goals.
                  </h1>
                </div>
                <div class="about-details">
                      <div class="work-list text-center wow fadeInDown" data-wow-delay="0.6s">
                      <div class="col-sm-4" style="height: 150px">
                        <!--<i class="ion-ios-compose-outline"></i>--> <h3>Who We Are</h3>
                        <p>
                            We can assemble the right team with the right experience to help clients anywhere in the world.
                        </p>
                      </div>
                      <div class="col-sm-4" style="height: 150px">
                        <!--<i class="ion-ios-camera-outline"></i>--> <h3>What We Do</h3>
                        <p>
                            We work with clients at all levels of their organizations, across a wide range of industries and functions.
                        </p>
                      </div>
                      <div class="col-sm-4" style="height: 150px">
                        <!--<i class="ion-ios-bookmarks-outline"></i>--> <h3>Results</h3>
                        <p>
                          We're not interested in keeping up. We're interested in leading the way
                        </p>
                      </div>
                    </div>
                    <div class="experience wow fadeInDown" data-wow-delay="0.7s">




                      <ul>
          							<li>
          								<h3>Bitmanity </h3>
          								<p>
          									Our flagship business has been defining and helping the world
                                            to connect the people who have knowledge to the people who need it, and to empower everyone to share their knowledge for the benefit of
                                            the rest of the world.
          								</p>

          							</li>
          							<li>
          								<h3>New Venture</h3>
          								<p>
                                            We do a lot of things that seemed crazy at the time. As part of that, we also said that you could expect us to make
                                            “smaller bets in areas that might seem very speculative or even strange when compared to our current businesses ”
          								</p>

          							</li>

                      </ul>
                    </div>
                    <!--<div class="cta">-->
                      <!--<p>-->
                        <!--Want to hire me for your project?-->
                      <!--</p>-->
                      <!--<a class="btn btn-contact" href="about.html#">Hire Me</a>-->
                    <!--</div>-->
                </div>
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
