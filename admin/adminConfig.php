<?php
  session_start();
  if(!isset($_SESSION['permission'])){
    header("Location: ../login.php");//redirect to login page
    exit();
  }else if($_SESSION['permission'] != 1){
    header("Location: ../login.php");//redirect to login page
    exit();
  }else{
    if (time()-$_SESSION['last_login_timestamp'] > (10)){//check time of the last activty in the page in 3 seconds
      session_unset();// remove all session variables
      session_destroy();// destroy the session
      header("Location: ../login.php");//redirect to login page
      exit();
    }else {
      $_SESSION['last_login_timestamp'] = time();//sign the last activty time
    }
  }
?>
