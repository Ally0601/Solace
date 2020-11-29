<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <link rel="stylesheet" href="../static/css/sign-up.css">
    <link rel="stylesheet" href="../static/css/style.css">

    <link rel="icon" href="../static/img/icon1.svg" type="image/gif" sizes="16x16">
    <title>Solace | Login</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="font-size: 20px !important;">
            
      <!-- Navigation Bar Logo / Toggle Icon -->
      <a class="navbar-brand" href="../index.html"><img src="../static/img/icon1.svg" width="60" height="62" alt=""></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navigation Bar Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"><a class="nav-link" href="../index.html">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
          <li class="nav-item"><a class="nav-link" href="vision.html">Vision</a></li>
          <li class="nav-item active"><a class="nav-link disabled" href="#">Login</a></li>
        </ul>

        <!-- Navigation Search Bar -->
        <form class="form-inline my-2 my-lg-0">
          <div class="container-fluid">
            <div class="row">
              <div class="col-8"><input class="form-control mr-sm-2" type="search" placeholder="Search Genre" aria-label="Search"></div>
                <div class="col"><button class="btn btn-outline-secondary" type="submit"><i class="fa fa-search text-white"></i></button></div>
              </div>
            </div>
        </form>
      </div>

    </nav>

    <!-- LOGIN PART -->

    <div id="page-wrapper" style="margin-top: 70px; margin-bottom: 70px;">
      <div id="modal-wrapper">
        <div id="modal">
          <div id="cards">

            <div class="card" id="login">
              <div class="box">
                <div class="box-header">Welcome Back!</div>
              </div>

              <form id="login-form" action = "login-user.php" method="post">
                <label>Email
                  <a href="#" title="Forgot email?" class="tip">Forgot email?</a>
                </label>
                <input type="text" id="login-email" name="login-email" class="textbox">
                <label>Password
                  <a href="#" title="Forgot password?" class="tip">Forgot password?</a>
                </label>
                <input type="password" id="login-password" name="login-password" class="textbox">
              <button type="submit" class="proceed">Log-in to your account <i class="ion-ios-arrow-thin-right"></i></button>
              </form>
            </div>

            <div class="card" id="register">
              <div class="box">
              <div id="branding-small">
              </div>
                <div class="box-header">Register</div>
                <form id="register-form" action="register.php" method="post">
                  <label>Name</label>
                  <input type="text" id="name"
                  name="name" class="textbox">
						      <label>Email</label>
                  <input type="text" id="register-email" name="register-email" class="textbox">
                  <label>Password</label>
                  <input type="password" id="register-password" name="register-password" class="textbox">
                  <label>Confirm Password</label>
                  <input type="password" id="register-password-conf" name="register-password-conf" class="textbox">
              </div>
              <button type="submit" name= "create_acc" class="proceed" value="REGISTER">Create an account<i class="ion-ios-arrow-thin-right"></i></button>
              </form>
            </div>


          </div>

          <div id="toggle-tabs">
            <div class="tab" id="toggle-login">Sign In</div>
            <div class="tab" id="toggle-register">Register</div>
          </div>
        </div>
      </div>
    </div>
    <!-- LOGIN PART -->
    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="line"></div>
            <div class="second2">
              <a href="https://instagram.com" target="_blank"> <i class="fab fa-instagram fa-3x margin"></i></a>
              <a href="https://github.com/" target="_blank"> <i class="fab fa-github fa-3x margin"></i></a>
              <a href="https://www.linkedin.com" target="_blank"> <i class="fab fa-linkedin fa-3x margin"></i></a>
                  
            </div>
            <small class="copyright">Copyright © Solace</small>
          </div>
        </div>
      </div>
    </footer>

    <script>
      var login = $("#login");
var register = $("#register");
var button_login = $("#toggle-login");
var button_register = $("#toggle-register");
var box = $(".box");

$(function () {
	register.hide();

	button_register.click(function () {
		login.slideUp(1000);
		register.slideDown(1000);
	});
	button_login.click(function () {
		register.slideUp(1000);
		login.slideDown(1000);
	});
});
    </script>
    <script src="../static/js/script.js"></script>
</body>
</html>