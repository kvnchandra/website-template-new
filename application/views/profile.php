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
            <a class="navbar-brand page-scroll" href="<?php echo site_url('main/home/'.$id); ?>">GABUS</a> </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <?php
                  echo '<li><a href="#contact">My Profile</a></li>';
                  echo '<li><a href = "'.site_url('main').'" class="page-scroll" id="login-nav">'.$log.'</a></li>';

                ?>
            </ul>
            <ul class="nav navbar-nav navbar-left">

            </ul>

        </div>
        <!-- /.navbar-collapse -->
    </div>
</nav>

<!-- Contact Section -->
<div id="contact">
    <div class="container">
        <div class="col-md-8">
            <div class="row">
                <div class="section-title">
                    <h2>My Profile</h2>
                    <p>Edit your profile below.</p>
                </div>
                <form id="contactForm" action="<?php echo site_url('main/update_user/'.$id); ?>" method="post">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <h4 style="color: #fff;">Username</h4>
                                <input type="text" id="name" class="form-control" placeholder="Username" required="required" value="<?php echo $username; ?>">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <h4 style="color: #fff;">New Password</h4>
                                <input name="new_password" type="password" id="email" class="form-control" placeholder="New Password" required="required">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <h4 style="color: #fff;">Confirm Password</h4>
                                <input name="confirm_password" type="password" class="form-control" placeholder="Confirm Password" required="required">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>

                    <div id="success"></div>
                    <input type="submit" class="btn btn-custom btn-lg" value="Edit Profile">
                </form>
            </div>
        </div>
        <div class="col-md-3 contact-info">
            <div class="contact-item" style="margin-top: 200px">
                <a href="<?php echo site_url('main/delete_user/'.$id) ?>" style="display: flex; flex-direction: row">
                    <img src="<?php echo base_url().'/img/delete.svg' ?>" style="color: #fff; max-height: 40px; display: inline;">
                    <h4 style="color: #fff;">Delete Account</h4>
                </a>
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
<!--<script type="text/javascript" src="--><?php //echo base_url(); ?><!--js/contact_me.js"></script>-->
<script type="text/javascript" src="<?php echo base_url(); ?>js/index.js"></script>
</body>
</html>