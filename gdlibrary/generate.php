<?php
header('Content-type:image/jpeg');

$text=$_GET["text"];


$f_size=4;

$image_width=imagefontwidth($f_size)*strlen($text);
$image_height=imagefontheight($f_size);

$image=imagecreate($image_width,$image_height);

imagecolorallocate($image,100,100,100);
$font_color=imagecolorallocate($image,0,0,0);

imagestring($image,$f_size,10+"px",0,$text,$font_color);
imagejpeg($image);
?>