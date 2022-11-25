<?php
session_start();
error_reporting(0);
if ( $_SESSION['email']==true) {
  # code...
}else
header('location:admin_login.php');
$page='users';
 include('../../Virya_Project/include/ad_header.php');

  ?>
 
<div style="margin-left:16%;  width: 90%;">
        <ul class="breadcrumb">
          
         
          <li class="breadcrumb-item active">Users</li>
        </ul>       
       </div>


  <div style=" margin-left: 25% ">
  	   
			<h1>Users</h1>
			<hr>

      <table class="table">
        <tr>
          <th>Id</th>
            <th>Name</th>
              <th>Email</th>
              <th>Phone No</th>
              <th>Gender</th>
              <th>Board</th>
              <th>Class</th>
                <th>Password</th>
                <th>Delete User</th>
        </tr>
  <?php
 include('../../Virya_Project/config.php');
 $count=1;

  $query=mysqli_query($conn,"select * from user_login");

 while ($row=mysqli_fetch_array($query)) {
  
  ?>
		  <tr>
        <td><?php echo $count;?></td>
         <td><?php echo $row['name'];?></td>
          <td><?php echo $row['email'];?></td>
           <td><?php echo $row['phone'];?></td>
           <td><?php echo $row['gender'];?></td>
           <td><?php echo $row['board'];?></td>
           <td><?php echo $row['class'];?></td>
           <td><?php echo $row['password'];?></td>
           <td><a class="btn btn-danger" href="delete_user.php?del=<?php echo $row['id'];?>">delete</a></td>
      </tr>
      <?php $count++;} ?>
</table>


		
  </div>