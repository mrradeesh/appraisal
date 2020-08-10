<?php
	//include("check.php");
	include("com.php");
	include ("header.htm");
	
?>
<html>
<head>
<meta charset="utf-8">	
<title>login page</title>
<link rel="stylesheet" href="style1.css">
<script language="javascript">
function validate()
{
	if(document.getElementById("cqno").value=="")
	{
	alert("Please fill the Question number");
	document.getElementById("cqno").focus();
	document.getElementById("cqno").select();
	return false;
	}
	else if(document.getElementById("que").value=="")
	{
	alert("Please fill the Question");
	document.getElementById("que").focus();
	document.getElementById("que").select();
	return false;
	}
	else
	{
	return true;
	}
}
 	
</script>
</head>
<body  style="margin-top:150px">
	 	 
	 	<center>
		 <h1 class="head">Update a Record</h1>  		
		
		<table border="3" bordercolor="#191919" rules="all" cellpadding="15">
		<tr>
			<th>Question No</th>      
			<th>Question</th>
		</tr>
		 
<?php

	$qno=$_POST['qno'];
	if(!isset($qno))
	{
		header("location:qupdate.php");	
	}
	$result = mysql_query("Select * from $que where Qno='$qno'"); 
//	echo mysql_num_rows($result);

if(mysql_num_rows($result)!=0)
{// echo validate();

	while($i=mysql_fetch_array($result))
	{
		
?>
	<tr>
		<td align="left"><?php echo $i['Qno']; ?></td>
		<td align="left"><?php echo $i['Question']; ?></td>
		 
	</tr>
<?php
	}
}
	else
	{	echo "<html>
<head> 
</head>
<link rel='stylesheet' href='v.css'>
<body>
  
 
</body>
</html>";
	echo "<html>
<head>
<meta http-equiv='Refresh' content='1;url=qupdate.php'>
<script language='javascript'>
function validate()
			 {
			alert('No Such Record');
	}
</script>
</head>
<link rel='stylesheet' href='style1.css'>
<body onunload='validate()'>
 <h1 style='margin-top:100'>No Such Record</h1>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 
</body>
</html>";
 
}
	
	
?>
			
		</table>
		</center>
		<br><br><br><br><br>
<div id="hide">
	<body style="margin-top:20%">
	 
	<h1>Update a Question</h1>
	<form action="qupdate2.php" method="post" autocomplete="off" onsubmit="return validate()">
	<center>
<table  
	width=70%;
	 align="center"
	cellspacing=40>
	<tr>
		<th align="left">Current Question No</th><td align="right"><input type="text" name="cqno" id="cqno"  class="a"><font color=red size=5>*</font>
		</td>
	</tr>
	<tr>
		<th align="left">Question</th><td align="right"><input type="text" name="qno" id="que" class="a">
		 </td>
	</tr>
	 
		 
<tr>
		<th><input type="submit" name="onsubmit" id="onsubmit" value="update"></th><td align="center"><input type="reset" id="reset" value="Clear"></td>
	</tr>
</table>
</div>
	<a href="qupdate.php"
		style="margin-left:85%";
		class="back"><i>Back</i></a>  
 
	</body>
	
</html>

<?php
	mysql_close();

?>
<?php
 
	include("footer.htm");
	
?>
