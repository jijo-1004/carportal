
<?php


$id=$_GET['id'];

include 'dbconnect.php';
$sql="update reserve set status='1' where carid='$id'";
if(mysqli_query($con,$sql))
	echo "<script>alert('Approved!');location.href='rrequest.php';</script>";
     else
     	{"<script>alert('error!');location.href='rrequest.php';</script>";
 	}

?>