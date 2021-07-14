<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:index');
}
?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Thanks For Shopping</title>    
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body>
<style>
<?php include "res/styles.css"?>
</style>
   <header>
<?php include "res/navbar.php"?>
</header>
<div class="container" style="height:85%; margin-left:200px; float:left; background:rgba(255,255,255,0.4)">
<p class='thanktext'>YOUR ORDER HAS BEEN PROCESSED<br>THANK YOU</p>
<input style="margin-top:0px; margin-left:90px; font-size:45px" onclick="location.href='orderhist';" type="submit" value="ORDER HISTORY">
<input style="margin-top:100px; margin-left:200px; font-size:45px" onclick="location.href='logout';" type="submit" value="LOGOUT">
<input style="margin-top:50px; margin-left:50px; font-size:45px; padding: 10px 10px;" onclick="location.href='home2';" type="submit" value="CONTINUE SHOPPING">
</div>
<?php include "res/footer.php"?>
</body>
</html>