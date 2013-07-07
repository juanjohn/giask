
var data={};



function validate()
{
	var count=0;
	data.name=document.getElementById("name").value;
	data.password=document.getElementById("password").value;
	data.repassword=document.getElementById("repassword").value;
	data.email_id=document.getElementById("email_id").value;
	data.dob=document.getElementById("dob").value;
	data.roll_no=document.getElementById("roll_no").value;
	data.clubsall="";
		
	
	if(!(/^(\s?[A-Z]\.?){0,}([A-Z][a-z]{1,})(\s?[A-Z]\.?){0,}(\s[A-Z][a-z]{1,}){0,}(\s[A-Z](\.)?){0,}$/.test(data.name)) || !(/^([A-Za-z\s\.]{1,})$/.test(data.name)))
	{
    document.getElementById("errorname").innerHTML = "Name entered is wrong!";
	}
	else
	{document.getElementById("errorname").innerHTML = "";count++;}

	if(!/^[0-3][0-9][\-]{1}[0-1][0-9][\-]{1}[901][0-9]$/.test(data.dob))
	{
		document.getElementById("errordob").innerHTML = "Date entered must be dd/mm/yy";
	}
	else
	{document.getElementById("errordob").innerHTML = "";count++;}

	
	if(!/^(\d){10}$/.test(data.roll_no))
	{
		document.getElementById("errorroll_no").innerHTML = "Invalid roll number!";
	}
	else
	{document.getElementById("errorroll_no").innerHTML = "";count++;}
	
	
	if(!/^[_a-z0-9\\-]+(\.[a-z0-9\\-]+)*@[a-z0-9\\-]+(\.[a-z0-9\\-]+)*(\.[a-z]{2,3})$/.test(data.email_id)) ////  to be modified
	{
		document.getElementById("erroremail_id").innerHTML = "Email id does not exist!";
	}
	else
	{
		count++;
		
	}
		

	if(true)
	{
		var prefix=document.getElementById("clubs");var flag=0;
		for(var i=0;i<prefix.getElementsByTagName("input").length;i++)
		{
			if(prefix.getElementsByTagName("input")[i].checked)
				{
					var val=prefix.getElementsByTagName("input")[i].value;
					data.clubsall=data.clubsall + "+" + val;
		 			flag++;
				}
		}
		document.getElementById("clubsall").value=data.clubsall;
		if(flag<3)
		{
			document.getElementById("errorclub").innerHTML = "Check at least three clubs!";
		}else
		{document.getElementById("errorclub").innerHTML = "";count++;}
	}

	
	
	if(!(/[\D]{1,}[\d]{1,}[_]{1,}/.test(data.password)) || !(/^[\w\_]{5,10}$/.test(data.password)))        /// password pattern match yet to be modified
	{
		document.getElementById("errorpw").innerHTML = "The password must contain an alphabet, number and underscore and should be 5-10 characters long!";
	}
	else
	{
		count++;
	}

	
	if(data.password!=data.repassword)
	{
		document.getElementById("errorrepw").innerHTML = "The passwords you have entered did not match";
	}
	else
	{document.getElementById("errorrepw").innerHTML = "";count++;}
	
	
	if(document.getElementById("male").checked)
	document.getElementById("gendervalue").value="male";
	else
	document.getElementById("gendervalue").value="female";
	

	
	var file=document.getElementById("file_upload");
	document.getElementById("errorfile").innerHTML="Please upload a file.";
	if(file.files[0].size==0 || file.files[0].size>=(1024*1024))
	document.getElementById("errorfile").innerHTML="Upload a file smaller than 1 MB.";
	else
	{document.getElementById("errorfile").innerHTML="";count++}
	
	
	
	if(count==8)
	{
		document.forms[0].submit();
	}
	
	
}






