<?php
include 'partials/_dbconnect.php';

if(isset($_GET['token'])){
    $token = $_GET['token'];
    $updateQuery = "UPDATE `details` SET `status`='active' WHERE `token`='$token'";
    $result = mysqli_query($conn,$updateQuery);
    if($result){
        echo '<div class="alert alert-success" role="alert">
                Your account has been verified. You can now <a href="login.php">login</a>.
              </div>';
    }
    else{
        echo '<div class="alert alert-danger" role="alert">
                Your account could not be verified. Please try again later.
              </div>';
    }
}
else{
    echo '<div class="alert alert-danger" role="alert">
            Invalid Request.
          </div>';
}

header("Location: login.php");
exit();

?>
