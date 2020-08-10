<?php
	include("check.php");
	include("header.htm"); 
	include("com.php");
	include("methods.php");
	 
	 $cid=$_POST['cid'];
	$name=$_POST['name'];
	$eid=$_POST['eid'];
	$dept=$_POST['dep'];
	$sem=$_POST['s1'];
	$sub=$_POST['su1'];

	$name=ucfirst($name);
 	//echo $regno;
	 
 

	if(!isset($cid))
	{
			header("location:empupdate.php");
	}
	$cid=base64_encode($cid);
	if(!isset($name) || !isset($eid) || !isset($dept) || !isset($sem) || !isset($sub))
	{
			header("location:empupdate.php");
	}
	 
	 if($name!="")
	{	$name=base64_encode($name);
		$q1=mysql_query("update $emp set Name='$name' where Empid='$cid'");
		if(!$q1)
		{
		$f1=1;
		}
	}
	if(isset($dept))
	{
		$dept=base64_encode($dept);
		$q2=mysql_query("update $emp set Department='$dept' where Empid='$cid'");
		if(!$q2)
		{
		$f2=1;
		}
	}
	if(isset($sem))
	{
		$sem=base64_encode($sem);
		$q3=mysql_query("update $emp set Semester='$sem' where Empid='$cid'");
		if(!$q3)
		{
		$f3=1;
		}
	}
	if(isset($sub))
	{
		$sub=base64_encode($sub);
		$q4=mysql_query("update $emp set Subject='$sub' where Empid='$cid'");
		$q5=mysql_query("update $res set Subject='$sub' where Empid='$cid'");
		if(!$q4)
		{
		$f4=1;
		}
		if(!$q5)
		{
		$f5=1;
		}
		
	}
	if($eid!="")
	{
				$eid=base64_encode($eid);
		$q6=mysql_query("update $emp set Empid='$eid' where Empid='$cid'");
		$q7=mysql_query("update $res set Empid='$eid' where Empid='$cid'");
		if(!$q6)
		{
		$f6=1;
		}
		if(!$q7)
		{
		$f7=1;
		}
	}
	if(!isset($f1) && !isset($f2) && !isset($f3) && !isset($f4) && !isset($f5) && !isset($f6) && !isset($f7))
	{
	 error("successfully Updated","empupdate.php");
}
	else
	{
		//echo "not okk";
	 error("Failed to Update","empupdate.php");
}
mysql_close();
	
?>
<?php
 
	include("footer.htm");
	
?>
