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
<!-- <header>
	<img src="img/hotel1.jpg">
</header> -->

<header>
<nav>
	<ul>
		<li><a href="adminhome.php">Booking</a></li>
		<li><a href="userinquiry">Inquiry</a></li>
		<li><a href="adminuserdetails.php">User details</a></li>
		<li><a href="#">Logout</a></li>
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




<section id="uplan">
<h1>Your Plan</h1>

</section>





<?php
include("footer.html")
?>
</body>
</html>