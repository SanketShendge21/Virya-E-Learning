<?php
session_start();
error_reporting(0);
if ( $_SESSION['iemail']==true) {
  # code...
}else
header('location:instructor_login.php');

$page='courses';
 include('../../Virya_Project/include/header.php');
$instructor=$_SESSION['iname'];
  ?>

<div style="margin-left:16%;  width: 90%;">
        <ul class="breadcrumb">
          
         
          <li class="breadcrumb-item active">Courses</li>
        </ul>       
       </div>

  <div style=" width: 70%; margin-left: 20%; ">
    <h1>Courses</h1>
      <hr>
  	    <div class="text-right">
  	    <a   class="btn btn-primary" href="AddCourses.php">Add Courses</a> 
  	    	
   </div>


    <table class="table table-bordered">
       <tr>
         <th>Id</th>
         <th>Name</th>
         <th>Thumbnail</th>
         <th>Description</th>
         <th>Category</th>
         <th>Price</th>
        
         
        
         
         <th>Edit</th>
         <th>Delete</th>
       </tr>
        <?php
        include('../../Virya_Project/config.php');
           $page=$_GET['page'];
           if($page=="" || $page==1){
            $page1=0;
           }
           else{
              $page1=($page*4)-4;

           }
        $count=1;   
      $query=mysqli_query($conn,"select * from courses where instructor='$instructor' limit $page1,4");
     
       while ($row=mysqli_fetch_array($query)) {
         ?>
         <tr>
           <td><?php echo $count;?></td>
            <td><?php echo $row['course_name']; ?></td>
            <td><img class="img img-thumbnail" src="../../Virya_Project/categories/<?php echo $row['course_image'];?>" alt="" width="150" height="150" ></td>
             <td><?php echo substr($row['course_desc'],0,200 ); ?></td>
             
             <td><?php echo $row['course_cat']; ?></td>
             <td><?php echo $row['course_price']; ?></td>
               
                   
                   
                   <td><a class="btn btn-info btn-sm" href="course_edit.php?edit=<?php echo $row['cid'];?>">edit</a></td>
                     <td><a class="btn btn-danger btn-sm" href="course_delete.php?del=<?php echo $row['course_code'];?>">delete</a></td>
                    
         </tr>
         
       <?php $count++;} ?>
     
       
         </table>

         <table class="table table-bordered">
       <tr>
         <th>Id</th>
         <th>Course</th>
         <th>Section Name</th>
         <th>Lecture Name</th>
         <th>Video</th>
         <th>Preview</th>
         
        
         <th>Edit</th>
         <th>Delete</th>
       </tr>
        <?php
        include('../../Virya_Project/config.php');
           $page=$_GET['page'];
           if($page=="" || $page==1){
            $page1=0;
           }
           else{
              $page1=($page*4)-4;

           }
        $count=1;   

      $query=mysqli_query($conn,"select * from lectures where instructor='$instructor' limit $page1,4");
     
       while ($row=mysqli_fetch_array($query)) {
         ?>
        
         <tr>
           <td><?php echo $count;?></td>
           <td><?php echo $row['course']; ?></td>
            <td><?php echo $row['section_name']; ?></td>
            <td><?php echo $row['lecture_name']; ?></td>
    
             <td><video width='200' height='120' controls>
               <source src="../../Virya_Project/lectures/<?php echo $row['video']; ?>" type="video/mp4">
             </video>
        </td>

         <td><video width='200' height='120' controls>
               <source src="../../Virya_Project/lectures/<?php echo $row['preview']; ?>" type="video/mp4">
             </video>
        </td>
            
             
               
                   
                   
                   <td><a class="btn btn-info btn-sm" href="lec_edit.php?update=<?php echo $row['id'];?>">edit</a></td>
                     <td><a class="btn btn-danger btn-sm" href="lec_delete.php?delete=<?php echo $row['course_code'];?>">delete</a></td>
                    
         </tr>
         
       <?php $count++;} ?>
     
       
         </table>
             <ul class="pagination">
               <li class="page-item disabled">
                 <a href="#" class="page-link" >Pervious</a>
               </li>
              <?php

       $query=mysqli_query($conn,"select * from courses join lectures using (course_code)");
       $count=mysqli_num_rows($query);
       $a=$count/2;
        ceil($a);
        for ($b=1; $b<=$a ; $b++) { 
          ?>
      
             
         <li class="page-item"><a class="page-link" href="courses.php?page=<?php echo $b;?>"><?php echo $b; ?></a></li>
          
       
          <?php 
        }
       ?>
                <li class="page-item disabled">
                 <a href="#" class="page-link" >Next</a>
               </li>
       </ul>

       

  </div>