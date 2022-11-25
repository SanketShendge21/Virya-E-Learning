<?php
 include('../../Virya_Project/config.php');

 $id=$_GET['qdel'];
 $query = mysqli_query($conn,"delete from quiz_questions where id='$id' ");
 if ($query) {
 	 echo "<script> alert('Question deleted !')</script> ";
  	   echo "<script >window.location='http://localhost/Virya_Project/admin/quiz.php' ;</script>";
 
 }else{
 	echo "<script>alert('Please try again !!')</script>";
 }

?>