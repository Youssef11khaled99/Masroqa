<?php 
  include("UserAccount.php");
  $Useraccount = new UserAccount;
  $errors = $Useraccount->signup();
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="../css/styles.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create an account</title>
</head>
<body>
    <div class="cont">
        <div class="signup-panel">
          <form class="signup" action="signup.php" method="post">
            <div class="signup__check"></div>
            <div class="signup__form">
              <div class="signup__row">
                <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
                  <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
                </svg>
                <input type="text" class="signup__input" id="name"  name="username" placeholder="Username" required />
              </div>
              <div class="signup__row">
                <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
                  <path d="M18.291,3.026c0.002-0.15-0.053-0.301-0.167-0.415c-0.122-0.122-0.286-0.172-0.444-0.161H1.196         c-0.16-0.011-0.322,0.039-0.444,0.161C0.637,2.725,0.583,2.875,0.585,3.026c0,0.003-0.002,0.006-0.002,0.009v14.032         c0,0.322,0.262,0.584,0.585,0.584h17.54c0.322,0,0.584-0.262,0.584-0.584V3.035C19.292,3.032,19.291,3.029,19.291,3.026z          M17.147,3.619l-7.21,6.251L2.728,3.619"></path>
                </svg>
                <input type="text" class="signup__input" id="mail" name="email"placeholder="Email address" required />
              </div>
              <div class="signup__row">
                <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
                  <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
                </svg>
                <input type="password" class="signup__input" id="pass" name="password_1" placeholder="Password" required />
              </div>
              <div class="signup__row">
                <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
                  <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
                </svg>
                <input type="password" class="signup__input" id="confirm_pass" name="password_2" placeholder="Confirm Password" required />
              </div>
              <?php include('errors.php'); ?>
              <button type="submit" class="signup__submit" name="reg_user">Create account</button>
              <p class="login__signup">already have an account? &nbsp;<a href="../html/login.html">login</a></p>
            </div>
          </form>
      <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="../js/scripts.js"></script>
</body>
</html>