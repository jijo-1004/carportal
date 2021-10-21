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
<?php
   session_start();
    
   ?>


<div id="container">
<?php
include('dbconnect.php');

if (isset($_POST['upload']))
{
  $sname=$_SESSION['username'];
  $car=$_POST['car'];
  $name=$_FILES['uploadvideo']['name'];
  $type=pathinfo($name,PATHINFO_EXTENSION);
  $cname=str_replace(" ","_",$name);
  $tmp_name=$_FILES['uploadvideo']['tmp_name'];
  $target_path="uploads/";
  if ($type=='mp4'|| $type=='3gpp') {
 # code...
 $target_path=$target_path.basename($cname);
if(move_uploaded_file($_FILES['uploadvideo']['tmp_name'],$target_path))
{
  $sql="INSERT INTO uploadvidz (carid,username,vid) VALUE('".$car."','".$sname."','".$name."')"; 
  $result=mysqli_query($con,$sql);

      echo"Your video ".$cname." has been successfully uploaded";
}
}else
{
 echo "It is not a video file!";
}
}
?> 
 
<form name="video" enctype="multipart/form-data" method="post" action="">
  <table>
  <tr><td>Select car</td><td>:</td><td>
  <select name='car'>
  <option disabled>---Select car---</option>
  <?php
  $sql="SELECT * FROM car ";
  $data=mysqli_query($con,$sql);
  while($row=mysqli_fetch_array($data)){?>
    <option value='<?php echo $row['carid']?>'><?php echo $row['model']?></option>
  <?php }?>

  </select>
  
  </td></tr>
  <tr><td>Select video to upload:</td><td>:</td><td><input name="MAX_FILE_SIZE" value="100000000000000"  type="hidden"/>
<input type="file" name="uploadvideo" />
    </td></tr><tr><td><input type="submit" name="upload" value="SUBMIT" /></td></tr>
  </table>
  <center>
  </form>

  <!-- tab panes -->
  <div id="prod_wrapper">
    <div id="panes">
      </div> 
    </div>
</div>
<!-- END footer -->
</body>
</html>
