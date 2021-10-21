<?php


$id=$_GET['id'];

include 'dbconnect.php';
$sql="update car set status='2' where carid='$id'";
if(mysqli_query($con,$sql))
	echo "<script>alert('sold out!');location.href='ourproduct.php';</script>";


?>