<?php
    error_reporting(0);
    session_start();
    require('C:/xampp/htdocs/Virya_Project/config.php');
    

    if(isset($_POST['add_to_cart']))
    {
        if(!(isset($_SESSION['uemail'])))
        {
            header("location:http://localhost/Virya_Project/user_login_details/user_login.php");
        }
    }

    if(isset($_POST['checkout']))
    {
        if(!(isset($_SESSION['uemail'])))
        {
            header("location:http://localhost/Virya_Project/user_login_details/user_login.php");
        }
    }    

if((isset($_SESSION['uemail'])))
{    
    if(isset($_POST['cid']))
    { 
        $cid = $_POST['cid'];
        $cname = $_POST['cname'];
        $cprice = $_POST['cprice'];
        $cimage = $_POST['cimage'];
        $ccode = $_POST['ccode'];

        $stmt = $conn->prepare("SELECT course_code FROM cart WHERE course_code=?");
        $stmt->bind_param("s",$ccode);
        $stmt->execute();
        $res = $stmt->get_result();
        $r = $res->fetch_assoc();
        $code = $r['course_code'];
        if(!$code)
        {
            $query = $conn->prepare("INSERT INTO cart (course_name,course_price,course_image,
            total_price,course_code) VALUES(?,?,?,?,?)");
            $query->bind_param("sssss",$cname,$cprice,$cimage,$cprice,$ccode);
            $query->execute(); 
            
            echo "<script type='text/javascript'>alert('$cname Added In Your Cart');
            window.location='courses.php?cid= $cid&course_code=$ccode';
            </script>";
            
        }   
        

        else
        {  
            echo "<script type='text/javascript'>alert('$cname Is Already In Your Cart');
            window.location='courses.php?cid= $cid&course_code=$ccode';
            </script>";
            //header("location:courses.php?cid=$cid");
        } 



    
    }

    if (isset($_GET['remove']))
    {
        $ccode = $_GET['remove'];
        $stmt = $conn->prepare("DELETE FROM cart WHERE course_code=?");
        $stmt->bind_param("s",$ccode);
        $stmt->execute();

        $_SESSION['showAlert'] = 'block';
        $_SESSION['message'] = 'Item Removed';
        header('location:cart.php');
    }

    if(isset($_GET['clear']))
    {
        $stmt = $conn->prepare("DELETE FROM cart");
        $stmt->execute();
        $_SESSION['showAlert'] = 'block';
        $_SESSION['message'] = 'All Items Removed From Cart';
        header('location:cart.php');
    }
  
    if(isset($_POST['place_order']))
    {
        // echo $_POST['order_code'];
         $name = $_POST['name'];
         $email = $_POST['email'];
         $phone = $_POST['phone'];
         $course_name = $_POST['course_name'];
         $grand_total = $_POST['grand_total'];
         $address = $_POST['address'];
         $payment_method = $_POST['payment_method'];
         $order_code = substr($_POST['order_code'],0,8);
         $data = '';
         $stmt = $conn->prepare("INSERT INTO orders (c_name,email,phone,c_address,payment_mode,courses,course_code,amount_paid)
         VALUES(?,?,?,?,?,?,?,?)");
         $stmt->bind_param("ssssssss",$name,$email,$phone,$address,$payment_method,$course_name,$order_code,$grand_total);
         $stmt->execute();
         $data ='<div class="text-center">
                     <h1 class="display-4 mt-2 text-danger">Thank You!</h1>
                     <h2 class="text-success">Your Order Placed Successfully!</h2>
                     <h3 class="bg-danger text-light rounded p-2">Courses Purchased : '.$course_name.'</h3>
                     <h4>Name : '.$name.'</h4>
                     <h4>E-mail : '.$email.'</h4>
                     <h4>Phone Number : '.$phone.'</h4>
                     <h4>Total Amount Paid : <i class="fa fa-inr"></i>'.$grand_total.'</h4>
                     <h4><a href="http://localhost/Virya_Project/index.php" class="btn btn-success">
                     <i class="fa fa-cart-plus"></i>&nbsp; Continue Shopping</a>
                     <br><br>
                     <h4><a target="_blank" href="../../Virya_Project/bill.php?id='.$order_code.'" class="btn btn-success">
                     <i class="fa fa-print" aria-hidden="true"></i>&nbsp; Print Invoice</a>
                 </div>';
         echo $data;
    }
    if(isset($_POST['place_order']))
    {
        $stmt = $conn->prepare("DELETE FROM cart");
        $stmt->execute();      
    }

    
        if(isset($_POST['wishlist']))
        {
            $wid = $_POST['wid'];
            $wname = $_POST['wname'];
            $wprice = $_POST['wprice'];
            $wimage = $_POST['wimage'];
            $wcode = $_POST['wcode'];
            $wdesc = $_POST['wdesc'];
            $wemail = $_POST['wemail'];


            $stmt = $conn->prepare("SELECT * FROM courses WHERE course_code=?");
            $stmt->bind_param("s",$wcode);
            $stmt->execute();
            $res = $stmt->get_result();
            $r = $res->fetch_assoc();
            $code = $r['course_code'];
            if($code)
            {
                $query = $conn->prepare("INSERT INTO wishlist (email,course_name,course_price,course_image,
                course_desc,course_code) VALUES(?,?,?,?,?,?)");
                $query->bind_param("ssssss",$wemail,$wname,$wprice,$wimage,$wdesc,$wcode);
                $query->execute(); 
                
                echo "<script type='text/javascript'>alert('$wname Added In Your Wishlist');
                window.location='courses.php?cid= $wid&course_code=$wcode';
                </script>";
                
            }   
                

            else
            {  
                echo "<script type='text/javascript'>alert('$wname Is Already In Your Wishlist');
                window.location='courses.php?cid= $wid&course_code=$wcode';
                </script>";
                //header("location:courses.php?cid=$cid");
            } 
            
    }



}

else
{
    echo"
    <script type='text/javascript'>
        window.location='../../Virya_Project/user_login_details/user_login.php';
    </script>";
}
?>