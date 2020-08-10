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
	
</script>
</head>
<body  style="margin-top:150px">
	 	 <div id="hide">
	 	<center>
		 <h1>The Result Is</h1>  		
		
		<table border="3" bordercolor="#191919" rules="all" cellpadding="15">
		<tr>
			<th>Empid</th>      
			<th>Name</th>
			<th>Department</th> 
			<th>Semester</th>       
			<th>Subject</th>
			 
			 
		
		</tr>
	</div>
		 
		 
	 
		 
		
 
 
 
<?php

	$search=$_POST['search'];
	
	if(!isset($search))
	{
		header("location:mhome.php");	
	}
	if($search=='all' || $search=="ALL" || $search=="All")
	{
		$result = mysql_query("Select * from $emp");
	}
	else 
	{
	$search=base64_encode($search);
	$result = mysql_query("Select * from $emp where Empid='$search' || Name='$search' || Department='$search' || Semester='$search' || Subject='$search'");
	} 
//	echo mysql_num_rows($result);

if(mysql_num_rows($result)!=0)
{// echo validate();

	while($i=mysql_fetch_array($result))
	{
		
?>
	<tr>
		<td align="left"><?php echo base64_decode($i['Empid']); ?></td>
		<td align="left"><?php echo base64_decode($i['Name']); ?></td>
		<td align="left"><?php echo base64_decode($i['Department']); ?></td>
		<td align="left"><?php echo base64_decode($i['Semester']); ?></td>
		<td align="left"><?php echo base64_decode($i['Subject']); ?></td>
	 
	</tr>
<?php
	}
}
	else
	{

	echo "<html>
<head>
<meta http-equiv='Refresh' content='1;url=empsearch.php'>
<script language='javascript'>
function validate()
			 {
			alert('Not found');
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
		</center>
		<br><br><br>
	<a href="empsearch.php"
		style="margin-left:85%";
		class="back"><i>Search</i></a> 
	</body>
	
</html>

<?php
	mysql_close();

?>
	 
<?php
 
	include("footer.htm");
	
?>	 
	 
		 

	 
 

