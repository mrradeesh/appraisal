<!DOCTYPE html >
<?php	

		$s="localhost";
		$u="root";
		$p="";
		$d="Appraisal";
		mysql_connect($s,$u,$p) or die(mysql_error());
		mysql_select_db($d)or $error=mysql_error();

			
		if($error=="Unknown database 'Appraisal'")
		{
	 	 	header("location:setup.php");
		}
		 
?>
<?php 
include("header.htm");
include("scheck.php");
include("methods.php");
//checkcompleted();
?>
<html>
	<head>
		<title>creating a 2 buttons to enter the administration and student login</title>
	<link rel="stylesheet" href="style1.css">
	</head>
	<body style="margin-top:100px">
		 <div >
		<FORM>
		<center><br><br>
		<FIELDSET CLASS="home">
		  <LEGEND class="l">Login as</LEGEND>
		<div class='login1'>
		<div class="adminbutton"
		><br><a class="btn" href="alogin.php"><i style="color:white" > <br>Administrater</i> </a></div><br><br>
		<div class="adminbutton1">
		<a class="btn" href="slogin.php"><i style="color:white"><br>Student</i></a></div>
		</div>
		</FIELDSET>
		</FORM>
		</div><br>
	</body>
</html>
<?php 
session_start();
include("footer.htm");
if(isset($_SESSION['sessionid']))
{
	//echo $_SESSION['sessionid'];
echo "<html>
<head> 
</head>
<link rel='stylesheet' href='style.css'>
<body>
  
 
</body>
</html>";
}

	
?>


