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
<body onunload="sdelete()"
style="margin-top:20%">
<table width="750"
	align="center">
<tr>
<td>

	 <fieldset>
	<legend class="l">Search Employee Record</legend>
	<form action="empsearch1.php" method="post" autocomplete="off" onsubmit="return validate()">
	<table 
	width=60%;
	 align="center" cellspacing=20>
	<center>
	<tr>
	<td>
	<div align="center"
		style="color:red"><b>Enter Any Detail of Employee<b><br></div></td>
	<td>
	<input type="text" name="search" id="search">
	</td></tr>

<tr>
	<th align="left"><input type="submit" name="onsubmit" id="onsubmit" value="Search"></th>
<td align="right"><br><input type="button" value="Back" onclick="location.href='mhome.php'"></td>
	
</tr>
</table>
</fieldset>
</td>
</tr>
</table>
</form>
 <div style="margin-left:55%";>
<h1 onclick="a()" ><font size="1"><b>HELP</b></font></h1>
	<div 
		id="h" class="h"
		style="visibility:hidden">
			
		<ul type="square"
			style="font-size:10">

			<li>IF YOU WANT TO SEARCH ALL RECORD THEN TYPE 'ALL'</li>
			<li>IF YOU WANT TO SEARCH A PARTICULAR RECORD THEN  ENTER ANY ONE OF THE DETAILS</li>
			<!--<li>IF YOU WANT TO SEARCH </li>-->
		</ul></div></div>
	 
	
</form>
</body>
</html>
<?php
 
	include("footer.htm");
	
?>	
