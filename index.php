<?php
//     $showAlert = false;
//     // $showError = false;
// if($_SERVER["REQUEST_METHOD"]=="POST"){
//     include 'partials/_dbconnect.php';
//     $username = $_POST["username"];
//     // $useremail = $_POST["useremail"];
//     $password = $_POST["password"];
//     // $exists = false;
   
//         $sql = "INSERT INTO `details` (`username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp());";
//         $result = mysqli_query($conn,$sql);
//         if($result){
//             $showAlert = true;
//         }
    
// }
?>

<?php
// $login = false;
// $showError = false;
// if($_SERVER["REQUEST_METHOD"]=="POST"){
//     include 'partials/_dbconnect.php';
//     $username = $_POST["username"];
//     $password = $_POST["password"];

//     $sql = "Select * from details where username='$username' AND password='$password'";
//     $result = mysqli_query($conn, $sql);
//     $num = mysqli_num_rows($result);
//     if($num == 1){
//         $login = true;
//         session_start();
//         $_SESSION['loggedin'] = true;
//         $_SESSION['username'] = $username;
//         header("location: home.php");
// }
//     else{
//         $showError = "Invalid Credentials";
//     }
// }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.1" />
    <title>Sign in & Sign up Form</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
  <?php
        // if($login){
        //     echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        //     <strong>Success!</strong> Your have logged in.
        //     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        //     </div>';
        // }
        // if($showError){
        //     echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        //     <strong>Warning!</strong> Your credentials are incorrect.
        //     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        //     </div>';
        // }
?>
    <main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form action="/loginmain/index.php" autocomplete="off" class="sign-in-form" method="post">
              <div class="logo">
                <img src="./img/vlabs logo.PNG" alt="easyclass" />
                <h4>VLABS</h4>
              </div>

              <div class="heading">
                <h2>Welcome Back</h2>
                <h6>Not registered yet?</h6>
                <a href="#" class="toggle">Sign up</a>
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
                  <label for="password" class="form-label">Password</label>
                </div>

                <input type="submit" value="Sign In" class="sign-btn" />

                <p class="text">
                  Forgotten your password or you login datails?
                  <a href="#">Get help</a> signing in
                </p>
              </div>
            </form>


            <?php
        // if($showAlert){
        //     echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        //     <strong>Success!</strong> Your account has been created.
        //     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        //     </div>';
        // }
        // if($showError){
        //     echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        //     <strong>Warning!</strong> Your credentials are incorrect.
        //     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        //     </div>';
        // }
        ?>



            <form action="/loginmain/index.php" autocomplete="off" class="sign-up-form" method="post" >
              <div class="logo">
                <img src="./img/vlabs logo.PNG"  />
                <h4>VLABS</h4>
              </div>

              <div class="heading">
                <h2>Get Started</h2>
                <h6>Already have an account?</h6>
                <a href="#" class="toggle">Sign in</a>
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
          </div>

          <div class="carousel">
             
            <div class="homelogo">
              <img src="./img/icons8-home-page-64.png" alt="" />
              <div class="homelogotext">home</div>
             
            </div>

          <div class="headingone">
            <p style="text-align : center"> WELCOME TO <p>  
          </div>
      
          <div class="headingtwo">
            <h1 style="text-align : left"> VLABS <h1> 
          </div>
          <div class="Subtextpara">
            <p style="text-align : center"> Created By Vidyalankar Institute Of Technology<p> 
          </div>
        </div>

          
  
          </div>
        </div>
      </div>
    </main>

    <!-- Javascript file -->

    <script src="app.js"></script>
  </body>
</html>
