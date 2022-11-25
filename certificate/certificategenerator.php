







<?php
header('content-type:image/jpeg');	
include('../../Virya_Project/config.php');
$id=1;
$query=mysqli_query($conn,"select * from orders where id='$id'");
	while ($row=mysqli_fetch_array($query)){		
	
$font="times.TTF";
$image=imagecreatefromjpeg("certiF.jpg");
$color=imagecolorallocate($image,19,21,22);

$coursename=$row['courses']." Course";
$date=date("Y/m/d");
imagettftext($image,35,0,420,450,$color,$font,$row['c_name']);
imagettftext($image,30,0,400,567,$color,"times.ttf",$coursename);
imagettftext($image,23,0,505,650,$color,"times.ttf",$date);
$file=time();
imagejpeg($image,"../../Virya_Project/certificate/".$file.".jpg");
//imagedestroy($image);
}	
$id++;
?>
