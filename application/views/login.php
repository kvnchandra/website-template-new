<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/login.css">

</head>
<!-- body login form -->
<body id="LoginForm">
  <div class="container">
    <h1 class="form-heading"></h1>
    <div class="login-form">
      <div class="main-div">
        <div class="panel">
          <h2>Log In</h2>
          <p>Please enter your username and password</p>
        </div>
        <form id="Login" action="<?php echo site_url('main/index/success'); ?>" method="post">
          <div class="form-group">
            <input type="text" class="form-control" id="inputEmail" name="username" placeholder="Username" required>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password" required>
          </div>
          <div class="forgot">
            <a href="<?php echo site_url('main/login'); ?>">Forgot password?</a> <br><br>
            <a href="<?php echo site_url('main/signup'); ?>">Dont have an account?</a>
          </div>
          <button type="submit" class="btn btn-primary" id="login-button">Login</button>
        </form>
          <br><br>
          <p style="color: red;"><?php echo $message; ?></p>
      </div>
    </div>
  </div>
</div>
</body>
</html>
