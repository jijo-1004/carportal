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

include 'shomemenu.php';

?>
<div id="container">
<?php
include 'dbconnect.php';
	$carid=$_GET['id'];
	$sql="SELECT * FROM car NATURAL JOIN cardetails NATURAL JOIN uploadimg NATURAL JOIN uploadvidz where car.carid=cardetails.carid AND car.carid=uploadimg.carid AND car.carid=uploadvidz.carid AND carid='$carid'";
	$data=mysqli_query($con,$sql);
	$i=1;

	while($row=mysqli_fetch_array($data)){
	?>
<table border="1"><tr></tr>
<tr><td><img src='image/<?php echo $row['imageid']; ?>' class='responsive'></td><td>
<video width='300' controls>
  <source src='uploads/<?php echo $row['vid'];?>'>
    <source src='pic/med.ogg' type='video/ogg'>
  Your browser does not support HTML5 video.
</video>
</td></tr><tr><td>Model</td><td><?php echo $row['model'];?></td></tr><tr><td>Mileage</td><td><?php echo $row['mileage']; ?></td></tr><tr><td>Maxpower</td><td><?php echo$row['max power']; ?></td></tr><tr><td>FuelType</td><td><?php echo $row['fuel type'];?></td></tr><tr><td>EnginType</td><td><?php echo$row['engine type'];?></td></tr><tr><td>length</td><td><?php echo$row['length'];?></td></tr>
<tr><td>width</td><td><?php echo$row['width'];?></td></tr><tr><td>height</td><td><?php echo$row['height'];?></td></tr><tr><td>Wheelbase</td><td><?php echo$row['wheel base'];?></td></tr><tr><td>Groundclearance</td><td><?php echo$row['ground clearance'];?></td></tr><tr><td>Kerbweight</td><td><?php echo $row['kerb weight'];?></td></tr><tr><td>Doors</td><td><?php echo$row['doors'];?></td></tr><tr><td>Seatingcapacity</td><td><?php echo$row['seating capacity'];?></td></tr><tr><td>Noofseatingrows</td><td><?php echo$row['no of seatingrows'];?></td></tr><tr><td>Bootspace</td><td><?php echo$row['bootspace'];?></td></tr><tr><td>Fueltankcapacity</td><td><?php echo$row['fuel tankcapacity'];?></td></tr><tr><td>Wheels</td><td><?php echo$row['wheels'];?></td></tr><tr><td>Sparewheel</td><td><?php echo$row['sparewheel'];?></td></tr><tr><td>Fronttyres</td><td><?php echo$row['front tyres'];?></td></tr><tr><td>Reartyres</td><td><?php echo$row['rear tyres'];?></td></tr><tr><td>Amount</td><td><?php echo$row['amount'];?></td></tr>
<?php
$i++;
}
?>


</table>
	


  <!-- tab panes -->
  <div id="prod_wrapper">
    <div id="panes">
	
	
</div>
<!-- END footer -->
</body>
<style>


}
</style>
</html>