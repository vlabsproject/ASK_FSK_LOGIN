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
    <div class="bluewrapper" style="height:200rem"></div>
    <div class="wrapper">
    <div class="titleinstruction" style="width:70rem">
	<form action="#" method="post">
		<h2>Amplitude Shift Keying (ASK) Quiz</h2>
		<p>1. What does ASK stand for?</p>
		<input type="radio" name="q1" value="a">a. Amplitude Sensor Keying<br>
		<input type="radio" name="q1" value="b">b. Amplitude Shift Keying<br>
		<input type="radio" name="q1" value="c">c. Amplitude Signal Keying<br>
		<input type="radio" name="q1" value="d">d. Amplitude System Keying<br><br>

		<p>2. What type of modulation is ASK?</p>
		<input type="radio" name="q2" value="a">a. Amplitude Modulation<br>
		<input type="radio" name="q2" value="b">b. Frequency Modulation<br>
		<input type="radio" name="q2" value="c">c. Phase Modulation<br>
		<input type="radio" name="q2" value="d">d. All of the above<br><br>

		<p>3. What is the carrier signal in ASK modulation?</p>
		<input type="radio" name="q3" value="a">a. The signal that carries the digital data.<br>
		<input type="radio" name="q3" value="b">b. The signal that is modulated by the digital data.<br>
		<input type="radio" name="q3" value="c">c. The signal that demodulates the modulated data.<br>
		<input type="radio" name="q3" value="d">d. The signal that is used to synchronize the data transmission.<br><br>

		<p>4. How is the modulating signal generated in ASK modulation?</p>
		<input type="radio" name="q4" value="a">a. By multiplying the carrier signal by the binary data.<br>
		<input type="radio" name="q4" value="b">b. By generating a series of pulses that correspond to the binary data.<br>
		<input type="radio" name="q4" value="c">c. By phase-shifting the carrier signal.<br>
		<input type="radio" name="q4" value="d">d. By frequency-shifting the carrier signal.<br><br>

		<p>5. What is the effect of binary data "1" on the amplitude of the carrier signal in ASK?</p>
		<input type="radio" name="q5" value="a">a. It increases the amplitude of the carrier signal.<br>
		<input type="radio" name="q5" value="b">b. It decreases the amplitude of the carrier signal.<br>
		<input type="radio" name="q5" value="c">c. It has no effect on the amplitude of the carrier signal.<br>
		<input type="radio" name="q5" value="d">d. It inverts the amplitude of the carrier signal.<br>

        <p>6. What is the effect of binary data "0" on the amplitude of the carrier signal in ASK?</p>
      <input type="radio" name="q6" value="a"> a. It increases the amplitude of the carrier signal.<br>
      <input type="radio" name="q6" value="b"> b. It decreases the amplitude of the carrier signal.<br>
      <input type="radio" name="q6" value="c"> c. It has no effect on the amplitude of the carrier signal.<br>
      <input type="radio" name="q6" value="d"> d. It inverts the amplitude of the carrier signal.<br>
      <br>
      
      <p>7. What is the advantage of ASK modulation?</p>
      <input type="radio" name="q7" value="a"> a. It is immune to noise and interference.<br>
      <input type="radio" name="q7" value="b"> b. It provides high data transfer rates.<br>
      <input type="radio" name="q7" value="c"> c. It is simple and inexpensive.<br>
      <input type="radio" name="q7" value="d"> d. It can transmit data over long distances.<br>
      <br>
      
      <p>8. What is the disadvantage of ASK modulation?</p>
      <input type="radio" name="q8" value="a"> a. It is susceptible to noise and interference.<br>
      <input type="radio" name="q8" value="b"> b. It provides low data transfer rates.<br>
      <input type="radio" name="q8" value="c"> c. It is complex and expensive.<br>
      <input type="radio" name="q8" value="d"> d. It can only transmit data over short distances.<br>
      <br>
      
      <p>9. What is the demodulation process in ASK?</p>
      <input type="radio" name="q9" value="a"> a. The modulated signal is multiplied by the carrier signal.<br>
      <input type="radio" name="q9" value="b"> b. The modulated signal is filtered to remove noise and interference.<br>
      <input type="radio" name="q9" value="c"> c. The modulated signal is compared to a reference signal to detect changes in amplitude.<br>
      <input type="radio" name="q9" value="d"> d. The modulated signal is phase-shifted to recover the original data.<br>
      <br>
      
      <p>10. Which of the following is an application of ASK modulation?</p>
      <input type="radio" name="q10" value="a"> a. Wireless communication systems.<br>
      <input type="radio" name="q10" value="b"> b. Digital television broadcasting.<br>
      <input type="radio" name="q10" value="c"> c. Satellite communication systems.<br>
      <input type="radio" name="q10" value="d"> d. All of the above.<br>
      <br>
		<input type="submit" value="Submit">  
    </form>
</div>
    </div>

    <div class="formClass">

</div>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $answer1 = $_POST["q1"];
   $answer2 = $_POST["q2"];
   $answer3 = $_POST["q3"];
   $answer4 = $_POST["q4"];
   $answer5 = $_POST["q5"];
   $answer6 = $_POST["q6"];
   $answer7 = $_POST["q7"];
   $answer8 = $_POST["q8"];
   $answer9 = $_POST["q9"];
   $answer10 = $_POST["q10"];
 

  $correct = 0;

  if ($answer1 == "b") {
    $correct++;
  }
  if ($answer2 == "a") {
    $correct++;
  }
  if ($answer3 == "b") {
    $correct++;
  }
  if ($answer4 == "b") {
    $correct++;
  }
  if ($answer5 == "a") {
    $correct++;
  }
  if ($answer6 == "b") {
    $correct++;
  }
  if ($answer7 == "c") {
    $correct++;
  }
  if ($answer8 == "a") {
    $correct++;
  }
  if ($answer9 == "c") {
    $correct++;
  }
  if ($answer10 == "d") {
    $correct++;
  }

  
  echo "<script>alert('Your score is: $correct');</script>";
}
?>