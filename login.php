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
<link rel="stylesheet" href="style.css">
<body>
<div class = "welcomediv">

  <h1 >m3lsh fitness club </h1>
  <h3>welcome dear customers <h3>
</div>

</br>

<img class ="welcomephoto" src ='photos/banner.jpg'  >
</br>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method='post'>
​<div class="container">
    <div class="form-group">
      <label for="email">Email:</label> <br>
      <input type="email" class="form-control" name="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label> <br>
      <input type="password" class="form-control" name="pwd" placeholder="Enter password">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</div>

</form>
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
<video  width =100%  autoplay>
  <source src="photos/shika's video_Small.mp4" type="video/mp4">
  <source src="photos/shika's video_Small.ogg" type="video/ogg">
</video>
</body>
</html>
