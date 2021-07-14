<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'mydb1');
$name = $_POST['user'];
$pass = $_POST['password'];
$query = " select * from users where username = '$name' && password = '$pass'";
$result = mysqli_query($con, $query);
$found = mysqli_num_rows($result);
$query = " select * from users where username = '$name' && password='$pass' && details_given= 1";
$result = mysqli_query($con, $query);
$found2 = mysqli_num_rows($result);
if($found == 1){
if($found2==1){
$_SESSION['username'] = $name;
echo "<script>alert('WELCOME BACK')</script>";
    header('location:home2.php');
}
else{
    $_SESSION['username'] = $name;
echo "<script>alert('WELCOME')</script>";
    header('location:home');
}
}else{
$_SESSION['user'] = 'error';
    header('location:index');
}
?>