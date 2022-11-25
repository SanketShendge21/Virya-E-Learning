<?php
session_start();
error_reporting(0);
if ( $_SESSION['email']==true) {
  # code...
}else
header('location:admin_login.php');

$page='quiz';
 include('../../Virya_Project/include/ad_header.php');

  ?>

  <div style="margin-left:16%;  width: 90%;">
        <ul class="breadcrumb">
          
         
          <li class="breadcrumb-item active">Testimonials</li>
        </ul>       
       </div>
 

  <div style=" width: 70%; margin-left: 20%; ">

    <h1>Testimonials</h1>
      <hr>
        <div class="text-right">
        
            
   </div>
    <table class="table table-bordered">
       <tr>
         <th>Id</th>
         <th>Name</th>
         <th>Question</th>
         <th>Option 1</th>
         <th>Option 2</th>
         <th>Option 3</th>
         <th>Option 4</th>
         <th>Answer</th>
         <th>Instructor</th>
         
         
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
              $page1=($page*5)-5;

           }
        $count=1;  
        $instructor=$_SESSION['iname']; 
      $query=mysqli_query($conn,"select * from quiz_questions limit $page1,5");
       while ($row=mysqli_fetch_array($query)) {
         ?>
         <tr>
           <td><?php echo $count;?></td>
            <td><?php echo $row['quiz_name']; ?></td>
             <td><?php echo $row['question']; ?></td>
             <td><?php echo $row['opt1']; ?></td>
             <td><?php echo $row['opt2']; ?></td>
             <td><?php echo $row['opt3']; ?></td>
             <td><?php echo $row['opt4']; ?></td>
             <td><?php echo $row['answer']; ?></td>
             <td><?php echo $row['instructor']; ?></td>
            
               
                   
                   
                   <td><a class="btn btn-info btn-sm" href="quiz_edit.php?qedit=<?php echo $row['id'];?>">edit</a></td>
                     <td><a class="btn btn-danger btn-sm" href="quiz_delete.php?qdel=<?php echo $row['id'];?>">delete</a></td>
                    
         </tr>
         
       <?php $count++;} ?>
     
       
         </table>
             <ul class="pagination">
               <li class="page-item disabled">
                 <a href="#" class="page-link" >Pervious</a>
               </li>
              <?php

       $query=mysqli_query($conn,"select * from quiz_questions");
       $count=mysqli_num_rows($query);
       $a=$count/4;
        ceil($a);
        for ($b=1; $b<=$a ; $b++) { 
          ?>
      
             
         <li class="page-item"><a class="page-link" href="quiz.php?page=<?php echo $b;?>"><?php echo $b; ?></a></li>
          
       
          <?php 
        }
       ?>
                <li class="page-item disabled">
                 <a href="#" class="page-link" >Next</a>
               </li>
       </ul>

       

  </div>