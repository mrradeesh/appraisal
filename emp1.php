<body class="manage">
 <?php
	include ("header.htm");
	include("form.php");
	include("com.php");
	include("methods.php");
	
	session_start();
	//echo $_SESSION['spass'];
	if(!isset($_SESSION['spass']) && !isset($_SESSION['sreg']))
	{
		header("location.shome.php");
	}
	$empid=$_SESSION['table'];
	$class=$_SESSION['class'];//class of the student
	$dept=$_SESSION['department'];//depatment of student
	$regno=$_SESSION['sreg'];
	$q=mysql_query("SELECT * FROM $empid");// or die(mysq_error());
	$_SESSION['count']=mysql_num_rows($q);
	//echo "<br><br><br><br><br><br><br><br><br><br><br>".mysql_num_rows($q);
	if(mysql_num_rows($q)==0)
	{
		mysql_query("update $stu set Flag='y' where Regno='$regno'");// or die(mysq_error());
		mysql_query("drop table $empid");
		unset($_SESSION['sreg']);
		unset($_SESSION['spass']);
		error("Thank you for your Feedback","home.php");
	}

	$j=mysql_fetch_array($q);
	//echo "<br><br><br><br><br><br><br><br><br><br><br>".$j['Department1']."<br>".$dept;
	//$_SESSION['id']=$j['Empid'];
	 
		if($j['Department']==$dept)
		{
				
			if($j['Semester']==$class)
			{
				$_SESSION['id']=$j['Empid'];
				$_SESSION['Subject']=$j['Subject'];
	smain(base64_decode($j['Name']),base64_decode($j['Empid']),base64_decode($j['Department']),base64_decode($j['Semester']),base64_decode($j['Subject']));
			}
		}	 
?>
<?php
 
	include("footer.htm");
	
?>	 

