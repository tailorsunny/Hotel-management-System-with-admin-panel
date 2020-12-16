<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hotel Mangement system</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style2.css">
</head>

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

<section id="ucan">
<h1>Your booking Details</h1>

<table width="50%" align="center" border="1" cellpadding="10" style="overflow-x:auto">
	<tr bgcolor="green">
		<td><center><b>Booking ID</b></center></td>
		<td><center><b>Your Name</b></center></td>
		<td><center><b>No of Adult</b></center></td>
		<td><center><b>No of Child</b></center></td>
		<td><center><b>Room Categ</b></center></td>
		<td><center><b>Room Type</b></center></td>
		<td><center><b>Price</b></center></td>
		<td><center><b>From</b></center></td>
		<td><center><b>To</b></center></td>
		<td><center><b>Cancel</b></center></td>
		
		
	</tr>

<?php

$conn= new mysqli("localhost:3306","jiofreet_hotel","hotel@123","jiofreet_hotel");
if($conn->error)
{
	echo "connection error.$conn->error";
	exit();
}
$result = $conn->query("SELECT * from book where name='$username'");
if(!$result)
{
	echo "query error";

	
}
while ($row=$result->fetch_assoc()) 
	{
		
		echo "<tr>";
		echo"<td>".$row['ids']."</td>";
		echo"<td>".$row['name']."</td>";
		echo"<td>".$row['adult']."</td>";
		echo"<td>".$row['child']."</td>";
		echo"<td>".$row['cat']."</td>";
		echo"<td>".$row['type']."</td>";
		echo"<td>".$row['location']."</td>";
		echo"<td>".$row['dfrom']."</td>";
		echo"<td>".$row['dto']."</td>";
	
		// echo"<td>".$row['adult']."</td>";
		// echo"<td>".$row['child']."</td>";
		// echo"<td>".$row['cat']."</td>";
		// echo"<td>".$row['type']."</td>";
		// echo"<td>".$row['location']."</td>";
		// echo"<td>".$row['dfrom']."</td>";
		// echo"<td>".$row['dto']."</td>";
		echo "<td><a href='delete.php' onClick=\"return confirm('are you sure you want to delete?')\">Delete</a></td>";
		

		echo "</tr>";


	}


?>
</section>

</table>






<?php
include("footer.html")
?>
</body>
</html>