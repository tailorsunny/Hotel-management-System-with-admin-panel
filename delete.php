<?php
include("data.php");

$id=$_POST['ids'];

$result = mysqli_query($mysqli,"DELETE FROM book where ids='$id'");

header("Location:mybook.php");

?>