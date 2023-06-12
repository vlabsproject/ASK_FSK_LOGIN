<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AM</title>
    <!-- <link rel="stylesheet" type="text/css" href="css/am.css"> -->
    <style>
          <?php include "css/am.css" ?>
          <?php include "css/navbar.css" ?>
        </style>
</head>
<body>
    <div class="logo">
        <img src="images/logobgr.png"  alt="">
    </div> 
    <div class="Vlabs">
        <span>VLABS</span>
    </div>
    <div class="User">
        <span style="text-transform:capitalize">Profile Name - <?php echo $_SESSION['username']?></span>
    </div>
    <div class="Signoutbutton">
        <span><a href="logout.php" style="text-decoration:none;color:#ffffff;">Sign Out</a></span>
    </div>
    <div class="homeButton">
        <a href="home.php" style="text-decoration:none;color:#ffffff;">Home</a>
    </div>
    <div class="line1"> </div>
    <div class="linetwo"> </div>
    <div class="labtitle">Amplitude Modulation</div>
    <a href="fm.php" class="next"> Next</a>
    <a href="fsk.php" class="back"> Back</a>
    <div class="bluewrapper"> </div>
    <div class="navbar" id="navbar" style="width: 1500px;
    margin-top: 22px; position:absolute">
        <ul>
            <li id="item-1"><a href="#">Home</a></li>
            <li id="item-2"><a href="#">About Us</a></li>
            <li id="item-3"><a href="#">Contact</a></li>
            <li id="item-4"><a href="#">Services</a></li>
        </ul>
    </div>

<!-- Instructions -->
<!--<div class="topContainer">Instructions</div>-->
<div class="wrapper">
    <div class="titleinstruction"> Instruction</div>
    <div class="midContainer1">
         1. First Turn on 8 Bit Variable data generator using power switch which helps to generate the data signal from given data <br><br>
        2. Change the orientation of data switch as per your data, for 0 toggle it up to vice versa.<br><br>

        3.Check the data again from S0 to S7 bit and the amplitude and frequency of message signal.<br>
    </div>
    <div class="midContainer2">
       4.Click on RUN button to generate the ASK signal <br><br>

        5.Observe the graph and download it from right to top corner of graph in png,jpeg,and pdf format.<br><br>

        6.To decode the ASK signal click the decode button shown below.<br>
    </div>
</div>

<div class="linethree"> </div>
<div class="linefour"> </div>
<div class="titlesimulation"> Simulation</div>
<!-- SECTION ONE  -->


<div class="blueblockone"> </div>
<div class="smallwhiteblockone">
    <canvas id="amMessage" width="613" height="360"></canvas>
</div>
<div class="Elementsone"> Message Signal</div>
<div class="Elementlineone"> </div>
<div class="twoelements"> Message Signal Amplitude
    <input id="mess_amp_input" type="range" min="0" value="0" max="10" step="1" />
    <p>Value: <output id="value_1"></output></p>
</div>
<div class="Threeelements"> Message Signal frequency
    <input id="mess_freq_input" type="range" min="0" value="0" max="1" step="0.05" />
    <p>Value: <output id="value_2"></output></p>
</div>

<!-- SECTION TWO  -->



        
<div class="blueblocktwo"> </div>
<div class="smallwhiteblocktwo"> 
    <canvas id="amCarrier"  width="613" height="360"></canvas>
</div>
<div class="Elementstwo"> Carrier Signal</div>
<div class="Elementlinetwo"> </div>
<div class="twoelementssec2"> Carrier Signal Amplitude:
<input id="carr_amp_input" type="range" min="0" value="0" max="10" step="1" />        
<p>Value: <output id="value_3"></output></p>    
</div>
<div class="Threeelementssec2"> Carrier Signal frequency    
<input id="carr_freq_input" type="range" min="0" value="0" max="10" step="0.5" />
<p>Value: <output id="value_4"></output></p>
</div>

<!-- SECTION THREE  -->
<div class="blueblockthree"> </div>
<div class="smallwhiteblockthree"> 
    <canvas id="amModulated"  width="613" height="360"></canvas>
</div>
<div class="Elementsthree"> Message Signal</div>
<div class="thirdElementline"> </div>
<div class="twoelementssec3">Result:- Critical Modulation</div>
<!-- ye agar perfectly   modulated rahega toh use 2BFF09
     agar under modulated rahega toh use EBFF00 
    aur agar over modulated rahega toh use  E32727-->

    <div class="footer"> </div>
<!-- <script src="scripts/am.js"></script> -->
<script>
          <?php include "scripts/am.js" ?>
    </script>
</body>
</html>

