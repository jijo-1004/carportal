<?php
  session_start();
  if(($_SESSION['login'])==0||($_SESSION['user'])!="showroom")
    {   
 header('location:login.php');
 }
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
<body>
<!-- Main Menu -->
<?php include 'shomemenu.php'?>
<div id="container">

  <!-- tab panes -->
  <div id="prod_wrapper">
    <div id="panes">
      <div> <img src="img/demo/1.jpg" alt="">
        <h2>Wagon R</h2>
        <p>Maruti Wagon R is a 5 seater hatchback car launched at a base price of Rs. 4.46 lakh in January 2019 by Maruti Suzuki in India. Wagon R 2019 is available in petrol engine only . Wagon R 2019 petrol is powered by 998cc and 1197cc engine claiming mileage of 22.5kmpl. ... Wagon R 2019 also comes with automatic transmission. </p>
        <p style="text-align:right; margin-right: 16px"><a href="" class="button">More Info</a> <a href="" class="button">Buy Now</a></p>
      </div>
      <div> <img src="img/demo/2.jpg" alt="">
        <h2>Honda City</h2>
        <p>The classic Honda City contour is unmistakable but the surprises will thrill you too. It is a design vision that echoes the City’s blue blooded sedan charm. A look that adds panache and exhilaration to the game. It is an overpowering presence that meets a brand new attitude.  </p>
        <p style="text-align:right; margin-right: 16px"><a href="" class="button">More Info</a> <a href="" class="button">Buy Now</a></p>
      </div>
      <div> <img src="abc.jpeg" alt="">
        <h2>Mauris elementum</h2>
        <p>Nulla hendrerit commodo tortor, vitae elementum magna convallis nec. Nam tempor nibh a purus aliquam et adipiscing elit gravida. Ut vitae nunc a libero volutpat gravida. Nullam egestas mi sit amet dui scelerisque eu laoreet nisi ultrices. Ut vitae nunc a libero volutpat gravida. Nam tempor nibh a purus aliquam. </p>
        <p style="text-align:right; margin-right: 16px"><a href="" class="button">More Info</a> <a href="" class="button">Buy Now</a></p>
      </div>
      <div> <img src="img/demo/4.jpg" alt="">
        <h2>Nam tempor nibh</h2>
        <p>Nulla hendrerit commodo tortor, vitae elementum magna convallis nec. Nam tempor nibh a purus aliquam et adipiscing elit gravida. Ut vitae nunc a libero volutpat gravida. Nullam egestas mi sit amet dui scelerisque eu laoreet nisi ultrices. Ut vitae nunc a libero volutpat gravida. Nam tempor nibh a purus aliquam. </p>
        <p style="text-align:right; margin-right: 16px"><a href="" class="button">More Info</a> <a href="" class="button">Buy Now</a></p>
      </div>
      <div> <img src="img/demo/5.jpg" alt="">
        <h2>Supercar</h2>
        <p>Nulla hendrerit commodo tortor, vitae elementum magna convallis nec. Nam tempor nibh a purus aliquam et adipiscing elit gravida. Ut vitae nunc a libero volutpat gravida. Nullam egestas mi sit amet dui scelerisque eu laoreet nisi ultrices. Ut vitae nunc a libero volutpat gravida. Nam tempor nibh a purus aliquam. </p>
        <p style="text-align:right; margin-right: 16px"><a href="" class="button">More Info</a> <a href="" class="button">Buy Now</a></p>
      </div>
    </div>
    <!-- END tab panes -->
    <br clear="all">
    <!-- navigator -->
    <div id="prod_nav">
      <ul>
        <li><a href=""><img src="img/demo/1.jpg" width="160" height="100"alt=""><strong>Wagonr</strong></a></li>
        <li><a href=""><img src="img/demo/2.jpg" width="160" height="100"alt=""><strong>HondaCity</strong></a></li>
        <li><a href=""><img src="img/demo/3.jpg" width="160" height="100"alt=""><strong>Swift</strong></a></li>
        <li><a href=""><img src="img/demo/4.jpg" width="160" height="100"alt=""><strong>Alto</strong></a></li>
        <li><a href=""><img src="img/demo/5.jpg" width="160" height="100"alt=""><strong>Honda Amaze</strong></a></li>
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
    <p style="text-align:right; margin-right: 16px; margin-bottom: 15px"></p>
    <div class="heading_bg">
      
    </div>
      </div>
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
        <label for="field5">To</label>
        <input type="email"name="admin"value="admin@gmail.com"readonly>
      </div>
      <div id="form-submit" class="field f_100 clearfix submit">
        <input value="Submit" name="submit" type="submit"><?php
     include 'dbconnect.php';
    if(isset($_POST['submit'])){  
      $sql="INSERT INTO feedback VALUES(NULL,'$_POST[email]','$_POST[message]','$_POST[admin]')";
      if(mysqli_query($con,$sql)){echo"feedback commented";}
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
      <li><a href="">Lorem Ipsum</a></li>
      <li><a href="">Ellem Ciet</a></li>
      <li><a href="">Currivitas</a></li>
      <li><a href="">Salim Aritu</a></li>
    </ul>
  </div>
  <!-- Second Column -->
  <div class="one-fourth">
    <h3>Terms</h3>
    <ul class="footer_links">
      <li><a href="">Lorem Ipsum</a></li>
      <li><a href="">Ellem Ciet</a></li>
      <li><a href="">Currivitas</a></li>
      <li><a href="">Salim Aritu</a></li>
    </ul>
  </div>
  <!-- Third Column -->
 
  <!-- Fourth Column -->
  <div class="one-fourth last">
    <h3>Socialize</h3>
    <img src="img/icon_fb.png" alt=""> <img src="img/icon_twitter.png" alt=""> <img src="img/icon_in.png" alt=""> </div>
  <div style="clear:both"></div>
</div>
      </div> 
    </div>
</div>
<!-- END footer -->
</body>
</html>