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
	  <form action='' method="POST">
	   <?php
  			include('dbconnect.php');
 			session_start();
   			if(isset($_POST['booknow']))
			{
				$user=$_SESSION['username'];
	            $carid=$_GET['id'];    
		        $d=date('y-m-d');
				$test1="SELECT *FROM cardetails where carid='$carid'";
		        $data=mysqli_query($con,$test1);
		        while($row=mysqli_fetch_array($data))
		        {
				    $sname=$row['username'];
				    $model=$row['model'];
				    $amunt=$row['amount'];

			    }
			    $test="SELECT * FROM register WHERE email='$user'";
			    $query=mysqli_query($con,$test);
			    while($row=mysqli_fetch_array($query))
			    {
			        $name=$row['Name'];
			        $address=$row['address'];
			        $city=$row['city'];
			        $state=$row['state'];
			        $phone=$row['phone'];

			    }
				$sql="INSERT INTO book (`carid`, `name`, `address`, `city`, `state`, `phoneno`, `email`, `model`, `sname`, `bstatus`, `amt`, `days`, `date`) VALUES('$carid','$name','$address','$city','$state','$phone','$user','$model','$sname','1','$amunt','8','$d')"; 
				if(mysqli_query($con,$sql))
				{
					$sql="Update car set regstatus='1' where carid=$carid";
					mysqli_query($con,$sql);
					echo "<script>alert('booked!');</script>";
				}
				else
				{ 
					echo"<script>alert('error!');</script>";
				}
			}
?>

	
	<?php
	//echo $carid=$_GET['id'];//
	
	?>
<form action='' method="POST"><center><h1>RESERVATION</h1><br><p>If you want to reserve this car click BOOKNOW.</p>
                                                              <p></p><table>
<tr><td></td><td><input type=submit value="BOOKNOW" name="booknow"></td></tr>
</table></center></form>

	
	
	
	
	
</div>
<!-- END footer -->
</body>
<style>


}
</style>
</html>