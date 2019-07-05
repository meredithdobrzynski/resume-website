<!DOCTYPE html>
<?php $current_page_id= "projects"
?>

<html lang="en-US">
<head>
 <meta charset="UTF-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1" />

 <title>Projects</title>
 <link rel="stylesheet" type="text/css" href="/styles/style.css"/>
</head>

<body>

<?php
  include("includes/navbar.php");
  ?>

<div class="projects">

<div class="project1">
<div class="leftproj1">
  <img src='images/gradiate.png' class="gradiate_img" alt="Gradiate Logo">
</div>
<div class="rightproj1">
  <h4> Gradiate (iOS App) </h4>
  <br>
  <p class='proj'>
  Gradiate transforms an image that the user took or uploaded from their
  camera roll into a gradient.  It does so extracting the 3 most dominant colors 
  in the image.  After the gradient is created, the user has the option of 
  sharing it on Facebook, Messenger, iMessage, Email, 
  etc... <br><br>
  Technologies Used: Google Cloud Vision API, Swift, Python (Flask), Docker 
  <br><br>
  <strong>Awarded Best Google API Integration</strong> by 
  <a href="https://www.cornellappdev.com/hack-challenge-fa18"> Cornell App Development Hack Challenge </a>
  (Fall 2018)
  <br>
  <br>
  <a class="github" href="https://github.com/meredithdobrzynski/gradiate">Github</a>

</p>
</div>
</div>

<div class="project2">
<div class="leftproj2">
<img src='images/snapfood.png' class="snapfood_img" alt = "SnapFood Logo">
</div>
<div class="rightproj2">
<h4> SnapFood (iOS App) </h4>
  <br>
  <p class='proj'>
  SnapFood allows a user to take a picture of any piece of food. Then 
  the app will return a list of possible ingredients that correspond to that 
  picture. Once the user selects the correct option, a list of a maximum of 10 
  recipes corresponding to this ingredient appear. <br><br>
  Technologies Used: Google Cloud Vision API, Swift, Python (Flask), Kubernetes 
  <br><br>
  <strong>Awarded Best Google API Integration</strong> by Cornell App Development Hack Challenge
  (Spring 2018)
</p>
</div>
</div>

<div class="project3">
<div class="leftproj3">
<img src='images/oclue.png' class="oclue_img" alt = "OClue">
</div>
<div class="rightproj3">
<h4> OCLUE (Command Line Game) </h4>
  <br>
  <p class='proj'>
  OCLUE is a text-based, command-line version of Clue, the classic mystery 
  game. This project includes all the elements of the board game as well as 
  options to compete against bots of various levels of intelligence.  These 
  competitive bots use logic and probability to deduce solutions. There are 
  instructions to play the game in the repository's ReadMe. <br><br>
  Technologies Used: OCAML <br><br>
  <a class="github" href="https://github.com/rsn55/OClue">Github</a>
 
</p>
</div>
</div>

<div class="project4">
<div class="leftproj4">
<img src='images/waldo.png' class="waldo_img" alt="Waldo Result">
</div>
<div class="rightproj4">
<h4> Where's Waldo (CNN) </h4>
  <br>
  <p class='proj'>
  For this project, a team of two other students and I built, trained, and 
  tested a convolutional neural network that determines where Waldo is in a
  Where's Waldo puzzle.  We created our dataset by to train the CNN by finding 
  Waldo, cropping the image and performing data augmentations. We display our 
  predictions by superimposing a heatmap over the puzzle to show the possible 
  general locations of Waldo and the probability that it is the true location. 
  Our final validation loss was 0.0498 and our validation accuracy was 98.35%. 
   <br><br>
   Technologies Used: Python (Keras) <br><br>
</p>
</div>
</div>

<div class="project">
<!-- <h4> MIPS </h4> -->
</div>


</div>

</body>

</html>
