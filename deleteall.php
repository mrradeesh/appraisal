<?php
	$s="localhost";
	$u="root";
	$p="";
	$d="Appraisal";
	mysql_connect($s,$u,$p) or die($error=mysql_error());
	mysql_select_db($d)or die(mysql_error());
	mysql_query("drop database $d") or die(mysql_error());
?>
