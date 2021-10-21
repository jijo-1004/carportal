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
  <div id="prod_wrapper">
    <div id="panes">
     
	 
	 <form action='' method="POST"><center><table>

<tr><td>Select Showroom</td><td><select name="showroom" onChange="loadDoc()"><option>select</option>

<?php
$con=new mysqli('localhost','root','','test')or die("ERROR".mysqli_error($con));


 $qr="select * from sregister";
 $data=mysqli_query($con,$qr);
 while($row=mysqli_fetch_array($data))
 {
         echo"<option value='$row[sid]'>".$row['sname']."</option>";
 }
 ?>
 </select>
 </td>
 </tr>
 <tr><td>Select City</td><td><select name="brand" onChange="loadDoc()"><option>select</option>

<?php
$con=new mysqli('localhost','root','','test')or die("ERROR".mysqli_error($con));


 $qr="select * from sregister";
 $data=mysqli_query($con,$qr);
 while($row=mysqli_fetch_array($data))
 {
         echo"<option value='$row[city]'>".$row['city']."</option>";
 }
 ?>
 </select>
 </td>
 </tr>

 <tr><td></td>
 <td><input type="submit" name="submit" value="search"></td>
 
 </tr>
  <?php
 if(isset($_POST['submit']))
    {
   ?>
   <table>

<?php
$i=1;
$brand=$_POST['brand'];
$showroom=$_POST['showroom'];
include 'dbconnect.php';
  $sql="SELECT * FROM sregister where sid='$showroom' AND city='$brand'";
  $data=mysqli_query($con,$sql);
  while($row=mysqli_fetch_array($data))
  {?>
   <tr><td>EMAIL:</td><td><?php echo$row['email'];?></td></tr>
    <tr><td>ADDRESS:</td><td><?php echo$row['address'];?></td></tr>  
    <tr><td>CITY:</td><td><?php echo$row['city'];?></td></tr>
    <tr><td>STATE:</td><td><?php echo$row['state'];?></td></tr>
    <tr><td>PHONE NUMBER:</td><td><?php echo$row['phno'];?></td></tr>

       
  <?php
  }
?>
 
 
 </table>

 <?php
 }
 ?>
</center>
    <!-- END navigator -->
  </div>
  <!-- END prod wrapper -->
  
   
</div></div>
<!-- END footer -->
</body>
</html>