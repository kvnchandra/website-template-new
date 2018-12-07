<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>GABUS</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="<?php echo base_url(); ?>img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="<?php echo base_url(); ?>img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="<?php echo base_url(); ?>css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800,900" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top">GABUS</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#features" class="page-scroll">Features</a></li>
        <li><a href="#about" class="page-scroll">About</a></li>
        <li><a href="#services" class="page-scroll">Services</a></li>
        <li><a href="#portfolio" class="page-scroll">Gallery</a></li>
        <li><a href="#testimonials" class="page-scroll">Testimonials</a></li>
        <li><a href="#team" class="page-scroll">Team</a></li>
        <li><a href="#contact" class="page-scroll">Contact</a></li>
        <li><a href="#" class="page-scroll"> </a></li>
        <li><a href="<?php
            if ($log == 'Log In') {
                echo site_url('main/login');
            }else{
                echo  site_url('main');
            } ?>" class="page-scroll" id="login-nav"><?php echo $log ?></a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
</nav>

<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 intro-text">
            <h1>We Are Gabus<span></span></h1>
            <p>A Creative Studio that loves to learn, collaborate and create.</p>
            <a href="#features" class="btn btn-custom btn-lg page-scroll">Learn More</a> </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Features Section -->
<div id="features" class="text-center">
  <div class="container">
    <div class="col-md-10 col-md-offset-1 section-title">
      <h2>Features</h2>
    </div>
    <div class="row">
      <div class="col-xs-6 col-md-3"> <i class="fa fa-comments-o"></i>
        <h3>Chat Platform</h3>
        <p>Chat Platform that keeps your privacy save.</p>
      </div>
      <div class="col-xs-6 col-md-3"> <i class="fa fa-bullhorn"></i>
        <h3>Event Promotion</h3>
        <p>Free Platform to promote your event or application.</p>
      </div>
      <div class="col-xs-6 col-md-3"> <i class="fa fa-group"></i>
        <h3>Community Support</h3>
        <p>Register your Community to interact with another Community.</p>
      </div>
      <div class="col-xs-6 col-md-3"> <i class="fa fa-magic"></i>
        <h3>Magic of Life</h3>
        <p>All about the way to live your life with full of magic.</p>
      </div>
    </div>
  </div>
</div>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6"> <img src="<?php echo base_url(); ?>img/developer-team-photo.jpg" class="img-responsive" alt=""> </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h2>About Us</h2>
          <p>We all come to work every day because we want to solve the biggest problem. Everyone is guessing. Publishers don’t know what apps to build, how to monetize them, or even what to price them at. Advertisers & brands don’t know where their target users are, how to reach them, or even how much they need to spend in order to do so. Investors aren’t sure which apps and genres are growing the quickest, and where users are really spending their time (and money).</p>
          <h3>Why Choose Us?</h3>
          <div class="list-style">
            <div class="col-lg-6 col-sm-6 col-xs-12">
              <ul>
                <li>Fast Workers</li>
                <li>Great Team-Work</li>
                <li>Cheap</li>
                <li>Serve the best of Us</li>
              </ul>
            </div>
            <!-- <div class="col-lg-6 col-sm-6 col-xs-12">
              <ul>
                <li>Aliquip ex ea commodo</li>
                <li>Lorem ipsum dolor</li>
                <li>Exercitation ullamco</li>
                <li>Lorem ipsum dolor</li>
              </ul>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Services Section -->
<div id="services" class="text-center">
  <div class="container">
    <div class="section-title">
      <h2>Our Services</h2>
      <p>Here are some services that we provide.</p>
    </div>
    <div class="row">
      <div class="col-md-4"> <i class="fa fa-wordpress"></i>
        <div class="service-desc">
          <h3>WordPress / Blog</h3>
          <p>WordPress or Blog creation for product marketing.</p>
        </div>
      </div>
      <div class="col-md-4"> <i class="fa fa-cart-arrow-down"></i>
        <div class="service-desc">
          <h3>E-Commerce</h3>
          <p>We design and develop e-commerce for you in a blink of eye.</p>
        </div>
      </div>
      <div class="col-md-4"> <i class="fa fa-cloud-download"></i>
        <div class="service-desc">
          <h3>Cloud Computing</h3>
          <p>We are welcoming for cloud development project.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4"> <i class="fa fa-language"></i>
        <div class="service-desc">
          <h3>Translator</h3>
          <p>Don't believe in Google Translate. We can make one for you.</p>
        </div>
      </div>
      <div class="col-md-4"> <i class="fa fa-plane"></i>
        <div class="service-desc">
          <h3>Travel</h3>
          <p>Need a travel or ticketing startup? We are your solution.</p>
        </div>
      </div>
      <div class="col-md-4"> <i class="fa fa-pie-chart"></i>
        <div class="service-desc">
          <h3>Analytics</h3>
          <p>We also can analys and serve you data processing.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Gallery Section -->
<div id="portfolio" class="text-center">
  <div class="container">
    <div class="section-title">
      <h2>Gallery</h2>
      <p>Here are some picture of our products.</p>
    </div>
    <div class="row">
      <div class="portfolio-items">
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url(); ?>img/portfolio/01-large.jpg" title="Mouse Pad" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Mouse Pad</h4>
              </div>
              <img src="<?php echo base_url(); ?>img/portfolio/01-small.jpg" class="img-responsive" alt="Mouse Pad"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url(); ?>img/portfolio/02-large.jpg" title="Instagram Alike Page" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Instagram Alike Page</h4>
              </div>
              <img src="<?php echo base_url(); ?>img/portfolio/02-small.jpg" class="img-responsive" alt="Instagram Alike Page"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url(); ?>img/portfolio/03-large.jpg" title="Black Glasses" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Black Glasses</h4>
              </div>
              <img src="<?php echo base_url(); ?>img/portfolio/03-small.jpg" class="img-responsive" alt="Black Glasses"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url(); ?>img/portfolio/04-large.jpg" title="Notebook" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Notebook</h4>
              </div>
              <img src="<?php echo base_url(); ?>img/portfolio/04-small.jpg" class="img-responsive" alt="Notebook"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url(); ?>img/portfolio/05-large.jpg" title="Glass Water" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Glass Water</h4>
              </div>
              <img src="<?php echo base_url(); ?>img/portfolio/05-small.jpg" class="img-responsive" alt="Glass Water"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url(); ?>img/portfolio/06-large.jpg" title="Artificial Hand" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Artificial Hand</h4>
              </div>
              <img src="<?php echo base_url(); ?>img/portfolio/06-small.jpg" class="img-responsive" alt="Artificial Hand"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url(); ?>img/portfolio/07-large.jpg" title="Dark Cup" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Dark Cup</h4>
              </div>
              <img src="<?php echo base_url(); ?>img/portfolio/07-small.jpg" class="img-responsive" alt="Dark Cup"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url(); ?>img/portfolio/08-large.jpg" title="Laptop" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Laptop</h4>
              </div>
              <img src="<?php echo base_url(); ?>img/portfolio/08-small.jpg" class="img-responsive" alt="Laptop"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo base_url(); ?>img/portfolio/09-large.jpg" title="Table" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Table</h4>
              </div>
              <img src="<?php echo base_url(); ?>img/portfolio/09-small.jpg" class="img-responsive" alt="Table"> </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Testimonials Section -->
<div id="testimonials">
  <div class="container">
    <div class="section-title text-center">
      <h2>What our clients say</h2>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="testimonial">
          <div class="testimonial-image"> <img src="<?php echo base_url(); ?>img/testimonials/01.jpg" alt=""> </div>
          <div class="testimonial-content">
            <p>"It's a great decision to trust our project to Gabus."</p>
            <div class="testimonial-meta"> - Elbert Unknown </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="testimonial">
          <div class="testimonial-image"> <img src="<?php echo base_url(); ?>img/testimonials/02.jpg" alt=""> </div>
          <div class="testimonial-content">
            <p>"I don't have to waste my time to find project manager cause I know Gabus."</p>
            <div class="testimonial-meta"> - Arif Nolastname </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="testimonial">
          <div class="testimonial-image"> <img src="<?php echo base_url(); ?>img/testimonials/03.jpg" alt=""> </div>
          <div class="testimonial-content">
            <p>"The first time I know Gabus from my friend. He recommend Gabus to me to help me with website project. And I happy with them. Hope to work together again."</p>
            <div class="testimonial-meta"> - John Doeforreal </div>
          </div>
        </div>
      </div>
      <!-- <div class="row"> </div>
      <div class="col-md-4">
        <div class="testimonial">
          <div class="testimonial-image"> <img src="img/testimonials/04.jpg" alt=""> </div>
          <div class="testimonial-content">
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at."</p>
            <div class="testimonial-meta"> - Johnathan Doe </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="testimonial">
          <div class="testimonial-image"> <img src="img/testimonials/05.jpg" alt=""> </div>
          <div class="testimonial-content">
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis bibendum dolor feugiat at."</p>
            <div class="testimonial-meta"> - John Doe </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="testimonial">
          <div class="testimonial-image"> <img src="img/testimonials/06.jpg" alt=""> </div>
          <div class="testimonial-content">
            <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis."</p>
            <div class="testimonial-meta"> - Johnathan Doe </div>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</div>
<!-- Team Section -->
<div id="team" class="text-center">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 section-title">
      <h2>Meet the Team</h2>
      <p>The Great behind Gabus.</p>
    </div>
    <div id="row">
      <div class="col-md-3 col-sm-6 team">
        <div class="thumbnail"> <img src="<?php echo base_url(); ?>img/team/01.jpg" alt="..." class="team-img">
          <div class="caption">
            <h4>Kevin</h4>
            <p>Director</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 team">
        <div class="thumbnail"> <img src="<?php echo base_url(); ?>img/team/02.jpg" alt="..." class="team-img">
          <div class="caption">
            <h4>Chandra</h4>
            <p>Senior Designer</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 team">
        <div class="thumbnail"> <img src="<?php echo base_url(); ?>img/team/03.jpg" alt="..." class="team-img">
          <div class="caption">
            <h4>DontHaveNameBefore</h4>
            <p>Senior Designer</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 team">
        <div class="thumbnail"> <img src="<?php echo base_url(); ?>img/team/04.jpg" alt="..." class="team-img">
          <div class="caption">
            <h4>DontHaveNameAfter</h4>
            <p>Project Manager</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Contact Section -->
<div id="contact">
  <div class="container">
    <div class="col-md-8">
      <div class="row">
        <div class="section-title">
          <h2>Get In Touch</h2>
          <p>Please fill out the form below to send us an email and we will get back to you as soon as possible.</p>
        </div>
        <form name="sentMessage" id="contactForm" novalidate>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" id="name" class="form-control" placeholder="Name" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
            <p class="help-block text-danger"></p>
          </div>
          <div id="success"></div>
          <button type="submit" class="btn btn-custom btn-lg">Send Message</button>
        </form>
      </div>
    </div>
    <div class="col-md-3 col-md-offset-1 contact-info">
      <div class="contact-item">
        <h3>Contact Info</h3>
        <p><span><i class="fa fa-map-marker"></i> Address</span>000 Abcstreet St,<br>
          Makassar, ID 90000</p>
      </div>
      <div class="contact-item">
        <p><span><i class="fa fa-phone"></i> Phone</span> +62 890 123 4567</p>
      </div>
      <div class="contact-item">
        <p><span><i class="fa fa-envelope-o"></i> Email</span> info@gabus.com</p>
      </div>
    </div>
    <div class="col-md-12">
      <div class="row">
        <div class="social">
          <ul>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Footer Section -->
<div id="footer">
  <div class="container text-center">
    <p>&copy; 2018 GABUS. Design by <a href="#" rel="nofollow">GabusComp</a></p>
  </div>
</div>

<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.1.11.1.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/SmoothScroll.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/nivo-lightbox.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/jqBootstrapValidation.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/contact_me.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>js/index.js"></script>
</body>
</html>