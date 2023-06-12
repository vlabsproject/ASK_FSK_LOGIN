<?php
    $showAlert = false;
    $showError = false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $useremail = $_POST["useremail"];
    $password = $_POST["password"];
    // $exists = false;

    // Check whether the username exists
    $existSql = "SELECT * FROM `details` WHERE username='$username'";
    $result = mysqli_query($conn,$existSql);
    $numExistRows = mysqli_num_rows($result);

    // Validate email format
    if(!filter_var($useremail, FILTER_VALIDATE_EMAIL)) {
        $showError = "Invalid email format";
    }
    else if($numExistRows>0){
        $showError = "Username already exists";
    }
    else{
        // $hash=password_hash($password,PASSWORD_DEFAULT);
        $sql = "INSERT INTO `details` (`username`, `useremail`, `password`, `dt`) VALUES ('$username', '$useremail', '$password', current_timestamp());";
        $result = mysqli_query($conn,$sql);
        if($result){
            $showAlert = true;
        }
    }
}
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Signup to VLABS</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/login.css">
    </head>
    <body>
        <main>
      <div class="box">
    <?php
        if($showAlert){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your account has been created.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
        if($showError){
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Warning!</strong> '. $showError .' 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
        ?>
        <div class="inner-box">
          <div class="forms-wrap-signup">

        <form action="/loginmain/signup.php" autocomplete="off" class="sign-up-form" method="post">
              <div class="logo">
                <img src="./img/vlabs logo.PNG"  />
                <h4>VLABS</h4>
              </div>

              <div class="heading">
                <h2>Get Started</h2>
                <h6>Already have an account?</h6>
                <a href="login.php" class="toggle">Sign in</a>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    minlength="4" name="username" id="username"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Name</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="email" name="useremail" id="useremail"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <?php if ($useremail === "") { ?>
                  <span class="error">Please enter a valid email address</span>
                  <?php }?>                  
                  <label for="useremail">Email</label>
                  
                </div>
                

                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4" id="password" name="password"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label for="password" class="form-label">Password</label>
                </div>

                <input type="submit" value="Sign Up" class="sign-btn" />

                <p class="text">
                  By signing up, I agree to the
                  <a href="#">Terms of Services</a> and
                  <a href="#">Privacy Policy</a>
                </p>
              </div>
            </form>
            <div class="carousel-signup">
             
            <div class="homelogo">
              <img src="./img/icons8-home-page-64.png" alt="" />
              <div class="homelogotext">
                <<a href="login.php" style="text-decoration : none; color:#ffffff;">home</a></div>
             
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
    <script src="app.js"></script>
    <script>
          <?php include "app.js" ?>
    </script>
    </body>
</html>