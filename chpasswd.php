 <?php
	 include ("header.htm");
	include("check.php");
 
	
?>
<html>
<head>
</head>
<link rel="stylesheet" href="style1.css">
<script language="javascript">
 
			 function validate()
			 {
				dam1=document.getElementById("cpass");
				dam2=document.getElementById("npass");
				dam3=document.getElementById("rnpass");
				 
				if(dam1.value=="")
				{
					alert("Please Enter the Current Password");
					document.getElementById("cpass").focus();
					document.getElementById("cpass").select();
			 
					return false;
				}
				else if(!isNaN(dam1.value))
				{
					alert("Wroung Current Password");
					document.getElementById("cpass").focus();
					document.getElementById("cpass").select();
			 
					return false;
				} 
			 	else if(dam1.value.length<8)
				{
					alert("Wroung Current Password");
					document.getElementById("cpass").focus();
					document.getElementById("cpass").select();
			 
					return false;
				} 
				else if(dam2.value=="")
				{
					alert("Please Enter the New password");
					document.getElementById("npass").focus();
					document.getElementById("npass").select();
			 
					return false;
				}
				else if(dam2.value.length<8)
				{
					alert("Please Enter New password must have at least 8 character");
					document.getElementById("npass").focus();
					document.getElementById("npass").select();
			 
					return false;
				}
				else if(!isNaN(dam2.value))
				{
					alert("Please Enter New password with at least one character");
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
<body style="margin-top:15%">
<table width="700"
	align="center">
<tr>
<td>
	<fieldset>
	<legend class="l">Change Password</legend>
	<form action="chpasswd1.php" method="post" autocomplete="off" onsubmit="return validate()">
	<center>
<table 
	width=90%;
	 align="center"
	cellspacing=20>
	<tr>
		<th align="left">Enter the Current password</th><td align="right"><input type="text" name="cpass" id='cpass'>
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
		<th align="left"><input type="submit" name="onsubmit" id="onsubmit" value="CHANGE"></th><td align="right"><input type="button" value="Back" onclick="location.href='mhome.php'"></td>
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
