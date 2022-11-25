<?php
session_start();


 include('../../Virya_Project/include/ad_header.php');

  ?>

  <?php

 include('../../Virya_Project/config.php');

 $id=$_GET['edit'];
 $query=mysqli_query($conn,"select * from chatbot_hints where id ='$id' ");
  while ($row=mysqli_fetch_array($query)) {
     $id=$row['id'];
      $que=$row['question'];
          $reply=$row['reply'];


  	# code...
  }

  ?>

		   <div style="margin-left:17%;  width: 80%;">
		        <ul class="breadcrumb">
		            <li class="breadcrumb-item active"><a href="chatbot.php">ChatBot</a></li>
		        	<li class="breadcrumb-item active">Edit Chat</li>
		        </ul>  	   	
		   </div>

         <div style=" width: 70%; margin-left: 25%; ">
  	    <form action="chat_edit.php" method="post" enctype="multipart/form-data" name="categoryform">
			<h1>Update Chat</h1>
			<hr>
		  <div class="form-group">
		    <label for="email"> Question:</label>
		    <input type="text" value="<?php echo $que; ?>" name="que" class="form-control" id="email">
		  </div>


		  
			<div class="form-group">
		    <label for="email"> Reply:</label>
		    <input type="text" value="<?php echo $reply; ?>" name="reply" class="form-control" id="email">
		  </div>

          
          <input type="hidden" name="id" value="<?php echo $_GET['edit']; ?>">
		   

		  <input type="submit" name="submit" class="btn btn-primary" value="Update">
		</form>
		
			
       
  </div>
 
  <?php

include('../../Virya_Project/config.php');

if (isset($_POST['submit'])) {
	$id=$_POST['id'];
	$que=$_POST['que'];
				$reply=$_POST['reply'];

			

	$sql= mysqli_query($conn,"update chatbot_hints set question='$que', reply='$reply' where id='$id' ");
	if ($sql) {
		 echo "<script>alert('Chat Updated Successfully !!')</script>  ";
		 echo "<script >window.location='http://localhost/Virya_Project/admin/chatbot.php' ;</script>";
	} else{
		echo "<script>alert('Please try again !!')</script>  ";
	}
			

}

  ?>
