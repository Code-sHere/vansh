<?php 
session_start();
include 'connection.php';

$recover = $_POST['Re-username'];
$Newpass = $_POST['newpass'];

$Query1 = "update register set Password = '$Newpass' where Username = '$recover'";
if (mysqli_query($conn,$Query1)) {
	echo "<script>alert('change Password sucessfully');</script>";
	echo "<script>location.replace('Login.php');</script>";
}
else{
	echo"<script>alert('Password can't changed');</script>";
	echo "<script>location.replace('recover.php');</script>";
}

 ?>