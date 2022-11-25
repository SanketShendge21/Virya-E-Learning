<?php
session_start();

$page='prductt';
 include('../../Virya_Project/include/ad_header.php');

  ?>

		   <div style="margin-left:17%;  width: 80%;">
		        <ul class="breadcrumb">
		        	
		        	<li class="breadcrumb-item active"><a href="chatbot.php">ChatBot</a></li>
		        	<li class="breadcrumb-item active">Add Hints</li>
		        </ul>  	   	
		   </div>

         <div style=" width: 70%; margin-left: 25%; ">
  	    <form action="addhints.php" method="post" enctype="multipart/form-data" name="categoryform">
			<h1>Add Hints</h1>
			<hr>
		  <div class="form-group">
		    <label for="email"> Question:</label>
		    <input type="text" placeholder="Question..." name="que" class="form-control" id="email">
		  </div>


			 <div class="form-group">
		    <label for="email"> Reply:</label>
		    <input type="text" placeholder="Reply..." name="reply" class="form-control" id="email">
		  </div>


		  
		  

		  <input type="submit" name="submit" class="btn btn-primary" value="Submit">
		</form>
		

  </div>
  
  <?php

include('../../Virya_Project/config.php');
if (isset($_POST['submit'])) {
	$que=$_POST['que'];
				$reply=$_POST['reply'];
     $query1=mysqli_query($conn,"insert into chatbot_hints(question,reply)values('$que','$reply')");
     if ($query1) {
     	echo "<script>alert('Chat Added Successfully !!')</script>  ";
     	 echo "<script >window.location='http://localhost/Virya_Project/admin/chatbot.php' ;</script>";
     }else{
     	echo "<script>alert('Please Try Again!!')</script>  ";

     }


}

  ?>