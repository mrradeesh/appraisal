<?php
	include("check.php");
	include("header.htm"); 
	include("com.php");
	include("methods.php");
	 
	$regno=$_COOKIE['regno'];
	
 	//echo $regno;
	unset($_COOKIE['regno']);
 

	if(!isset($regno))
	{
			header("location:sdelete.php");
	}
	 
	// $t="delete from $stu where regno='$regno'";
	 
	$q=mysql_query("delete from $stu where regno='$regno'");
	
	if($q)
{
	//echo "okk";
	//header("location:sdelete3.php");
error("Succussfully deleted","sdelete.php");
}
	else
	{
		//echo "not okk";
	error("Failed to Delete","sdelete.php");
}
mysql_close();

 
	include("footer.htm");
	
	
?>
