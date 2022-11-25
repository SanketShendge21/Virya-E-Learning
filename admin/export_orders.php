<?php
 include('../../Virya_Project/config.php');
 
 $query=mysqli_query($conn,"select * from orders");
 $html='<table>
        <tr>
          
            <td>Customer Name</td>
              <td>Customer Email</td>
              <td>Customer Phone No</td>
              <td>Customer Address</td>
              <td>Payment Mode</td>
              <td>Course Name</td>
              <td>Course Code</td>
                <td>Ordered Date</td>
                <td>Amount Paid</td>
                
                
        </tr>';


 while ($row=mysqli_fetch_assoc($query)) {
  
 
		 $html.='<tr>
        
         <td>'.$row['c_name'].'</td>
          <td>'.$row['email'].'</td>
           <td>'.$row['phone'].'</td>
           <td>'.$row['c_address'].'</td>
           <td>'.$row['payment_mode'].'</td>
           <td>'.$row['courses'].'</td>
           <td>'.$row['course_code'].'</td>
           <td>'.$row['order_date'].'</td>
           <td>'.$row['amount_paid'].'</td>

           
      </tr>';
       
   } 
   $html.='</table>';
   header('Content-Type:application/xls');
   header('Content-Disposition:attachment;filename=report.xls');
   echo $html;
   ?>
