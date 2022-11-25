<?php
session_start();
error_reporting(0);

 include('../../Virya_Project/include/ad_header.php');

  ?>

  <?php

 include('../../Virya_Project/config.php');

 $id=$_GET['qedit'];
 $query=mysqli_query($conn,"select * from quiz_questions where id ='$id' ");
  while ($row=mysqli_fetch_array($query)) {
     $id=$row['id'];
      $qname=$row['quiz_name'];
      $question=$row['question'];
       $opt1=$row['opt1'];
       $opt2=$row['opt2'];
       $opt3=$row['opt3'];
       $opt4=$row['opt4'];
       $answer=$row['answer'];
          $ccode=$row['course_code'];


  	# code...
  }

  ?>

		   <div style="margin-left:17%;  width: 80%;">
		        <ul class="breadcrumb">
		            <li class="breadcrumb-item active"><a href="quiz.php">Testimonials</a></li>
		        	<li class="breadcrumb-item active">Edit Question</li>
		        </ul>  	   	
		   </div>

         <div style=" width: 70%; margin-left: 25%; ">
  	    <form action="quiz_edit.php" method="post" enctype="multipart/form-data" name="categoryform">
			<h1>Update Question</h1>
			<hr>
		  <div class="form-group">
		    <label for="email">Name:</label>
		     
               
		        <select class="form-control"  name="qname" >
		       <?php
                include('../../Virya_Project/config.php');
                  $query=mysqli_query($conn,"select * from courses");

                while($row=mysqli_fetch_array($query)){

                	
                	?>
		        	 <option value="<?php echo $row['course_name'];?>"><?php echo $row['course_name'];?></option>
		        	 
                 <?php } ?>
		        </select>
		        </div>


			<div class="form-group">
		    <label for="email"> Question:</label>
		    <input type="text" value="<?php echo $question; ?>" placeholder="Question..." name="question" class="form-control" id="email">
		  </div>

		  <div class="form-group">
		    <label for="email"> Option 1:</label>
		    <input type="text" value="<?php echo $opt1; ?>" placeholder="Option 1..." name="opt1" class="form-control" id="email">
		  </div>

		  <div class="form-group">
		    <label for="email"> Option 2:</label>
		    <input type="text" value="<?php echo $opt2; ?>" placeholder="Option 2..." name="opt2" class="form-control" id="email">
		  </div>


		 <div class="form-group">
		    <label for="email"> Option 3:</label>
		    <input type="text" value="<?php echo $opt3; ?>" placeholder="Option 3..." name="opt3" class="form-control" id="email">
		  </div>


		  <div class="form-group">
		    <label for="email"> Option 4:</label>
		    <input type="text" value="<?php echo $opt4; ?>" placeholder="Option 4..." name="opt4" class="form-control" id="email">
		  </div>


		  <div class="form-group">
		    <label for="email"> Answer:</label>
		    <input type="text" value="<?php echo $answer; ?>" placeholder="Answer..." name="answer" class="form-control" id="email">
		  </div>

		  <div class="form-group">
		    <label for="email"> Course Code:</label>
		    <input type="text" value="<?php echo $ccode; ?>" placeholder="Code..." name="ccode" class="form-control" id="email">
		  </div>

          
          <input type="hidden" name="id" value="<?php echo $_GET['qedit']; ?>">
		   

		  <input type="submit" name="submit" class="btn btn-primary" value="Update">
		</form>
		
			
       
  </div>
 
  <?php


include('../../Virya_Project/config.php');
if (isset($_POST['submit'])) {
	$id=$_POST['id'];
      $qname=$_POST['qname'];
      $question=$_POST['question'];
       $opt1=$_POST['opt1'];
       $opt2=$_POST['opt2'];
       $opt3=$_POST['opt3'];
       $opt4=$_POST['opt4'];
       $answer=$_POST['answer'];
          $ccode=$_POST['ccode'];

	$sql= mysqli_query($conn,"update quiz_questions set quiz_name='$qname', question='$question' , opt1='$opt1' , opt2='$opt2' , opt3='$opt3' , opt4='$opt4' , answer='$answer' , course_code='$ccode' where id='$id' ");
	if ($sql) {
		 echo "<script>alert('Question Updated Successfully !!')</script>  ";
		 echo "<script >window.location='http://localhost/Virya_Project/admin/quiz.php' ;</script>";
	} else{
		echo "<script>alert('Please try again !!')</script>  ";
	}
			

}

  ?>
