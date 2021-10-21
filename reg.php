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
<body><div>
<?php
include 'homemenu.php'	
?>
	<?php
   include('dbconnect.php');
   $id=autoid("register","id");
   
   
    if(isset($_POST['userreg']))
	{
		if($_POST['pswd']==$_POST['cpswd']){
			$flag=0;
			$sql="select * from register";
			$data=mysqli_query($con,$sql);
			while($row=mysqli_fetch_array($data))
			{
				if($_POST['email']==$row['email'])
					$flag=1;
			}
			if($flag==0){
			
	$sql="INSERT INTO register VALUES('$id','$_POST[name]','$_POST[address]','$_POST[city]','$_POST[state]','$_POST[phno]','$_POST[dob]','$_POST[email]')";
//echo $sql;   

//////////////////////////////////////////////////////////


/////////////////////////////////////////////////////////
   
	if(mysqli_query($con,$sql)){
		
		$sql="insert into login values('$id','$_POST[email]','$_POST[pswd]','user','0')";
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
<form action='' method="POST"><center><h1>REGISTRATION</h1><table><div>
<tr><td>ID </td> <td><input type="text" name=id1 value="<?php echo $id;?>" disabled=disabled><input type="hidden" name=id value="<?php echo $id; ?>"></td></tr>
<tr><td>Username    </td>      <td><input type="text" name="name" required></td></tr>
<tr><td>Address          </td> <td><textarea name="address"rows="5" required></textarea></td></tr>
<tr><td>City              </td><td><input type="text" name="city" required></td></tr>
<tr><td>state     </td>        <td><input type="text" name="state" required></td></tr>
<tr><td>PhoneNumber    </td>   <td><input type="text" name="phno" pattern="[0-9]{10}" required></td></tr>
<tr><td>Dob  </td>             <td><input type="date" name="dob" required></td></tr>
<tr><td>email     </td>        <td><input type="email" name="email" required></td></tr>
<tr><td>Password     </td>        <td><input type="password" name="pswd" placeholder="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required></td></tr>
<tr><td>Confirm password </td>        <td><input type="password" placeholder="Re-enter password" name="cpswd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required></td></tr>
<tr><td></td><td><input type=submit value="save" name="userreg"></td></tr>
</form>
	  </table></center></div>
	  <!-- END navigator -->
  </div>
  <!-- END prod wrapper -->
 
   

<!-- END footer -->
</body>
</html>