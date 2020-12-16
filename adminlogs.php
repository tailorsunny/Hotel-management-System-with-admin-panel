<?php
$password=$_POST["password"];

if ($password=="test@2018") {
	header("location:adminhome.php");
	exit();

}
else{
	header("location:admin.php");
	
}
?>