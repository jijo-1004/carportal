<!DOCTYPE HTML>
<head>
<title>CAR PORTALS</title>
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
  <!-- tab panes -->
 
<?php
$sname=$_SESSION['username'];
$i=1;
include 'dbconnect.php';
  $sql="SELECT * FROM car,uploadvidz WHERE car.carid=uploadvidz.carid AND username='$sname'";
  $data=mysqli_query($con,$sql);
  while($row=mysqli_fetch_array($data)){?>
    <video width="200" controls>
      <source src="uploads/<?php echo$row['vid'];?>" >
      <source src="pic/med.ogg" type="video/ogg">
      Your browser does not support HTML5 video.
    </video>
    
  <?php }
?>

</div>
<!-- END footer -->
</body>
</html>