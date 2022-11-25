<?php
session_start();


 include('../../Virya_Project/include/header.php');

  ?>

  <?php

 include('../../Virya_Project/config.php');

 $id=$_GET['edit'];
 $query=mysqli_query($conn,"select * from courses where cid ='$id' ");
  while ($row=mysqli_fetch_array($query)) {
     $id=$row['cid'];
      $name=$row['course_name'];
      $thumbnail=$row['course_image'];
       $description=$row['course_desc'];
       $category=$row['course_cat'];
          $price=$row['course_price'];
          $duration=$row['course_duration'];
				$outcome=$row['course_outcome'];
				$req=$row['course_req'];
				$ccode=$row['course_code'];
				


  	# code...
  }

  ?>

		   <div style="margin-left:17%;  width: 80%;">
		        <ul class="breadcrumb">
		            <li class="breadcrumb-item active"><a href="courses.php">Courses</a></li>
		        	<li class="breadcrumb-item active">Edit Course</li>
		        </ul>  	   	
		   </div>

         <div style=" width: 70%; margin-left: 25%; ">
  	    <form action="course_edit.php" method="post" enctype="multipart/form-data" name="categoryform">
			<h1>Update Course</h1>
			<hr>
		  <div class="form-group">
		    <label for="email">Course Name:</label>
		    <input type="text" value="<?php echo $name; ?>" placeholder="Name..." name="name" class="form-control" id="email">
		  </div>


		   <div class="form-group">
		    <label for="email">Course Thumbnail:</label>
		    <input type="file" value="<?php echo $thumbnail; ?>"  name="thumbnail" class="form-control img-thumbnail" id="email">
		    <img class="img img-thumbnail" src="../../Virya_Project/images/<?php echo $thumbnail; ?>" alt=""  width="300">
		  </div>

		  <div class="form-group">
			  <label for="comment">Course Description:</label>
			 	 <textarea class="form-control" placeholder="Description..." rows="5" name="description" id="comment"><?php echo $description; ?> </textarea>
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
		    <label for="email">Course Price:</label>
		    <input type="text" value="<?php echo $price; ?>" name="price" class="form-control" id="email">
		  </div>

		  <div class="form-group">
		    <label for="email">Course Duration:</label>
		    <input type="text" value="<?php echo $duration; ?>" name="duration" class="form-control" id="email">
		  </div>

		  <div class="form-group">
		    <label for="email">Course Outcome:</label>
		    <input type="text" value="<?php echo $outcome; ?>" name="outcome" class="form-control" id="email">
		  </div>

		  <div class="form-group">
		    <label for="email"> Course Requisites:</label>
		    <input type="text" value="<?php echo $req; ?>" name="req" class="form-control" id="email">
		  </div>

		  <div class="form-group">
		    <label for="email">Course Code:</label>
		    <input type="text" value="<?php echo $ccode; ?>" name="ccode" class="form-control" id="email">
		  </div>

		  

          
          <input type="hidden" name="id" value="<?php echo $_GET['edit']; ?>">
		   

		  <input type="submit" name="submit" class="btn btn-primary" value="Update">
		</form>
		
			
       
  </div>
 
  <?php

include('../../Virya_Project/config.php');

if (isset($_POST['submit'])) {
	$id=$_POST['id'];
	$name=$_POST['name'];
	$thumbnail=$_FILES['thumbnail']['name'];
			$tmp_thumbnail=$_FILES['thumbnail']['tmp_name'];
	$description=$_POST['description'];
       $category=$_POST['category'];
          $price=$_POST['price'];
          $duration=$_POST['duration'];
				$outcome=$_POST['outcome'];
				$req=$_POST['req'];
				$ccode=$_POST['ccode'];

			move_uploaded_file($tmp_thumbnail,"../../Virya_Project/images/$thumbnail");

	$sql= mysqli_query($conn,"update courses set course_name='$name', course_desc='$description' , course_image='$thumbnail' , course_cat='$category' , course_price='$price' , course_duration='$duration' , course_outcome='$outcome' , course_req='$req' , course_code='$ccode' where cid='$id' ");
	if ($sql) {
		 echo "<script>alert('Course Updated Successfully !!')</script>  ";
		 echo "<script >window.location='http://localhost/Virya_Project/instructor/courses.php' ;</script>";
	} else{
		echo "<script>alert('Please try again !!')</script>  ";
	}
			

}

  ?>