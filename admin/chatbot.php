<?php
session_start();
error_reporting(0);
if ( $_SESSION['email']==true) {
  # code...
}else
header('location:admin_login.php');
$page='chatbot';
 include('../../Virya_Project/include/ad_header.php');

  ?>

  <div style="margin-left:16%;  width: 90%;">
        <ul class="breadcrumb">
          
         
          <li class="breadcrumb-item active">ChatBot</li>
        </ul>       
       </div>
 

  <div style=" width: 70%; margin-left: 20%; ">

    <h1>ChatBot</h1>
      <hr>
        <div class="text-right">
        <a   class="btn btn-primary" href="addhints.php">Add Hints</a> 
            
   </div>
    <table class="table table-bordered">
       <tr>
         <th>Id</th>
         <th>Question</th>
         <th>Reply</th>
         
         
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
      $query=mysqli_query($conn,"select * from chatbot_hints limit $page1,4");
       while ($row=mysqli_fetch_array($query)) {
         ?>
         <tr>
           <td><?php echo $count;?></td>
            <td><?php echo $row['question']; ?></td>
             <td><?php echo $row['reply']; ?></td>
               
                   
                   
                   <td><a class="btn btn-info btn-sm" href="chat_edit.php?edit=<?php echo $row['id'];?>">edit</a>
                   </td>
                     <td><a class="btn btn-danger btn-sm" href="delete_chat.php?del=<?php echo $row['id'];?>">delete</a></td>
                    
         </tr>
         
       <?php $count++;} ?>
     
       
         </table>
             <ul class="pagination">
               <li class="page-item disabled">
                 <a href="#" class="page-link" >Pervious</a>
               </li>
              <?php

       $query=mysqli_query($conn,"select * from chatbot_hints");
       $count=mysqli_num_rows($query);
       $a=$count/3;
        ceil($a);
        for ($b=1; $b<=$a ; $b++) { 
          ?>
      
             
         <li class="page-item"><a class="page-link" href="chatbot.php?page=<?php echo $b;?>"><?php echo $b; ?></a></li>
          
       
          <?php 
        }
       ?>
                <li class="page-item disabled">
                 <a href="#" class="page-link" >Next</a>
               </li>
       </ul>

       

  </div>