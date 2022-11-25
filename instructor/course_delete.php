<?php
 include('../../Virya_Project/config.php');

 $id=$_GET['del'];
 $query = mysqli_query($conn,"delete from courses where course_code='$id' ");
 if ($query) {
 	 echo "<script> alert('Course deleted !')</script> ";
  	   echo "<script >window.location='http://localhost/Virya_Project/instructor/courses.php' ;</script>";
 
 }else{
 	echo "<script>alert('Please try again !!')</script>";
 }

?>