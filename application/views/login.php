<!DOCTYPE html>
<html>
<head>
<!-- link css dan js -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/login.css">
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->



</head>
<!-- body login form -->
<body id="LoginForm">
  <div class="container">
    <h1 class="form-heading"></h1>
    <div class="login-form">
      <div class="main-div">
        <div class="panel">
          <h2>Log In</h2>
          <p>Please enter your email and password</p>
        </div>
        <form id="Login" action="<?php echo site_url('main/index/success'); ?>" method="post">
          <div class="form-group">
            <input type="email" class="form-control" id="inputEmail" placeholder="Email Address" required>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="inputPassword" placeholder="Password" required>
          </div>
          <div class="forgot">
            <a href="<?php site_url('main/login'); ?>">Forgot password?</a>
          </div>
          <button type="submit" class="btn btn-primary" id="login-button">Login</button>
        </form>
      </div>
      <p class="bottom-text"></p>
    </div>
  </div>
</div>
</body>
</html>
