<?php
ob_start();
session_start();
$_SESSION["check"]=1; // so that this page will redirect user to the visible form ... without konami.

$ip="localhost";
$username="juanjohn";
$password="password";
	if(!@mysql_connect($ip,$username,$password) || !@mysql_select_db("task_03"))
	{
		die("Error!Unable to communicate with server.Sorry for the inconvienience");
		ob_flush();
	}
	else
	{
	}


$name=$_POST["name"];
$dob=$_POST["dob"];
$gender=$_POST["gendervalue"];
$roll_no=$_POST["roll_no"];
$dept=$_POST["dept"];
$email_id=$_POST["email_id"];

$clubsall=$_POST["clubsall"];
$clubsall=substr($clubsall,1);
$clubs=explode("+",$clubsall);

$address=$_POST["address"];
$school=$_POST["otherschool"];
$password=$_POST["password"];
$hashpw=md5($password);


$query="INSERT INTO `user_data` VALUES ('','$name','$dob','$gender','$roll_no','$dept','$email_id','$clubsall','$address','$school','$hashpw')";


$filename=$_FILES["file_upload"]["name"];
$filesize=$_FILES["file_upload"]["size"];
$filetype=$_FILES["file_upload"]["type"];
$filetmpname=$_FILES["file_upload"]["tmp_name"];
$error=$_FILES["file_upload"]["error"];

move_uploaded_file($filetmpname,"uploads/".$filename);

include_once("validation_server.php");
//ob_flush();


if(isset($_SESSION["errors"]))
{
	$x=1;
}
else
{
	mysql_query($query);
	unset($_SESSION["errors"]);
	header("Location: ../task3.php");
}

ob_end_clean();



?>


<!DOCTYPE html PUBLIC"-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>Connect to database</title>
<script type="text/javascript">
var x=<?php if($x==1) echo true; else echo false;?>;
if(x==true)
{
	window.history.back();
}
</script>
</head>
<body>


</body>
</html>


