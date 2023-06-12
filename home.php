<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location : login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>V labs</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
        <link rel="stylesheet" href="css/navbar.css">
        
    </head>
    <body>
    
        <div class="container">
            
        <div class="top-container">
            <div class="logo">
                <img class="main_logo" src="images/Group.png" alt="logo"> 
                <span class="vlabs visible-lg visible-md visible-sm">
                <strong style="text-transform:capitalize">VLABS - Welcome <?php echo $_SESSION['username']?></strong>
                </span>
                
            </div>
            
            <div class="vit1">
                <img class="vit pull-right visible-lg" src="images/vit1.png" alt="vit logo">
            </div>
            <div class="Signoutbutton">
        <span><a href="logout.php" style="text-decoration:none;color:#ffffff;" >Sign Out</a></span>
    </div>
        </div>

        <div class="line"></div>
        <div class="navbar" id="navbar">
        <ul>
            <li id="item-1"><a href="#">Home</a></li>
            <li id="item-2"><a href="#">About Us</a></li>
            <li id="item-3"><a href="#">Contact</a></li>
            <li id="item-4"><a href="#">Services</a></li>
        </ul>
    </div>
        <div class="row">
            <div class="col">
                <h1>Select any of the following Digital<br>
                Communication experiment</h1>
            </div>
            <div class="col">
                <a href="asktheory.php" class="card">
                    <h5>ASK Modulation & Demodulation </h5>
                    <p>Amplitude Shift Keying is a form of amplitude modulation<br> that represents digital data as variations in the <br>amplitude of a carrier wave</p>
                </a>
                <a href="fsk.php" class="card">
                    <h5>FSK Modulation & Demodulation </h5>
                    <p>Amplitude Shift Keying is a form of amplitude modulation<br> that represents digital data as variations in the <br>amplitude of a carrier wave</p>
                </a>
                <a href="am.php" class="card">
                    <h5>Amplitude Modulation</h5>
                    <p>This experiment contains the modulation and demodulation of AM</p>
                </a>
                <a  href="fm.php" class="card">
                    <h5>Frequency Modulation</h5>
                    <p>This experiment contains the modulation and demodulation of FM</p>
                </a>
            </div>
        </div>
    </div>
    </body>
</html> 