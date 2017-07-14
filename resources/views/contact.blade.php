<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Déraiya | Contact Us</title>
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
        @if (count($errors) > 0)
        <div class='row'>
        <div class='col-md-4 col-md-offset-4'>    
    <div class="alert alert-danger" >
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        </div>
    </div>
        </div>
@endif

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
          <section class="left-section personal3 wow fadeIn" data-wow-delay="0.3s">
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
              <a class="wow fadeIn" data-wow-delay="0.3s" href="index.html#"><img src="{{('assets/logo/Deraiya_Logo_White.png')}}" width=20%" height="20%" alt="Logo"  /></a>
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
            <div class="top-nav hidden-xs hidden-sm wow fadeInDown" data-wow-delay="0.4s">
              <ul>
                <li><a href="{{route('index')}}">Home</a></li>
            <li><a href="{{route('about')}}">About</a></li>
            <!--<li><a href="portfolio.html">Work</a></li>-->
            <li><a href="{{route('contact')}}">Contact</a></li>
              </ul>
            </div>
            <div class="contact-section">
              <div class="col-md-12">
                <h1 class="wow fadeInDown" data-wow-delay="0.5s">Contact us.</h1>
                <p class="wow fadeInDown" data-wow-delay="0.6s">
                <h3>Thank you for your interest in Déraiya. Please fill out the form below to ask a question or report a technical problem.</h3><br class="hidden-xs">
                </p>
                <div class="contact-form wow fadeInDown" data-wow-delay="0.7s">
                   <form id="contact-form" method="post" action="{{route('contact_post')}}">
                        {{ csrf_field() }}
                    <div class="messages"></div>
                    <div class="controls">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="form_name">Firstname *</label>
                            <input id="form_name" type="text" name="fname" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                            <div class="help-block with-errors"></div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="form_lastname">Lastname *</label>
                            <input id="form_lastname" type="text" name="lname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                            <div class="help-block with-errors"></div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="form_email">Email *</label>
                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                            <div class="help-block with-errors"></div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="form_phone">Phone</label>
                            <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                            <div class="help-block with-errors"></div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="form_message">Message *</label>
                            <textarea id="form_message" name="message" class="form-control" placeholder="Message for us *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                            <div class="help-block with-errors"></div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <input type="submit" class="btn btn-success btn-send" value="Send message">
                         </div>
                       </div>
                     </div>
                   </form>
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
    <!--<script type="text/javascript" src="{{('assets/js/contact.js')}}"></script>-->
    <script type="text/javascript" src="{{('assets/js/validator.js')}}"></script>
    <script type="text/javascript" src="{{('assets/js/custom.js')}}"></script>
  </body>
</html>
