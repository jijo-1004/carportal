<?php


$id=$_GET['id'];

include 'dbconnect.php';
$sql="update book,car set book.status='3',car.regstatus='0' where car.carid='$id'";
if(mysqli_query($con,$sql))
	echo "<script>alert('Rejected!');location.href='rrequest.php';</script>";


?>