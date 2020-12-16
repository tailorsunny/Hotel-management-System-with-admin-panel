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
		<li><a href="#">Todays Booking</a></li>
		<li><a href="adminuserdetails.php">User details</a></li>
		<li><a href="cancellation.php">cancellation</a></li>
		<li><a href="logout.php">Logout</a></li>
	</ul>
	<?php
		session_start();
		

		
		echo "Welcome admin";

		?>
</nav>
</header>

<h1>Todays Booking</h1>

<table width="100%" border="1" cellpadding="10">
	<tr bgcolor="lightgray">
		<td><center><b>ID</b></center></td>
		<td><center><b>Name</b></center></td>
		<td><center><b>Adult</b></center></td>
		<td><center><b>Child</b></center></td>
		<td><center><b>categories</b></center></td>
		<td><center><b>Room Type</b></center></td>
		<td><center><b>price</b></center></td>
		<td><center><b>From</b></center></td>
		<td><center><b>To</b></center></td>
		
	</tr>

<?php
// $username = $_POST['uname'];

$conn= new mysqli("localhost:3306","jiofreet_hotel","hotel@123","jiofreet_hotel");
if($conn->error)
{
	echo "connection error.$conn->error";
	exit();
}
$result = $conn->query("select * from book");
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
		echo"<td>".$row['ids']."</td>";
		echo"<td>".$row['name']."</td>";
		echo"<td>".$row['adult']."</td>";
		echo"<td>".$row['child']."</td>";
		echo"<td>".$row['cat']."</td>";
		echo"<td>".$row['type']."</td>";
		echo"<td>".$row['location']."</td>";
		echo"<td>".$row['dfrom']."</td>";
		echo"<td>".$row['dto']."</td>";
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