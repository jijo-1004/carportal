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

	if ( window.history.replaceState ) {
 		 window.history.replaceState( null, null, window.location.href );
	}

</script>
</head>
<body>
<?php

include 'shomemenu.php';

?>
<?php
   session_start();
    
   ?>
<div id="container">
  <div id="prod_wrapper">
    <div id="panes">
	
   <?php
   include('dbconnect.php');
   $id=autoid("cardetails","carid");
   
   
    if(isset($_POST['add']))
	{
	
		$user=$_SESSION['username'];
			
	$sql="INSERT INTO cardetails VALUES('$id','$user','$_POST[model]','$_POST[mileage]','$_POST[maxpower]','$_POST[fueltype]','$_POST[enginetype]','$_POST[length]','$_POST[width]','$_POST[height]','$_POST[wheelbase]','$_POST[groundclearance]','$_POST[kerbweight]','$_POST[doors]','$_POST[seatingcapacity]','$_POST[noofseatingrows]','$_POST[bootspace]','$_POST[fueltankcapacity]','$_POST[wheels]','$_POST[sparewheels]','$_POST[fronttyres]','$_POST[reartyres]','$_POST[amount]')";
//echo $sql;   
//mysqli_query($con,$sql) or die("ERROR".mysqli_error($con));

	if(mysqli_query($con,$sql)){
		
		$sql="insert into car values('$id','$_POST[model]','0','$_POST[enginetype]','0')";
mysqli_query($con,$sql)or die("ERROR".mysqli_error($con));
	echo "<script>alert('Data inserted!');</script>";
	
			}else{
	echo "<script>alert('ERROR!');</script>";
		}
			
		}
	
	
?>
   
<form action='' method="POST"><center><h1>ADD NEW MODEL</h1><table>
<tr><td>CARID </td> <td><?php echo  $id;?></td></tr>
<tr><td>MODELNAME</td><td><input type="name" name="model"required></td></tr>
<tr><td>MILEAGE</td><td><input type="name" name="mileage"required></td></tr>
<tr><td>MAXPOWER </td><td><input type="text" name="maxpower" required></td></tr>
<tr><td>FUELTYPE   </td>        <td><input type="text" name="fueltype" required></td></tr>
<tr><td>ENGINETYPE   </td>   <td><input type="text" name="enginetype"></td></tr></table>


<h2>DIMENSIONS AND WEIGHT</h2>
<table>
<tr><td>LENGTH          </td> <td><input type="text" name="length" required></td></tr>
<tr><td>WIDTH     </td>        <td><input type="text" name="width" required></td></tr>
<tr><td>HEIGHT     </td>        <td><input type="text" name="height" required></td></tr>
<tr><td>WHEELBASE </td>        <td><input type="text" name="wheelbase" required></td></tr>
<tr><td>GROUNDCLEARANCE</td><td><input type="name" name="groundclearance"></td></tr>
<tr><td>KERBWEIGHT</td><td><input type="name" name="kerbweight"></td></tr></table>

<h2>CAPACITY</h2>
<table>
<tr><td>DOORS</td><td><input type="name" name="doors"></td></tr>
<tr><td>SEATINGCAPACITY</td><td><input type="name" name="seatingcapacity"></td></tr>
<tr><td>NO.OF SEATING ROWS</td><td><input type="name" name="noofseatingrows"></td></tr>
<tr><td>BOOTSPACE</td><td><input type="name" name="bootspace"></td></tr>
<tr><td>FUELTANK CAPACITY</td><td><input type="name" name="fueltankcapacity"></td></tr></table>
<h2>WHEELS AND TYRES</h2>
<table>
<tr><td>WHEELS</td><td><input type="name" name="wheels"></td></tr>
<tr><td>SPAREWHEELS</td><td><input type="name" name="sparewheels"></td></tr>
<tr><td>FRONTTYRES</td><td><input type="name" name="fronttyres"></td></tr>
<tr><td>REARTYRES</td><td><input type="name" name="reartyres"></td></tr></table>
<h2>AMOUNT</h2>
<table>
	<tr><td>AMOUNT</td><td><input type="name" name="amount"></td></tr>
	<tr><td></td><td><input type="submit" value="save" name="add"></td></tr></table>
</form>

	  
	  </table></center>
	  
	  
	  
	  
    <!-- END navigator -->
  </div>
  <!-- END prod wrapper -->
 
   
</div></div>
<!-- END footer -->
</body>
</html>