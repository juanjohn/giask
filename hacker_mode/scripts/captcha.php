<?php
session_start();
header('Content-type:image/jpeg');
$text=$_SESSION["captchatxt"];


$f_size=50;

$image_width=200;
$image_height=80;

$image=imagecreate($image_width,$image_height);

imagecolorallocate($image,210,210,250);
$font_color=imagecolorallocate($image,48,48,48);

for($x=1;$x<=30;$x++)
{
	$x1=rand(1, 200);
	$x2=rand(1, 200);
	$y1=rand(1, 80);
	$y2=rand(1, 80);
	imageline($image, $x1, $y1, $x2, $y2 , $font_color);
}

imagettftext($image,$f_size,0,30,50,$font_color,'hawaii_killer.ttf',$text);
imagejpeg($image);