<?php


$id=$_GET['id'];

include 'dbconnect.php';
$sql="update car set status='0' where carid='$id'";
if(mysqli_query($con,$sql))
	echo "<script>alert('Instack!');location.href='ourproduct.php';</script>";


?>