<?php


$conn= new mysqli("localhost:3306","jiofreet_hotel","hotel@123","jiofreet_hotel");
if (!$conn) {
	die("error in establishing the connection :". mysqli_connect_error());

}
if (isset($_POST['login'])) {
	$username=mysqli_real_escape_string($conn,$_POST['uname']);
	$password=mysqli_real_escape_string($conn,$_POST['password']);
	$sql="select * from reg where uname='".$username."' AND password='".$password."'";

	$run_query=mysqli_query($conn,$sql);
	if ((mysqli_num_rows($run_query))>0) {
		session_start();

		$_SESSION['uname']=$username;

		$session=$_SESSION['uname'];

		header('Location:usermain.php');
	}

	else
		
			header('Location:ulogin.php');
		


}
?>