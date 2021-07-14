<?php
session_start();
if (isset($_SESSION['user'])&&$_SESSION['user'] == 'error')
echo '<script type="text/javascript"> alert("WRONG PASSWORD. TRY AGAIN")</script>';
?>
<html>
<head>
        <title>Sign In</title>
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<style>
* {
  box-sizing: border-box;
}
body{
    background: linear-gradient(rgba(0, 0, 50, 0.1),rgba(0, 0, 0, 0.5)),url(images/bg.jpg);
    background-size: cover;
    background-position: center;
}
input[type=text]{
    background:rgba(0,0,0,0.2);
}
input[type=submit] {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: pink;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}
input[type=submit]:hover {background-color: pink;
color:black;}

input[type=submit]:active {
  background-color: red;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: #333;
  color: white;
  text-align: center;
}
.nav {
  background-color: #333;
}
.nav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  font-size: 17px;
}
.navIn{
    position:relative;
    left:-320px;
    color:white;
}
.navIn2{
    position:relative;
    left:1200px;
}
.nav a:hover {
  background-color: #ddd;
  color: black;
  text-decoration:none;
}
.nav a.active {
  background-color: pink;
  color: black;
}
#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}
</style>
<!--<script>
  var video = document.getElementById("myVideo");
  var btn = document.getElementById("myBtn");
  
  function myFunction() {
    if (video.paused) {
      video.play();
      btn.innerHTML = "Pause";
    } else {
      video.pause();
      btn.innerHTML = "Play";
    }
  }
  </script>-->
</head>
<body>
<!--<video autoplay muted loop id="myVideo">
  <source src="images/bg.mp4" type="video/mp4">
</video>-->
<style>
<?php include "res/styles.css"?>
</style>
<header>
<div class="nav">
<div class="logo">
<a href="home2.php"><img src='images/logo.png'/></a>
</div>
<div class="navIn2">
<a href="/home2">Home</a>
  <a href="mailto:aroberts00741@gmail.com">Contact</a>
  <a href="about.php">About</a>
  <a class='active' href="index.php">Login</a>
  </div>
  <div class="navIn">
    <h1 style="font-family:copperplate, fantasy; text-transform:capitalize;">Welcome!</h1>
  </div>
</div>
</header>
<div class="container">
    <div class="login-box">
    <div class="row">
        <div class="col-md-5 login-left">
        <h2>Sign Up</h2>
        <form action="registration.php" method="post">
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="user" class="form-control" required>  
            </div>
        <div class="form-group">
            <label>Password</label>
            <input type="text" name="password" class="form-control" required>  
            </div>
            <input type="submit" value="Go>>">
        </form>
    </div>
            <div class="col-md-7 login-right">
        <h2>Sign In</h2>
        <form action="verify.php" method="post">
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="user" class="form-control" required>  
            </div>
        <div class="form-group">
            <label>Password</label>
            <input type="text" name="password" class="form-control" required>  
            </div>
            <input type="submit" value="Sign In">
        </form>
    </div>
    </div>
   </div>  
</div> 
<?php include "res/footer.php"?>
</body>
</html>