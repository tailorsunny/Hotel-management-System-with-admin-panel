<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hotel Mangement system</title>
	<link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<style type="text/css">
	.userde{
		font-size: 18px;
		
		padding: 20px;
		line-height: 2;
		border:1px solid;
		box-shadow: 5px 10px 8px #333;
		margin: 30px auto;
		width: 50%;

	}
</style>
<body>

<header>
<nav>
	<ul>
		<li><a href="usermain.php">Book</a></li>
		<li><a href="mybook.php">My Booking</a></li>
		
		<li><a href="udetails.php">User details</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
	<?php
		session_start();
		$username=$_SESSION['uname'];

		if (empty($username)) {
			header('location:ulogin.php');

		}
		echo "Welcome $username";

		?>
</nav>
</header>

<h1>Your Details</h1>


<?php
// $username = $_POST['uname'];

$conn= new mysqli("localhost:3306","jiofreet_hotel","hotel@123","jiofreet_hotel");
if($conn->error)
{
	echo "connection error.$conn->error";
	exit();
}
$result = $conn->query("select * from reg where uname='$username'");
if(!$result)
{
	echo "query error";
	exit();
}
if($result->num_rows > 0)
{
	while ($row=$result->fetch_assoc()) 
	{
		if(($row['uname'] == $username))
		echo '<div class="userde">';

		echo"Your Username :".$row['uname']."<br>";
		echo"Your FullName:".$row['fname']."<br>";
		echo"Your Email-ID :".$row['mail']."<br>";
		echo"Your Password :".$row['password']."<br>";
		echo"Your Birthdate :".$row['dob']."<br>";
		echo"Your State :".$row['state']."<br>";
		echo"Your Pincode :".$row['code']."<br>";
		echo"Your Country :".$row['country']."<br>";

		echo '</div>';


	}

}
else
echo"Invalid Id/User name";
$conn->close();
?>







<?php
include("footer.html")
?>
</body>
</html>