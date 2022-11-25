<?php
session_start();
if ( $_SESSION['iemail']==true) {
  # code...
}else
header('location:instructor_login.php');

$page='quiz';
 include('../../Virya_Project/include/header.php');

  ?>

		   <div style="margin-left:17%;  width: 80%;">
		        <ul class="breadcrumb">
		        	
		        	<li class="breadcrumb-item active"><a href="quiz.php">Testimonials</a></li>
		        	<li class="breadcrumb-item active">Add Question</li>
		        </ul>  	   	
		   </div>

         <div style=" width: 70%; margin-left: 25%; ">
  	    <form action="addquiz.php" method="post" enctype="multipart/form-data" name="categoryform">
			<h1>Add Question</h1>
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
		    <input type="text" placeholder="question..." name="question" class="form-control" id="email">
		  </div>

		  <div class="form-group">
		    <label for="email"> Option 1:</label>
		    <input type="text" placeholder="Option 1..." name="opt1" class="form-control" id="email">
		  </div>

		  <div class="form-group">
		    <label for="email"> Option 2:</label>
		    <input type="text" placeholder="Option 2..." name="opt2" class="form-control" id="email">
		  </div>

		  <div class="form-group">
		    <label for="email"> Option 3:</label>
		    <input type="text" placeholder="Option 3..." name="opt3" class="form-control" id="email">
		  </div>

		  <div class="form-group">
		    <label for="email"> Option 4:</label>
		    <input type="text" placeholder="Option 4..." name="opt4" class="form-control" id="email">
		  </div>

		  <div class="form-group">
		    <label for="email"> Answer:</label>
		    <input type="text" placeholder="Answer..." name="answer" class="form-control" id="email">
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
	$qname=$_POST['qname'];
				$question=$_POST['question'];
				$opt1=$_POST['opt1'];
				$opt2=$_POST['opt2'];
				$opt3=$_POST['opt3'];
				$opt4=$_POST['opt4'];
				$answer=$_POST['answer'];
				$ccode=$_POST['ccode'];
				$instructor=$_SESSION['iname'];

     $query1=mysqli_query($conn,"insert into quiz_questions(quiz_name,question,opt1,opt2,opt3,opt4,answer,course_code,instructor)values('$qname','$question','$opt1','$opt2','$opt3','$opt4','$answer','$ccode','$instructor')");
     if ($query1) {
     	echo "<script>alert('Question added successfully !!')</script>";
     	 echo "<script>window.location='http://localhost/Virya_Project/instructor/quiz.php' ;</script>";
     }else{
     	echo "<script>alert('Please Try Again!!')</script>  ";

     }


}

  ?>