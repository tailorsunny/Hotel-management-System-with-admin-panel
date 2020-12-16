<?php

$server='localhost';
$user='root';
$pass='';
$db='hotel';

$mysqli= mysqli_connect($server,$user,$pass,$db);
if(isset($_POST['submit']))
{

	$name=$_POST['name'];
	$adult=$_POST['adult'];
	$child=$_POST['child'];
	$cat=$_POST['cat'];
	$rtype=$_POST['type'];
	$price=$_POST['location'];
	$dfrom=$_POST['dfrom'];
	$dto=$_POST['dto'];
		

	if (empty($name) ||empty($adult) || empty($child) || empty($cat) || empty($rtype) || empty($price) ||empty($dfrom) || empty($dto)) {
		echo "<font color='red'>id filed is empty.</font><br/>";
	}
	
	if (empty($adult)) {
		echo "<font color='red'>Adult filed is empty.</font><br/>";
	}
	if (empty($child)) {
		echo "<font color='red'>Child filed is empty.</font><br/>";
	}
	if (empty($cat)) {
		echo "<font color='red'>Catag filed is empty.</font><br/>";
	}
	if (empty($rtype)) {
		echo "<font color='red'>Type filed is empty.</font><br/>";
	}
	if (empty($price)) {
		echo "<font color='red'>Price filed is empty.</font><br/>";
	}
	if (empty($dfrom)) {
		echo "<font color='red'>From filed is empty.</font><br/>";
	}
	if (empty($dto)) {
		echo "<font color='red'>TO filed is empty.</font><br/>";
	}
	$result= mysqli_query($mysqli,"INSERT INTO book(name,adult,child,cat,type,location,dfrom,dto) VALUES('$name','$adult','$child','$cat','$rtype','$price','$dfrom','$dto')");
	header("Loaction:succes.php");



}
else{
	// $result= mysqli_query($mysqli,"INSERT INTO book VALUES (name,adult, child,cat,type,location,dfrom,dto)");
	// header("Loaction:succes.php");

	echo "inserted";

}
?>