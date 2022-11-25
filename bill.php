<?php
session_start();
include('config.php');
?>
<!doctype html>
<html lang="en">
 <head>
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<div class="container">
	
	
	<div class="row">
		<div class="col-md-12">
			
			<img src="images/Virya_logo.png" align="right" style="width: 90px; margin-top: 70px;">
			<h3 style="text-align: left; margin-top: 70px;">Virya Invoice</h3><br>


			<?php
			$count=1;
			$id=$_GET['id'];
			 $query=mysqli_query($conn,"select * from orders where course_code ='$id'");
			 while ($row=mysqli_fetch_array($query)) {

			 	?>


			
		
			 	<div class="row">
			 		<div class="col-md-6">
			 			<p style="margin-top: 50px";><b>Bill To</b></p>
			 			<p><b>Name:</b> <?php echo $row['c_name'] ?></p>
			 			<p><b>Email:</b> <?php echo $row['email'] ?></p>
			 			<p><b>Phone:</b> <?php echo $row['phone'] ?></p>
			 			<p><b>Address:</b> <?php echo $row['c_address'] ?></p>
			 			<p><b>Invoice Number:</b> V<?php echo str_pad(90,"8","0",STR_PAD_LEFT); ?></p>

			 		</div>

			 		

			 		<table class="table table-bordered">
			 				<tr>
         <th>Id</th>
         <th>Courses</th>
         <th>Payment Terms</th>
         <th>Amount Paid</th>
         
       </tr>

			 			
       <tr>
           
            <td><?php echo $count; ?></td>
            <td><?php echo $row['courses']; ?></td>
             <td><?php echo $row['payment_mode']; ?></td>
             <td>Rs.<?php echo $row['amount_paid']; ?>/-</td>
                    
         </tr>
       
			<?php $count++;} ?>
		</table>



	</div>

	
	<div class="row" style="margin-top: 200px;">
		<div class="col-md-6">
			<p style="float: left;"><b>Invoice Date:</b> <?php echo date("Y/m/d"); ?></p>
		</div>
		<div class="col-md-6">
			<p style="float: right;"><b>Signature:</b> <?php echo"virya"; ?></p>
		</div>
	</div>

	<script>
		window.print();
	</script>

</div>
</div>
</div>
</html>

<!--href="category_delete.php?del=<?php //echo $row['id'];?>"

