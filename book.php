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
<h1>Book</h1>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
			<table align="center">
			<tr>
					<img src='data:image/jpeg;base64,".base64_encode($res['image'])."' height='100' width='100'>
				</tr>
				<tr>
					<td>Name: </td>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>
					<td>From: </td>
					<td><input type="text" name="from"></td>
				</tr>
				<tr>
					<td>To: </td>
					<td><input type="text" name="to"></td>
				</tr>
				<tr>
					<td>Room Type: </td>
					<td><input type="text" name="room" value='<?php echo $row ['type'];?>'></td>
				</tr>
				<tr>
					<td>Adult: </td>
					<td><input type="text" name="adult" value='<?php echo $row ['type'];?>'></td>
				</tr>
				<tr>
					<td>Child: </td>
					<td><input type="text" name="child" value='<?php echo $row ['type'];?>'></td>
				</tr>
				<tr>
					<td>categories: </td>
					<td><input type="text" name="cat" value='<?php echo $row ['type'];?>'></td>
				</tr>
				<tr>
					<td>Room Type: </td>
					<td><input type="text" name="type" value='<?php echo $row ['type'];?>'></td>
				</tr>
				<tr>
					<td>Price: </td>
					<td><input type="text" name="location" value='<?php echo $row ['type'];?>'></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Book"></td>
				</tr>
			</table>
		</form>

<?php

include("footer.html")
?>
</body>
</html>