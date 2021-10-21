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
  <!-- tab panes -->
  <div id="prod_wrapper">
    <div id="panes">
	  
	   <?php
   include('dbconnect.php');
   if(isset($_POST['reserve']))
	{
		
		
			
	$sql="INSERT INTO reserve VALUES('$_POST[name]','$_POST[address]','$_POST[city]','$_POST[state]','$_POST[phno]','$_POST[email]','$_POST[model]','$_POST[sname]','$_POST[sdate]','0')"; 
mysqli_query($con,$sql) or die("ERROR".mysqli_error($con));

  echo"$sql";
	if(mysqli_query($con,$sql)){
		
		echo "<script>alert('Data inserted!');</script>";
	
			}else{
	echo "<script>alert('ERROR!');</script>";
		}
		
		}
	
	
?>
	
	<?php
	//echo $carid=$_GET['id'];//
	?>
	<form action='' method="POST"><center><h1>RESERVATION</h1><br><p>if you want to reserve this car enter the details and click submit button</p><table>
<tr><td>Name    </td>      <td><input type="text" name="name" required></td></tr>
<tr><td>Address          </td> <td><textarea name="address"rows="5" required></textarea></td></tr>
<tr><td>City              </td><td><input type="text" name="city" required></td></tr>
<tr><td>state     </td>        <td><input type="text" name="state" required></td></tr>
<tr><td>PhoneNumber    </td>   <td><input type="number" name="phno" pattern="[0-9]{10}" required></td></tr>
<tr><td>email     </td>        <td><input type="email" name="email" required></td></tr>
<tr><td>Model     </td>        <td><select name="model" onChange="loadDoc()"><option>select</option>

<?php
$con=new mysqli('localhost','root','','test')or die("ERROR".mysqli_error($con));


 $qr="select * from cardetails";
 $data=mysqli_query($con,$qr);
 while($row=mysqli_fetch_array($data))
 {
         echo"<option value='$row[carid]'>".$row['model']."</option>";
 }
 ?>
<tr><td>select showroom</td>        <td><select name="sname"><option>...</option><option>ABS</option><option></option></select></td></tr>
<tr><td>select date     </td>        <td><input type="date" name="sdate" required></td></tr>
<tr><td></td><td><input type=submit value="reserve" name="reserve"></td></tr>
</form>

	  
	  </table></center>

	
	
	
	
	
</div>
<!-- END footer -->
</body>
<style>


}
</style>
</html>