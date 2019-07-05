<!DOCTYPE html>
<?php $current_page_id= "research"
?>

<html lang="en">
<head>
 <meta charset="UTF-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1" />

 <title>Research</title>
 <link rel="stylesheet" type="text/css" href="/styles/style.css"/>
</head>

<body class="index">

<?php
include("includes/navbar.php");
?>

<div class ="researchbox">
<div class="slideshow">
  <img class="slide" src="/images/cell.png" alt="Program Interface">
  <img class="slide" src="/images/cell2.png" alt = "Outline Cell">
  <img class="slide" src="/images/cell3.png" alt = "Measure Cell Length">

  <button class="button_left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="button_right" onclick="plusDivs(1)">&#10095;</button>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("slide");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>


<div class="research">
  <h4> Research Topic: Computer Vision </h4>
<p>
I am an undergraduate researcher in the Hernandez Research Group at Cornell 
University. It is lead by Professor Christopher J. Hernandez, and is part of the 
Sibley School of Mechanical and Aerospace Engineering and the Meinig School of 
Biomedical Engineering.  The group focuses on the mechanical properties of 
living biological materials and the response of live tissues to mechicanical 
loading.  As a computer scientist, I helped to develop image processing software
written in MATLAB that detects bacteria within microfluidic devices and measures
cell shape and number using computer vision. 
</p>
</div>
</div>

</body>

</html>
