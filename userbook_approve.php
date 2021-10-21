<?php


$id=$_GET['id'];
$email=$_GET['mail'];
include 'dbconnect.php';
$sql="update book set bstatus='2' where email='$email' AND carid='$id'";
if(mysqli_query($con,$sql))
{
	$sq="UPDATE car SET regstatus='2' WHERE carid='$id'";
	mysqli_query($con,$sq);
	echo "<script>alert('Approved!');location.href='rrequest.php';</script>";

}
	


?>