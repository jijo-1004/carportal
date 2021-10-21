<?php


$id=$_GET['id'];

include 'dbconnect.php';
$sql="update login set status='0' where username='$id'";
if(mysqli_query($con,$sql))
	echo "<script>alert('Rejected!');location.href='urequest.php';</script>";


?>