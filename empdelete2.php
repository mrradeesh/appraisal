<?php
	include("check.php");
	include("header.htm"); 
	include("com.php");
	include("methods.php");
	 
	$eid=$_COOKIE['eid'];
	
 	//echo $regno;
	//unset($_COOKIE['regno']);
 

	if(!isset($eid))
	{
			header("location:empdelete.php");
	}
	 
	// $t="delete from $stu where regno='$regno'";
	 
	$q=mysql_query("delete from $emp where Empid='$eid'");
	$q1=mysql_query("delete from $res where Empid='$eid'");
	
	if($q && $q1)
{
	//echo "okk";
	//header("location:sdelete3.php");
	 error("succussfully deleted","empdelete.php");
}
	else
	{
		//echo "not okk";
	 error("Failed to Delete","empdelete.php");
}
mysql_close();
	
?>
<?php
 
	include("footer.htm");
	
?>
