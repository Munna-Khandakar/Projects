<!doctype html>
<html lang="en">

  <head>    
    <meta charset="utf-8">
    <meta name="description" content="Responsive Bootstrap Landing Page Template">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
        <title>খাবো</title>

    <link href="welcome/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="welcome/fonts/font-awesome.min.css" type="text/css" media="screen">
    <!-- Include roboto.css to use the Roboto web font, material.css to include the theme and ripples.css to style the ripple effect -->
    <link href="welcome/css/material.min.css" rel="stylesheet">
    <link href="welcome/css/ripples.min.css" rel="stylesheet">
    <link href="welcome/css/main.css" rel="stylesheet">
    <link href="welcome/css/responsive.css" rel="stylesheet">
    <link href="welcome/css/animate.min.css" rel="stylesheet">
  </head>
    <body>
        <div class="flex-center position-ref full-height">


    <div class="navbar navbar-invers menu-wrap">
      <div class="navbar-header text-center">
        <a class="navbar-brand logo-right" href="javascript:void(0)"><i class="mdi-image-timelapse"></i>খাবো</a>
      </div>
        <ul class="nav navbar-nav main-navigation">
          <li class="active"><a href="{{ url('/home') }}">Home</a></li>
          <li><a href="#features">Features</a></li>
          <li><a href="#why">why</a></li>
          <li><a href="#screenshot">Screenshots</a></li>
          <li><a href="#location">Location</a></li>
          <li><a href="#footer">Find us</a></li>
        </ul>
        <button class="close-button" id="close-button">Close Menu</button>
    </div>
    
    <div class="content-wrap">
     <header class="hero-area" id="home">
      
      <div class="container">
          <div class="col-md-12">

            <div class="navbar navbar-inverse sticky-navigation navbar-fixed-top" role="navigation" data-spy="affix" data-offset-top="200">
              <div class="container">
                <div class="navbar-header">
                  <a class="logo-left " href="#home"><i class="mdi-image-timelapse"></i>খাবো</a>
                </div>
                <div class="navbar-right">
                  <button class="menu-icon"  id="open-button">
                    <i class="mdi-navigation-menu"></i>
                  </button>             
                </div>
              </div>
            </div>
        </div>        
        <div class="contents text-right">
          <h1 class="wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">A Web Application for Food Management System of BUP</h1>
          <p class="wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="400ms">Prepared by the Dept of ICT</p>
          <a href="{{ route('login') }}" class="btn btn-lg btn-primary wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">Login</a>
          <a href="#features" class="btn btn-lg btn-border wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">Learn More</a>
        </div>   
    </header>

    <section id="features" class="section">
      <div class="container">
        <div class="section-header">
          <h1 class="section-title wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="100ms">App Features</h1>
          <h2 class="section-subtitle wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="400ms">Who seeks after it and wants to have it</h2>
        </div>
        <div class="row">

          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="features">
              <div class="icon">
                <i class="mdi-action-settings"></i>
              </div>
              <div class="features-text">
                <h4>Built-with laravel 7.10.2</h4>
                <p>
                  For being the ost functional and famous framework, Laravel has been used for this project.
                </p>
              </div>
             </div>
          </div>


          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
            <div class="features">
              <div class="icon">
                <i class="mdi-action-favorite"></i>
              </div>
              <div class="features-text">
                <h4>Material Design</h4>
                <p>
                  We have use Tooplet and SB admin Dashboard template for the project which gives a feel of Material Design.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
            <div class="features">
              <div class="icon">
                <i class="mdi-image-blur-linear"></i>
              </div>
              <div class="features-text">
                <h4>Clean and Refreshing</h4>
                <p>
                  This is a minimalize project decorated in an organized way which looks Clean and Refreshing. 
                </p>
              </div>
            </div>
          </div>            


          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="650ms">
            <div class="features">
              <div class="icon">
                <i class="mdi-communication-business"></i>
              </div>
              <div class="features-text">
                <h4>Export Invoice</h4>
                <p>
                  Here user can export the invoice if required which increases the functionality of this project 
               </p>
              </div>
            </div>
          </div>


          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="750ms">
            <div class="features">
              <div class="icon">
                <i class="mdi-action-done-all"></i>
              </div>
              <div class="features-text">
                <h4>Real time Update</h4>
                <p>
                  This app gives the real time update to the user to make it more effective to the user.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="850ms">
            <div class="features">
              <div class="icon">
                <i class="mdi-hardware-phonelink"></i>
              </div>
              <div class="features-text">
                <h4>Fully Responsive Layout</h4>
                <p>
                  By using Boostrap we have make it responsible so that user can use it effectively from both small devices and large devices.
                </p>
              </div>
            </div>
          </div>   
        </div>
      </div>
    </section>

    <section id="why" class="section">
      <div class="container">
        
        <div class="row">     

          <div class="col-md-6 col-sm-6 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
            <img src="welcome/img/features/img1.png" alt="">
          </div>

          <div class="col-md-6 col-sm-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="pull-left content">
              <h2>This is Why You Will <br> Love খাবো</h2>
              <p>
                Material UI Bootstrap APP implemented by Laravel. 
                Designed for students of BUP who stay in the BUP Hall.This app will help them to order and cancel their meal.This app will also help the food organizer in their overall management system.<br>
              </p>
              <ul class="list-item">
                <li><i class="mdi-action-done"></i>Manage Order</li>
                <li><i class="mdi-action-done"></i>Manage Food menu</li>
                <li><i class="mdi-action-done"></i>Manage overall cost</li>
                <li><i class="mdi-action-done"></i>Real time status update</li>
                <li><i class="mdi-action-done"></i>User friendly & Minimalize</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

     <section id="cta">
      <div class="container">
        <div class="row text-center">         
            <h3 class="title-small wow bounce" data-wow-duration="1000ms" data-wow-delay="300ms">Join Us Today and Change Yourself</h3>
             <a href="javascript:void(0)" class="btn btn-lg btn-border">Sign Up</a>
          </div>
      </div>
    </section>

    <section id="screenshot" class="section">
      <div class="container">
        <div class="section-header">
          <h1 class="section-title wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">Screenshots</h1>
          <h2 class="section-subtitle wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="400ms">Material UI Bootstrap APP and Business Template</h2>
        </div>
      </div>
      <div class="row" style="margin:0; padding:0;">
        <div class="col-md-4 col-sm-6 col-xs-12" style="margin:0; padding:0;">
          <div class="portfolio">
            <figure class="effect-julia">
              <img src="welcome/img/portfolio/img1.jpg" alt="">
              <figcaption>
                <div class="heading">
                  <h3>Screenshot 1</h3>
                  <p>
                    MATERIAL UI BOOTSTRAP APP AND BUSINESS TEMPLATE
                  </p>
                </div>
                <div class="icon">
                  <i class="mdi-content-add-circle-outline"></i>
                </div>
              </figcaption>
            </figure>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12" style="margin:0; padding:0;">
          <div class="portfolio">
            <figure class="effect-julia">
              <img src="welcome/img/portfolio/img2.jpg" alt="">
              <figcaption>
                <div class="heading">
                  <h3>Screenshot 2</h3>
                  <p>
                    MATERIAL UI BOOTSTRAP APP AND BUSINESS TEMPLATE
                  </p>
                </div>
                <div class="icon">
                  <i class="mdi-content-add-circle-outline"></i>
                </div>
              </figcaption>
            </figure>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12" style="margin:0; padding:0;">
          <div class="portfolio">
            <figure class="effect-julia">
              <img src="welcome/img/portfolio/img3.jpg" alt="">
              <figcaption>
                <div class="heading">
                  <h3>Screenshot 3</h3>
                  <p>
                    MATERIAL UI BOOTSTRAP APP AND BUSINESS TEMPLATE
                  </p>
                </div>
                <div class="icon">
                  <i class="mdi-content-add-circle-outline"></i>
                </div>
              </figcaption>
            </figure>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12" style="margin:0; padding:0;">
          <div class="portfolio">
            <figure class="effect-julia">
              <img src="welcome/img/portfolio/img4.jpg" alt="">
              <figcaption>
                <div class="heading">
                  <h3>Screenshot 4</h3>
                  <p>
                    MATERIAL UI BOOTSTRAP APP AND BUSINESS TEMPLATE
                  </p>
                </div>
                <div class="icon">
                  <i class="mdi-content-add-circle-outline"></i>
                </div>
              </figcaption>
            </figure>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12" style="margin:0; padding:0;">
          <div class="portfolio">
            <figure class="effect-julia">
              <img src="welcome/img/portfolio/img5.jpg" alt="">
              <figcaption>
                <div class="heading">
                  <h3>Screenshot 5</h3>
                  <p>
                    MATERIAL UI BOOTSTRAP APP AND BUSINESS TEMPLATE
                  </p>
                </div>
                <div class="icon">
                  <i class="mdi-content-add-circle-outline"></i>
                </div>
              </figcaption>
            </figure>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12" style="margin:0; padding:0;">
          <div class="portfolio">
            <figure class="effect-julia">
              <img src="welcome/img/portfolio/img6.jpg" alt="">
              <figcaption>
                <div class="heading">
                  <h3>Screenshot 6</h3>
                  <p>
                    MATERIAL UI BOOTSTRAP APP AND BUSINESS TEMPLATE
                  </p>
                </div>
                <div class="icon">
                  <i class="mdi-content-add-circle-outline"></i>
                </div>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </section>

  <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2 class="section-title">That's Where We Are</h2>
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <div class="info">
                  <div class="icon">
                    <i class="mdi-maps-map"></i>
                  </div>
                  <h4>Location</h4>
                  <p>BUP,Mirpur 12,Dhaka,Bangladesh</p>
                </div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="info">
                  <div class="icon">
                    <i class="mdi-content-mail"></i>
                  </div>
                  <h4>Email</h4>
                  <p>munnashisad@gmail.com</p>
                </div>
              </div>
              <div class="clear"></div>
              <div class="col-md-6 col-sm-6">
                <div class="info">
                  <div class="icon">
                    <i class="mdi-action-settings-phone"></i>
                  </div>
                  <h4>Phone Number</h4>
                  <p>+8801794807577</p>
                </div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div class="info">
                  <div class="icon">
                    <i class="mdi-action-thumb-up"></i>
                  </div>
                  <h4>Social Media</h4>
                  <p>@Khabo</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2 class="section-title">Love to Hear From You</h2>
            <!-- Form -->
            <form class="contact-form" role="form" method="post">
              <i class="mdi-action-account-box"></i>
              <input type="text" class="form-control" name="name" placeholder="Name">
            
              <i class="mdi-content-mail"></i>
              <input type="email" class="form-control" name="EMAIL" placeholder="Email">                  
                                    
              <textarea class="form-control" placeholder="Message" rows="4"></textarea>              
              <button type="submit" id="submit" class="btn btn-lg btn-primary">Send Massage</button>
              <div id="success" style="color:#3F51B5;">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>    

    <section id="location">
      <div class="map-area">      
      <div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14597.632586772717!2d90.3576472!3d23.8396364!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7655eae2540befbe!2sBangladesh%20University%20of%20Professionals!5e0!3m2!1sen!2sbd!4v1592728697712!5m2!1sen!2sbd" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

       </div>
    </div>
    </section>

    <section id="footer">
      <div class="container">
        <div class="container">
          <div class="row">
             <div class="col-md-3 col-sm-6 col-xs-12">
              <h3>Find us on</h3>
              <a class="social" href="https://www.facebook.com/munna.khandakar.14" target="_blank"><i class="fa fa-facebook"></i></a>
              <a class="social" href="https://www.linkedin.com/in/munna-khandakar-a18068125/" target="_blank"><i class="fa fa-linkedin"></i></a>
              <a class="social" href="https://github.com/Munna-Khandakar" target="_blank"><i class="fa fa-github"></i></a>
            </div>
          </div>
        </div>  
      </div>      
      <!-- Go to Top Link -->
      <a href="#home" class="btn btn-primary back-to-top">
      <i class=" mdi-hardware-keyboard-arrow-up"></i>
      </a>
    </section> 

    <section id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <p class="copyright-text">
             ©Designed and Developed by 
              <a href="https://www.facebook.com/munna.khandakar.14">
               Munna Khandakar
              </a> , 
              <a href="https://www.facebook.com/profile.php?id=100004118955266">
                Musaddik Habib
              </a>
                 &  
              <a href="https://www.facebook.com/profile.php?id=100010010146687">
                Ragib Aseb
              </a>
            </p>
          </div>
        </div>
      </div>
    </section>     
    </div>  
        

    <script src="welcome/js/jquery-2.1.4.min.js"></script>
    <script src="welcome/js/bootstrap.min.js"></script>
    <script src="welcome/js/ripples.min.js"></script>
    <script src="welcome/js/material.min.js"></script>
    <script src="welcome/js/wow.js"></script>
    <script src="welcome/js/jquery.mmenu.min.all.js"></script> 
    <script src="welcome/js/count-to.js"></script>   
    <script src="welcome/js/jquery.inview.min.js"></script>     
    <script src="welcome/js/main.js"></script>
    <script src="welcome/js/classie.js"></script>
    <script src="welcome/js/jquery.nav.js"></script>      
    <script src="welcome/js/smooth-on-scroll.js"></script>
    <script src="welcome/js/smooth-scroll.js"></script>
    

    <script>
        $(document).ready(function() {
            // This command is used to initialize some elements and make them work properly
            $.material.init();
        });
    </script>

  </body>

</html>