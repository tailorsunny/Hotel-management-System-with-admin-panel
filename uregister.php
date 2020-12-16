<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style2.css">
</head>
<body>
<section id="uregister">
<h1>Registration</h1>
<form method="post" action="registration.php">
					
		        <input type="text" name="uname" placeholder="Enter Your Username" required><br/>
               <input type="text" name="fname" placeholder="Enter Your Full Name" required><br/>
               <input type="text" name="mail" placeholder="Enter Your Email Id" required><br/>
               <input type="password" name="password" placeholder="Enter Your password" required><br/>
              <input type="number" name="number" placeholder="Enter Your Mobile Number" required><br/>
              <input type="text" name="dob" placeholder="29/03/1994" required><br/>
              <input type="text" name="state" placeholder="Enter Your State" required><br/>
              <input type="number" name="code" placeholder="Enter Your Zipcode" required><br/>
              <input type="text" name="country" placeholder="Enter Your Country" required><br/>
             
	
	<input type="submit" value="Send" name="send">
</form>
	
</section>


<?php
include('footer.html');
?>


</body>
</html>