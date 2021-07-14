<?php
session_start();
header('location:login');
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'dbname');
$name = $_POST['user'];
$pass = $_POST['password'];
$reg= " insert into users(username , password) values ('$name' , '$pass')";
mysqli_query($con, $reg);
echo" Registration Successful";
?>