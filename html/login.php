<?php include("./Backend/server.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel="stylesheet" href="css/styles.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login on Masroqa</title>
</head>
<body>
    <div class="cont">
        <div class="demo">
          <form class="login" action="login.php" method="POST">
            <div class="login__check"> </div>
            <div class="login__form">
              <!-- display validation errors here -->
              <?php include('./Backend/errors.php')?>
              <div class="login__row">
                <svg class="login__icon name svg-icon" viewBox="0 0 20 20">
                  <path d="M0,20 a10,8 0 0,1 20,0z M10,0 a4,4 0 0,1 0,8 a4,4 0 0,1 0,-8" />
                </svg>
                <input type="email" class="login__input name" placeholder="Username" name="email" id="email" required/>
              </div>
              <div class="login__row">
                <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
                  <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
                </svg>
                <input type="password" class="login__input pass" placeholder="Password" name="password" id="password" required/>
              </div>
              <input type="submit" class="login__submit" name="submit" id="submit" value="Sign in" />
              <p class="login__signup">Don't have an account? &nbsp;<a href="register.html">Sign up</a></p>
            </form>
          </div>
          



      <!--<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

      <script  src="js/scripts.js"></script>-->
</body>
</html>