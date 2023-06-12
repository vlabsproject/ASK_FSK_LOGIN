<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "Select * from details where username='$username' AND password='$password'";
    // $sql = "Select * from details where username='$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
      while($row=mysqli_fetch_assoc($result)){
        // if(password_verify($password,$row['password'])){
          $login = true;
          session_start();
          $_SESSION['loggedin'] = true;
          $_SESSION['username'] = $username;
          header("location: home.php");
        // }
        // else{
        //   $showError = "Invalid Credentials";
        // }
      }
}
    else{
      $showError = "Invalid Credentials";
  }
}
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login to VLABS</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="stylesheet" href="css/login.css"> -->
        <style>
          <?php include "css/login.css" ?>
        </style>
        
    </head>
    <body>

      
    <main>
      <div class="box">
        <div class="inner-box">
          <?php
        if($login){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your have logged in.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
        if($showError){
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Warning!</strong> '. $showError .'
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
?>
          <div class="forms-wrap">
          <form action="/loginmain/login.php" autocomplete="off" class="sign-in-form" method="post">
              <div class="logo">
                <img src="./img/vlabs logo.PNG" alt="easyclass" />
                <h4>VLABS</h4>
              </div>

              <div class="heading">
                <h2>Welcome Back</h2>
                <h6>Not registered yet?</h6>
                <a href="signup.php" class="toggle">Sign up</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    minlength="4" id="username" name="username"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label for="username" >Username</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4" id="password" name="password"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label for="password" >Password</label>
                </div>

                <input type="submit" value="Sign In" class="sign-btn" />

                <p class="text">
                  Forgotten your password or you login datails?
                  <a href="#">Get help</a> signing in
                </p>
              </div>
            </form>
            <div class="carousel">
             
            <div class="homelogo">
              <img src="./img/icons8-home-page-64.png" alt="" />
              <div class="homelogotext">
              <a href="login.php" style="text-decoration : none; color:#ffffff;">home</a></div>
             
            </div>

          <div class="headingone">
            <p style="text-align : center"> WELCOME TO <p>  
          </div>
      
          <div class="headingtwo">
            <h1 style="text-align : left"> VLABS <h1> 
          </div>
          <div class="Subtextpara">
            <p style="text-align : center"> Created By <a href="https://vit.edu.in/" style="text-decoration : none; color:#ffffff;" target="_blank">Vidyalankar Institute Of Technology</a> <p> 
          </div>
        </div>
            </div>
        </div>
        </div>
    </main>
    <!-- <script src="app.js"></script> -->
    <script>
          <?php include "app.js" ?>
    </script>
    </body>
</html>