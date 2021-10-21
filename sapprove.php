<?php


$sid=$_GET['id'];

include 'dbconnect.php';
$sql="update login set status='1' where username='$sid'";
if(mysqli_query($con,$sql))
	echo "<script>alert('Approved!');location.href='srequest.php';</script>";


?>