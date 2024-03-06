<?php 
  session_start();
  session_unset();
  session_destroy();
  header("location: ./prj_home.php");
?>
