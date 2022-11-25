<?php
session_start();


 include('../../Virya_Project/include/ad_header.php');

  ?>

  <?php

 include('../../Virya_Project/config.php');

 $id=$_GET['edit'];
 $query=mysqli_query($conn,"select * from categories_main where id ='$id' ");
  while ($row=mysqli_fetch_array($query)) {
     $id=$row['id'];
      $name=$row['name'];
      $thumbnail=$row['image'];
       $description=$row['description'];
          $webpage=$row['webpage_name'];


  	# code...
  }

  ?>

		   <div style="margin-left:17%;  width: 80%;">
		        <ul class="breadcrumb">
		            <li class="breadcrumb-item active"><a href="category.php">Categories</a></li>
		        	<li class="breadcrumb-item active">Edit Category</li>
		        </ul>  	   	
		   </div>

         <div style=" width: 70%; margin-left: 25%; ">
  	    <form action="category_edit.php" method="post" enctype="multipart/form-data" name="categoryform">
			<h1>Update Category</h1>
			<hr>
		  <div class="form-group">
		    <label for="email"> Name:</label>
		    <input type="text" value="<?php echo $name; ?>" placeholder="Name..." name="name" class="form-control" id="email">
		  </div>


		   <div class="form-group">
		    <label for="email"> Thumbnail:</label>
		    <input type="file" value="<?php echo $thumbnail; ?>"  name="thumbnail" class="form-control img-thumbnail" id="email">
		    <img class="img img-thumbnail" src="../../Virya_Project/images/<?php echo $thumbnail; ?>" alt=""  width="300">
		  </div>

		  <div class="form-group">
			  <label for="comment">Description:</label>
			 	 <textarea class="form-control" placeholder="Description..." rows="5" name="description" id="comment"><?php echo $description; ?> </textarea>
			</div>

			<div class="form-group">
		    <label for="email"> Webpage:</label>
		    <input type="text" value="<?php echo $webpage; ?>" placeholder="categories/..." name="webpage" class="form-control" id="email">
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
				$webpage=$_POST['webpage'];

			move_uploaded_file($tmp_thumbnail,"../../Virya_Project/images/$thumbnail");

	$sql= mysqli_query($conn,"update categories_main set name='$name', description='$description' , image='$thumbnail' , webpage_name='$webpage' where id='$id' ");
	if ($sql) {
		 echo "<script>alert('Category Updated Successfully !!')</script>  ";
		 echo "<script >window.location='http://localhost/Virya_Project/admin/category.php' ;</script>";
	} else{
		echo "<script>alert('Please try again !!')</script>  ";
	}
			

}

  ?>
