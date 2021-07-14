<?php
session_start();
$con=mysqli_connect("localhost","root","","mydb1");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Your Order History</title>    
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
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: #333;
  color: white;
  text-align: center;
}
</style>
</head>
<body>
<style>
<?php include "res/styles.css"?>
</style>
   <header>
<?php include "res/navbar.php"?>
</header>
<div class="container" style="margin-left:410px; width:auto; float:left; background:rgba(255,255,255,0.7)">
<?php
$uname=$_SESSION['username'];
echo "<center>ORDER HISTORY FOR USERNAME: $uname</center>";
$result = mysqli_query($con,"SELECT item1,item2,item3,item4,item5,item6,item7,item8,bought_time,total FROM checkouts where username='$uname' order by bought_time");

echo "<table style='border:none;'>
<tr>
<th>Receipt Time/Date</th>
<th>&nbsp;SONY&nbsp;</th>
<th>&nbsp;POCO&nbsp;</th>
<th>&nbsp;SAMSUNG&nbsp;</th>
<th>&nbsp;REALME&nbsp;</th>
<th>&nbsp;IQOO&nbsp;</th>
<th>&nbsp;LG&nbsp;</th>
<th>&nbsp;APPLE&nbsp;</th>
<th>&nbsp;GOOGLE&nbsp;</th>
<th>&nbsp;RECEIPT VALUE&nbsp;</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['bought_time'] . "</td>";
echo "<td>" . $row['item1'] . "</td>";
echo "<td>" . $row['item2'] . "</td>";
echo "<td>" . $row['item3'] . "</td>";
echo "<td>" . $row['item4'] . "</td>";
echo "<td>" . $row['item5'] . "</td>";
echo "<td>" . $row['item6'] . "</td>";
echo "<td>" . $row['item7'] . "</td>";
echo "<td>" . $row['item8'] . "</td>";
echo "<td>₹" . $row['total'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
</div>
<?php include "res/footer.php"?>
</body>
</html>