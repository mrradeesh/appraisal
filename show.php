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
	 <h1>The Questions Are</h1>  		
		
		<table border="3" bordercolor="#191919" rules="all" cellpadding="15">
		
	</div>
		 
		 
		<tr>
			<th>Question no</th>
			<th>Question</th>
			 
		 
		
		 	 
	</tr>
	 
		 
		
 
 
 
<?php
	$result = mysql_query("Select * from $que"); 
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
	{

	echo "<html>
<head>
<meta http-equiv='Refresh' content='1;url=mhome.php'>
<script language='javascript'>
function validate()
			 {
			alert('Your question has not been inserted');
	}
</script>
</head>
<link rel='stylesheet' href='style1.css'>
<body onunload='validate()'>
 <h1 style='margin-top:100'>Your question has not been inserted</h1>
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
	<a href="mhome.php"
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
	 
		 

	 
 

