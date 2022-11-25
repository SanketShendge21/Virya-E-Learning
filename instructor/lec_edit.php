<?php
session_start();
error_reporting(0);

 include('../../Virya_Project/include/header.php');

  ?>

  <?php

 include('../../Virya_Project/config.php');

 $id=$_GET['update'];
 $query=mysqli_query($conn,"select * from lectures where id ='$id' ");
  while ($row=mysqli_fetch_array($query)) {
     $id=$row['id'];
      $ccode=$row['course_code'];
      $course=$row['course'];
       $sname=$row['section_name'];
       $lname=$row['lecture_name'];
          $lduration=$row['lecture_dur'];
				$video=$row['video'];
				$preview=$row['preview'];
				


  	# code...
  }

  ?>

		   <div style="margin-left:17%;  width: 80%;">
		        <ul class="breadcrumb">
		            <li class="breadcrumb-item active"><a href="courses.php">Lectures</a></li>
		        	<li class="breadcrumb-item active">Edit Lecture</li>
		        </ul>  	   	
		   </div>

         <div style=" width: 70%; margin-left: 25%; ">
  	    <form action="lec_edit.php" method="post" enctype="multipart/form-data" name="categoryform">
			<h1>Update Lecture</h1>
			<hr>
			<div class="form-group">
		    <label for="email">Course:</label>
		    <input type="text" value="<?php echo $course; ?>" name="course" class="form-control" id="email">
		  </div>


		  <div class="form-group">
		    <label for="email">Section Name:</label>
		    <input type="text" value="<?php echo $sname; ?>" name="sname" class="form-control" id="email">
		  </div>

		  <div class="form-group">
		    <label for="email">Lecture Name:</label>
		    <input type="text" value="<?php echo $lname; ?>" name="lname" class="form-control" id="email">
		  </div>

		  <div class="form-group">
		    <label for="email">Lecture duration:</label>
		    <input type="text" value="<?php echo $lduration; ?>" name="lduration" class="form-control" id="email">
		  </div>


		   <div class="form-group">
		    <label for="email">Lecture Video:</label>
		    <input type="file" value="<?php echo $video; ?>" name="video" class="form-control" id="email">
		    <video width='200' height='120' controls>
               <source src="../../Virya_Project/video/<?php echo $row['video']; ?>" type="video/mp4">
             </video>
		  </div>

		  <div class="form-group">
		    <label for="email">Lecture Preview:</label>
		    <input type="file" value="<?php echo $preview; ?>" name="preview" class="form-control" id="email">
		    <video width='200' height='120' controls>
               <source src="../../Virya_Project/video/<?php echo $row['preview']; ?>" type="video/mp4">
             </video>
		  </div>

		  <div class="form-group">
		    <label for="email">Course Code:</label>
		    <input type="text" value="<?php echo $ccode; ?>" name="ccode" class="form-control" id="email">
		  </div>

		 

		  

          
          <input type="hidden" name="id" value="<?php echo $_GET['update']; ?>">
		   

		  <input type="submit" name="submit" class="btn btn-primary" value="Update">
		</form>
		
			
       
  </div>
 
    <?php

include('../../Virya_Project/config.php');

if (isset($_POST['submit'])) {
	 $id=$_POST['id'];
      $ccode=$_POST['ccode'];
      $course=$_POST['course'];
       $sname=$_POST['sname'];
       $lname=$_POST['lname'];
          $lduration=$_POST['lduration'];
				$video=$_FILES['video']['name'];
			$tmp_video=$_FILES['video']['tmp_name'];
			$preview=$_FILES['preview']['name'];
			$tmp_preview=$_FILES['preview']['tmp_name'];

			move_uploaded_file($tmp_video,"../../Virya_Project/video/$video");
			move_uploaded_file($tmp_preview,"../../Virya_Project/video/$preview");

	$sql= mysqli_query($conn,"update lectures set course_code='$ccode', course='$course' , section_name='$sname' , lecture_name='$lname' , lecture_dur='$lduration' , video='$video' , preview='$preview' where id='$id' ");
	if ($sql) {
		 echo "<script>alert('Lecture Updated Successfully !!')</script>  ";
		 echo "<script >window.location='http://localhost/Virya_Project/instructor/courses.php' ;</script>";
	} else{
		echo "<script>alert('Please try again !!')</script>  ";
	}
			

}

  ?>