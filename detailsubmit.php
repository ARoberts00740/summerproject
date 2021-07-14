<?php
session_start();
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'mydb1');
$uname=$_SESSION['username'];
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$address = $address1.",".$address2;
$mobile = $_POST['phone_number'];
$query = " select * from details where email = '$email'";
$result = mysqli_query($con, $query);
$found = mysqli_num_rows($result);
if($found == 1){
    echo" E-Mail Address Already Taken";
}else{
    $submit= " insert into details(fname,lname,email,address,mobile) values ('$fname' , '$lname','$email','$address','$mobile')";
    mysqli_query($con, $submit);
$submitted="update users set details_given=1 where username='$uname'";
mysqli_query($con, $submitted);
    header('location:home2.php');
}
?>