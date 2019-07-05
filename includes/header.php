<?php
$pages = array("index" => "About Me",  "projects" => "Projects", "research" => 
"Research", "contact" => "Contact");
?>

<div id="menu-outer">
  <div class='test'>
  <ul id="horizontal-list">
 <?php
   foreach ($pages as $keyval=>$page) {
     if ($current_page_id == $keyval) {
       echo "<li><a id=current_page href='$keyval.php'>$page</a></li>";
     }
     else
      echo "<li><a href='$keyval.php'>$page</a></li>";
   }
   ?>
   </ul>
 </div>
</div>
