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
				alert("Please Enter the Employee Id OR Name");
				document.getElementById("rollno").focus();
				document.getElementById("rollno").select();
				document.getElementById("rollno").style.border="1px solid red";
			 
				return false;
			}
			 else{
			return true;
	}
			 
}
	
</script>
<body 
style="margin-top:20%">
<table width="700"
	align="center">
<tr>
<td>
<fieldset>
	<legend class="l">Result is</legend>
	<form action="ssresult1.php" method="post" autocomplete="off" onsubmit="return validate()">
	<center>
<table
	width=99%;
	 align="center"
	cellspacing=50>
<tr>
		<th align="center">Employee ID Or Name</th><td align="right"><input type="text" name="rollno" id="rollno">
		<font color=red size=5>*</font></td>
	</tr>
<tr>
		<th><input type="submit" name="onsubmit" id="onsubmit" value="search"></th><td align="center"><br><input type="button" value="Back" onclick="location.href='result.php'"></td>
	</tr>
</table> 
</form>
</center>
</fieldset>
</td>
</tr>
</table>
</body>
</html>
<?php
 
	include("footer.htm");
	
?>
