function validates()
{	
	var res=document.getElementById("dept").value;
		if(res=='CS')
			{
			var arr=['1st SEM CS','2nd SEM CS','3rd SEM CS','4th SEM CS','5th SEM CS','6th SEM CS'];
		}
		else if(res=='EC')
			{
			var arr=['1st SEM EC','2nd SEM EC','3rd SEM EC','4th SEM EC','5th SEM EC','6th SEM EC'];
			}
		 
  	 	else if(res=='ME')
			{
			var arr=['1st SEM ME','2nd SEM ME','3rd SEM ME','4th SEM ME','5th SEM ME','6th SEM ME'];
			}
		else
		{
			var arr="";
		alert("Enter Valid Department");
		}

		
		var string="";
		for(i=0;i<arr.length;++i)
		{
			string=string+"<option>"+arr[i]+"</option>";
		}			
		
			string="<select name='sem1' id='sem1' onchange='validatesem()' required><option value='1'>Select Semister</option>"+string+"</select><font color=red size=5>*</font>";
			 
		document.getElementById('output').innerHTML=string;
			
}
 
function validatesem()
{
	var dept=document.getElementById("dept").value;
	var res=document.getElementById("sem1").value;
		if(dept=="CS")
		{
			if(res=='1st SEM CS')
				{
					var arr=['Maths-I','App Science','CE&E','Science Lab','BE LAB','BCS LAB'];
				}
			else if(res=='2nd SEM CS')
				{
					var arr=['App Maths-II','English','D &CF','DE LAB','WD LAB','MM LAB'];
				}
		 
  	 		else if(res=='3rd SEM CS')
				{
					var arr=['CO','DBMS','C Programming','CN','Kannada','C LAB','NW LAB','DBMS Lab'];
				}
			if(res=='4th SEM CS')
				{
					var arr=['OS','DS','Java','PE&IC','Kannada','Java LAB','Linux LAB','DS LAB'];
				}
			else if(res=='5th SEM CS')
				{
					var arr=['WP','DAA','SE','GC','WP LAB','DAA LAB','PP LAB'];
				}
		 
  	 		else if(res=='6th SEM CS')
				{
					var arr=['SW Testing','IOT','Nw Security','SW Testing Lab','Nw Security Lab','Project Work-II'];
				}
			}
		if(dept=="EC")
		{
			if(res=='1st SEM EC')
				{
					var arr=['App Maths-I','Applied Science','BE & EE','Science Lab','BE & EE Lab','Science Lab'];
				}
			else if(res=='2nd SEM EC')
				{
					var arr=['Engg Maths-II','English','BSD','SD Lab','DE Lab','SIM Lab'];
				}
		 
  	 		else if(res=='3rd SEM EC')
				{
					var arr=['AE','EMI','DE&MP','AC','AC Lab','AE Lab','PCB Lab'];
				}
			else if(res=='4th SEM EC')
				{
					var arr=['DC&CN','DCOM','Microcontroller','AVS','DCOM Lab','Microcontoller Lab','HW&NW Lab'];
				}
			else if(res=='5th SEM EC')
				{
					var arr=['IA','ADC','Microprocessor','VHDL','VHDL Lab','IA Lab','CASP Lab','Project Work-I'];
				}
		 
  	 		else if(res=='6th SEM EC')
				{
					var arr=['BMS&IC','ME','ARM','ARM Lab','MAT Lab','Project Work-II'];
				}
			}
			if(dept=="ME")
		{
			if(res=='1st SEM ME')
				{
					var arr=['Comm English','Engg --Maths I','WS-T','Engg Graphics-I','BCS-LAB','WBWS-I LAB'];
				}
			else if(res=='2nd SEM ME')
				{
					var arr=['Engg Maths-II','APP Science','BE & EE','Engg Graphics-II','App Science LAB','BE & EE LAB'];
				}
		 
  	 		else if(res=='3rd SEM ME')
				{
					var arr=['SOM','MOM','M&M','MD','M CAD','BWP-II','MT&QC LAB','Kannada'];
				}
			else if(res=='4th SEM ME')
				{
					var arr=['H&P','BTE','MTT','PE&IC','H&P LAB','M/C SHOP','C-PROG LAB','Kannada'];
				}
			else if(res=='5th SEM ME')
				{
					var arr=['IM','ATE','DME','MECHATORNICS','PP LAB','TE LAB','MECHATORNICS LAB','Project work'];
				}
		 
  	 		else if(res=='6th SEM ME')
				{
					var arr=['EC','CIM','ELECTIVE','CNC LAB','CAAS LAB','Project Work','Inplant Training'];
				}
			}
			if(res=='1')
				{
					var arr="";
					alert("Enter valid Semister");
				}

		
		var string="";
		for(i=0;i<arr.length;++i)
		{
			string=string+"<option>"+arr[i]+"</option>";
		}			
		
			string="<select name='sub1' id='sub1' > <option value='1'>Select Class</option>"+string+"</select><font color=red size=5>*</font>";
			 
		document.getElementById('output1').innerHTML=string;
	
}
 
function a()
{
	regex= /^[a-zA-Z ]{2,30}$/;
	var ename=document.getElementById("ename").value;
	var eid=document.getElementById("eid").value;
	var dept=document.getElementById("dept").value;
	var sem1=document.getElementById("sem1").value;
	var sub1=document.getElementById("sub1").value;
	 
	

		if(eid=="")
				{
					alert("Please fill the Employee id");
					document.getElementById("eid").focus();
					document.getElementById("eid").select();
					document.getElementById("eid").style.border="1px solid red";
			 
					return false;
				}
		else if(isNaN(eid))
				{
					alert("Please Enter valid Employee id");
					document.getElementById("eid").focus();
					document.getElementById("eid").select();
					document.getElementById("eid").style.border="1px solid red";
			 
					return false;
				}
		else if(document.getElementById("eid").value.length!=3)
				{
					alert("Please Enter valid Employee id");
					document.getElementById("eid").focus();
					document.getElementById("eid").select();
					document.getElementById("eid").style.border="1px solid red";
			 
					return false;
				}
		else if(ename=="")
				{
					alert("Please fill the Name");
					document.getElementById("ename").focus();
					document.getElementById("ename").select();
					document.getElementById("ename").style.border="1px solid red";
			 
					return false;
				}
				else if(!regex.test(document.getElementById("ename").value))
				{
					alert("Please Enter the valid Name");
					document.getElementById("ename").focus();
					document.getElementById("ename").select();
					document.getElementById("ename").style.border="1px solid red";
			 
					return false;
				}
				
				else if(dept=='1')
				{
					alert("Please Select the Department");
					/*document.getElementById("dept").focus();
					document.getElementById("dept").select();*/
					document.getElementById("dept").style.border="1px solid red";
			 
					return false;
				}
				else if(sem1=="1")
				{
					alert("Please Select the Semister");
					/*document.getElementById("sem1").focus();
					document.getElementById("sem1").select();*/
					document.getElementById("sem1").style.border="1px solid red";
			 
					return false;
				}
				else if(sub1=="1")
				{
					alert("Please Select the Subject");
					/*document.getElementById("sub1").focus();
					document.getElementById("sub1").select();*/
					document.getElementById("sub1").style.border="1px solid red";
			 
					return false;
				}
				 
						
				else{
				return true;
				}
}



 
