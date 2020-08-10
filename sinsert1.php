<!DOCTYPE html >
<?php
	include("check.php");
	include("header.htm"); 
	 include("com.php");
	include ("methods.php");
	$name=$_POST['name'];
	$regno=$_POST['regno'];
	$class=$_POST['class'];
	$name=ucfirst($name);
	$name=base64_encode($name);
	$regno=base64_encode($regno);
	$class=base64_encode($class);
	if(!isset($name) && !isset($regno) && $class!='1')
	{
			header("location:sinsert.php");
	}
	$p=uniqid();
	 $pin=substr($p,7,13);
	$pin=base64_encode($pin);
	 
	$t3="insert into Student (Name,Regno,Class,Pin) value('$name','$regno','$class','$pin')";
	$q=mysql_query($t3);
	
	if($q)
	 {error("seccussfully inserted","sinsert.php");}
	else
	 {error("Check the Register number","sinsert.php");}
	mysql_close();	
?>
 <?php
 
	include("footer.htm");
	
?>
