<?php
  session_start();
  $_SESSION['login']=0;
?>

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
<body><?php
  include'homemenu.php';
?>    
<div class="container">

      <div class="one-half last">
        <div class="heading_bg">
            <h2>Feedback!</h2>
        </div>

        <form action="" class="TTWForm" method="post">
      
         <div id="field4-container" class="field f_100">
            <label for="field3">Email</label>
            <input type="email"name="email">
            <label for="field4">Message</label>
            <textarea rows="5" cols="20" name="message" id="field4"></textarea>
        </div>
        <div id="form-submit" class="field f_100 clearfix submit">
            <input value="Submit" name="submit" type="submit"><?php
		          include 'dbconnect.php';
		          if(isset($_POST['submit'])){	
			         $sql="INSERT INTO feedback VALUES(NULL,'$_POST[email]','$_POST[message]','admin@gmail.com')";
			         if(mysqli_query($con,$sql)){echo"feedback commented";}
			         }
                ?>

        </div>
        </form>
      </div>
    <div style="clear:both; height: 40px"></div>
</div>
<div class="one-half">
    <div class="heading_bg">
      <h2>About Us</h2>
    </div>
    <blockquote>KURUMA is a japaniese word that means car.This website is very useful for the user who like to bye a car.In this website so many showrooms of different brands</blockquote>
    <p style="text-align:right; margin-right: 16px; margin-bottom: 15px"><a href="#" class="button" style="font-size: 18px">Find out more</a></p>
    
    </div>
  
  <div style="clear:both; height: 40px"></div>
</div>
<!-- END container -->
<div id="footer">
  <!-- First Column -->
  <div class="one-fourth">
    <h3>Useful Links</h3>
    <ul class="footer_links">
      <li><a href="#">Lorem Ipsum</a></li>
      <li><a href="#">Ellem Ciet</a></li>
      <li><a href="#">Currivitas</a></li>
      <li><a href="#">Salim Aritu</a></li>
    </ul>
  </div>
  <!-- Second Column -->
  <div class="one-fourth">
    <h3>Terms</h3>
    <ul class="footer_links">
      <li><a href="#">Lorem Ipsum</a></li>
      <li><a href="#">Ellem Ciet</a></li>
      <li><a href="#">Currivitas</a></li>
      <li><a href="#">Salim Aritu</a></li>
    </ul>
  </div>
  <!-- Third Column -->
  <div class="one-fourth">
    <h3>Information</h3>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sit amet enim id dui tincidunt vestibulum rhoncus a felis.
    <div id="social_icons"> Theme by <a href="http://www.csstemplateheaven.com">CssTemplateHeaven</a><br>
      Photos © <a href="http://dieterschneider.net">Dieter Schneider</a> </div>
  </div>
  <!-- Fourth Column -->
  <div class="one-fourth last">
    <h3>Socialize</h3>
    <img src="img/icon_fb.png" alt=""> <img src="img/icon_twitter.png" alt=""> <img src="img/icon_in.png" alt=""> </div>
  <div style="clear:both"></div>
</div>
<!-- END footer -->
</body>
</html>