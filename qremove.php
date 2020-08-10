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
			if(document.getElementById("qno").value==0)
				{
					alert("Please fill the Question No");
					document.getElementById("qno").focus();
					document.getElementById("qno").select();
					document.getElementById("qno").style.border="1px solid red";
			 
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
	<legend class="l">DELETE A QUESTION</legend>
	<form  method="post" autocomplete="off" action="qremove1.php" onsubmit="return validate()">
	<center>
<table
	width=60%;
	 align="center" cellspacing=20>
<tr>
		<th align="left">Question No</th><td align="right">
		<select name='qno' id='qno'>
		<option value=0>Select QNo</option>
			<option>01</option>
			<option>02</option>
			<option>03</option>
			<option>04</option>
			<option>05</option>
			<option>06</option>
			<option>07</option>
			<option>08</option>
			<option>09</option>
			<option>10</option>
			<option>11</option>
			<option>12</option>
			<option>13</option>
			<option>14</option>
			<option>15</option>
			<option>16</option>
			<option>17</option>
			<option>18</option>
			<option>19</option>
			<option>20</option>
			 
		</select><font color=red size=5>*</font></td>
	</tr>
<tr>
		<th align="left"><input type="submit" name="onsubmit" id="onsubmit" value="Remove"></th>
		<td align="right"><input type="button" value="Back" onclick="location.href='mhome.php'"></td>
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
