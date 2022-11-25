<?php
 include('../../Virya_Project/config.php');
 $id=$_GET['del'];
 $query=mysqli_query($conn,"delete from instructor_login where id='$id'");
  if ($query) {
  	 echo "<script> alert('instructor deleted !')</script> ";
  	   echo "<script >window.location='http://localhost/Virya_Project/admin/instructors.php' ;</script>";

  }else{
  	echo "Please Try again";
  }


?>