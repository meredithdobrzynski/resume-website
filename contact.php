<!DOCTYPE html>
<?php 
$current_page_id= "contact"
?>

<html lang="en-US">
<head>
 <meta charset="UTF-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1" />
 <title>Contact</title>
 <link rel="stylesheet" type="text/css" href="/styles/style.css"/>
</head>


<body>

 <?php
include("includes/navbar.php");
?>

<div class = "contact">
  <div class = "linked">
  <a href = "https://www.linkedin.com/in/meredith-dobrzynski/">
    <img src='images/linked.png' class="linkedin" alt="linkedinlogo">
</a>
  </div>
    <div class = "resume">
    <a href="resume.pdf" download="meredith_dobrzynski_resume">
    <img src='images/resume.png' class="cv" alt="cvlogo">
    </a>
  </div>
</div>

<div>
  <div class= "contactheader">
  <h6> Get in Touch </h6>
</div>
  <div class = "contactinfo">
  <p id ="phone"> mmd272@cornell.edu | (973) 800-3236</p>
</div>
</div>

</body>

</html>
