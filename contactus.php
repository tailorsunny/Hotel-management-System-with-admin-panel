<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact US</title>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
</head>
<body>
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

<section id="contact">
<?php
if(!isset($_POST["submit"]))
{
?>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
	<h1>Contact Us</h1>
		<!-- <label for="name">Username : </label> -->
        <input type="text" id="usr" name="uname" placeholder="Enter Your Username" required><br/>
       <!--  <label for="name">Full Name : </label> -->
        <input type="text" id="fname" name="fname" placeholder="Enter Your Full Name" required><br/>
        <!-- <label for="mail">Email Id : </label> -->
        <input type="text" id="email" name="email" placeholder="Enter Your Email Id" required><br/>
       <!--  <label for="number" >Mobile Number : </label> -->
        <input type="text" id="num" name="number" placeholder="Enter Your Mobile Number" required><br/>
       <!--  <label for="message">Message : </label> -->
        <textarea rows="4" cols="50" name="message" placeholder="Enter Your Message" required></textarea>
	
	<input type="submit" value="Send" name="submit">
</form>
	
</section>
<?php
}
else{
	if (isset($_POST["uname"]))
	 {
		$uname=$_POST["uname"];
		$fname=$_POST["fname"];
		$email=$_POST["email"];
		$number=$_POST["number"];
		$message=$_POST["message"];

		$message=wordwrap($message,70);
		mail("tailorsunny0@gmail.com",$message,"Username:$uname\n,fisrtname:$fname\n,email:$email\n,number:$number\n,message:$message\n");
		echo "Thank you for sending us feedback.";
	}
}
?>
<footer>
	<div class="footer1">
		<h3>About Us</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

	</div>
<div class="footer1">
	<h3 class="left1">Menu</h3>
<ul>
<li><a href="#">Service</a></li>
<li><a href="#">Restaurent</a></li>
<li><a href="#">Contactus</a></li>
<li><a href="#">Login</a></li>
</ul>
</div>

<div class="footer1">
	<h3>Social Links</h3>

	<i class="fa fa-facebook-official" aria-hidden="true"></i>
	<i class="fa fa-twitter" aria-hidden="true"></i>
	<i class="fa fa-google-plus" aria-hidden="true"></i>
	<i class="fa fa-instagram" aria-hidden="true"></i>	
	
</div>
	
</footer>
<div class="footer2">
<p>Copyrights @ 2018</p>
</div>

</body>
</html>