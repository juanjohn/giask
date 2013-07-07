<?php
$num_error=0;


if(!preg_match("/^(\s?[A-Z]\.?){0,}([A-Z][a-z]{1,})(\s?[A-Z]\.?){0,}(\s[A-Z][a-z]{1,}){0,}(\s[A-Z](\.)?){0,}$/",$name))
{$_SESSION["name_error"]="There is an error with the name!";$num_error++;}


if(!preg_match("/^[0-3][0-9][\-]{1}[0-1][0-9][\-]{1}[901][0-9]$/",$dob))
{$_SESSION["dob_error"]="There is an error with the dob!";$num_error++;}


if(!preg_match("/male|female/",$gender))
{$_SESSION["gender_error"]="There is an error with the gender!";$num_error++;}

if(!preg_match("/^([[:digit:]]){10}$/",$roll_no))
{$_SESSION["roll_no_error"]="There is an error with the roll number !";$num_error++;}

if(!preg_match("/^([\s\D\.]){1,}$/",$dept))
{$_SESSION["dept_error"]="There is an error with the department!";$num_error++;}

if(!preg_match("/^[_a-z0-9\\-]+(\.[a-z0-9\\-]+)*@[a-z0-9\\-]+(\.[a-z0-9\\-]+)*(\.[a-z]{2,3})$/",$email_id))
{$_SESSION["email_id_error"]="There is an error with the email id!";$num_error++;}

if(!preg_match("/[A-Za-z\+]{3,}/",$clubsall))
{$_SESSION["clubsall_error"]="There is an error with the clubs selected!";$num_error++;}


if(!preg_match("/[\D]{1,}[\d]{1,}[_]{1,}/",$password) && preg_match("/^[\w\_]{5,10}$/",$password))
{$_SESSION["password_error"]="There is an error with the password!";$num_error++;}
unset($_SESSION["errors"]);
if($num_error>0)
$_SESSION["errors"]="1";


?>