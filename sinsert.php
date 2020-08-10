<?php 
	include("check.php");
	include("header.htm");
?><html>
<head>
</head>
<link rel="stylesheet" href="style1.css">
<script language="javascript">
function validate()
{
	regex= /^[a-zA-Z ]{2,30}$/;
	var a=document.getElementById("regno").value;
		var first=a.substring(0,3);
		var last=a.substring(5,10);
	
			 
				if(document.getElementById("name").value=="")
				{
					alert("Please fill the Name");
					document.getElementById("name").focus();
					document.getElementById("name").select();
					document.getElementById("name").style.border="1px solid red";
			 
					return false;
				}
				else if(!regex.test(document.getElementById("name").value))
				{
					alert("Please Enter the valid Name");
					document.getElementById("name").focus();
					document.getElementById("name").select();
					document.getElementById("name").style.border="1px solid red";
			 
					return false;
				}
				else if(document.getElementById("regno").value=="")
				{
					alert("Please fill the Register No");
					document.getElementById("regno").focus();
					document.getElementById("regno").select();
					document.getElementById("regno").style.border="1px solid red";
			 
					return false;
				}
				else if(document.getElementById("regno").value.length!=10)
				{
					alert("Please enter the valid Register No");
					document.getElementById("regno").focus();
					document.getElementById("regno").select();
					document.getElementById("regno").style.border="1px solid red";
			 
					return false;
				}
				
				else if(isNaN(first))
				{
				alert("Please Enter valid Register no");
					return false;
				}
				else if(isNaN(last))
				{
				alert("Please Enter valid Register no");
				return false;
				}

				else if(document.getElementById("class").value=="1")
				{
					alert("Please Select the Class");
					document.getElementById("regno").focus();
					document.getElementById("regno").select();
					document.getElementById("class").style.border="1px solid red";
			 
					return false;
				}		
				else{
				return true;
				}
	}
function validates()
{	
	var a=document.getElementById("regno").value;
	
	var res=a.substring(3,5);
		if(res=='CS')
			{
			var arr=['1st SEM CS','2nd SEM CS','3rd SEM CS','4th SEM CS','5th SEM CS','6th SEM CS'];
		}
		else if(res=='cs')
			{
			var arr=['1st SEM CS','2nd SEM CS','3rd SEM CS','4th SEM CS','5th SEM CS','6th SEM CS'];
			}

		else if(res=='EC')
			{
			var arr=['1st SEM EC','2nd SEM EC','3rd SEM EC','4th SEM EC','5th SEM EC','6th SEM EC'];
			}
		else if(res=='ec')
			{
			var arr=['1st SEM EC','2nd SEM EC','3rd SEM EC','4th SEM EC','5th SEM EC','6th SEM EC'];
			}
  	 	else if(res=='ME')
			{
			var arr=['1st SEM ME','2nd SEM ME','3rd SEM ME','4th SEM ME','5th SEM ME','6th SEM ME'];
			}
		else if(res=='me')
			{
			var arr=['1st SEM ME','2nd SEM ME','3rd SEM ME','4th SEM ME','5th SEM ME','6th SEM ME'];
			}
		else
		{
			var arr="";
		alert("enter valid Register no");
		}

		
		var string="";
		for(i=0;i<arr.length;++i)
		{
			string=string+"<option>"+arr[i]+"</option>";
		}			
		
			string="<select name='class' id='class' ><option value='1'>Select Class</option>"+string+"</select><font color=red size=5>*</font>";
			 
		document.getElementById('output').innerHTML=string;
			
}


</script>
<body style="margin-top:20%">
<table align="center" height="30%" width="70%">
		 <tr><td >
<fieldset width="100px">
	<legend class='l'>Insert Student</legend>
	<form action="sinsert1.php" method="post" autocomplete="off" onsubmit="return validate()">
	<center>
<table  
	width=56%;
	 align="center"
	cellspacing=11>
	<tr>
		<th align="left">Name</th><td align="right"><input type="text" name="name" id="name" class="a">
		<font color=red size=5>*</font></td>
	</tr>
	<tr>
		<th align="left">Register No</th><td align="right"><input type="text" name="regno" id="regno" onchange="validates()" class="a">
		<font color=red size=5>*</font></td>
	</tr>
	<tr>
		<th align="left">Class</th>
		<td align="right"><div id="output">
			<select name='class' id='class' ><option value='1'>Select Class</select>
		<font color=red size=5>*</font>
			</div></td>
			</tr>
<tr>
		<td><br><input type="submit" name="onsubmit" id="onsubmit" value="Insert"></td>
		<td align="right"><br><input type="button" value="Back" onclick="location.href='mhome.php'"></td>
</tr>
</table>
</center>
</form>
</fieldset>
</tr></td>
	</table>
</body>
</html>
<?php
 
	include("footer.htm");
	
?>
