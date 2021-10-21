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

<form action="" method="post" enctype="multipart/form-data">
    
    
	
	<table>
	<tr><td>Select car</td><td>:</td><td>
	<select name='car'>
	<option disabled>---Select car---</option>
	<?php
	include 'dbconnect.php';
	$sql="select * from car";
	$data=mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($data)){?>
		<option value='<?php echo $row['carid']?>'><?php echo $row['model']?></option>
	<?php }?>

	</select>
	
	</td></tr>
	<tr><td>Select image to upload:</td><td>:</td><td><input type="file" name="fileToUpload" id="fileToUpload">
    </td></tr>
	</table>
	<center><input type="submit" value="Upload Image" name="submit"></center>
	</form>
<?php
	/*
	display image
	$sql="select * from uploadimg ";
	$data=mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($data)){
		echo "<img src='$row[imageid]'><br>";
	}*/
	?>
	
	
<?php
//unlink('uploads/gallery-1.jpg');
if(isset($_POST['submit'])){	
$sname=$_SESSION['username'];	
$target_dir = "image/";
$target_file = $target_dir .$_POST['car'] .basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$image=$_FILES["fileToUpload"]["name"];
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		
	    		$user=$_SESSION['username'];	
		$sql="insert into uploadimg (carid,username,imageid)value('$_POST[car]','$sname','$image')";
		if(mysqli_query($con,$sql)){
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		echo"<br>";
		echo $target_file;
		//include 'img.php';
		}
		else{echo "ERROR";}
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
}
?>
	  
 

  <!-- tab panes -->
  <div id="prod_wrapper">
    <div id="panes">
      </div> 
    </div>
</div>
<!-- END footer -->
</body>
</html>