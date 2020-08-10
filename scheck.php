<?php
include("com.php");
include("methods.php");
session_start();
function checkcompleted()
{
	if(isset($_SESSION['spass']) && isset($_SESSION['sreg']))
	{
	  //echo "alert('Please Complete your task')";
		//error("Please Complete your task","emp1.php");
	  //header("location:emp1.php");
	echo "
	<html>
<head>
<meta http-equiv='Refresh' content='1;url=emp1.php'>
<script language='javascript'>
function validatee()
			 {
			alert('Please Complete your task');
	}
</script>
</head>
<link rel='stylesheet' href='style1.css'>
<body onunload='validatee()'>
 <h5 style='margin-top:200;
		text-align:center;
		color:red'>Please Complete your task</h5>
</body>
</html>	
		";
	}
}

 
	
?>
