<!--<!DOCTYPE html >-->
<?php
 
function error($me,$file)
{
echo "
	<html>
<head>
<meta http-equiv='Refresh' content='1;url=$file'>
<script language='javascript'>
function validate()
			 {
			alert('$me');
	}
</script>
</head>
<link rel='stylesheet' href='style1.css'>
<body onunload='validate()'
	style='margin-top:100'> <br><br><br><br><br><br><br><br>
 <h1 style='margin-top:100'>$me</h1><br><br><br><br><br><br><br><br>
</body>
</html>	
		";
	
}

