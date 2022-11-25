<?php
 include('../../Virya_Project/config.php');
 $id=$_GET['del'];
 $query=mysqli_query($conn,"delete from comment where id='$id'");
  if ($query) {
  	 echo "<script> alert('Comment deleted !')</script> ";
  	   echo "<script >window.location='http://localhost/Virya_Project/admin/ad_comment.php' ;</script>";

  }else{
  	echo "Please Try again";
  }


?>