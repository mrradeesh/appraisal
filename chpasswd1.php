<?php
	include("com.php");
	include("check.php");
 
	include("header.htm");
	
 
	$cpass=$_POST['cpass'];
	$npass=$_POST['npass'];
	$rnpass=$_POST['rnpass'];
	$cpass=$cpass."123";
	$npass=$npass."123";
	$cpass=md5($cpass);
	$npass=md5($npass);
	$result=mysql_query("select * from Security") or die(mysql_error());
	$i=mysql_fetch_array($result);
	
	if($cpass==$i["password"])
	{
		mysql_query("update $sec
			set password='$npass'
			where Password='$cpass' ") or die(mysql_error());
		echo "<html>
<head>
<meta http-equiv='Refresh' content='1;url=logout1.php'>
<script language='javascript'>
function validate()
			 {
			alert('Secussfully Changed');
	}
</script>
</head>
<link rel='stylesheet' href='style1.css'>
<body onunload='validate()'>
 <h1 style='margin-top:200'><br><br><br><br>Secussfully Changed<br><br><br><br></h1>
</body>
</html>";
		
		
	}
	else
	{
		echo "<html>
<head>
<meta http-equiv='Refresh' content='1;url=chpasswd.php'>
<script language='javascript'>
function validate()
			 {
			alert('Incorrect Current Password');
	}
</script>
</head>
<link rel='stylesheet' href='style1.css'>
<body onunload='validate()'>
 <h1 style='margin-top:200'><br><br><br><br>Incorrect Current Password<br><br><br><br></h1>
</body>
</html>";
		 
	}
	mysql_close()
?>
<?php
 
	include("footer.htm");
	
?>
