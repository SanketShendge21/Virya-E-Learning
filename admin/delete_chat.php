<?php
 include('../../Virya_Project/config.php');
 $id=$_GET['del'];
 $query=mysqli_query($conn,"delete from chatbot_hints where id='$id'");
  if ($query) {
  	 echo "<script> alert('Chat deleted !')</script> ";
  	   echo "<script >window.location='http://localhost/Virya_Project/admin/chatbot.php' ;</script>";

  }else{
  	echo "Please Try again";
  }


?>