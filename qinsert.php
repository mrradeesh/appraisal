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
				if(document.getElementById("que").value=="")
				{
					alert("Please fill the Question");
					document.getElementById("que").focus();
					document.getElementById("que").select();
					document.getElementById("que").style.border="1px solid red";
			 
					return false;
				}
 		
				else{
				return true;
				}
	}
</script>
<body style="margin-top:20%">
<table width="700"
	align="center">
<tr>
<td>
<fieldset>
	<legend class="l">Insert Question</legend>
	<form action="qinsert1.php" method="post" autocomplete="off" onsubmit="return validate()">
	<center>
<table  
	width=78%;
	 align="center" cellspacing=20>
	 
		<tr>
		<th align="left">Enter  Question</th><td align="right"><input type="text" name="que" id="que" Size="30">
		<font color=red size=5>*</font></td>
	</tr>




	<tr>
		<th><input type="submit" name="onsubmit" id="onsubmit" value="Insert"></th>
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
