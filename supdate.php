<?php 
	include("check.php");
	include("header.htm");
?><html>
<head>
</head>
<link rel="stylesheet" href="style1.css">
<script language="javascript">
function validate()
		{
			if(document.getElementById("rollno").value=="")
			{
				alert("Please Enter the Register Number OR Name");
				document.getElementById("rollno").focus();
				document.getElementById("rollno").select();
				document.getElementById("rollno").style.border="1px solid red";
			 
				return false;
			}
			 
}
	
</script>
<body 
style="margin-top:20%">
<table width="600"
	align="center">
<tr>
<td>
<fieldset>
	<legend class="l">Update a Record</legend>
	<form action="supdate1.php" method="post" autocomplete="off" onsubmit="return validate()">
	<center>
<table
	width=70%;
	 align="center"
	cellspacing=20>
<tr>
		<th align="center">Register No <br>OR<br>
				Name</th><td align="right"><input type="text" name="rollno" id="rollno">
		<font color=red size=5>*</font></td>
	</tr>
<tr>
		<th><input type="submit" name="onsubmit" id="onsubmit" value="search"></th>
		<td align="right"><br><input type="button" value="Back" onclick="location.href='mhome.php'"></td>
	</tr>
</table>
</center>
</form>
</fieldset>
</td>
</tr>
</table>
</body>
</html>
<?php
 
	include("footer.htm");
	
?>	
