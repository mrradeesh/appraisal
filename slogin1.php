<?php 
include("header.htm");
?><html>
<head>
<meta charset="utf-8">	
<meta http-equiv='Refresh' content='1;url=slogin.php'>
<title>login page</title>
<link rel="stylesheet" href="style1.css">
 <script lnguage="javascript">
function a(){
dom=document.getElementById("pass");
//document.getElementById("usename").placeholder='a';
if(dom.type=='password')
{
	dom.type='text';
}
else
{
dom.type='password';
}
}
function validate()
			 {
				if(document.getElementById("reg").value=="")
				{
					alert("Please fill the Register number");
					document.getElementById("reg").focus();
					document.getElementById("reg").select();
			 
					return false;
				}
			else if(document.getElementById("reg").value.length!=10)
				{
				alert("Please enter the valid Register No and Password");
					document.getElementById("reg").focus();
					document.getElementById("reg").select();
					document.getElementById("reg").style.border="1px solid red";
			 
					return false;
				}
				else if(document.getElementById("pass").value=="")
				{
					alert("Please fill the password");
					document.getElementById("pass").focus();
					document.getElementById("pass").select();
			 
					return false;
				}	
				else{
				return true;
				}
	}
</script>
</head>
<body bgcolor="#273c75"
	style="text-color:white"
	onload="alert('please check your Register number and password')">
<!--<div w3-include-html="header.htm"></div>-->
	<center>
	<table width="400">
	<tr>
	<td>
	<FIELDSET style="margin-top:150px">
		  <LEGEND class='l'>Student login</LEGEND>
	<form action="sloginm.php" method="post" onsubmit="return validate()" autocomplete="off">
	
		<DIV style="color:white">
	
	<table cellspacing="25" >
		<tr>
	<td>Register</td>
	<td><input type="text" name="reg" id="reg" size="15"></td>
	<tr>
	<td>Password</td>
	<td><input type="password" name="password" id="pass" size="15"></td></tr>
		
	<tr>
	<td><input type="checkbox" onclick="a()" >&nbsp<font size="2"> Show Password</font></td><td></td></tr><br><br>
		 </div>
		<tr>
<td> 
		<input type="submit" value="Login" name="submit" id="onsubmit" ></td>
	<td align="right"><br><input type="button" value="Back" onclick="location.href='home.php'"></td>
	</tr>
	</table>
		 
		</DIV>
	</form> 
	</FIELDSET></div>
</td>
</tr>
</table>
	</center>
 
</body>
</html>
<?php
 
	include("footer.htm");
	
?>
		 
