<?php 
include("com.php");
?>
<?php function question()
{
?>
<html>
	<head>
		<link type="text/css" href="style1.css" rel="stylesheet">
	</head>
	
	<body style="margin-top:100">
		<form method="post" action="store.php" >
		<table    cellpadding="1" align="center" width="700">
<?php
		 $n1=1;
		$q1=mysql_query("SELECT * FROM Question") or die(mysql_error());
		while($i=mysql_fetch_array($q1))
		{
			//($qno=;
			$n="q$n1";
			//$quest=$;*/
		
?>		
	<tr Style="font-size:20">
		   <td><?php echo "<br>".$i['Qno']; ?>  <?php echo  $i['Question']; ?><br><br>
		     <input type="radio" name="<?php echo $n;?>" value="Y" checked>  Yes 
		    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" name="<?php echo $n;?>" value="N">  NO
	  </td>
	</tr>
<?php
$n1=$n1+1;
}?>
<tr>
				<td align="center"><br><br><input type='Submit' value='Continue' style="font-size:14pt" /><br><br></td>
	 		</tr>
			</table>
<?php
}
?>
