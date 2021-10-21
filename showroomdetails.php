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

include 'admin_menu.php';

?>
<div id="container">

	<?php
	//include 'dbconnect.php';
	$sql="SELECT * FROM sregister";
	$data=mysqli_query($con,$sql);
	
	?>
<table border="1">
<tr><th>Slno</th><th>showroomname</th><th>city</th><th>state</th><th>phno</th><th>address</th><th>email</th><th colspan="2"></th></tr>
<?php
$i=1;
while($row=mysqli_fetch_array($data)){
	echo "<tr><td>$i</td><td>$row[sname]</td><td>$row[city]</td><td>$row[state]</td><td>$row[phno]</td><td>$row[address]</td><td>$row[email]</td>";
	$i++;
}
?>
</table>

	


  <!-- tab panes -->
  <div id="prod_wrapper">
    <div id="panes">
	
	
</div>
<!-- END footer -->
</body>
<style>


.badge1 {
   position:relative;
}
.badge1[data-badge]:after {
   content:attr(data-badge);
   position:absolute;
   top:0px;
   right:0px;
   font-size:.72em;
   background:#FF0000;
   color:white;
   width:20px;height:20px;
   text-align:center;
   line-height:18px;
   border-radius:50%;
   box-shadow:0 0 1px #333;
}
</style>
</html>