<?php
session_start();
error_reporting(0);
if ( $_SESSION['email']==true) {
  # code...
}else
header('location:admin_login.php');
$page='orders';
 include('../../Virya_Project/include/ad_header.php');

  ?>
 
<div style="margin-left:16%;  width: 90%;">
        <ul class="breadcrumb">
          
         
          <li class="breadcrumb-item active">Orders</li>
        </ul>       
       </div>


  <div style=" width: 80%; margin-left: 20%; margin-right: 20%;">

    <h1>Orders</h1>
      <hr>
        <div style="text-align: right;">
        
                
        <a   class="btn btn-primary" href="deleteall_orders.php">Clear Orders</a>
        <a   class="btn btn-primary" href="export_orders.php">Export</a>
</div>
      <table class="table table-bordered">
        <tr>
          <th>Id</th>
            <th>Customer Name</th>
              <th>Customer Email</th>
              <th>Customer Phone No</th>
              
              <th>Payment Mode</th>
              <th>Course Name</th>
              <th>Course Code</th>
                <th>Amount Paid</th>
                <th>Ordered Date</th>
                <th>Delete Order</th>
        </tr>
  <?php
 include('../../Virya_Project/config.php');
 $count=1;

  $query=mysqli_query($conn,"select * from orders");

 while ($row=mysqli_fetch_array($query)) {
  
  ?>
		  <tr>
        <td><?php echo $count;?></td>
         <td><?php echo $row['c_name'];?></td>
          <td><?php echo $row['email'];?></td>
           <td><?php echo $row['phone'];?></td>
           
           <td><?php echo $row['payment_mode'];?></td>
           <td><?php echo $row['courses'];?></td>
           <td><?php echo $row['course_code'];?></td>
           <td><?php echo $row['amount_paid'];?></td>
           <td><?php echo $row['order_date'];?></td>
           <td><a class="btn btn-danger" href="delete_order.php?del=<?php echo $row['id'];?>">delete</a></td>
      </tr>
      <?php $count++;} ?>
</table>

</div>

		
  </div>