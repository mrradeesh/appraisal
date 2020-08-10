<link rel="stylesheet" href="style1.css">
<a href='home.php'>setup finished</a>
<?php
	 include("com.php");
	$cu=$_POST['uname'];
	$cp1=$_POST['pass'];
	$cp2=$_POST['pass1'];
	$cp1=$cp1."123";
	$cp1=md5($cp1);
	$cu=md5($cu);
	$t3="insert into Security (username,password) value('$cu','$cp1')";
	mysql_query($t3) or die(mysql_error());
	mysql_close();
	
 

	
	
?>
 
