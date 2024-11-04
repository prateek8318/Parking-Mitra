<?php
include "ap/database.php";
include "ap/register.php";
$database = new database();
$db = $database->getConnection();
$register = new register($db);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>Parking Mitra</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="container">
    <div class="modal fade" id="loginModal-" tabindex="#" role="dialog" aria-labelledby="loginModal-" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <!--<div class="modal-header">
            <h4 class="modal-title" id="H2">Login/Register</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>-->
          <div class="modal-body">
            <input type="checkbox" id="flip">
            <div class="cover">
              <div class="front">
                <img src="images/fImg.jpg" alt="">
                <div class="text">
                  <span class="text-1">Parking Mitra</span>
                  <span class="text-2">Your Parking Companion</span>
                </div>
              </div>
              <div class="back">
                <img src="images/fImg.jpg" alt="">
                <div class="text">
                  <span class="text-1">Complete miles of journey <br> with one step</span>
                  <span class="text-2">Let's get started</span>
                </div>
              </div>
            </div>
            <div class="forms">
              <div class="form-content">
                <div class="login-form">
                  <div class="title">Login</div>
                  <form action="#" method="post" enctype="multipart/form-data">
                    <div class="input-boxes">
                      <div class="input-box">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Enter your email" id="email" name="email" required>
                      </div>
                      <div class="input-box">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Enter your password" id="password" name="password" required>
                      </div>
                      <div class="text"><a href="#">Forgot password?</a></div>
                      <div class="button input-box">
                        <input type="submit" value="Login" name="submit">
                      </div>
                      <div class="text sign-up-text">Don't have an account? <label for="flip">Sigup now</label></div>
                    </div>
                  </form>
                  <?php
                  $register->adminlogin();
                  ?>
                </div>
                <div class="signup-form">
                  <div class="title">Signup</div>
                  <form method="post" enctype="multipart/form-data">
                    <div class="input-boxes">
                      <div class="input-box">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Enter your name" id="name" name="name" required>
                      </div>
                      <div class="input-box">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Enter your email" id="email" name="email" required>
                      </div>
                      <div class="input-box">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Enter your password" id="password" name="password" required>
                      </div>
                      <div class="button input-box">
                        <input type="submit" value="Sign Up" name="insert">
                      </div>
                      <div class="text sign-up-text">Already have an account? <label for="flip">Login now</label></div>
                    </div>
                  </form>
                  <?php
                  $register->admininsert();
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>