<?php
	include("check.php");
	include("com.php");
	include ("header.htm");
	include ("methods.php");
	
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
	
</script>
</head>
<body  style="margin-top:150px">
	 	 <div id="hide">
	 	<center>
		 <h1 class="head">Result</h1>  		
		
		<table border="3" bordercolor="#191919" rules="all" cellpadding="15">
		<tr>
			<th>Name</th>
			<th>Register no</th>
			<th>Class</th>
			<th>Pin</th>
			<th>Flag</th>
			 
		
		</tr>
	</div>
		 
		 
	 
		 
		
 
 
 
<?php

	$search=$_POST['search'];

	if(!isset($search))
	{
		header("location:mhome.php");	
	}
	if($search=='all')
	{
		$result = mysql_query("Select * from $stu");
	}
	else if($search=='yes' || $search=='no')
	{
		if($search=='yes')
		$result = mysql_query("Select * from $stu where Flag='y'");
		else
		{$result = mysql_query("Select * from $stu where Flag='n'");
		}
	}
	else 
	{
			$search=base64_encode($search);
			//echo $search;
	$result = mysql_query("Select * from $stu where Regno='$search'|| Name='$search' || Flag='$search' || Class='$search'");
	} 
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
<meta http-equiv='Refresh' content='1;url=ssearch.php'>
<script language='javascript'>
function validate()
			 {
			alert('Not Found');
	}
</script>
</head>
<link rel='stylesheet' href='style1.css'>
<body onunload='validate()'>
 <h1 style='margin-top:100'>Not Found</h1>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
 
</body>
</html>";
echo validate();

}
	
	
?>
			
		</table>
		
		<br><br><br>
	<a href="ssearch.php"
		style="margin-left:85%";
		class="back"><i>Search</i></a> 
	</center></body>
	
</html>

<?php
	mysql_close();

?>
<?php
 
	include("footer.htm");
	
?>
	 
	 
	 
		 

	 
 

