

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
include 'homemenu.php'	
?>
	
	
	<form action="login_check.php" method="POST">
      <center><h1>LOGIN</h1>
	  <table>
	  <tr><td>USERID</td><td><input type="text"name="username" placeholder="enter your id" required></td></tr>
	  <tr><td>PASSWORD</td><td><input type="password"name="password" placeholder="enter your password" required></td></tr>
	  <tr><td></td><td><input type="submit"name="login" value="Login"></td></tr>
	  
	  
	  
	  </table></center>
	  
	  </form>
	  
	  
    <!-- END navigator -->
  </div>
  <!-- END prod wrapper -->
 
   
</div></div>
<!-- END footer -->
</body>
</html>