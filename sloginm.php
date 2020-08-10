<?php
	//include("header.htm");
	include("com.php");
	include("methods.php");
	
	session_start();
	 
	$r=$_POST['reg'];
	$r=base64_encode($r);
	$log=mysql_query("select * from $stu where Regno='$r'");
	if(mysql_num_rows($log)==0)
	{
		error("Sorry Invalid Register No","slogin.php");
	}
	$i=mysql_fetch_array($log);
	
		$password=$i['Pin'];
		$status=$i['Flag'];
	
	//echo $i['Flag'];
	
	if($status=='y')
	{
	 error("Sorry Youre already given youre apinion","slogin.php");
	}

	else if($password==base64_encode($_POST['password']))
	{
		//echo $r;
		$_SESSION['sreg']=$r;
		$_SESSION['spass']=base64_encode($_POST['password']);
		$_SESSION['once']=1;
		header("location:shome.php");
	}
	
	else

	{
		//echo $_POST['password'];
		header("location:slogin1.php");
	}
?>

