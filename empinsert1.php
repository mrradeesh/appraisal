 <?php
	include("check.php");
	include("header.htm"); 
	include("com.php");
	include ("methods.php");
	$eid=$_POST['eid'];
	$ename=$_POST['ename'];
	$dept=$_POST['dept']; 
	$sem1=$_POST['sem1']; 
	$sub1=$_POST['sub1'];
	$ename=ucfirst($ename);
	if(!isset($eid) && !isset($ename) && !isset($dept) && !isset($sem1) && !isset($sub1))
	{
			header("location:empinsert.php");
	}
	$eid=base64_encode($eid);
	$ename=base64_encode($ename);
	$dept=base64_encode($dept); 
	$sem1=base64_encode($sem1); 
	$sub1=base64_encode($sub1);
	$check2=mysql_query("select * from  Employee where Empid='$eid' && Department='$dept' && Semester='$sem1' && Subject='$sub1'");
	if(mysql_num_rows($check2)==0)
	{
	
	$check=mysql_query("select count(*) from  $emp where Empid='$eid'");
	$check1=mysql_fetch_array($check);
	if($check1['count(*)']<=5){
	 
	 if(isset($eid) && isset($ename) && $dept!='MQ==' && $sem1!='MQ==' && $sub1!='MQ==')
	{
	$t1="insert into $emp (Empid,Name,Department,Semester,Subject)values('$eid','$ename','$dept','$sem1','$sub1')";
	$t2="Insert into $res values('$eid','$sub1','MA==','MA==','MA==')";
	$q=mysql_query($t1) ;//or die(mysql_error());
	$q1=mysql_query($t2) ;
		 	}
		}
	 }
	
	
	if($q && $q1){
	error("Seccessfully Inserted","empinsert.php");}
	else
	error("Fail To Insert","empinsert.php");
	mysql_close();	
?>
 <?php
 
	include("footer.htm");
	
?>
