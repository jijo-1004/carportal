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

include 'projectshome.php';

?>
<div id="container">

	<?php
	include 'dbconnect.php';
	$sql="select * from car,book where car.status='1,2'";
	$data=mysqli_query($con,$sql);
	
	?>
<table border="1">
<tr><th>Slno</th><th>model</th><th>basicfeatures</th><th colspan="2"></th></tr>
<?php
$i=1;
while($row=mysqli_fetch_array($data)){
	echo "<tr><td>$i</td><td>$row[model]</td><td>$row[basicfeatures]</td>";
	if($row['status']==0)
		echo "<td><a href='modelapprove.php?id=$row[carid]'>delete</a></td>";
	else
		echo "<td><a href='modelreject.php?id=$row[carid]'>Reject</a></td>";
	echo "</tr>";
	$i++;
}
?>
</table>

	


  <!-- tab panes -->
  <div id="prod_wrapper">
    <div id="panes>
	
	
</div>
<!-- END footer -->
</body>
<style>



</style>
</html>