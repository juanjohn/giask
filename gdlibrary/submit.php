<?php
session_start();
$_SESSION["captchatxt"]=rand(1000,9999);
?>

<img src="captcha.php" /><br/>

<form method="post" action=""