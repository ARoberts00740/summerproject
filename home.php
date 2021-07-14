<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:index');
}
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Home Page </title>    
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
</head>
<body>
<style>
<?php include "res/styles.css"?>
</style>
<header
<?php include "res/navbar.php"?>
</header>
    <div class="details">Enter Your Details</div>
<div class="mainform">
<form method="post" action="detailsubmit.php">
<div id="labels">
<h2 class="labels">Your Name:</h2>
<input class="firstname" type="text" name="firstname" placeholder="First Name..."><br>
<input class="lastname" type="text" name="lastname" placeholder="Last Name..."><br>
</div>
<h2 class="labels">E-Mail Address:</h2>
<input class="email" type="text" name="email" placeholder="Enter your email...">
<h2 class="labels">Address Information:</h2>
<input class="address" type="text" name="address1" placeholder="Address line 1...">
<input class="address" type="text" name="address2" placeholder="Address line 2...">
<h2 class="labels">Mobile:</h2>
<input class="numcode" type="text" value="+91">
<input class="mobile" type="text" name="phone_number">
<input type="submit" value="GET STARTED"><br>
</form>
</div>
<?php include "res/footer.php"?>
</body>
</html>