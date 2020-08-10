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
			if(document.getElementById("eid").value=="")
			{
				alert("Please fill the Employee Id to delete");
				document.getElementById("eid").focus();
				document.getElementById("eid").select();
				document.getElementById("eid").style.border="1px solid red";
			 
				return false;
			}
 }
</script>
<body style="margin-top:20%">
<table width="600"
	align="center">
<tr>
<td>
<fieldset>
<legend class="l"> Employee Deletion</legend>
	<form action="empdelete1.php" method="post" autocomplete="off" onsubmit="validate()">
	<center>
<table width=70%;
	 align="center"
	cellspacing=10>
<tr>
		<th align="left">Employee ID</th><td align="right"><input type="text" name="eid" id="eid">
		<font color=red size=5>*</font></td>
	</tr>

<tr>
		<th><input type="submit"  value="Delete"></th>
		 
		<td><input type="button" value="Back" onclick="location.href='mhome.php'"></td>
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
