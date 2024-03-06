<?php 
  session_start();
  session_unset();
  session_destroy();
  header("location: ../Home/prj_home.php");
  ?>

  
