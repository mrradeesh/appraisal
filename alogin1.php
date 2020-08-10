<?php 
include("header.htm");
?><html>
<head>
<meta charset="utf-8">	
<meta http-equiv='Refresh' content='1;url=alogin.php'>
<title>login page</title>
<link rel="stylesheet" href="style1.css">
<script language="javascript" >
function a(){
	alert("Please..! Check Username and Password or Your not an Admin");
	return false;
 }
</script>
</head>
<body bgcolor="#273c75"
	style="margin-top:100;
		text-color:white"
	onload="a()">
	 
	<center>
	<!--<h1 color="red">Please..! Check Username and Password or Your not an Admin</h1>-->
	<table width="400">
	<tr>
	<td>
	<FIELDSET style="margin-top:150px">
		  <LEGEND class='l'>Admin login</LEGEND>
	<form action="login1.php" method="post" onsubmit="return validate()" autocomplete="off">
	
		<DIV style="color:white">
	
	<table cellspacing="25" >
		<tr>
	<td> Username</td>
	<td><input type="text" name="username" id="usename" size="15"></td>
	<tr>
	<td>Password</td>
	<td><input type="password" name="password" id="password" size="15"></td></tr>
		
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
		 


