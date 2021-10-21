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

include 'admin_menu.php';

?>
<div id="container">
 <div id="prod_wrapper">
    <div id="panes">
	<?php
	//include 'dbconnect.php';
	$sql="SELECT * FROM car,uploadimg,uploadvidz WHERE car.carid=uploadimg.carid AND car.carid=uploadvidz.carid";
	$data=mysqli_query($con,$sql);
	
	?>
<table border="1">
<tr><th>Slno</th><th>Image</th><th>Video</th><th>MODEL</th><th>Basic Features</th><th>Action</th></tr>
<?php
$i=1;
while($row=mysqli_fetch_array($data)){
	echo "<tr><td>$i</td><td><img src='image/$row[imageid]'class='responsive'></td>
<td>
<video width='200' controls>
  <source src='uploads/$row[vid]' >
    <source src='pic/med.ogg' type='video/ogg'>
  Your browser does not support HTML5 video.
</video>
</td>

  <td>$row[model]</td><td>$row[basicfeatures]</td>";
	if($row['status']==0)
		echo "<td><a href='modelapprove.php?id=$row[carid]'>Approve</a></td>";
	else
		echo "<td><a href='modelreject.php?id=$row[carid]'>Reject</a></td>";
	echo "</tr>";
	$i++;
}
?>
</table>

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