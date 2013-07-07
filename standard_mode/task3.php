<?php

	session_start();
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml1" xml:lang="en">
    <head>
        <title>Form Validation</title>
        <link 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="description" content="accepting user input" />

        <script type="text/javascript" src="scripts/task3.js">
        </script>

        <script type="text/javascript">	
		
		function first()
		{
			var y=<?php if(isset($_SESSION["errors"])) echo 1; else echo 0; ?>;
			if(y==1)
			next();               
			
			
		<!-- -------------------------------------------------------------------------------------->
		
function next() 
		{
			var name_1=<?php if(isset($_SESSION["name_error"])) echo 1; else echo 0;?>;
 			if(name_1)
			document.getElementById("errorname").innerHTML = "Error storing name.Please resubmit!";
			
			var dob_1=<?php if(isset($_SESSION["dob_error"])) echo 1; else echo 0;?>;
			if(dob_1)
			document.getElementById("errordob").innerHTML = "Date entered must be dd/mm/yy";
			
			var roll_no_1=<?php if(isset($_SESSION["roll_no_error"])) echo 1; else echo 0;?>;
			if(roll_no_1)
			document.getElementById("errorroll_no").innerHTML = "Error storing roll number. Please resubmit!";
			
			var dept_1=<?php if(isset($_SESSION["dept_error"])) echo 1; else echo 0;?>;
			if(dept_1)
			document.getElementById("errordept").innerHTML = "Error storing department. Please resubmit!";
			
			var email_id_1=<?php if(isset($_SESSION["email_id_error"])) echo 1; else echo 0;?>;
			if(email_id_1)
			document.getElementById("erroremail_id").innerHTML = "Error storing email id. Please resubmit!";
			
			var clubsall_1=<?php if(isset($_SESSION["clubsall_error"])) echo 1; else echo 0;?>;
			if(clubsall_1)
			document.getElementById("errorclub").innerHTML = "Error occured with the clubs submitted. Please resubmit!";
			
			var password_1=<?php if(isset($_SESSION["password_error"])) echo 1; else echo 0;?>;
			if(password_1)
			document.getElementById("errorpw").innerHTML = "Error occured with the password. Please resubmit!";
 		} 
		
		
        </script>
        <link rel="stylesheet" href="scripts/task3.css"/>
    </head>
<body onload="first()">
    <fieldset id="field" >
    <form method="post" action="scripts/store.php" enctype="multipart/form-data">
    
        <input type="hidden" name="konami" id="konami"/>
        <div>Name:</div><div><input type="text" name="name" id="name" maxlength="30"/>&nbsp;<i id="errorname"></i></div>
        <div>DOB</div><div><input type="text" name="dob" id="dob" / >&nbsp;<i id="errordob"></i></div>
        <div>Gender</div>
        
        <div><input type="radio" id="male" name="gender" checked="checked"/><label for="male">Male</label>
        <input type="radio" id="female" name="gender"/><label for="female">Female</label></div>
        <input type="hidden" id="gendervalue" name="gendervalue"/>
        
        <div>Roll no:</div><div><input type="text" name="roll_no" id="roll_no" maxlength="10"/>&nbsp;<i id="errorroll_no"></i></div>
        <div>Department:</div><div><input type="text" name="dept" id="dept" /></div>&nbsp;<i id="errordept"></i></div>
        <div>Email Id:</div><div><input type="text" name="email_id" id="email_id" />&nbsp;<i id="erroremail_id"></i></div>
        
        <div>Club Membership:&nbsp;&nbsp;&nbsp;<i id="errorclub"></i><br/></div>
        <div id="clubs">
        <input type="checkbox" name="clubs" id="delta" value="delta"/>Delta<br/>
        <input type="checkbox" name="clubs" id="spider" value="spider"/>Spider<br/>
        <input type="checkbox" name="clubs" id="robotics" value="robotics"/>RMI<br/>
        <input type="checkbox" name="clubs" id="baha" value="baha"/>BAHA<br/>
        <input type="checkbox" name="clubs" id="dt" value="dt"/>Dance Troop<br/>
        <input type="checkbox" name="clubs" id="ecell" value="ecell"/>E-Cell<br/>
        </div>
        <input type="hidden" name="clubsall" id="clubsall" />
        
        <div>Residential Address:<br/><textarea id="address" name="address"></textarea></div>
        
        <div>Last school attended:<div></div>
        <select id="schools" name="schools" onchange="display()" ><optgroup label="Select School">
        <option>Good Shepherd International School, Ooty, Ootacamund</option>
        <option>Loyola School, Snowden Road</option>
        <option>Sri Shanthi Vijai Girl's Higher Secondary School, Ettines Road</option>
        <option>Woodside School, Woodside</option>
        <option>Maharshi International Residential School,Adyar</option>
        <option>Hari Sri Vidya Nidhi School,Thrissur</option>
        <option>Kendriya Vidyalaya,Wellington Island</option>
        <option>St. Thomas Higher Secondary School,Pala</option>
        <option>Devamatha CMI Public School,Punkunnam</option>
        </optgroup></select>
        
        <div>Create a password:</div><div><input type="password" id="password" name="password" />&nbsp;<i id="errorpw"></i></div>
        <div>Confirm your password:</div><div><input type="password" id="repassword" name="repassword" />&nbsp;<i id="errorrepw"></i></div>
        
        <div>Upload your recent passport size photo:<br/>
        <input type="file" accept="image/x-png,image/jpeg" name="file_upload" id="file_upload"/><i id="errorfile"></i></div>
        
        </form>
        
        <div><input type="button" value="Submit" onclick="validate()"/>
    </fieldset>
    </body>
</html>