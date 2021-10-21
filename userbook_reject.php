<?php


$id=$_GET['id'];
$email=$_GET['mail'];
include 'dbconnect.php';
$sql="update book set bstatus='3' where email='$email' and carid='$id'";
if(mysqli_query($con,$sql))
{
	$sq="UPDATE car SET regstatus='0' WHERE carid='$id'";
	mysqli_query($con,$sq);
	echo "<script>alert('Rejected!');location.href='rrequest.php';</script>";

}
?>