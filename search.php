<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hotel Mangement system</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<style type="text/css">
tr{
	margin: 10px;
	padding: 0;
}
td img{
	height: 100px;
	width: 100px;
	
}
td{
	font-size: 18px;
	color: #333;
	font-weight: 700;
}
</style>
<body>
<!-- <div class="top-img"></div> -->


<header>
<nav>
<a href="#" id="memu-icon"></a>
	<ul>
		<li><a href="#" class="live">HOME</a></li>
		<li><a href="service.php">SERIVCES</a></li>
		<li><a href="restaurent.php">RESTURENT</a></li>
		<li><a href="contactus.php">CONTACT US</a></li>
		<li><a href="ulogin.php">LOGIN</a></li>
		</ul>
	</nav>
</header>

<?php

$id = $_POST['type'];
$id1 = $_POST['adult'];

$conn= new mysqli("localhost:3306","jiofreet_hotel","hotel@123","jiofreet_hotel");
if($conn->error)
{
	echo "connection error.$conn->error";
	exit();
}
$result = $conn->query("select * from room where type='$id' or adult='$id1'");
if(!$result)
{
	echo "query error";
	exit();
}
if($result->num_rows > 0)
{
	while($res=mysqli_fetch_array($result))
	{
		echo "<table bgcolor='pink' width='100%' margin='0' padding='0'>";
		echo"<tr>";
		echo "<td><img src='data:image/jpeg;base64,".base64_encode($res['image'])."' height='100' width='100'></td>";
		echo "<td>".$res['room']."</td>";
		echo "<td>".$res['type']."</td>";
		echo "<font color='red'><td>".$res['adult']."</td></font>";
		echo "<td>".$res['location']."</td>"."<br>";
		// echo "<td> <a href=\"delete.php?id=$res[id]\"onclick=\"return confirm('Are you sure you want to delete?')\">Book</button></td>";
		// echo"</tr>";
		echo "</table></center>";

	}

}
else
			echo"Plese Select Option/Enter Vaild Values";
$conn->close();
?>

<?php
include('footer.html');

?>