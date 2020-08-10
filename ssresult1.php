<!DOCTYPE html >
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
		
		<table border="3" bordercolor="#191919" rules="all" cellpadding="10">
		<tr>
			<th>Employee ID</th>
			<th>Name</th>
			<th>Subject</th>
			<th>Yes</th>
			<th>No</th>
			 
			<th>Grade</th>
			 
		
		</tr>
	</div>
		 
		 
	 
		 
		
 
 
 
<?php

	$first=$_POST['rollno'];
	if(!isset($first))
	{
		header("location:mhome.php");	
	}
	$first=base64_encode($first);
	$tq=mysql_query("Select * from $que");
	$tq1=mysql_num_rows($tq);
	$second=mysql_query("select * from $emp where Name='$first' || Empid='$first'");
	$k=mysql_fetch_array($second);
	$search=$k['Empid'];
	$name=$k['Name'];
	 $result=mysql_query("Select * from $res where Empid='$search'");
	//echo mysql_num_rows($result);
if(mysql_num_rows($result)!=0)
{// echo validate();

	while($i=mysql_fetch_array($result))
	{
		//echo base64_decode($i['Yes']);
		//echo "<br>".base64_decode($i['No']);
		$total=(base64_decode($i['Total'])*$tq1);
		//echo "<br>".base64_decode($i['Total']);
		$y=base64_decode($i['Yes'])/$total*100;
		$n=base64_decode($i['No'])/$total*100;
		
		if($y>=75)
		$result1='A';
		else if($y>=50)
			$result1='B';
		else if($y>=25)
			$result1='C';
		else $result1='D';
		$y=round($y,2);
		$n=round($n,2);
?>
	<tr>
		<td align="left"><?php echo base64_decode($search); ?></td>
		<td align="left"><?php echo base64_decode($name); ?></td>
		<td align="left"><?php echo base64_decode($i['Subject']); ?></td>
		<td align="left"><?php echo $y."%"; ?></td>
		<td align="left"><?php echo $n."%"; ?></td>
		<td align="left"><?php echo "$result1"; ?></td>
	 
	</tr>
<?php
	}
}
	else
	{

	echo "<html>
<head>
<meta http-equiv='Refresh' content='1;url=ssresult.php'>
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
	<a href="ssresult.php"
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
	 
	 
	 
		 

	 
 

