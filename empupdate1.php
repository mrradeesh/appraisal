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
<script language="javascript" src="m.js">
 	
</script>
</head>
<body  style="margin-top:150px">
	 	 
	 	<center>
		 <h1 class="head">Update a Record</h1>  		
		
		<table border="3" bordercolor="#191919" rules="all" cellpadding="15">
		<tr border="3">
			<th>Empid</th>      
			<th>Name</th>
			<th>Department</th> 
			<th>Semester</th>       
			<th>Subject</th>
			  
			 
		
		</tr>
		 
<?php

	$iname=$_POST['iname'];
	if(!isset($iname))
	{
		header("location:empupdate.php");	
	}
	$iname=base64_encode($iname);
	$result = mysql_query("Select * from $emp where Empid='$iname' || Name='$iname'"); 
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
	{	echo "<html>
<head> 
</head>
<link rel='stylesheet' href='v.css'>
<body>
  
 
</body>
</html>";
	echo "<html>
<head>
<meta http-equiv='Refresh' content='1;url=empupdate.php'>
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
 
}
	
	
?>
			
		</table>
		</center>
		<br><br><br><br><br>
<div id="hide">
	<body style="margin-top:20%">
	 
	<table width="600"
	align="center">
<tr>
<td>
<fieldset>
	<legend class="l">Update a Record</legend>
	<form action="empupdate2.php" method="post" autocomplete="off" onsubmit="return total()">
	<center>
<table  
	width=80%;
	 align="center"
	cellspacing=30>
	<tr>
		<th align="left">Current Employee ID</th><td align="right"><input type="text" name="cid" id="cid"  class="a"><font color=red size=5>*</font>
		</td>
	</tr>
	<tr>
		<th align="left">Name</th><td align="right"><input type="text" name="name" id="name" class="a">
		 </td>
	</tr>
	<tr>
		<th align="left">New Employee ID</th><td align="right"><input type="text" name="eid" id="eid" class="a">
		</td>
	</tr>
	<tr>
		<th align="left">Department</th><td align="right"><select name='dep' id='dep' onchange="validatesa()"><option value='1'  >Select Department</option>
		<option>CS</option>
		<option>EC</option>
		<option>ME</option>
		</select>
		</td>
	</tr>
	<tr>
		<th align="left">Semister</th><td align="right">
			<div id="output">
				<select name='s1' id='s1' onchange='validatesema()'>
					<option value='1'>Select Semister</option>
				</select>
				
			</div>
		</td>
	</tr>
	<tr>
 
		<th align="left">Subject</th>
		<td align="right">
			<div id="output1">
			<select name='su1' id='su1' > 
				<option value='1'>Select Subject</option>
			</select>
			
			</div>
		</td>
	</tr>
		 
<tr>
		<th align="left"><input type="submit" name="onsubmit" id="onsubmit" value="Update"></th><td align="right"><br><input type="button" value="Back" onclick="location.href='mhome.php'"></td>
	</tr>
</table>
</form>
</fieldset>
</td>
</tr>
</table>
</div>
	<a href="empupdate.php"
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
