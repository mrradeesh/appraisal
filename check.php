<?php
	session_start();
	$u=$_SESSION['username'];
	$p=$_SESSION['password'];
	
	// echo $_SESSION['sessionid']."<br>".session_id();
 	if(!isset($u) || !isset($p) || $_SESSION['sessionid']!=session_id())
	{
		header("location:home.php");
	}
?>
