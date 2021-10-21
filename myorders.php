<!DOCTYPE HTML>
<head>
<title>CAR PORTAL</title>
<meta charset="utf-8">
<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>
<!-- CSS Files -->
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="menu/css/simple_menu.css">
<!-- Contact Form -->
<link href="contact-form/css/style.css" media="screen" rel="stylesheet" type="text/css">
<!-- JS Files -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="js/jquery.tools.min.js"></script>
<script>
$(function () {
    $("#prod_nav ul").tabs("#panes > div", {
        effect: 'fade',
        fadeOutSpeed: 400
    });
});
</script>
<script>
$(document).ready(function () {
    $(".pane-list li").click(function () {
        window.location = $(this).find("a").attr("href");
        return false;
    });
});
</script>
</head>
<body>
<?php

include 'usermenu.php';
include 'dbconnect.php';
session_start();
?>
<div id="container">

	<?php
	$name=$_SESSION['username'];
	$sql="SELECT * FROM car,book,uploadimg,uploadvidz WHERE car.carid=uploadimg.carid AND book.carid=uploadvidz.carid AND uploadimg.carid=uploadvidz.carid AND email='$name'";
	$data=mysqli_query($con,$sql);
	
	?>
  <h3>Cars Booked</h3>
<table border="1">
<tr><th>Slno</th><th>Image</th><th>MODEL</th><th>Basic Features</th><th>Booked Date</th><th>Book Status</th></tr>
<?php
$i=1;
while($row=mysqli_fetch_array($data)){
	echo "<tr><td>$i</td><td><img src='image/$row[imageid]'class='responsive'></td>
<td>$row[model]</td><td>$row[basicfeatures]</td><td>$row[date]</td>";
	if($row['bstatus']==1)
		echo "<td>Processing</a></td>";
	if($row['bstatus']==2)
  {
    echo "<td>Approved</a></td>";
  }
  if($row['bstatus']==3)
    {
    echo "<td>Rejected</a></td>";
  }
	echo "</tr>";
	$i++;
}
?>
</table>
<?php
  $name=$_SESSION['username'];
  $sq="SELECT * FROM car,reserve,uploadimg,uploadvidz WHERE car.carid=uploadimg.carid AND reserve.carid=uploadvidz.carid AND uploadimg.carid=uploadvidz.carid AND email='$name'";
  $da=mysqli_query($con,$sq);
  
  ?>
  <h3>Reservation for testdrive</h3>
<table border="1">
<tr><th>Slno</th><th>Image</th><th>MODEL</th><th>Basic Features</th><th>Booked Date</th><th>Reservation Status</th></tr>
<?php
$i=1;
while($row=mysqli_fetch_array($da)){
  echo "<tr><td>$i</td><td><img src='image/$row[imageid]'class='responsive'></td>
<td>$row[model]</td><td>$row[basicfeatures]</td><td>$row[date]</td>";
  if($row['rstatus']==1)
    echo "<td>Processing</a></td>";
  if($row['rstatus']==2)
  {
    echo "<td>Approved</a></td>";
  }
  if($row['rstatus']==3)
    {
    echo "<td>Rejected</a></td>";
  }
  echo "</tr>";
  $i++;
}

?>

</table>
<pre>*Orders are valid for only 8 days from registration</pre>
	<style>
.responsive {
  width: 50%;
  height: auto;
}
</style>


  <!-- tab panes -->
 
	
	
</div>
<!-- END footer -->
</body>
<style>


.badge1 {
   position:relative;
}
.badge1[data-badge]:after {
   content:attr(data-badge);
   position:absolute;
   top:0px;
   right:0px;
   font-size:.72em;
   background:#FF0000;
   color:white;
   width:20px;height:20px;
   text-align:center;
   line-height:18px;
   border-radius:50%;
   box-shadow:0 0 1px #333;
}
</style>
</html>