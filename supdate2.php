<?php
	include("check.php");
	include("header.htm"); 
	include("com.php");
	$cregno=$_POST["cregno"];
	$cregno=base64_encode($cregno);
	$name=$_POST["name"];
	$regno=$_POST["regno"];
	//$class=$_POST["class"];
	$class=$_POST["class"];
	//echo $class;
	$name=ucfirst($name);
	//$name=base64_encode($name);
 
$result = mysql_query("Select * from $stu where Regno='$cregno'");
	//echo mysql_num_rows($result);

	if(mysql_num_rows($result)==0)
	{
			echo "<html>
<head>
<meta http-equiv='Refresh' content='1;url=supdate.php'>
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
	if($name=="" && !isset($regno) && $class=="1")
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
		 
	}
if($name!="")
{
	$name=base64_encode($name);
	//echo "okk1";
	//echo $name;
	 $q=mysql_query("update $stu set Name='$name' where Regno='$cregno'");
	if($q)
	$f1=1; 
}
if($class!="1")
{
	$class=base64_encode($class);
	//echo "okk3";
	//echo $class;
	 $q2=mysql_query("update $stu set Class='$class' where Regno='$cregno'");
	if($q2)
	$f3=1;
}
if(isset($regno))
{
	///echo "okk2";
	//echo $regno;
	$regno=base64_encode($regno);
	 $q1=mysql_query("update $stu set Regno='$regno' where Regno='$cregno'");
	if($q1)
	$f2=1; 
}
if(!isset($f1) && !isset($f2) && !isset($f3))
{
	echo "<html>
<head>
<meta http-equiv='Refresh' content='1;url=supdate.php'>
<script language='javascript'>
function validate()
			 {
			alert('Enter valid Register no');
	}
</script>
</head>
<link rel='stylesheet' href='style1.css'>
<body onunload='validate()'>
 <h1 style='margin-top:200'>Enter valid Register no</h1>
</body>
</html>";
	 
		 
	
}
else
{		
	echo "<html>
<head>
<meta http-equiv='Refresh' content='1;url=supdate.php'>
<script language='javascript'>
function validate()
			 {
			alert('Successfully Updated');
	}
</script>
</head>
<link rel='stylesheet' href='style1.css'>
<body onunload='validate()'>
 <h1 style='margin-top:200'><br><br><br><br><br><br>Successfully Updated</h1>
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
