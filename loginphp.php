<?php 
session_start();
include 'connection.php';

$loginUser = $_POST['loginuser'];
$Password =$_POST['passuser'];

$Query = "select * from register where Username = '$loginUser' and Password = '$Password'";
$Output = mysqli_query($conn,$Query);
if (mysqli_num_rows($Output)) {
	echo "<script>alert('Login successfully');</script>";
	echo "<script>location.replace('Login.php');</script>";
	// code...
}
else{
	echo"<script>alert('user doesn't exist);</script>";
	echo "<script>location.replace('registaion.php');</script>";
}


 ?>