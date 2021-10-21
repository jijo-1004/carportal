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
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
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
  <div id="prod_wrapper">
    <div id="panes">
     	

<?php

$i=1;
 session_start();
 
include 'dbconnect.php';
$user=$_SESSION['username'];
	$sql="select * FROM register WHERE email='$user'";
	$data=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($data);
	?> <form action='' method="POST">


<center>
<table>
	
		<tr><td>Name:</td>   <td><input type='text'value='<?php echo$row['Name'];?>'name='name'></td></tr>
		<tr><td>Address:</td>   <td><input type="text" value='<?php echo$row['address'];?>' name='address'></td></tr>
		<tr><td>City:</td>   <td><input type='text'value='<?php echo$row['city'];?>'name='city'></td></tr>
		<tr><td>state     </td>        <td><input type="text" value='<?php echo$row['state'];?>'name="state"></td></tr>
<tr><td>PhoneNumber    </td>   <td><input type="text"value='<?php echo$row['phone'];?>' name="phno"></td></tr>
<tr><td>Dob  </td>             <td><input type="date" value='<?php echo$row['dob'];?>'name="dob"></td></tr>
<tr><td>email     </td>        <td><input type="email"value='<?php echo$row['email'];?>' name="email" required></td></tr>
<tr><td><input type="submit" name="submit1" value="confirm"></td></tr>
		<?php
     
  
if(isset($_POST['submit1'])){$id=$_SESSION['username'];
		   $sql="UPDATE `register` SET `name`='$_POST[name]',`address`='$_POST[address]',`city`='$_POST[city]',`state`='$_POST[state]',`phone`='$_POST[phno]',`dob`='$_POST[dob]',`email`='$_POST[email]'  WHERE email='$user'";
           if(mysqli_query($con,$sql))
           {
           	echo "<script>alert('Profile Updated!Refresh the page');</script>";
           } 
		      

}
		
		
		
		?><tr><td><h2>CHANGE PASSWORD</h2></td></tr>
		<tr><td>Current password</td>   <td><input type='password'name='cpswd'></td></tr>
		<tr><td>New password:</td>   <td><input type='password'name='npswd'></td></tr>
		<tr><td>Confirm password:</td>   <td><input type='password'name='cpwd'></td></tr>
		<tr><td><input type="submit" name="submit2" value="confirm"></td></tr>
		<?php
		   $se="SELECT * FROM login where email='$_SESSION[username]'";
		   $pe=mysqli_query($con,$se);
		   if(isset($_POST['submit2'])){
			   $row=mysqli_fetch_array($pe);
			   if($_POST['cpswd']==$row['password'])
			   {
				   $new=$_POST['npswd'];
				   $cf=$_POST['cpwd'];
				   			   
				   if($new==$cf)
				   {
					   
					$up="UPDATE `login` SET `password`='$new' WHERE email='$user'";
					$us=mysqli_query($con,$up);	
					echo "<script>alert('Profile Updated!Refresh the page');</script>";
				   }
					else{
						
						echo "<script>alert('Incorrect Password ');</script>";
					}
			   }else{
				   echo "<script>alert('Incorrect password!');</script>";
			   }
		   }
		?>
		
		
		
		
</table></center>
</form>
<style>
.responsive {
  width: 30%;
  height: auto;
}
</style>    <!-- END navigator -->
  </div>
  <!-- END prod wrapper -->
  
   
</div></div>
<!-- END footer -->
</body>
</html>s