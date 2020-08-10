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
			dam2=document.getElementById("npass");
			dam3=document.getElementById("rnpass");
			if(document.getElementById("rollno").value=="")
			{
				alert("Please Enter the Register Number");
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
				else if(dam2.value=="")
				{
					alert("Please Enter the New password");
					document.getElementById("npass").focus();
					document.getElementById("npass").select();
			 
					return false;
				}
				else if(dam2.value.length!=5)
				{
				alert("Please Enter New password must have 5 character");
					document.getElementById("npass").focus();
					document.getElementById("npass").select();
			 
					return false;
				}
				 
				 
				else if(dam3.value=="")
				{
					alert("Please Re-Enter the New password");
					document.getElementById("rnpass").focus();
					document.getElementById("rnpass").select();
			 
					return false;
				}
				else if(dam3.value!=dam2.value)
				{
					alert("New Password Does not Match");
					document.getElementById("rnpass").focus();
					document.getElementById("rnpass").select();
			 
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
	<legend class="l">Change Student Password</legend>
	<form action="schpasswd1.php" method="post" autocomplete="off" onsubmit="return validate()">
	<center>
<table
	width=100%;
	 align="center"
	cellspacing=50>
<tr>
		<th align="left">Register Number </th><td align="right"><input type="text" name="rollno" id="rollno">
		<font color=red size=5>*</font></td>
	</tr>
	<tr>
		<th align="left">Enter the New password</th><td align="right"><input type="text" name="npass" id='npass'>
		<font color=red size=5>*</font></td>
	</tr>
	<tr>
		<th align="left">Re Enter the New password</th><td align="right"><input type="password" name="rnpass" id="rnpass">
		<font color=red size=5>*</font></td>
	</tr>
<tr>
		<th align="left"><input type="submit" name="onsubmit" id="onsubmit" value="Change"></th>
	<td align="right"><input type="button" value="Back" onclick="location.href='mhome.php'"></td>
		 
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
