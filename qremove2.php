<?php
	include("check.php");
	include("header.htm"); 
	include("com.php");
	 
	$qno=$_COOKIE['qno'];
	
 	//echo $qno;
	unset($_COOKIE['qno']);
 

	if(!isset($qno))
	{
			header("location:qremove.php");
	}
	 
	// $t="delete from $stu where regno='$regno'";
	 
	$q=mysql_query("delete from $que where Qno='$qno'");
	
	if($q)
{
	//echo "okk";
 
	echo "
<html>
<head>
<meta http-equiv='Refresh' content='1;url=qremove.php'>
<script language='javascript'>
function validate()
			 {
			alert('succussfully deleted');
	}
</script>
</head>
<link rel='stylesheet' href='style1.css'>
<body onunload='validate()'>
 <h1 style='margin-top:200'><br><br><br><br><br>secussfully deleted<br><br></h1>
</body>
</html>	
	";
}
	else
	{
		//echo "not okk";
	echo "<html>
<head>
<meta http-equiv='Refresh' content='1;url=qremove.php'>
<script language='javascript'>
function validate()
			 {
			alert('Failed to Delete');
	}
</script>
</head>
  <link rel='stylesheet' href='style1.css'>  
<body onunload='validate()'>
 <h1 style='margin-top:200'>Failed to Delete</h1>
</body>
</html>";
}
mysql_close();
	
?>
<?php
 
	include("footer.htm");
	
?>
