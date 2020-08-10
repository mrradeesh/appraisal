<?php
	include("check.php");
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
			if(document.getElementById("hide").style.visibility=="hidden")
				{
			document.getElementById("hide").style.visibility="visible"
				}
			 /*if(document.getElementById("hide").style.visibility=="visible")
				{
			document.getElementById("hide").style.visibility="hidden"
				}
			*/
			 


}
function validates()
{	
	var a=document.getElementById("regno").value;
	var res=a.substring(0,5);
		if(res=='402CS')
			{
			var arr=['1st SEM CS','2nd SEM CS','3rd SEM CS','4th SEM CS','5th SEM CS','6th SEM CS'];
		}
		else if(res=='402cs')
			{
			var arr=['1st SEM CS','2nd SEM CS','3rd SEM CS','4th SEM CS','5th SEM CS','6th SEM CS'];
			}

		else if(res=='402EC')
			{
			var arr=['1st SEM EC','2nd SEM EC','3rd SEM EC','4th SEM EC','5th SEM EC','6th SEM EC'];
			}
		else if(res=='402ec')
			{
			var arr=['1st SEM EC','2nd SEM EC','3rd SEM EC','4th SEM EC','5th SEM EC','6th SEM EC'];
			}
  	 	else if(res=='402ME')
			{
			var arr=['1st SEM ME','2nd SEM ME','3rd SEM ME','4th SEM ME','5th SEM ME','6th SEM ME'];
			}
		else if(res=='402me')
			{
			var arr=['1st SEM ME','2nd SEM ME','3rd SEM ME','4th SEM ME','5th SEM ME','6th SEM ME'];
			}
		else
		{
			validatev();
		}

		
		var string="";
		for(i=0;i<arr.length;++i)
		{
			string=string+"<option>"+arr[i]+"</option>";
		}			
		
			string="<select name='class' id='class' ><option value='1'>Select Class</option>"+string+"</select><font color=red size=5>*</font>";
			 
		document.getElementById('output').innerHTML=string;
			
}
function validatev()
{	
	var a=document.getElementById("cregno").value;
	var res=a.substring(0,5);
		if(res=='402CS')
			{
			var arr=['1st SEM CS','2nd SEM CS','3rd SEM CS','4th SEM CS','5th SEM CS','6th SEM CS'];
		}
		else if(res=='402cs')
			{
			var arr=['1st SEM CS','2nd SEM CS','3rd SEM CS','4th SEM CS','5th SEM CS','6th SEM CS'];
			}

		else if(res=='402EC')
			{
			var arr=['1st SEM EC','2nd SEM EC','3rd SEM EC','4th SEM EC','5th SEM EC','6th SEM EC'];
			}
		else if(res=='402ec')
			{
			var arr=['1st SEM EC','2nd SEM EC','3rd SEM EC','4th SEM EC','5th SEM EC','6th SEM EC'];
			}
  	 	else if(res=='402ME')
			{
			var arr=['1st SEM ME','2nd SEM ME','3rd SEM ME','4th SEM ME','5th SEM ME','6th SEM ME'];
			}
		else if(res=='402me')
			{
			var arr=['1st SEM ME','2nd SEM ME','3rd SEM ME','4th SEM ME','5th SEM ME','6th SEM ME'];
			}
		else
		{
			var arr="";
		alert("enter valid Register no");
		}

		
		var string="";
		for(i=0;i<arr.length;++i)
		{
			string=string+"<option>"+arr[i]+"</option>";
		}			
		
			string="<select name='class' id='class' ><option value='1'>Select Class</option>"+string+"</select><font color=red size=5>*</font>";
			 
		document.getElementById('output').innerHTML=string;
			
}


</script>
 
	
</script>
</head>
<body  style="margin-top:150px">
<table width="700"
	align="center">
<tr>
<td>
<fieldset>
	<legend class="head">Update a Record</legend>  		
		
		<table align="center" border="3" bordercolor="#191919" rules="all" cellpadding="15">
		<tr>
			<th>Name</th>
			<th>Register no</th>
			<th>Class</th>
			<th>Pin</th>
			<th>Flag</th>
			 
		
		</tr>
		 
		 
	 
		 
		
 
 
 
<?php

	$regno=$_POST['rollno'];
	if(!isset($regno))
	{
		header("location:supdate.php");	
	}
	$regno=base64_encode($regno);
	$result = mysql_query("Select * from $stu where Regno='$regno' || Name='$regno'"); 
//	echo mysql_num_rows($result);

if(mysql_num_rows($result)!=0)
{// echo validate();

	while($i=mysql_fetch_array($result))
	{
		
?>
	<tr>
		<td align="left"><?php echo base64_decode($i['Name']); ?></td>
		<td align="left"><?php echo base64_decode($i['Regno']); ?></td>
		<td align="left"><?php echo base64_decode($i['Class']); ?></td>
		<td align="left"><?php echo base64_decode($i['Pin']); ?></td>
		<td align="left"><?php echo $i['Flag']; ?></td>
	 
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
<meta http-equiv='Refresh' content='1;url=supdate.php'>
<script language='javascript'>
function validate()
			 {
			alert('No such record');
	}
</script>
</head>
<link rel='stylesheet' href='style1.css'>
<body onunload='validate()'>
 <h1 style='margin-top:100'>No such record</h1>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 
</body>
</html>";
echo validate();
}
	
	
?>
			
		</table>
		<br><br> 
<div id="hide">
	<body style="margin-top:5%">
	 
	 
	<form action="supdate2.php" method="post" autocomplete="off" >
	<center>
<table  
	width=75%;
	 align="center"
	cellspacing=40>
	<tr>
		<th align="left">Current Register No</th><td align="right"><input type="text" name="cregno" id="cregno"  class="a" onchange="validatev()" ><font color=red size=5>*</font>
		</td>
	</tr>
	<tr>
		<th align="left">Name</th><td align="right"><input type="text" name="name" id="name" class="a">
		 </td>
	</tr>
	<tr>
		<th align="left">Register No</th><td align="right"><input type="text" name="regno" id="regno" onchange="validates()" class="a">
		</td>
	</tr>
	<tr>
		<th align="left">Class</th>
		<td align="right"><div id="output">
			<select name='class' id='class' ><option value='1'>Select Class</select>
		<font color=red size=5>*</font>
			</div></td>
			</tr>
<tr>
		<th align="left"><input type="submit" name="onsubmit" id="onsubmit" value="Update"></th>
		<td align="right"><br><input type="button" value="Back" onclick="location.href='supdate.php'"></td>
	</tr>
</table>
</div>
 </fieldset>
</td>
</tr>
</table>
	</body>
	
</html>

<?php
	mysql_close();

?>
<?php
 
	include("footer.htm");
	
?>	 
	 
	 
		 

	 
 

