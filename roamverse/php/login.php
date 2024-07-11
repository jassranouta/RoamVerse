<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <link rel="icon" type="image/png" href="../images/alps_favicon.png">
  <meta name="description" content="Log into the website">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../assets/css/login.css">
  <!-- google fonts api -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@300&family=Montserrat&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>

<body>
  <?php
  require_once "functions.php";
  ?>  
  <!-- background images -->
  <img src="https://images.pexels.com/photos/998641/pexels-photo-998641.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" id="backgroundVideo">
  <img src="https://images.pexels.com/photos/1624496/pexels-photo-1624496.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt="Mobile-Imange" id="backgroundImage">

  <!-- title of website -->
  <div class="Site-Title"><a href="../index.html" class="Text">RoamVerse</a></div>

  <?php
  dbConnect();

  if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $userquery = "SELECT * FROM users WHERE username = '$username'";
    $userres = $conn->query($userquery);

    if (!$userres->num_rows) {
  ?>
      <p style='color:crimson;'>User does not exist.</p>
      <?php
    } else {
      $userpass = $userres->fetch_assoc();
      $db_pass = $userpass['password'];
      $pass_decode = password_verify($password, $db_pass);

      if ($pass_decode) {
        $_SESSION['name'] = $userpass['name'];
        $_SESSION['username'] = $username;
        $_SESSION['post-flag'] = 1;
        $_SESSION['prof-flag'] = 1;
        $_SESSION['userid'] = $userpass['user_id'];
      ?>
        <script>
          location.replace("homepage.php");
        </script>

  <?php

      } else {
        echo "Password Incorrect";
      }
    }
  }
  ?>

  <!-- login form -->
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="login-form">
    <div class="login-box">
      <h1>Login</h1>
      <div class="textbox">
        <i class="fas fa-user"></i>
        <input type="text" placeholder="Username" name="username" id="username" required>
      </div>
      <div class="textbox">
        <i class="fas fa-key"></i>
        <input type="password" placeholder="Password" name="password" id="password" required>
      </div>
      <!-- <div class="forgot-password">
        <a href="#">Forgot Password?</a>
      </div> -->

      <input class="btn" type="submit" value="Sign In" name="login">
      <hr>
      <div class="Acc">
        Don't have an account?
        <a href="signup.php">Create one!</a>
      </div>
    </div>
  </form>

</body>

</html>