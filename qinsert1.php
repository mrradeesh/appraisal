<?php
	include("com.php");
	include("check.php"); 
	include ("header.htm");
	include("methods.php");
	
	//$qno=$_POST['no'];
	$qu=$_POST['que'];
	$qu=ucwords($qu);
	if(!isset($qu))
	{
		header("location:qinsert.php");
	}
	$t="Select * FROM $que ORDER BY Qno DESC LIMIT 1";
	$q=mysql_query($t);
	$q1=mysql_fetch_array($q);
	$qno=$q1['Qno'];
	//echo $qno;
	$qno=$qno+1;
	if($qno<10)
	{
	$t1="Insert Into $que value ('0$qno','$qu')";
	}
	else
	{
		$t1="Insert Into $que value ('$qno','$qu')";
	}
	$result=mysql_query($t1) or die(mysql_error());
	if($result)
	{ error("Seccessfully Inserted","qinsert.php");
	}
	else
	{
		error("Failed to Insert","qinsert.php");
		 
	}





?>
<?php
 
	include("footer.htm");
	
?>

