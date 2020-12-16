<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hotel Mangement system</title>
	<link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>
	
<header>
<nav>
	<ul>
		<li><a href="adminhome.php">Todays Booking</a></li>
		<li><a href="#">User details</a></li>
		<li><a href="cancellation.php">cancellation</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
	<?php
		session_start();
		

		
		echo "Welcome admin";

		?>
</nav>
</header> 


<h1>User details</h1>

<table width="100%" border="1" cellpadding="10">
	<tr bgcolor="lightgray">
		<td><center><b>ID</b></center></td>
		<td><center><b>Username</b></center></td>
		<td><center><b>Full Name</b></center></td>
		<td><center><b>Mail</b></center></td>
		<td><center><b>Password</b></center></td>
		<td><center><b>Number</b></center></td>
		<td><center><b>Birhdate</b></center></td>
		<td><center><b>State</b></center></td>
		<td><center><b>Code</b></center></td>
		<td><center><b>Country</b></center></td>
		
	</tr>

<?php
// $username = $_POST['uname'];

$conn= new mysqli("localhost:3306","jiofreet_hotel","hotel@123","jiofreet_hotel");
if($conn->error)
{
	echo "connection error.$conn->error";
	exit();
}
$result = $conn->query("select * from reg");
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
		echo "<tr>";
		echo"<td>".$row['id']."</td>";
		echo"<td>".$row['uname']."</td>";
		echo"<td>".$row['fname']."</td>";
		echo"<td>".$row['mail']."</td>";
		echo"<td>".$row['password']."</td>";
		echo"<td>".$row['number']."</td>";
		echo"<td>".$row['dob']."</td>";
		echo"<td>".$row['state']."</td>";
		echo"<td>".$row['code']."</td>";
		echo"<td>".$row['country']."</td>";

		echo "</tr>";


	}

}
else
echo"Invalid Id/User name";
$conn->close();
?>


</table>

<?php
include("footer.html")
?>
</body>
</html>