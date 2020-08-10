<?php
	include("check.php");
	include("header.htm"); 
	include("com.php");
	 $cqno=$_POST["cqno"];
	 
	$qno=$_POST["qno"];
	//$class=$_POST["class"];
	 
	//echo $class;
	
 
$result = mysql_query("Select * from $que where Regno='$cqno'");
	//echo mysql_num_rows($result);

	if(mysql_num_rows($result)==0)
	{
			echo "<html>
<head>
<meta http-equiv='Refresh' content='1;url=qupdate.php'>
<script language='javascript'>
function validate()
			 {
			alert('No Such Record Exist');
	}
</script>
</head>
<link rel='stylesheet' href='style1.css'>
<body onunload='validate()'>
 <h1 style='margin-top:200'>No Such Record Exist</h1>
</body>
</html>";
	}
	/*if($)
	{
			echo "<html>
<head>
<meta http-equiv='Refresh' content='1;url=supdate.php'>
<script language='javascript'>
function validate()
			 {
			alert('Enter name register no or Class');
	}
</script>
</head>
<link rel='stylesheet' href='style1.css'>
<body onunload='validate()'>
 <h1 style='margin-top:200'>Enter name register no or Class</h1>
</body>
</html>";
		 
	}*/
if(isset($qno))
{
	//echo "okk1";
	//echo $name;
	 $q=mysql_query("update $que set Question='$qno' where Qno='$cqno'");
	if($q)
	$f1=1; 
}
  
if(isset($f1))
{
	 
	echo "<html>
<head>
<meta http-equiv='Refresh' content='1;url=qupdate.php'>
<script language='javascript'>
function validate()
			 {
			alert('Secessfully Updated');
	}
</script>
</head>
<link rel='stylesheet' href='style1.css'>
<body onunload='validate()'>
 <h1 style='margin-top:200'><br><br><br>Secessfully Updated<br><br></h1>
</body>
</html>";	 
	
}
else
{		
		echo "<html>
<head>
<meta http-equiv='Refresh' content='1;url=qupdate.php'>
<script language='javascript'>
function validate()
			 {
			alert('Enter valid Question no');
	}
</script>
</head>
<link rel='stylesheet' href='style1.css'>
<body onunload='validate()'>
 <h1 style='margin-top:200'>Enter valid Question no</h1>
</body>
</html>";
}
	 
	/* while($i=mysql_fetch_array($result))
	{
		
	 		 if($i['Regno']==$cregno)
		{	$flag=1;	 
		 /*echo $i['Name']; 
		 echo $i['Regno']; 
		 echo $i['Class']; 
		 echo $i['Pin']; 
		 echo $i['Flag']; 
		}
	 
	 
	}*/
	
	 
	 
mysql_close();
	
?>
<?php
 
	include("footer.htm");
	
?>
