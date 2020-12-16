<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hotel Mangement system</title>
	<link rel="stylesheet" type="text/css" href="css/style2.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<style type="text/css">
	.te{
		background: #F75205;
		color: #fff;
		font-size: 120%;
	}
	td{
		font-size: 120%;
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

<h1>Your Booking is successfully done.......</h1>

<table width="50%" align="center" border="1" cellpadding="10">
	
		
	<tr>	
	

<?php
// $username = $_POST['uname'];

$conn= new mysqli("localhost:3306","jiofreet_hotel","hotel@123","jiofreet_hotel");
if($conn->error)
{
	echo "connection error.$conn->error";
	exit();
}
$result = $conn->query("select * from book where name='$username'");
if(!$result)
{
	echo "query error";
	exit();
}
if($result->num_rows > 0)
{
	while ($row=$result->fetch_assoc()) 
	{
		// if(($row['uname'] == $username))
		echo"<tr><td class='te'><center><b>Name</b></td><td>".$row['name']."</td></tr>";
		echo"<tr><td class='te'><center><b>ID</b></td><td>".$row['ids']."</td></tr>";
		echo"<tr><td class='te'><center><b>Name</b></td><td>".$row['name']."</td></tr>";
		echo"<tr><td class='te'><center><b>From</b></td><td>".$row['dfrom']."</td></tr>";
		echo"<tr><td class='te'><center><b>To</b></td><td>".$row['dto']."</td></tr>";
		echo"<tr><td class='te'><center><b>Room Type</b></td><td>".$row['type']."</td></tr>";
		echo"<tr><td class='te'><center><b>Adult</b></td><td>".$row['adult']."</td></tr>";
		echo"<tr><td class='te'><center><b>child</b></td><td>".$row['child']."</td></tr>";
		echo"<tr><td class='te'><center><b>Categories</b></td><td>".$row['cat']."</td></tr>";
		echo"<tr><td class='te'><center><b>Price</b></td><td>".$row['location']."</td></tr>";
		
	


	}

}
else
echo"Invalid Id/User name";
$conn->close();
?>

</tr>
</table>


<?php

include("footer.html")
?>
</body>
</html>