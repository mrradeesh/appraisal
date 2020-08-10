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
					<th>Yes</th>
					<th>No</th>
					 
					<th>Grade</th>
			 
		
				</tr>
			</div>
<?php
	$tq=mysql_query("Select * from $que");
	$tq1=mysql_num_rows($tq);
	$dis=mysql_query("select Distinct(Empid) from $res");//or die(mysql_error()) ;
	while($j=mysql_fetch_array($dis))
	{
		$emp=$j['Empid'];
		$name1=mysql_query("select * from Employee where Empid='$emp'");
		$k=mysql_fetch_array($name1);
		$name=$k['Name'];
		$dis1=mysql_query("select * from $res where Empid='$emp'");//or die(mysql_error()) ;		
 
		while($i=mysql_fetch_array($dis1))
		{
		$total=base64_decode($i['Total']);//*$tq1);
		$y=base64_decode($i['Yes']);//$total*100;
		$n=base64_decode($i['No']);//$total*100;	 
		}
	
		$total=($total*$tq1);
	//echo $total."<br>";
	//echo $y."<br>";
	//echo $n."<br>";
	$y=($y/$total)*100;
	$n=($n/$total)*100;
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
		<td align="left"><?php echo base64_decode($emp); ?></td>
		<td align="left"><?php echo base64_decode($name); ?></td>
		<td align="left"><?php echo $y."%"; ?></td>
		<td align="left"><?php echo $n."%"; ?></td>
		<td align="left"><?php echo $result1; ?></td>
	 
	</tr>
<?php
	}
echo " </table></center><br><br><a href='result2.php'
		style='margin-left:85%';
		class='back'><i>Back</i></a>";
 
 
	include("footer.htm");
	
?>
	 
	 
