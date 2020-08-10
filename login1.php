<?php
	include ("com.php");
	
	session_start();
	
	 
	$log=mysql_query("select * from Security") or die(mysql_error());
	while($i=mysql_fetch_array($log)) 
	{
		$username=$i[0];
		$password=$i[1];
		$status=$i[2];
	}
	$p=$_POST['password'];
	$p=$p."123";
	if($username==(md5($_POST['username'])) && $password==(md5($p)) && !isset($_SESSION['sessionid']))// && $status=='N')// &&  !isset($_SESSION['countcheck']))
	{
		//$_SESSION['countcheck']=0;
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		$_SESSION['sessionid']=session_id();
		header("location:mhome.php");
	}
	else

	{
		//echo md5($_POST['username'])."<br>".$username;
		//echo "<br>".md5($_POST['password'])."<br>".$password;
		header("location:alogin1.php");
	}
?>

