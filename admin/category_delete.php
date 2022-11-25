<?php
 include('../../Virya_Project/config.php');

 $id=$_GET['del'];
 $query = mysqli_query($conn,"delete from categories_main where id='$id' ");
 if ($query) {
 	 echo "<script> alert('Category deleted !')</script> ";
  	   echo "<script >window.location='http://localhost/Virya_Project/admin/category.php' ;</script>";
 
 }else{
 	echo "Please Try again";
 }

?>