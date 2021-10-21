<?php

$username=$_POST['username'];
$password=$_POST['password'];

$count1=0; $count2=0;
$count1=substr_count($username, "'");
$count2=substr_count($password, "'");
$err=0;
include 'dbconnect.php';
if ($count1>0 || $count2>0)
    $err=1;

//$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }
$sql="SELECT * from login where email='".$username."' and password='".$password."' and status='1'";
$result = mysqli_query($con,$sql);
$flag=0;
$type=0;
while($row = mysqli_fetch_array($result))
  {
 
  $flag=1;
  $type=$row['type'];
 
    session_start();
    $_SESSION['login']=1;
	$_SESSION['user'] = $type; // store session data
    $_SESSION['username'] = $username;


  }
  if($err>0)
	  //echo $flag;
     echo "<script>alert('Invalid Username or Password  ');location.href='login.php';</script>";
    else if($flag==1 && $type=="admin")
  echo "<script>location.href='projectadminhome.php'</script>";
  else if($flag==1 && $type=="user")
  echo "<script>location.href='projectuserhome.php'</script>";
  else if($flag==1 && $type=="showroom")
  echo "<script>location.href='projectshome.php'</script>";
 
  else
  echo "<script>alert('Invalid Username or Password  ');location.href='login.php';</script>";
 
mysqli_close($con);
?>