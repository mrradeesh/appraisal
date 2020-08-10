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
		 <h1 class="head">Employee Deletion</h1>  		
		
		<table border="3" bordercolor="#191919" rules="all" cellpadding="10">
		<tr>
			<th>Empid</th>      
			<th>Name</th>
			<th>Department</th> 
			<th>Semester</th>       
			<th>Subject</th>
			 
			 
		
		</tr>
		 
		 
	 
		 
		
 
 
 
<?php

	$eid=$_POST['eid'];
	if(!isset($eid))
	{
		header("location:empdelete.php");	
	}
	$eid=base64_encode($eid);
	setcookie("eid",$eid,time()+36000);
	$result = mysql_query("Select * from $emp where Empid='$eid'"); 
//	echo mysql_num_rows($result);

if(mysql_num_rows($result)!=0)
{// echo validate();

	while($i=mysql_fetch_array($result))
	{
		
?>
	<tr>
		<td align="left"><?php echo base64_decode($i['Empid']); ?></td>
		<td align="left"><?php echo base64_decode($i['Name']); ?></td>
		<td align="left"><?php echo base64_decode($i['Department']); ?></td>
		<td align="left"><?php echo base64_decode($i['Semester']); ?></td>
		<td align="left"><?php echo base64_decode($i['Subject']); ?></td>
		 
	 
	</tr>
<?php
	}
}
	else
	{
	echo "<html>
<head> 
</head>
<link rel='stylesheet' href='v.css'>
<body>
  
 
</body>
</html>";
	echo "<html>
<head>
<meta http-equiv='Refresh' content='1;url=empdelete.php'>
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
<center>
<table>
<tr><td>
<div id="hide">
	 
<h2 class="logout">ARE YOU SURE TO DELETE THIS RECORD ..?</h2></td></tr></table>
<table cellpadding="20">
<tr><td><div class="mbtn"> <a href="empdelete2.php" class="button">YES</a></td>
	<td><a href="empdelete.php" class="button">NO</a></td></tr>
</table>
</center>
</div>
</div> 
<a href="empdelete1.php"
		style="margin-left:85%";
		class="back"><i>Back</i></a> 
	</center></body>
	
</html>

<?php
	mysql_close();

?>
<?php
 
	include("footer.htm");
	
?>	 
	 
	 
		 

	 
 

