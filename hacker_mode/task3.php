<?php

	session_start();
	$_SESSION["captchatxt"]=rand(1000,9999);	
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml1" xml:lang="en">
    <head>
        <title>Form Validation</title>
        <link 
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="description" content="accepting user input" />

        <script type="text/javascript" src="scripts/validation_client.js">
        </script>

        <script type="text/javascript">
		function display()
	
		{document.getElementById("schools").value=='Other Schools'?document.getElementById('otherschool').style.display='inline' : document.getElementById('otherschool').style.display='none';
		}
		
		var stooge=
		{
			"check":0,      // This is to prevent the form from being hidden after user is redirected to this page after submission
			"string" :"",	// This will store each keycode onkeypress
			"finalstr":""	// Each kecode of pressed keys gets appent to this variable
		};
		
	
		document.onkeydown = function(event)
		{
			if(event.keyCode)
			stooge.string+=(event.keyCode);
			else if(event.which)
			stooge.string+=(event.which);
			if(event.keyCode==65)
			{
				stooge.finalstr=stooge.string;
				stooge.string="";
				if(/38384040373937396665$/.test(stooge.finalstr))
				{
					konami();
				}
			}
		};
		
		var x=<?php if(isset($_SESSION["check"])) echo $_SESSION["check"]; else echo 0;?>;
		if(x==1)
		stooge.check=1;
		
		function first()
		{
			var y=<?php if(isset($_SESSION["errors"])) echo 1; else echo 0; ?>;
			if(y==1)
			next();               
			
			if(stooge.check)
			{
				konami();
			}
		
		}
		function konami()
		{
			document.getElementById("head").style.display='inline';
			document.getElementById("field").style.display='inline';
		}
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
        <link rel="stylesheet" href="scripts/styling.css"/>
    </head>
<body onload="first()">
<div id="head" style="display:none;">
<h1>Registration Portal</h1>
</div>
    <fieldset id="field" style="display:none;">
    <form method="post" id="mainform" action="scripts/store.php" enctype="multipart/form-data">
    
        <input type="hidden" name="konami" id="konami"/>
        <div>Name:</div><div><input type="text" placeholder="Enter your Full Name" name="name" id="name" maxlength="30"/>&nbsp;<i id="errorname"></i></div>
        <div>DOB</div><div><input type="text" placeholder="dd/mm/yy" name="dob" id="dob" / >&nbsp;<i id="errordob"></i></div>
        <div>Gender</div>
        
        <div><input type="radio" id="male" name="gender" checked="checked"/><label for="male">Male</label>
        <input type="radio" id="female" name="gender"/><label for="female">Female</label></div>
        <input type="hidden" id="gendervalue" name="gendervalue"/>
        
        <div>Roll no:</div><div><input type="text" placeholder="Roll number" name="roll_no" id="roll_no" maxlength="10"/>&nbsp;<i id="errorroll_no"></i></div>
        <div>Department:</div><div><input type="text" placeholder="Name of Department" name="dept" id="dept" /></div>&nbsp;<i id="errordept"></i></div>
        <div>Email Id:</div><div><input type="text" placeholder="Active Email id" name="email_id" id="email_id" />&nbsp;<i id="erroremail_id"></i></div>
        
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
        <option>Other Schools</option>
        </optgroup></select>
        <input type="text" name="otherschool" id="otherschool" style="display:none;"/></div>
        
        <div>Create a password:</div><div><input type="password" placeholder="Enter a Secure Password" id="password" name="password" />&nbsp;<i id="errorpw"></i></div>
        <div>Confirm your password:</div><div><input type="password" placeholder="Reenter your Password" id="repassword" name="repassword" />&nbsp;<i id="errorrepw"></i></div>
        
        <div>Upload your recent passport size photo:<br/></div>
        <div><input type="file" accept="image/x-png,image/jpeg" name="file_upload" id="file_upload"/>
        <i id="errorfile"></i></div>
        
        </form>
        
        <div id="capt">
        <img src="scripts/captcha.php"/>&nbsp;<i id="errorcaptcha"></i>
        <form method="post" action="captcha.php">
        <br/>Enter the text shown above:<br/>
        <input type="text" placeholder="Enter the Captcha Code" name="captcha" id="captcha"/>
        <input type="hidden" name="captcha_value" id="captcha_value" value="<?php echo $_SESSION["captchatxt"]; ?>"/>
        <input type="hidden" name="captcha_reload" id="captcha_reload" value="<?php if(isset($_SESSION["captcha_reload"])) echo true; else echo false;?>"/>
                
        </form></div>
        
        <div>
        <input type="button" value="Submit" style="color:#484848;" onclick="validate()"/>
        <input type="button" value="Reset" style="color:#484848;" onclick="document.forms[0].reset()"/>
        </div>
        
    </fieldset>
    </body>
</html>