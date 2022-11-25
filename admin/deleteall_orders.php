<?php
 include('../../Virya_Project/config.php');
 
 $query=mysqli_query($conn,"truncate table orders");
  if ($query) {
  	 echo "<script> alert('All Orders Cleared!')</script> ";
  	   echo "<script >window.location='http://localhost/Virya_Project/admin/orders.php' ;</script>";

  }else{
  	echo "Please Try again";
  }


?>