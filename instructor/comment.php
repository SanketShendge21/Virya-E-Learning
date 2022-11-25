<?php
session_start();
if ( $_SESSION['iemail']==true) {
  # code...
}else
header('location:instructor_login.php');


$page='Comments';
 include('../../Virya_Project/include/header.php');

  ?>



  <div style="margin-left:16%;  width: 90%;">
        <ul class="breadcrumb">
          
         
          <li class="breadcrumb-item active">FeedBacks</li>
        </ul>       
       </div>

  <div style=" width: 70%; margin-left: 20%; margin-top: 5%">
    <h1>FeedBacks</h1>
			<hr>

      <table class="table">
        <tr>
          <th>Id</th>
            <th>Name</th>
              <th>Email</th>
                <th>Comment</th>
                
        </tr>
  <?php
 include('../../Virya_Project/config.php');
 $count=1;

  $query=mysqli_query($conn,"select * from comment ");

 while ($row=mysqli_fetch_array($query)) {
  
  ?>
		  <tr>
        <td><?php echo $count;?></td>
         <td><?php echo $row['name'];?></td>
          <td><?php echo $row['email'];?></td>
           <td><?php echo $row['comment'];?></td>
           
      </tr>
      <?php $count++;} ?>
</table>


		
  </div>