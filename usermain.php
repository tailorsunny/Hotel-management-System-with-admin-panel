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

td img{
	height: 100px;
	width: 100px;

	}
	td{
		color: black;
		font-weight: bold;
	}
	.btn{
	background:green;
    height: 40px;
    border: 1px solid #A4A8EA;
    width: 150px;
   margin: 0px auto;
   display: block;
   font-weight: bold;
   font-size: 150%;
   border-radius: 40px;
	}
</style>
<body>
<!-- <div class="top-img"></div> -->


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

<section id="usermain">
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
<h4>Book Now</h4>
	<p><input type="name" name="" placeholder="Name"/></p>
	<p><input type="date" name=""  />
	<input type="date" name="" /></p>
	<div class="select">
	<select name="type">
		<option value="select">SELECT</option>
		<option value="Ac Room">Ac Room</option>
		<option value="Non AC Room">Non AC Room</option>
		<option value="Guest">Guest</option>
		<option value="Guest">Guest</option>
	</select>
	<select name="">
		<option value="Room">Room</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5+</option>
	</select>
</div>
<div class="select">
	<select name="adult">
		<option value="select">Adult</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
	</select>
	<select name="child">
		<option value="select">Child</option>
		<option value="0">0</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="5">5</option>
		
	</select>
<!-- </div> -->

	<!-- <input type="button" name="search" value="check" /> -->
	<input type="submit" class="btn" name="search" value="Search">
</form>
</section>

<?php

 $id = $_POST['type'];
 $id1 = $_POST['adult'];





$conn= new mysqli("localhost:3306","jiofreet_hotel","hotel@123","jiofreet_hotel");
if($conn->error)
{
	echo "connection error.$conn->error";
	exit();
}
$result = $conn->query("select * from room where type='$id' AND adult='$id1'");
if(!$result)
{
	echo "query error";
	exit();
}
if($result->num_rows > 0)
{
	while($res=mysqli_fetch_array($result))
	{
		echo "<table bgcolor='pink' width='100%'>";
		echo"<font color='red' size='20px' padding='10px'><tr>";
		echo "<td><img src='data:image/jpeg;base64,".base64_encode($res['image'])."' height='100' width='100'></td>";
		echo "<td>".$res['cat']."</td>";
		echo "<td>".$res['type']."</td>";
		echo "<font color='red'><td>".$res['adult']."</td></font>";
		echo "<font color='red'><td>".$res['child']."</td></font>";
		echo "<td>".$res['location']."</td>"."<br></font>";
		// echo "<td> <a href=\"delete.php?id=$res[id]\"onclick=\"return confirm('Are you sure you want to delete?')\">Book</button></td>";
		echo "<td><input type='submit' name='book' value='BOOK' class='btn' onClick=location.href=\"books.php?id=$res[rid]\"></td>";
		// echo "<td><a href=\"Mdelete.php?id=$res[id]\" onClick=\"return conform('are you sure you want to delete?')\">DELETE</a></td>";
		echo"</tr>";
		echo "</table></center>";



	}

}
else
			echo"Plese Select Option";
$conn->close();
?>



<?php
include("footer.html")
?>
</body>
</html>