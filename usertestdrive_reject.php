<?php


$id=$_GET['id'];
$email=$_GET['mail'];
include 'dbconnect.php';
$sql="update reserve set rstatus='3' where email='$email' and carid='$id'";
if(mysqli_query($con,$sql))
	echo "<script>alert('Rejected!');location.href='testdrive.php';</script>";


?>