<!DOCTYPE html>
<?php $current_page_id= "index"
?>

<html lang="en-US">

<head>
 <meta charset="UTF-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1" />

 <title>Home</title>
 <link rel="stylesheet" type="text/css" href="/styles/style.css"/>
</head>

<body class="index">

<?php
    include("includes/navbar.php");
    ?>

    <div class = "text">
      
    <div class = "selfie">
    <img src='images/mer2.png' class="mer_img" alt="Image of Meredith">

    <div class = "mer_img">
        <div class = "window">
          <div class = "windowText">
          Command Window
        </div>
        </div>
        <div class = "box">
          <br>
          <?php
          $questions = array("hometown" =>"Wayne, NJ", "currentHome" => "Durham, NC",
          "education" => "Cornell University", "major" => "Computer Science",
          "expectedGraduation" => "May 2020");
          foreach ($questions as $question => $answer) {
            echo "<div class = question>";
            echo ">> meredith.";
            echo $question;
            echo "</div>";
            echo "<div class = answer>";
            echo "= ";
            echo $answer;
            echo "</div>";
            echo "<br>";
          }

          ?>
      </div>
        </div>


   
    <button class="button_left" onclick="plusDivs(-1)">&#10094;</button>
    <button class="button_right" onclick="plusDivs(1)">&#10095;</button>
    </div>
        </div>

    <script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
    showDivs(slideIndex += n);
  }

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mer_img");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

      <div class= "education">
        <h1> Education </h1>
          <hr/>
          <h2> Cornell University, College of Engineering, Ithaca, NY </h2>
          <p> Expected May 2020 <br>
          Candidate for Bachelor of Science, Computer Science <br>
          GPA: 3.459, Dean’s List Spring 2018, Fall 2018, Spring 2019  </p>
          <h2> University of Cambridge, Girton College, Cambridge, UK </h2>
          <p> July-Aug. 2018 <br>
          UK degree classification: First, US Equivalent: A           <br>
          Experienced Cambridge student life with an intense four-week engineering
          course that included four modules: Renewable Electric Energy, Jet Engines,
          Nanotechnology, and Quantum Technology</p>
        <h1> Relevant Coursework </h1>
        <hr/> <p>
          Artificial Intelligence; Computer System Organization and Programming; 
          Computer Vision; Intermediate Design and Programming for the Web; 
          iOS App Dev; Obj-Oriented Prog & Data Structures; Operating Systems </p>
        <h1> Campus Involvement </h1>
        <hr/> <p>
          Administrative Assistant; CU Empower Mentor; LSAMP Program; 
          NACME Scholar; Peer Advisor; Ryan Scholar; Teaching Assistant for 
          Artifical Intelligence
         
           </p>
          <h1> Professional Experience </h1>
        <hr/> <p>
          Full Stack Software Engineer Intern at Capital One (June-August 2019)
           </p>
          <br>
      </div>

      <div class='title2'>
      <h1> Countdown Until Graduation </h1>
      </div>

      <div class="countdown">
      <?php
      $date = strtotime("May 1, 2020 2:00 PM");
      $remaining = $date - time();
      $days_remaining = floor($remaining / 86400);
      $years = floor($days_remaining / 365);
      $days = $days_remaining - ($years*365);
      $hours_remaining = floor(($remaining % 86400) / 3600);
      echo "<div class='years'><div class='outer'><div class='type'>" . $years . "<br> Year </div></div></div>
            <div class='days'><div class='outer'><div class='type'>" . $days . "<br> Days </div></div></div>
            <div class='hours'><div class='outer'><div class='type'>" . $hours_remaining . "<br> Hours </div></div></div>";
       ?>
     </div>

</body>

</html>
