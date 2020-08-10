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
				alert("Please fill the Register Number to delete");
				document.getElementById("rollno").focus();
				document.getElementById("rollno").select();
				document.getElementById("rollno").style.border="1px solid red";
			 
				return false;
			}
			else if(document.getElementById("rollno").value.length!=10)
				{
					alert("Please enter the valid Register No");
					document.getElementById("rollno").focus();
					document.getElementById("rollno").select();
					document.getElementById("rollno").style.border="1px solid red";
			 
					return false;
				}
	var a=document.getElementById("rollno").value;
	var res=a.substring(3,5);
		if(res=='CS')
			{
			 return true;
		}
		else if(res=='cs')
			{
			return true;
			}

		else if(res=='EC')
			 {
			return true;
			}
		else if(res=='ec')
		 	{
			return true;
			}
  	 	else if(res=='ME')
			{
			return true;
		 
			}
		else if(res=='me')
			{
			return true;
			 
			}
		else
		{
			 
		alert("enter valid Register no");
		
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
	<legend class="l">Delete Record</legend>
	<form action="sdelete1.php" method="post" autocomplete="off" onsubmit="return validate()">
	<center>
<table
	width=70%;
	 align="center"
	cellspacing=20>
<tr>
		<th align="left">Register No</th><td align="right"><input type="text" name="rollno" id="rollno">
		<font color=red size=5>*</font></td>
	</tr>
<tr>
		<th><input type="submit" name="onsubmit" id="onsubmit" value="Delete"></th>
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
