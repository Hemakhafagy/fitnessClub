<?php session_start();
  if(isset($_SESSION['userName'])){
    header("Location: menuBar.html");
    exit;
  }
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Gym Page</title>
</head>
<link rel="stylesheet" href="loginstyle.css">
<body>
<div class = "welcomediv">

  <h1 >m3lsh fitness club </h1>
  <h3>welcome dear customers <h3>
  <div class = "sign"> <a href = " ///F:/fitness/formregisteration.html"> Sign Up </a></div>
</div>

</br>

<img class ="welcomephoto" src ='photos/banner.jpg'  >
</br>

<form>
​<div class="container">
    <div class="form-group">
      <label for="email">Email:</label> <br>
      <input type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label> <br>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</div>

</form>


<<<<<<< HEAD:login.html

=======
<?php
if (isset($_POST['email']) && isset($_POST['pwd'])){
  if((strcmp($_POST['email'], 'absallh43@gmail.com') == 0) &&
  (strcmp($_POST['pwd'], '123') == 0)){
    $_SESSION['userName'] = $_POST['email'];
    header("Location: menuBar.html");
    exit;
  }else{
    echo "<script> alert('wrong Email or Password'); </script>";
  }
}
?>
</body>
</html>
