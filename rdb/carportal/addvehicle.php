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
    <div class="name">Add Vehicle</div>
    <div class="tag">Powered by Sree Narayana college of Technology</div>
  </div>
  <div id="car"></div>
  <div id="links-bg">
    <div class="toplinks"><a href="http://all-free-download.com/free-website-templates/">Homepage</a></div>
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
         
<h3>Add Model</h3>
<?php
   include('dbconnect.php');
   $id=autoid("addcar","carid");
   
   
    if(isset($_POST['addcar']))
	{
      $sql="INSERT INTO addcar VALUES('$_POST[carid]', '$_POST[modelname]', '$_POST[status]', '$_POST[basicfeatures]','$_POST[estamnt]')";
    
   echo $sql;
	mysql_query($sql);  
	}
?>
<form action="" method="post">
<table>
<pre>
<tr><td>CARID:</td><td><input type="number"  value="<?php echo $id;?>" disabled=disabled><input type="hidden" name=id value="<?php echo $id; ?>></td></tr>
<tr><td>MODELNAME:</td><td><input type="name"></td></tr>
<tr><td>STATUS:</td><td><input type="name"></td></tr>
<tr><td>BASIC FEATURES:</td><td><input type="text"></td></tr>
<tr><td>ESTIMATE AMOUNT:</td><td><input type="number"></td></tr> 
<tr><td><input type=submit value="Save" name="addcar"></td></tr>

    
</pre>
</table></form>
		 </div>
      </div>
      <div id="right">
        <div id="quick_heading">Quick Links</div>
        <div class="quicklinks"><a href="http://all-free-download.com/free-website-templates/">Dodge Durango</a></div>
        <div class="quicklinks"><a href="http://all-free-download.com/free-website-templates/">Auto Insurance</a></div>
        <div class="quicklinks"><a href="http://all-free-download.com/free-website-templates/">Famous Cars</a></div>
        <div class="quicklinks"><a href="http://all-free-download.com/free-website-templates/">Used Cars</a></div>
        <div class="quicklinks"><a href="http://all-free-download.com/free-website-templates/">Free CSS Templates</a></div>
        <div class="quicklinks"><a href="http://all-free-download.com/free-website-templates/">Find What You Seek</a></div>
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
