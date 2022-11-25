<?php
session_start();
if ( $_SESSION['iemail']==true) {
  # code...
}else
header('location:instructor_login.php');
$page='prductt';
 include('../../Virya_Project/include/header.php');

  ?>

		   <div style="margin-left:17%;  width: 80%;">
		        <ul class="breadcrumb">
		        	
		        	<li class="breadcrumb-item active"><a href="courses.php">Courses</a></li>
		        	<li class="breadcrumb-item active">Add Course</li>
		        </ul>  	   	
		   </div>

         <div style=" width: 70%; margin-left: 25%; ">
  	    <form action="AddCourses.php" method="post" enctype="multipart/form-data" name="categoryform">
			<h1>Add Course</h1>
			<hr>
		  <div class="form-group">
		    <label for="email">Course Name:</label>
		    <input type="text" placeholder="Name..." name="title" class="form-control" id="email">
		  </div>

		  <div class="form-group">
			  <label for="comment">Course Description:</label>
			 <textarea class="form-control" placeholder="Description..." rows="5" name="description" id="comment"></textarea>
			</div>

			
           <div class="form-group">
		    <label for="email">Course Thumbnail:</label>
		    <input type="file"  name="thumbnail" class="form-control img-thumbnail" id="email">
		  </div>
		  
		  <div class="form-group">
		    <label for="email">Course Category:</label>
		     
               
		        <select class="form-control"  name="category" >
		       <?php
                include('../../Virya_Project/config.php');
                  $query=mysqli_query($conn,"select * from categories_main");

                while($row=mysqli_fetch_array($query)){

                	
                	?>
		        	 <option value="<?php echo $row['name'];?>"><?php echo $row['name'];?></option>
		        	 
                 <?php } ?>
		        </select>
		        </div>

		         <div class="form-group">
		    <label for="email">Section Name:</label>
		    <input type="text" placeholder="Section 1,2,3..." name="sname" class="form-control" id="email">
		  </div>

		  <div class="form-group">
		    <label for="email">Lecture Name:</label>
		    <input type="text" placeholder="Lecture..." name="lname" class="form-control" id="email">
		  </div>

		  <div class="form-group">
		    <label for="email">Lecture Duration:</label>
		    <input type="text" placeholder="00:00:00" name="lduration" class="form-control" id="email">
		  </div>

		  <div class="form-group">
		    <label for="email">Lecture Video:</label>
		    <input type="file" name="video" class="form-control" id="email">
		  </div>

		   <div class="form-group">
		    <label for="email">Lecture Preview:</label>
		    <input type="file" name="preview" class="form-control" id="email">
		  </div>

		    <div class="form-group">
		    <label for="email">Course Price:</label>
		    <input type="text" placeholder="Price..." name="price" class="form-control" id="email">
		  </div>

		  <div class="form-group">
		    <label for="email">Course Duration:</label>
		    <input type="text" placeholder="00:00:00" name="duration" class="form-control" id="email">
		  </div>

		  <div class="form-group">
		    <label for="email">Course Outcome:</label>
		    <input type="text" placeholder="Outcome..." name="outcome" class="form-control" id="email">
		  </div>

		  <div class="form-group">
		    <label for="email">Course Requisites:</label>
		    <input type="text" placeholder="Requisites..." name="req" class="form-control" id="email">
		  </div>

		   <div class="form-group">
		    <label for="email"> Course Code:</label>
		    <input type="text" placeholder="Code..." name="ccode" class="form-control" id="email">
		  </div>


		        <div class="form-group">
		        	<label for="admin">Instructor:</label>
		        	<input type="text" class="form-control" disabled value="<?php echo $_SESSION['iname'];  ?> ">
		        	
		        </div>
		  

		  <input type="submit" name="submit" class="btn btn-primary" value="Submit">
		</form>
		

  </div>
  
  <?php

include('../../Virya_Project/config.php');
if (isset($_POST['submit'])) {
	$title=$_POST['title'];
	$description=$_POST['description'];
		$thumbnail=$_FILES['thumbnail']['name'];
			$tmp_thumbnail=$_FILES['thumbnail']['tmp_name'];
			$video=$_FILES['video']['name'];
			$tmp_video=$_FILES['video']['tmp_name'];
			$preview=$_FILES['preview']['name'];
			$tmp_preview=$_FILES['preview']['tmp_name'];
				$category=$_POST['category'];
				$sname=$_POST['sname'];
				$lname=$_POST['lname'];
				$lduration=$_POST['lduration'];
				$price=$_POST['price'];
				$duration=$_POST['duration'];
				$outcome=$_POST['outcome'];
				$req=$_POST['req'];
				$ccode=$_POST['ccode'];
				$instructor=$_SESSION['iname'];
			move_uploaded_file($tmp_thumbnail,"../../Virya_Project/images/$thumbnail");
			move_uploaded_file($tmp_video,"../../Virya_Project/video/$video");
			move_uploaded_file($tmp_preview,"../../Virya_Project/video/$preview");

     $query1=mysqli_query($conn,"insert into courses(course_name,course_desc,course_image,course_cat,course_price,course_duration,course_outcome,course_req,course_code,instructor)values('$title','$description','$thumbnail','$category','$price','$duration','$outcome','$req','$ccode','$instructor')");

     $query2=mysqli_query($conn,"insert into lectures(course_code,course,section_name,lecture_name,lecture_dur,video,preview,instructor)values('$ccode','$title','$sname','$lname','$lduration','$video','$preview','$instructor')");

     if ($query1&&$query2) {
     	echo "<script>alert('Course Uploaded Successfully !!')</script>  ";
     }else{
     	echo "<script>alert('Please Try Again!!')</script>  ";

     }


}

  ?>