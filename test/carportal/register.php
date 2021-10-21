<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Cars Website</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="cars-website-template.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="border">
  <div id="left10">
    <div class="name">Car Portal</div>
    <div class="tag">Powered by Sree Narayana college of Technology</div>
  </div>
  <div id="car"></div>
  <div id="links-bg">
    <div class="toplinks"><a href="http://all-free-download.com/free-website-templates/">Home</a></div>
    <div class="toplinks"><a href="http://all-free-download.com/free-website-templates/">About us</a></div>
    <div class="toplinks"><a href="http://all-free-download.com/free-website-templates/">Products</a></div>
    <div class="toplinks"><a href="http://all-free-download.com/free-website-templates/">Services</a></div>
    <div class="toplinks"><a href="http://all-free-download.com/free-website-templates/">Contact us</a></div>
  </div>
  <div id="mainarea">
    <div id="headingbg">Car / Auto Website Title!</div>
    <div class="headingbg2"></div>
    <div style="background-image:url(images/bg2.gif); background-repeat:repeat-y; float:left;">
      <div id="left">
        <div id="main">
		<html>
<head>
<title>Car Portal...</title>
</head>
<body>
<h3><center>User Registration</center></h3>
<pre>
<form action='' method=post >
ID             <input name=id placeholder="name">
Username       <input name=name placeholder="name">
Address        <textarea name=address ></textarea>
City           <input name="city">
State          <input name="state">
PhoneNo        <input type="number" name="phone">
Dob            <input type="date" name="dob">
Email          <input type=email name="email">

<input type=submit value='Save' name=userreg>
</form>
<?php
if(isset($_POST['userreg']))
{
$sql="INSERT INTO register VALUES ('$_POST[id]', '$_POST[name]', '$_POST[address]', '$_POST[city]', '$_POST[state]', '$_POST[phone]', '$_POST[dob]', '$_POST[email]')";
$con=mysql_connect("localhost","root","");
mysql_select_db("testdb");
mysql_query($sql);

}

?>
</pre>
</body>
</html>
</div>
      </div>
      <div id="right">
        <div id="quick_heading">Quick Links</div>
        <div class="quicklinks"><a href="index.php">Login</a></div>
        <div class="quicklinks"><a href="register.php">Register</a></div>
        <div class="quicklinks"><a href="latest.html">Latest models</a></div>
        <div class="quicklinks"><a href="http://all-free-download.com/free-website-templates/"></a></div>
        <div class="quicklinks"><a href="http://all-free-download.com/free-website-templates/"></a></div>
        <div class="quicklinks"><a href="http://all-free-download.com/free-website-templates/"></a></div>
      </div>
    </div>
  </div>
  <div class="headingbg2"></div>
  <div id="bottom">
    <div class="bottomlink"><a href="http://all-free-download.com/free-website-templates/">Home</a></div>
    <div class="sap">|</div>
    <div class="bottomlink"><a href="http://all-free-download.com/free-website-templates/">About Us</a></div>
    <div class="sap">|</div>
    <div class="bottomlink"><a href="http://all-free-download.com/free-website-templates/">Products</a></div>
    <div class="sap">|</div>
    <div class="bottomlink"><a href="http://all-free-download.com/free-website-templates/">Services</a></div>
    <div class="sap">|</div>
    <div class="bottomlink"><a href="http://all-free-download.com/free-website-templates/">Contact</a></div>
  </div>
  <center>
    <div class="quicklinks">Designed by <a href="http://www.cmgtechnologies.com/">CMG Technologies</a>, Free <a href="http://all-free-download.com/free-website-templates/">CSS Templates</a></div>
  </center>
</div>
</div>
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>
