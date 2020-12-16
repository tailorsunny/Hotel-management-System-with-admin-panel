<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width ,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Hotel Mangement system</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

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

<section id="home">
<h2>WELCOME TO BLUEMOON HOTEL</h2>
<div class="float hide">
<video autoplay muted loop>
  <source src="videoplayback.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
</div>

<div class="float">
<form method="post" action="search.php">
<h4>CHECK HERE</h4>
	<p><input type="name" name="" placeholder="Name"/></p>
	<p><input type="date" name=""  />
	<input type="date" name="" /></p>
	<div class="select">
	<select name="type" required="">
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
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5+</option>
	</select>
	<select name="child">
		<option value="select">Child</option>
		<option value="0">0</option>
		<option value="1">1</option>
		<option value="2">2</option>
		
	</select>
</div>

	<!-- <input type="button" name="search" value="check" /> -->
	<input type="submit" class="button" name="search" value="Search">
</form>
</div>
</section>


<section>
<div class="one" id="first">
<td><i class="fa fa-building-o" aria-hidden="true"></i></td>
<h3>Hotel</h3>	
</div>
<div class="one" id="two">
<td><i class="fa fa-users" aria-hidden="true"></i></td>
<h3>Facility</h3>	
</div>
<div class="one" id="three">
<td><i class="fa fa-star" aria-hidden="true"></i></td>
<h3>Award</h3>	
</div>
<div class="one" id="four">
<td><i class="fa fa-line-chart" aria-hidden="true"></i></td>
<h3>Growth</h3>	
</div>
</section>

<section id="package">
	
	<div class="row">
	<h2>Package</h2>
		<div class="column">
			<div class="card">
				<img src="img/s2.jpg">
				<div class="container">
					<h2>Non A/C</h2>
					<p class="title">$1200</p>
					<p class="days">3 night/4 days</p>
					<button class="button" onclick='location.href="ulogin.php"'>Book</button>
					</div>
				</div>
			</div>

			<div class="column">
			<div class="card">
				<img src="img/s3.jpg">
				<div class="container">
					<h2>A/C</h2>
					<p class="title">$1800</p>
					<p class="days">3 night/4 days</p>
					<button class="button" onclick='location.href="ulogin.php"'>Book</button>
					</div>
				</div>
			</div>

			<div class="column c">
			<div class="card center">
				<img src="img/s1.jpg">
				<div class="container">
					<h2>Guest A/C</h2>
					<p class="title">$1400</p>
					<p class="days">3 night/4 days</p>
					<button class="button" onclick='location.href="ulogin.php"'>Book</button>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="column">
			<div class="card">
				<img src="img/s2.jpg">
				<div class="container">
					<h2>Guest Non A/c</h2>
					<p class="title">$1200</p>
					<p class="days">3 night/4 days</p>
					<button class="button" onclick='location.href="ulogin.php"'>Book</button>
					</div>
				</div>
			</div>

			<div class="column">
			<div class="card">
				<img src="img/s3.jpg">
				<div class="container">
					<h2>A/c Double</h2>
					<p class="title">$2800</p>
				<p class="days">3 night/4 days</p>
					<button class="button" onclick='location.href="ulogin.php"'>Book</button>
					</div>
				</div>
			</div>

			<div class="column c">
			<div class="card center">
				<img src="img/s1.jpg">
				<div class="container">
					<h2>A/c Single</h2>
					<p class="title">$2000</p>
					<p class="days">3 night/4 days</p>
					<button class="button" onclick='location.href="ulogin.php"'>Book</button>
					</div>
				</div>
			</div>
		
	</div>
	
</section>
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

	<a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
	<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
	<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
	<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
	
</div>
	
</footer>
<div class="footer2">
<p>Copyrights @ 2018</p>
</div>


</body>
</html>