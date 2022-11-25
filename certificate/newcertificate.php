<?php	
header('content-type:image/jpeg');	
$font="times.TTF";
$image=imagecreatefromjpeg("certiF.jpg");
$color=imagecolorallocate($image,19,21,22);
$name="SIDDHART SINGH";
imagettftext($image,50,0,370,460,$color,$font,$name);
$coursename="Programming in PHP";
imagettftext($image,28,0,224,567,$color,"seguisym.ttf",$coursename);
$date="6/7/2021";
imagettftext($image,23,0,505,650,$color,"seguisym.ttf",$date);
imagejpeg($image);
imagedestroy($image);	
?>