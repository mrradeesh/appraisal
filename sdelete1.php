<?php
	include("check.php");
	include("com.php");
	include ("header.htm");
	
?>
<html>
<head>
<meta charset="utf-8">	
<title>login page</title>
<link rel="stylesheet" href="style1.css">
<script language="javascript">
function validate()
		{
			if(document.getElementById("hide").style.visibility=="hidden")
				{
			document.getElementById("hide").style.visibility="visible"
				}
			 /*if(document.getElementById("hide").style.visibility=="visible")
				{
			document.getElementById("hide").style.visibility="hidden"
				}
			*/
			 


}
	
</script>
</head>
<body  style="margin-top:150px">
	 	 
	 	<center>
		 <h1 class="head">Student details deletion</h1>  		
		
		<table border="3" bordercolor="#191919" rules="all" cellpadding="15">
		<tr>
			<th>Name</th>
			<th>Register no</th>
			<th>Class</th>
			<th>Pin</th>
			<th>Flag</th>
			 
		
		</tr>
		 
		 
	 
		 
		
 
 
 
<?php

	$regno=$_POST['rollno'];
	$regno=base64_encode($regno);
	if(!isset($regno))
	{
		header("location:sdelete.php");	
	}
	setcookie("regno",$regno,time()+36000);
	$result = mysql_query("Select * from $stu where Regno='$regno'"); 
//	echo mysql_num_rows($result);

if(mysql_num_rows($result)==1)
{// echo validate();

	while($i=mysql_fetch_array($result))
	{
		
?>
	<tr>
		<td align="left"><?php echo base64_decode($i['Name']); ?></td>
		<td align="left"><?php echo base64_decode($i['Regno']); ?></td>
		<td align="left"><?php echo base64_decode($i['Class']); ?></td>
		<td align="left"><?php echo base64_decode($i['Pin']); ?></td>
		<td align="left"><?php echo $i['Flag']; ?></td>
	 
	</tr>
<?php
	}
}
	else
	{	echo "<html>
<head> 
</head>
<link rel='stylesheet' href='v.css'>
<body>
  
 
</body>
</html>";
	echo "<html>
<head>
<meta http-equiv='Refresh' content='1;url=sdelete.php'>
<script language='javascript'>
function validate()
			 {
			alert('No Such Record');
	}
</script>
</head>
<link rel='stylesheet' href='style1.css'>
<body onunload='validate()'>
 <h1 style='margin-top:100'>No Such Record</h1>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 
</body>
</html>";
echo validate();
}
	
	
?>
			
		</table>
		</center>
		<br><br><br><br><br>
<div id="hide">
	 
<h2 class="logout">ARE YOU SURE TO DELETE THIS RECORD ..?</h2></th>
	 
	 
 
		<div class="mbtn"><br><a href="sdelete2.php" class="button">YES</a>  <a href="sdelete.php" class="button">NO</a>
</div>
</div> 
<a href="sdelete1.php"
		style="margin-left:85%";
		class="back"><i>Back</i></a> 
	</body>
	
</html>

<?php
	mysql_close();

?>
<?php
 
	include("footer.htm");
	
?>	 
	 
	 
		 

	 
 

