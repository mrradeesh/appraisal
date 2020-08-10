<?php 
	include("check.php");
	include("header.htm");
?><html>
<head>
</head>
<link rel="stylesheet" href="style1.css">
<script language="javascript" src="method.js">
 
</script>
<body style="margin-top:15%">
<table width="700"
	align="center">
<tr>
<td>

<fieldset>
		<legend class="l">Employee Insertion</legend>
<center>
	 
	<form action="empinsert1.php" method="post" autocomplete="off" onsubmit="return a()">
	
 
		 
	<center>
		<table  
	width=56%;
	 align="center"
	cellspacing=11>

	<tr>
		<th align="left">Employee Id</th><td align="right"><input type="text" name="eid" id="eid" class="a">
		<font color=red size=5>*</font></td>
	</tr>
	<tr>
		<th align="left"><br>Name</th><td align="right"><br><input type="text" name="ename" id="ename" class="a">
		<font color=red size=5>*</font></td>
	</tr>
	<tr>
		<th align="left"><br>Department</th><td align="right"><br><select name='dept' id='dept' onchange="validates()"><option value='1'  >Select Department</option>
		<option>CS</option>
		<option>EC</option>
		<option>ME</option>
		</select>
		<font color=red size=5>*</font></td>
	</tr>
	<tr>
		<th align="left"><br>Semister</th><td align="right">
			<div id="output">
				<br><select name='sem1' id='sem1' onchange='validatesem()' required>
					<option value='1'>Select Semister</option>
				</select>
				<font color=red size=5>*</font>
			</div>
		</td>
	</tr>
	<tr>
 
		<th align="left"><br>Subject</th>
		<td align="right">
			<div id="output1">
			<br><select name='sub1' id='sub1' > 
				<option value='1'>Select Subject</option>
			</select>
			<font color=red size=5>*</font>
			</div>
		</td>
	 </tr>
	<tr>
		<th><br><input type="submit" name="onsubmit" id="onsubmit" value="Insert"></th>
		 
	<td align="right"><br><input type="button" value="Back" onclick="location.href='mhome.php'"></td>
	</tr>
</table>
	 </tr></td>
 
	</table>
	 </fieldset>
</td>
</tr>
</table>
	</form>

	
</form>
</center>
</body>
</html>
<?php
 
	include("footer.htm");
	
?>
