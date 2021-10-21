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

?>
<div id="container">
  <!-- tab panes -->
  <div id="prod_wrapper">
    <div id="panes">
	  
	   

<table>

<?php
$i=1;
include 'dbconnect.php';
	$sql="SELECT * FROM car,uploadimg WHERE car.carid=uploadimg.carid AND regstatus=0 AND status=1";
	$data=mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($data)){
		echo "<img src='image/$row[imageid]' class='responsive'>
		";
	}
?>
</table>
<style>
.responsive {
  width: 30%;
  height: auto;
}
</style>
</div>
<!-- END footer -->
</body>
</html>