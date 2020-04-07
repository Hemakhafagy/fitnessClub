<?php
  session_start();
  if(!isset($_SESSION['permission'])){
    header("Location: ../login.php");//redirect to login page
    exit();
  }else if($_SESSION['permission'] != 1){
    header("Location: ../login.php");//redirect to login page
    exit();
  }/*else{
    // remove all session variables
    session_unset();

    // destroy the session
    session_destroy();

    header("Location: ../login.php");//redirect to login page
    exit();
  }*/
?>
