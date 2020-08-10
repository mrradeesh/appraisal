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
 
</script>
<body onunload="sdelete()"
style="margin-top:20%">
	 
	<h1>SEARCH EMPLOYEE RECORD</h1>
	<form action="slresult1.php" method="post" autocomplete="off" onsubmit="return validate()">
	<table 
	width=70%;
	 align="center"
	cellspacing=50>
	<center>
	<tr>
	<td>
	<div align="center"
		style="color:red"><b>Employee ID OR Name<b><br></div></td>
	<td>
	<input type="text" name="search" id="search">
	</td></tr>

<tr>
	<th><input type="submit" name="onsubmit" id="onsubmit" value="Search"></th><td><input type="reset" id="reset" value="Clear"></td>
	</tr>
</table>
</form>
  
	 
	 
	<a href="result2.php"
		style="margin-left:85%";
		class="back"><i>Back</i></a> 
</form>
</body>
</html>
<?php
 
	include("footer.htm");
	
?>	
