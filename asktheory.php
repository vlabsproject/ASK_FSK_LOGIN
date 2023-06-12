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
    <div class="bluewrapper" style="height:72rem"></div>
    <div class="wrapper">
    <div class="titleinstruction" style="width:70rem"><span>What is Amplitude Shift Keying?</span>
<p>Amplitude Shift Keying (ASK) is a type of digital modulation technique used in communication systems to transmit digital data over a medium. ASK is a form of amplitude modulation (AM) where the amplitude of a carrier wave is varied in response to the modulating signal.<br>

In ASK, the carrier signal is a high-frequency waveform that is either on or off, depending on the binary value of the data being transmitted. The amplitude of the carrier wave is either at its maximum value for a logic 1 or at its minimum value for a logic 0.

To implement ASK in a communication system, the binary data is first converted into a series of pulses that correspond to the data stream. These pulses are then used to modulate the amplitude of the carrier wave, producing a modulated signal that can be transmitted over the medium.<br>
<br>
<br>
<br>
At the receiver end, the modulated signal is demodulated to recover the original binary data. This is done by detecting the changes in amplitude of the modulated signal and translating them back into a series of digital pulses that represent the binary data.

One of the advantages of ASK is that it is a relatively simple and inexpensive modulation technique that can be implemented using simple circuitry. However, it is also susceptible to noise and interference, which can degrade the quality of the transmitted signal and reduce the overall performance of the communication <br>
<br>
<br>
<br>
In summary, ASK is a digital modulation technique that varies the amplitude of a carrier wave to transmit digital data over a medium. It is a simple and inexpensive modulation technique but is susceptible to noise and interference.<br></p> </div>
    </div>
</body>
</html>