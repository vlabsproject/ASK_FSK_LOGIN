<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FSK</title>
    <!-- <link rel="stylesheet" type="text/css" href="css/fsk.css"> -->
    <style>
          <?php include "css/fsk.css" ?>
          <?php include "css/navbar.css" ?>
        </style>
        <!-- <link rel="stylesheet" href="css/navbar.css"> -->
</head>
<body>


   <!-- logo image  -->
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
    <div class="labtitle">FSK Modulation and Demodulation</div>
    <a href="am.php" class="next"> Next</a>
    <a href="ask.php" class="back"><p>Back</p></a>
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
    <div class="wrapper">
        <div class="titleinstruction"> Instruction</div>
        <div class="midContainer1">
            1. First Turn on 8 Bit Variable data generator using power switch which helps to generate the data signal from given data <br><br>
            2. Change the orientation of data switch as per your data, for 0 toggle it up to vice versa.<br><br>
            3. Increase the amplitude and frequency of message signal for your desired output.<br>
        </div>
        <div class="midContainer2">
           4. Click on RUN button to generate the FSK signal <br><br>
           5. Observe the graph and download it from top-right corner of graph in png, jpeg, & pdf format.<br><br>
           6. Observe the decoded FSK signal.<br>
        </div>
    </div>
    <div class="linethree"> </div>
    <div class="linefour"> </div>
    <div class="titlesimulation"> Simulation</div>
    <div id="parent">
        <!-- switch -->
        <div class="setup1">
            <span><img src="images/setup bg.jpg" alt=""></span> 
            </div>
            <!-- switch -->
            <div class="imagebgswitch"> </div>
        <div class="Switch">
        <div class="switchRed shadow" onclick="onOff()"> </div>
        <!-- bulb -->
        <div class="led "><img id="leds" src="images/redLed.png"></div>
    </div>
    

    <!-- User Input -->
<div class="userInput">
          
        <img src="images/zero.jpeg" class="image" id="ss0" >
        <img src="images/zero.jpeg" class="image" id="ss1" >
        <img src="images/zero.jpeg" class="image" id="ss2" >
        <img src="images/zero.jpeg" class="image" id="ss3" >
        <img src="images/zero.jpeg" class="image" id="ss4" >
        <img src="images/zero.jpeg" class="image" id="ss5" >
        <img src="images/zero.jpeg" class="image" id="ss6" >
        <img src="images/zero.jpeg" class="image" id="ss7" >
        <button class="runButton" onclick="printArray()">RUN </button>
        </div>
        <!-- Toogle Pins Code  -->
        <div class="togglepins">
    <span class="s0" ><img id="s0" src="images/toggle_off.png" onclick="swapOneZero0(); playSound();"/></span>
    <span  class="s1"> <img id="s1" src="images/toggle_off.png" onclick="swapOneZero1(); playSound();" /></span>
    <span  class="s2"  ><img id="s2" src="images/toggle_off.png" onclick="swapOneZero2(); playSound();"/></span>
    <span class="s3"  ><img id="s3" src="images/toggle_off.png" onclick="swapOneZero3(); playSound();"/></span>
    <span class="s4" ><img id="s4" src="images/toggle_off.png" onclick="swapOneZero4(); playSound();"/></span>
    <span class="s5"  ><img id="s5" src="images/toggle_off.png" onclick="swapOneZero5(); playSound();"/></span>
    <span class="s6"  ><img id="s6" src="images/toggle_off.png" onclick="swapOneZero6(); playSound();"/></span>
   <span class="s"  ><img id="s7" src="images/toggle_off.png" onclick="swapOneZero7(); playSound();"/></span>
</div>

<div class="amplitudeslider">
    <input  id="amp_input" type="range" class="ampslider" min="0" value="0" max="10" step="1" />
   <div class="amplitudeslidervalue">
    <p class="values"> <output id="value1"></output></p>
   </div>
   </div>
   
<div class="frequencyslider">
   <input id="freq_input" type="range" class="freqslider" min="0" value="0" max="10" step="1" />
   <div class="frequencyslidervalue">
    <p class="values">  <output id="value2"></output></p>
   </div>   
</div>

</div>
 
<div class="Simulationsubtextone">Amplitude</div>
<div class="Simulationsubtexttwo">Frequency</div>




<div class="linefive"> </div>
    <div class="linesix"> </div>
    <div class="titlegraph"> Graph</div>

<!-- Graphs -->
<div class="Gbg1">Message Signal</div>
<div class="Gbg2">FSK Signal </div>
<div class="Gbg3">Carrier Signal</div>
<div class="Gbg4">Decoding of FSK signal</div>

<div>
    
</div>

<div class="graphs">
<canvas id="canvasBinary" width = "640px" height = " 450px"   ; style="border:1px solid"></canvas>
<canvas id="canvasFSK" width = "640px" height="  370px" style="border:1px solid"></canvas>
<!-- <canvas id="canvasASK" width = "640px" height="  370px" style="border:1px solid"></canvas> -->
<canvas id="canvasCarrier" width = "640px" height="  370px" style="border:1px solid"></canvas>
<canvas id="canvasDemodulated" width = "650px" height="  370px" style="border:1px solid"></canvas>
</div>
<div class="last-block"></div>
</div>




<!-- <script src="scripts/fsk.js"></script> -->
<script>
          <?php include "scripts/fsk.js" ?>
    </script>
</body>
</html>