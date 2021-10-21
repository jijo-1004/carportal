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

include 'homemenu.php';

?>

	
	<?php
   include('dbconnect.php');
   $id=autoid("sregister","sid");
      if(isset($_POST['showroomreg']))
	{
		if($_POST['pswd']==$_POST['cpswd']){
			$flag=0;
			$sql="select * from sregister";
			$data=mysqli_query($con,$sql);
			while($row=mysqli_fetch_array($data))
			{
				if($_POST['email']==$row['email'])
					$flag=1;
			}
			if($flag==0){
			
	$sql="INSERT INTO sregister VALUES('$id','$_POST[sname]','$_POST[city]','$_POST[state]','$_POST[phno]','$_POST[address]','$_POST[email]')";
   
	if(mysqli_query($con,$sql)){
		
		$sql="insert into login values('$id','$_POST[email]','$_POST[pswd]','showroom','0')";
mysqli_query($con,$sql);
	echo "<script>alert('Data inserted!');</script>";
	}
			}else{
			echo "<script>alert('This information is already exists!');</script>";
		}
			
		}else{
			echo "<script>alert('Incorrect password!');</script>";
		}
	}
?>
<form action='' method="POST"><center><h1>SHOWROOM REGISTRATION</h1><table>
<tr><td>ID </td> <td><input type="text" name=id1 value="<?php echo $id;?>" disabled=disabled><input type="hidden" name=id value="<?php echo $id;?>"></td></tr>

<tr><td>Showroomname</td><td><input type="name" name="sname"></td></tr>
<tr><td>City              </td><td><input type="text" name="city" required></td></tr>
<tr><td>state     </td>        <td><input type="text" name="state" required></td></tr>
<tr><td>PhoneNumber    </td>   <td><input type="text" name="phno" pattern="[0-9]{10}" required></td></tr>
<tr><td>Address          </td> <td><textarea name="address"rows="5" required></textarea></td></tr>
<tr><td>email     </td>        <td><input type="email" name="email" required></td></tr>
<tr><td>Password     </td>        <td><input type="password" name="pswd" placeholder="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required></td></tr>
<tr><td>Confirm password </td>        <td><input type="password" placeholder="Re-enter password" name="cpswd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required></td></tr>
<tr><td></td><td><input type="submit" value="save" name="showroomreg"></td></tr>
</form>
      </table></center>
    <!-- END navigator -->
  </div>
  <!-- END prod wrapper -->
 </div></div>
<!-- END footer -->
</body>
</html>