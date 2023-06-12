<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
          <?php include "css/ask.css" ?>
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
    <div class="labtitle">ASK Modulation and Demodulation</div>
    <a href="fsk.php" class="next"> Next</a>
    <!-- <a href="home.php" class="back"><p>Back</p></a> -->
    <div class="navbar" id="navbar" style="width: 1500px;
    margin-top: 22px; position:absolute">
        <ul>
            <li id="item-1"><a href="asktheory.php">Theory</a></li>
            <li id="item-2"><a href="askprocedure.php">Procedure</a></li>
            <li id="item-3"><a href="ask.php">Simulation</a></li>
            <li id="item-4"><a href="askquiz.php">Quiz</a></li>
        </ul>
    </div>
    <div class="bluewrapper" style="height:72rem"> </div>
    <div class="wrapper">
        <div class="titleinstruction" style="width:70rem"><span>Procedure</span>
        <p><strong>1.Generation of the carrier signal</strong>: A high-frequency carrier signal is generated using an oscillator circuit. The frequency of the carrier signal is usually much higher than the frequency of the modulating signal.<br>
        <br>
<strong>2.Generation of the modulating signal</strong>: The binary data to be transmitted is first converted into a series of pulses that represent the data stream. These pulses are used to modulate the amplitude of the carrier signal.<br>
<br>

<strong>3.Amplitude modulation</strong>: The modulating signal is used to modulate the amplitude of the carrier signal by either increasing or decreasing the amplitude of the carrier signal depending on the value of the binary data. For example, if the binary data is a 1, the amplitude of the carrier signal is increased to its maximum value, while if the binary data is a 0, the amplitude of the carrier signal is decreased to its minimum value.<br>
<br>
<strong>4.Transmission of the modulated signal</strong>: The modulated signal is then transmitted over the medium, such as a wired or wireless communication channel.<br>
<br>
<strong>5.Demodulation of the received signal</strong>: At the receiver end, the modulated signal is received and demodulated to recover the original binary data. This is done by detecting the changes in amplitude of the modulated signal and translating them back into a series of digital pulses that represent the binary data.<br>
<br>
<strong>6.Decoding of the digital data</strong>: The binary data is then decoded to recover the original message that was transmitted.<br><br>
</p></div>
        
    </div>
</body>
</html>