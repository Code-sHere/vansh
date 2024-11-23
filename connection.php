<?php 
$servername = "localhost";
$serveruser = "root";
$serverpass = "";
$serverdb = "Registration";
$conn = mysqli_connect($servername,$serveruser,$serverpass,$serverdb);

if(!$conn){
	die(mysql_error($conn));
}
else{
	echo "Done";
}

 ?>
