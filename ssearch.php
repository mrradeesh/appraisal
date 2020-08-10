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
			if(document.getElementById("search").value=="")
			{
				alert("Please fill the any Student Detail to Sreach");
				document.getElementById("search").focus();
				document.getElementById("search").select();
				document.getElementById("search").style.border="1px solid red";
			 
				return false;
			}


}
function a()
{
	if(document.getElementById("h").style.visibility=="hidden")
		{
			document.getElementById("h").style.visibility="visible"
		}
	else
	{
			document.getElementById("h").style.visibility="hidden"
	}
}
</script>
<body style="margin-top:20%">
<table width="800"
	align="center">
<tr>
<td>
<fieldset width="100px">
	<legend class="l">Search Record</legend>
	<form action="ssearch1.php" method="post" autocomplete="off" onsubmit="return validate()">
	<table 
	width=56%;
	 align="center"
	cellspacing=10>
	<center>
	<tr>
	<td>
	<div align="center"
		style="color:red"><b>Enter Any Detail of Student<b><br></div></td>
	<td>
	<input type="text" name="search" id="search">
	</td></tr>

<tr>
	<th><br><input type="submit" name="onsubmit" id="onsubmit" value="Search"></th>
	<td><br><input type="button" value="Back" onclick="location.href='mhome.php'"></td>
	</tr>
</table>
</form>
</fieldset>
</td>
</tr>
</table>
 <div style="margin-left:55%";>
<h1 onclick="a()" ><font size="1"><b>Hint</b></font></h1>
	<div 
		id="h" class="h"
		style="visibility:hidden">
			
		<ul type="square"
			style="font-size:10">

			<li>IF YOU WANT TO SEARCH ALL RECORD THEN TYPE 'all'</li>
			<li>IF YOU WANT TO SEARCH NOT LOGINED STUDENT PRESS 'no' </li>
			<li>IF YOU WANT TO SEARCH LOGINED STUDENT PRESS 'yes' </li>
			<li>IF YOU WANT TO SEARCH SINGLE OR ANY OTHER RECORD ENTER THE REGISTER NO,NAME OR CLASS</li>
			
		</ul></div></div>
	 
</form>
</body>
</html>
<?php
 
	include("footer.htm");
	
?>
