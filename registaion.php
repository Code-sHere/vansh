<?php 
session_start();
include 'connection.php';

$username=$_POST['user'];
$Email= $_POST['email'];
$pass= $_POST['Passw'];

$Query = "insert into register(Username,Email,Password) values('$username','$Email','$pass')";
if (mysqli_query($conn,$Query)) {

	// code...
	echo "<script>alert('register successfully')</script>";
	echo "<script>location.replace('Login.php')</script>";
}
else{
	die(mysql_error($conn));
}
 ?>