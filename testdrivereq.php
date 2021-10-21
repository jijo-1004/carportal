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
	  
	   <?php
	   session_start();
	   $email=$_SESSION['username'];
   include('dbconnect.php');
   if(isset($_POST['reserve']))
	{
		
		$d=date('y-m-d');
			$id=$_GET['id'];
	$sql="INSERT INTO reserve (`carid`, `name`, `address`, `city`, `state`, `phoneno`, `email`, `model`, `sname`, `date`,`rstatus`)VALUES('$id','$_POST[name]','$_POST[address]','$_POST[city]','$_POST[state]','$_POST[phno]','$_POST[email]','$_POST[model]','$_POST[sname]','$d',1)"; 


	if(mysqli_query($con,$sql)){
		
		echo "<script>alert('Car reserved for test drive!check myorders for status');</script>";
	
			}else{
	echo "<script>alert('ERROR!');</script>";
		}
		
		}
	
	
?>
	
	<form action='' method="POST"><center><h1>RESERVATION</h1><br><p>if you want to reserve this car enter the details and click submit button</p><table>
<tr><td>Name    </td>      <td><input type="text" name="name" required></td></tr>
<tr><td>Address          </td> <td><textarea name="address"rows="5" required></textarea></td></tr>
<tr><td>City              </td><td><input type="text" name="city" required></td></tr>
<tr><td>state     </td>        <td><input type="text" name="state" required></td></tr>
<tr><td>PhoneNumber    </td>   <td><input type="number" name="phno" pattern="[0-9]{10}" required></td></tr>
<tr><td>email     </td>        <td><input type="email" name="email" value="<?php echo$email;?>" required></td></tr>
<?php 
$id=$_GET['id'];
$sql="SELECT * FROM cardetails WHERE carid='$id'";
$query=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($query))
{?>
<tr><td>Model</td><td><input type="text" name="model" value="<?php echo $row['model'];?>"required readonly></td></tr></tr>
<tr><td>Showroom</td><td><input type="text" name="sname"value="<?php echo $row['username'];?>" required readonly></td></tr></tr>
<?php
}
?>
<tr><td></td><td><input type=submit value="reserve" name="reserve"></td></tr>
</form>

	  
	  </table></center>

	
	
	
	
	
</div>
<!-- END footer -->
</body>
<style>

</style>
</html>