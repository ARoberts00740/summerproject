<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'mydb1');
$uname=$_SESSION['username'];
$item1 = $_POST['item1'];
$item2 = $_POST['item2'];
$item3 = $_POST['item3'];
$item4 = $_POST['item4'];
$item5 = $_POST['item5'];
$item6 = $_POST['item6'];
$item7 = $_POST['item7'];
$item8 = $_POST['item8'];
$tot = $_POST['total'];
$reg= " insert into checkouts(username , item1,item2,item3,item4,item5,item6,item7,item8,total) values ('$uname' , $item1,$item2,$item3,$item4,$item5,$item6,$item7,$item8,$tot)";
mysqli_query($con, $reg);
header('location:thanks.php');
?>