<?php 
  session_start();
  session_unset();                                //rimuove i dati della sessione come $_SESSION
  session_destroy();                              //termina la sessione e rimuove definitivamente i dati
  header("location: ../Home/prj_home.php");
  ?>

  
