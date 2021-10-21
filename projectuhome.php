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
  include'usermenu.php';
?><?php
   session_start();
    
   ?>
      
     <div> <img src="img/demo/1.jpg" alt="">
        <h2>Wagon R</h2>
        <p>Maruti Wagon R is a 5 seater hatchback car launched at a base price of Rs. 4.46 lakh in January 2019 by Maruti Suzuki in India. Wagon R 2019 is available in petrol engine only . Wagon R 2019 petrol is powered by 998cc and 1197cc engine claiming mileage of 22.5kmpl. ... Wagon R 2019 also comes with automatic transmission. </p>
        <p style="text-align:right; margin-right: 16px"><a href="#" class="button">More Info</a> <a href="#" class="button">Buy Now</a></p>
      </div>
      <div> <img src="img/demo/2.jpg" alt="">
        <h2>Honda City</h2>
        <p>The classic Honda City contour is unmistakable but the surprises will thrill you too. It is a design vision that echoes the City’s blue blooded sedan charm. A look that adds panache and exhilaration to the game. It is an overpowering presence that meets a brand new attitude.  </p>
        <p style="text-align:right; margin-right: 16px"><a href="#" class="button">More Info</a> <a href="#" class="button">Buy Now</a></p>
      </div>
      <div> <img src="abc.jpeg" alt="">
        <h2>Mauris elementum</h2>
        <p>Nulla hendrerit commodo tortor, vitae elementum magna convallis nec. Nam tempor nibh a purus aliquam et adipiscing elit gravida. Ut vitae nunc a libero volutpat gravida. Nullam egestas mi sit amet dui scelerisque eu laoreet nisi ultrices. Ut vitae nunc a libero volutpat gravida. Nam tempor nibh a purus aliquam. </p>
        <p style="text-align:right; margin-right: 16px"><a href="#" class="button">More Info</a> <a href="#" class="button">Buy Now</a></p>
      </div>
      <div> <img src="img/demo/4.jpg" alt="">
        <h2>Nam tempor nibh</h2>
        <p>Nulla hendrerit commodo tortor, vitae elementum magna convallis nec. Nam tempor nibh a purus aliquam et adipiscing elit gravida. Ut vitae nunc a libero volutpat gravida. Nullam egestas mi sit amet dui scelerisque eu laoreet nisi ultrices. Ut vitae nunc a libero volutpat gravida. Nam tempor nibh a purus aliquam. </p>
        <p style="text-align:right; margin-right: 16px"><a href="#" class="button">More Info</a> <a href="#" class="button">Buy Now</a></p>
      </div>
      <div> <img src="img/demo/5.jpg" alt="">
        <h2>Supercar</h2>
        <p>Nulla hendrerit commodo tortor, vitae elementum magna convallis nec. Nam tempor nibh a purus aliquam et adipiscing elit gravida. Ut vitae nunc a libero volutpat gravida. Nullam egestas mi sit amet dui scelerisque eu laoreet nisi ultrices. Ut vitae nunc a libero volutpat gravida. Nam tempor nibh a purus aliquam. </p>
        <p style="text-align:right; margin-right: 16px"><a href="#" class="button">More Info</a> <a href="#" class="button">Buy Now</a></p>
      </div>
    </div>
    <!-- END tab panes -->
    <br clear="all">
    <!-- navigator -->
    <div id="prod_nav">
      <ul>
        <li><a href="#1"><img src="img/demo/1.jpg" width="160" alt=""><strong>Class aptent</strong> $ 199</a></li>
        <li><a href="#2"><img src="img/demo/2.jpg" width="160" alt=""><strong>Sed dui risus</strong> $ 125</a></li>
        <li><a href="#3"><img src="img/demo/3.jpg" width="160" alt=""><strong>Pellentesque quis</strong> $ 480</a></li>
        <li><a href="#4"><img src="img/demo/4.jpg" width="160" alt=""><strong>Mauris elementum</strong> $ 1099</a></li>
        <li><a href="#5"><img src="img/demo/5.jpg" width="160" alt=""><strong>Cras et malesuada</strong> $ 99</a></li>
      </ul>
    </div>
    <!-- END navigator -->
  </div>
  <!-- END prod wrapper -->
  <div style="clear:both"></div>
  <div class="one-half">
    <div class="heading_bg">
      <h2>About Us</h2>
    </div>
    <blockquote>KURUMA is a japaniese word that means car.This website is very useful for the user who like to bye a car.In this website so many showrooms of different brands</blockquote>
    <p style="text-align:right; margin-right: 16px; margin-bottom: 15px"><a href="#" class="button" style="font-size: 18px">Find out more</a></p>
    <div class="heading_bg">
      <h2>Video</h2>
    </div>
    <iframe src="http://player.vimeo.com/video/22884674?title=0&amp;byline=0&amp;portrait=0&amp;color=ffffff" width="465" height="262" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
  </div>
  <div class="one-half last">
    <div class="heading_bg">
      <h2>Feedback!</h2>
    </div>

    <form action="" class="TTWForm" method="post">
      
      <div id="field4-container" class="field f_100">
        <label for="field4">Message</label>
        <textarea rows="5" cols="20" name="feedback" id="field4"></textarea>
      </div>
      <div id="form-submit" class="field f_100 clearfix submit">
        <input value="Submit"name="submit" type="submit"><?php
		include'dbconnect.php';
		if(isset($_POST['submit'])){
			 $user=$_SESSION['username'];
			 
			 $feedback=$_POST['feedback'];
			 
			 $sql="insert into feedback values('$feedback','$user')";
			  $r=mysqli_query($con,$sql)or die("ERROR".mysqli_error($con));
			 
				}
				
		
		?>
      </div>
    </form>
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