<?php
 	 $s="localhost";
	$u="root";
	$p="";
	$d="Appraisal";
	mysql_connect($s,$u,$p) or die(mysql_error());
	mysql_query("CREATE DATABASE Appraisal") or die(mysql_error());
	mysql_select_db($d) or die(mysql_error());

	$t="create table Security(username char(50) not null,password char(50) primary key,status char(1) default 'N')";
	mysql_query($t) or die(mysql_error());

	$t1="create table Student(Name char(30) not null,
				Regno char(30) primary key,
				Class char(30) not null,
				Pin char(30) not null,
				Flag char default 'N')";
	mysql_query($t1) or die(mysql_error());

	$t2="create table Employee(Empid char(20) not null,
				Name char(30) not null,
				Department char(30) not null,
				Semester char(30) not null,
				Subject char(50) not null)";
	mysql_query($t2) or die(mysql_error());
	$t3="create table Question(Qno char(2) NOT NULL PRIMARY KEY,
				Question varchar(250) NOT NULL
					      )";
	mysql_query($t3) or die(mysql_error());
	$t4="create table Emp(Empid char(30) not null,
				Name char(30) not null,
				Department char(30) not null,
				Semester char(30) not null,
				Subject char(50) not null,
				Count char(4) default '0')";
	mysql_query($t4) or die(mysql_error());
	$t5="create table Result(Empid char(30) not null,
			Subject char(30) not null,
			Yes char(30) not null,
			No char(30) not null,
			Total char(30) not null)";
	$q=mysql_query($t5) or die(mysql_error());

	mysql_close(); 

?>

<html>
<head>
</head>
<link rel="stylesheet" href="style1.css">
<script language="javascript">
 
			 function validate()
			 {
				var lcase=/[a-z]/g;
				var ucase=/[A-Z]/g;
				if(document.getElementById("uname").value=="")
				{
					alert("Please Enter the Usename");
					document.getElementById("uname").focus();
					document.getElementById("uname").select();
			 
					return false;
				}
			/*	else if(document.getElementById("uname").value!==match(/[a-z]/g))
				{
					alert("Please Enter the Username In lowercase latter");
					document.getElementById("uname").focus();
					document.getElementById("uname").select();
			 
					return false;
				}*/
				else if(document.getElementById("pass").value=="")
				{
					alert("Please Enter the Password");
					document.getElementById("pass").focus();
					document.getElementById("pass").select();
			 
					return false;
				}
				else if(document.getElementById("pass").value.length<8)
				{
					alert("Please Enter Password at least 8 character");
					document.getElementById("pass").focus();
					document.getElementById("pass").select();
			 
					return false;
				}
				else if(!isNaN(document.getElementById("pass").value))
				{
					alert("Please Enter New password with at least one character");
					document.getElementById("pass").focus();
					document.getElementById("pass").select();
			 
					return false;
				}
				
				else if(document.getElementById("pass1").value=="")
				{
					alert("Please Re-Enter the Password");
					document.getElementById("pass1").focus();
					document.getElementById("pass1").select();
			 
					return false;
				}
				else if(document.getElementById("pass").value!=document.getElementById("pass1").value)
				{
					alert("Please Enter Password at least 8 character");
					document.getElementById("pass").focus();
					document.getElementById("pass").select();
			 
					return false;
				}	
				else{
				return true;
				}
	}
</script>
<body onload="alert('The Application in Instaling');">
	<h1>CREATE A PASSWORD</h1>
	<form action="login.php" method="post" autocomplete="off" onsubmit="return validate()">
	<center>
<table 
	width=70%;
	 align="center"
	cellspacing=50>
	<tr>
		<th align="left">Enter the Username</th><td><input type="text" name="uname" id='uname'>
		<font color=red size=5>*</font></td>
	</tr>
	<tr>
		<th align="left">Enter the Password</th><td><input type="text" name="pass" id='pass'>
		<font color=red size=5>*</font></td>
	</tr>
	<tr>
		<th align="left">Re Enter the Password</th><td><input type="password" name="pass1" id="pass1">
		<font color=red size=5>*</font></td>
	</tr>
	 
<tr>
		<th><input type="submit" name="onsubmit" id="onsubmit" value="Insert"></th><td><input type="reset" id="reset" value="Clear"></td>
	</tr>
</table>
</form>
</body>
</html>

