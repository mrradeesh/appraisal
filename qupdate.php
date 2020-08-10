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
			if(document.getElementById("qno").value=="")
			{
				alert("Please Enter the Register Number OR Name");
				document.getElementById("qno").focus();
				document.getElementById("qno").select();
				document.getElementById("qno").style.border="1px solid red";
			 
				return false;
			}
			 
}
	
</script>
<body style="margin-top:20%">
	<table width="700"
	align="center">
<tr>
<td>
<fieldset>
	<legend class="l">Update a Question</legend>
	<form action="qupdate1.php" method="post" autocomplete="off" onsubmit="return validate()">
	<center>
<table
	width=60%;
	 align="center" cellspacing=20>
<tr>
		<th align="center">Question No</th><td align="right"><input type="text" name="qno" id="qno">
		<font color=red size=5>*</font></td>
	</tr>
<tr>
		<th align="left"><input type="submit" name="onsubmit" id="onsubmit" value="Search"></th>
		<td align="right"><br><input type="button" value="Back" onclick="location.href='mhome.php'"></td>
		
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
