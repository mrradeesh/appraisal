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
			if(document.getElementById("iname").value=="")
			{
				alert("Please Enter the Register Number OR Name");
				document.getElementById("iname").focus();
				document.getElementById("iname").select();
				document.getElementById("iname").style.border="1px solid red";
			 
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
	<legend class="l" >Update a Record</legend>
	<form action="empupdate1.php" method="post" autocomplete="off" onsubmit="return validate()">
	<center>
<table
	width=70%;
	 align="center" cellspacing=20>
<tr>
		<th align="center">Employee ID<br>OR<br>
				Name</th><td align="right"><input type="text" name="iname" id="iname">
		<font color=red size=5>*</font></td>
	</tr>
<tr>
		<th><input type="submit" name="onsubmit" id="onsubmit" value="Search"></th>
		 
		<td align="right"><input type="button" value="Back" onclick="location.href='mhome.php'"></td>
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
