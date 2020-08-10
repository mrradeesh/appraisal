<?php
include ("header.htm");
include("a.php");
?>
<html>
<head>
</head>
<body style="margin-top:40;
		margin-left:50;
		margin-right:50;">
	<!--border-left:2px solid red;
		border-right:2px solid red;
		border-top:2px solid red;
		border-bottom:2px solid red">-->
<?php

function smain($name,$id,$dept,$sem,$sub)
{
 echo "<table style='margin-left:50'
		width='0%'
		border='0'>
	<tr><td>Name</td><td>:</td><td>$name</td></tr><br>
	<tr><td>Emp Id </td><td>   :</td><td>$id</td></tr><br>
	<tr><td>Depatment</td><td> :</td><td>$dept</td></tr><br>
	<tr><td>Semister</td><td>   :</td><td>$sem</td></tr><br>
	<tr><td>Subject</td><td> :</td><td>$sub</td></tr><br>
	</table><br>";
	
	question();
	return(1);

}
?>
</body>
</html>
