<?php
session_start();

$page='prductt';
 include('../../Virya_Project/include/ad_header.php');

  ?>

		   <div style="margin-left:17%;  width: 80%;">
		        <ul class="breadcrumb">
		        	
		        	<li class="breadcrumb-item active"><a href="category.php">Categories</a></li>
		        	<li class="breadcrumb-item active">Add Category</li>
		        </ul>  	   	
		   </div>

         <div style=" width: 70%; margin-left: 25%; ">
  	    <form action="addcategory.php" method="post" enctype="multipart/form-data" name="categoryform">
			<h1>Add Category</h1>
			<hr>
		  <div class="form-group">
		    <label for="email"> Name:</label>
		    <input type="text" placeholder="Title..." name="title" class="form-control" id="email">
		  </div>

		  <div class="form-group">
		    <label for="email"> Thumbnail:</label>
		    <input type="file"  name="thumbnail" class="form-control img-thumbnail" id="email">
		  </div>

		  <div class="form-group">
			  <label for="comment">Description:</label>
			 <textarea class="form-control" placeholder="Description..." rows="5" name="description" id="comment"></textarea>
			</div>


			 <div class="form-group">
		    <label for="email"> Webpage:</label>
		    <input type="text" value="categories\" name="webpage" class="form-control" id="email">
		  </div>


		  
		  

		  <input type="submit" name="submit" class="btn btn-primary" value="Submit">
		</form>
		

  </div>
  
  <?php

include('../../Virya_Project/config.php');
if (isset($_POST['submit'])) {
	$title=$_POST['title'];
	$thumbnail=$_FILES['thumbnail']['name'];
			$tmp_thumbnail=$_FILES['thumbnail']['tmp_name'];
	$description=$_POST['description'];
				$webpage=$_POST['webpage'];
			move_uploaded_file($tmp_thumbnail,"../../Virya_Project/images/$thumbnail");

     $query1=mysqli_query($conn,"insert into categories_main(name,description,image,webpage_name)values('$title','$description','$thumbnail','$webpage')");
     if ($query1) {
     	echo "<script>alert('Category Added Successfully !!')</script>  ";
     	 echo "<script >window.location='http://localhost/Virya_Project/admin/category.php' ;</script>";
     }else{
     	echo "<script>alert('Please Try Again!!')</script>  ";

     }


}

  ?>