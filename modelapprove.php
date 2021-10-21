
<?php


$id=$_GET['id'];

include 'dbconnect.php';
$sql="update car set status='1' where carid='$id'";
if(mysqli_query($con,$sql))
	echo "<script>alert('Approved!');location.href='modelrequest.php';</script>";


?>