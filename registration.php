<?php


$uname=$_POST['uname'];
$fname=$_POST['fname'];
$mail=$_POST['mail'];
$password=$_POST['password'];
$number=$_POST['number'];
$dob=$_POST['dob'];
$state=$_POST['state'];
$code=$_POST['code'];
$country=$_POST['country'];


$conn= new mysqli("localhost:3306","jiofreet_hotel","hotel@123","jiofreet_hotel");
if($conn->connect_error)
{
	echo "connection error.$conn->error";
	exit();

}
$result=$conn->query("INSERT INTO reg VALUES('','$uname','$fname','$mail','$password','$number','$dob','$state','$code','$country')");
if (!$result) {
	echo "Error in Registration";
	exit();
}


header("location:ulogin.php");
$conn->close();




?>