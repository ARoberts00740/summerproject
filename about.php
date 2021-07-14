<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>About TechMart</title>    
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
<style>
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

.nav a:hover {
  background-color: #ddd;
  color: black;
  text-decoration:none;
}

.nav a.active {
  background-color: pink;
  color: black;
}
.navIn{
    position:relative;
    left:10px;
    color:white;
}
.navIn2{
    position:relative;
    left:900px;
}
</style>
</head>
<body>
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
  <a class='active' href="about.php">About</a>
  <a href="index.php">Back</a>
  </div>
  <div class="navIn">
    <h1 style="font-family:copperplate, fantasy; text-transform:capitalize;">Welcome!</h1>
  </div>
</div>
</header>
<div class="container" style="margin-left:450px; width:600px; float:left; background:rgba(255,255,255,0.7)">
<center><b>ABOUT</b><br>
TechMart offers a wide variety of electronic gadgets at insanely discounted prices!
What are you waiting for? Make your first purchase now!<br><br>
<table border='1'>
<tr>
<th>S.No.</th>
<th>&nbsp;STUDENT'S NAME&nbsp;</th>
<th>&nbsp;UID&nbsp;</th>
<th>&nbsp;BATCH&nbsp;</th>
</tr>
<tr>
<td>1</td>
<td>Ayush Roberts</td>
<td>20BCS7165</td>
<td>20ITA27</td>
</tr>
<tr>
<td>2</td>
<td>Devyani Singh</td>
<td>20BCS7208</td>
<td>20ITA27</td>

</tr>
<tr>
<td>3</td>
<td>Gunjan Saini</td>
<td>20BCS7202</td>
<td>20ITA27</td>

</tr>
<tr>
<td>4</td>
<td>Gurvinder Singh</td>
<td>20BCS7173</td>
<td>20ITA27</td>
</tr>
</table></CENTER>
</div>
<?php include "res/footer.php"?>
</body>
</html>