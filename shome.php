<?php
	include ("header.htm");
	include("com.php");
	 
	
session_start();
$_SESSION['table']=session_id();
$empid=$_SESSION['table'];
$t4="create table $empid(Empid char(30) not null,
				Name char(30) not null,
				Department char(30) not null,
				Semester char(30) not null,
				Subject char(50) not null,
				Count char(4) default '0')";
	mysql_query($t4) or die(mysql_error());
$regno=$_SESSION['sreg'];
$result=mysql_query("select * from $stu where Regno='$regno'");//retriveing the login student record 
//echo $regno;
$regno=base64_decode($regno);
if($result)
{
	while($i=mysql_fetch_array($result))
	{
		$_SESSION['class']=$i['Class'];//class of the student to indentify the lecture
		$class=$_SESSION['class'];
		
	}
	//echo $class;
	$regno=substr($regno,3,2);//sub String to idetify the department
	$regno=strtoupper($regno);
	$_SESSION['department']=base64_encode($regno);
	$dept=$_SESSION['department'];
	
	
}
//$_SESSION['dpt']==$dept;//depatment of student
// $_SESSION['class']==$class;//class of the student to indentify the lecture
//echo $_SESSION['department'];
$q1=mysql_query("Select * from $emp where Department='$dept' && Semester='$class'") or die(mysql_error());	//echo mysql_num_rows($q1);
	 
		while($j=mysql_fetch_array($q1))
		{
			$v1=$j['Empid'];
			$v2=$j['Name'];
			$v3=$j['Department'];
			$v4=$j['Semester'];
			$v5=$j['Subject'];
			 
			mysql_query("insert into $empid (Empid,Name,Department,Semester,Subject)values('$v1','$v2','$v3','$v4','$v5')")or die(mysql_error());	
	 	}
	//echo $dept,$class;

		// echo "<br><br><br><br><br><br>".session_id();
	 
	header("location:emp1.php");
	
	
?>
