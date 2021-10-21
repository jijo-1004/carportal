<?php
include 'dbconnect.php';
$sql="SELECT count(*) as no from car where status='0'";
$data=mysqli_query($con,$sql);
if($row=mysqli_fetch_array($data))
{
	echo $row['no'];
}


?>