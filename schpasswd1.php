<?php
	include("com.php");
	include("check.php");
 
	include ("header.htm");
	
 
	$rollno=$_POST['rollno'];
	$npass=$_POST['npass'];
	$rnpass=$_POST['rnpass'];
	$rollno=base64_encode($rollno);
	$npass=base64_encode($npass);
	$result=mysql_query("select * from $stu where Regno='$rollno'");
	if(mysql_num_rows($result)!=0)
	{
	  $i=mysql_fetch_array($result);
	$c=mysql_query("update $stu set Pin='$npass' where Regno='$rollno' ") or die(mysql_error());
	}
if($c){
		echo "<html>
<head>
<meta http-equiv='Refresh' content='1;url=schpasswd.php'>
<script language='javascript'>
function validate()
			 {
			alert('Secussfully Changed');
	}
</script>
</head>
<link rel='stylesheet' href='style1.css'>
<body onunload='validate()'>
 <h1 style='margin-top:200'>Secussfully Changed</h1><br><br><br>
</body>
</html>";
		
		
	}
	else
	{
		echo "<html>
<head>
<meta http-equiv='Refresh' content='1;url=schpasswd.php'>
<script language='javascript'>
function validate()
			 {
			alert('Incorrect Register Number');
	}
</script>
</head>
<link rel='stylesheet' href='style1.css'>
<body onunload='validate()'>
 <h1 style='margin-top:200'>Incorrect Register Number</h1><br><br><br>
</body>
</html>";
		 
	}
	mysql_close()
?>
<?php
 
	include("footer.htm");
	
?>
