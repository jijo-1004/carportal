<?php


$id=$_GET['id'];

include 'dbconnect.php';
$sql="update login set status='1' where username='$id'";
if(mysqli_query($con,$sql))
	echo "<script>alert('Approved!');location.href='urequest.php';</script>";


?>