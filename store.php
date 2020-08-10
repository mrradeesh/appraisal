<?php
	include ("header.htm");
	include("com.php");
	include("methods.php");
	include("form.php");
	/*include("scheck.php");
	check();*/
	session_start();
	$empid=$_SESSION['table'];
	$count=$_SESSION['count'];
	$dept=$_SESSION['department'];
	$eid=$_SESSION['id'];
	$subject=$_SESSION['Subject'];

	$t="Select MAX(Qno) FROM $que";
	$t1=mysql_query($t);
	$t2=mysql_fetch_array($t1);
	$qno=$t2['MAX(Qno)'];

	for($i=1;$i<=$qno;++$i)
	{
	$q1="q$i";
	$q[$i]=$_POST[$q1];
	}
	$y=0;
	$n=0;
	 
	foreach($q as $value)
	{
		if($value=='Y')
		{
		++$y;
		}
		else if($value=='N')
		{
			++$n;
		}
			
	}
	//echo $p."poor<br>".$s."sa<br>".$g."good<br>".$e."exce<br>";
	//echo $eid." ".$subject;
	
	$result=mysql_query("Select * From $res where Empid='$eid' && Subject='$subject'") ;//or die(mysql_error());
	//echo "poor";
	//$empno=mysql_num_rows($result);
	$check=mysql_fetch_array($result);
	//echo $poor;
		$yes=base64_decode($check['Yes'])+$y;
		//echo $yes;
		$no=base64_decode($check['No'])+$n;
		$total=base64_decode($check['Total'])+1;
		//echo $total;
		$yes=base64_encode($yes);
		$no=base64_encode($no);
		$total=base64_encode($total);
	$result1=mysql_query("update  $res set Yes='$yes' where Empid='$eid' && Subject='$subject'") or die(mysql_error());

	$result2=mysql_query("update  $res set No='$no' where Empid='$eid' && Subject='$subject'") or die(mysql_error());
	$result5=mysql_query("update  $res set Total='$total' where Empid='$eid' && Subject='$subject'") or die(mysql_error());
		
	
	 
	//echo "<br><br><br><br><br><br><br><br><br><br><br>".$qno;
	
	if($result1 && $result2 && $result5) 
	{
	$m=mysql_query("delete from $empid where Empid='$eid' && Subject='$subject' && Department='$dept'") or die(mysql_error());
	error("Your Feedback is Accepted","emp1.php");
	}
	else
	{
		error("There is any problem in server","emp1.php");
	}
	 
	
	 
?>
