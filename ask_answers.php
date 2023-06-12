<?php
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

  echo "You got " . $correct . " out of 10 correct!";
?>