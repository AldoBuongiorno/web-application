<?php 
session_start();
  // remove all session variables
  session_unset();
  // destroy the session
  session_destroy();

  // redirect verso pagina interna
  header("location: ./prj_home.php");
?>