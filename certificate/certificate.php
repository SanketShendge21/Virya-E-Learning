<?php	
session_start();
$cer_email = $_SESSION['uemail']; 
include('../../Virya_Project/config.php');


$cer_code = substr($_GET['ccode'],0,8);

$stmtt = $conn->prepare("SELECT * FROM orders WHERE email = ?");
$stmtt->bind_param("s",$cer_email);
$stmtt->execute();
$resultt = $stmtt->get_result();
$roww = $resultt->fetch_assoc();



$stmt = $conn->prepare("SELECT * FROM orders WHERE course_code = ?");
$stmt->bind_param("s",$cer_code);
$stmt->execute();
$result = $stmt->get_result();


	while ($row=$result->fetch_assoc()){		
		
header('content-type:image/jpeg');	
$font="times.TTF";
$image=imagecreatefromjpeg("certiF.jpg");
$color=imagecolorallocate($image,19,21,22);

$file=time();
$file_path = "../certificate/".$file.".jpg";
$coursename=$row['courses']." Course";
$date=date("Y/m/d");
imagettftext($image,35,0,420,450,$color,$font,$roww['c_name']);
imagettftext($image,30,0,400,567,$color,"times.ttf",$coursename);
imagettftext($image,23,0,505,650,$color,"times.ttf",$date);
imagejpeg($image,$file_path);
imagedestroy($image);



require('fpdf.php');
$pdf=new FPDF();
$pdf->AddPage();
$pdf->Image($file_path,0,0,210,300);
$pdf->Output();

}	
?>
