<?php
error_reporting(0);
session_start();

require('C:/xampp/htdocs/Virya_Project/config.php');
require('action.php');
include('C:/xampp/htdocs/Virya_Project/header_footer/header.php');

if(!isset($_SESSION['uemail']))
{
    echo "<script type='text/javascript'>
        window.location='../../Virya_Project/user_login_details/user_login.php';
        </script>";
}





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div style="display:<?php if(isset($_SESSION['showAlert'])){echo $_SESSION['showAlert'];} else {echo 'none';}
            unset($_SESSION['showAlert']); ?>" class="alert alert-success
            alert-dismissible mt-3">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong><?php if(isset($_SESSION['message'])){echo $_SESSION['message'];}
            unset($_SESSION['showAlert']); ?></strong>
            </div>
            <div class="table-responsive mt-2">
                <table class="table table-bordered table-striped text-center">
                    <thead>
                        <tr>
                            <td colspan="7">
                                <h4 class="text-center text-info m-0">Items In Your Cart</h4>
                            </td>
                        </tr>
                        <tr>
                            <th>Sr No.</th>
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Course Code</th>
                            <th>Total Price</th>
                            <th><a href="action.php?clear=all" class="badge bg-danger badge p-1"
                            onclick="return confirm('Are You Sure Want To Clear Your Cart?');" ><i class="fa fa-trash"></i>&nbsp; Clear Cart</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $i=1;
                            require('C:/xampp/htdocs/Virya_Project/config.php');
                            $stmt = $conn->prepare("SELECT * FROM cart");
                            $stmt->execute();
                            $result = $stmt->get_result();
                            $count = $result->num_rows;
                            $grand_total = 0;
                            while ($row = $result->fetch_assoc()):              
                        ?>
                        <tr>
                            <td><?php 
                                    echo $i;
                                ?></td>
                            <input type="hidden" class="cid" value="<?php echo $row['id'] ?>">
                            <td><img src="<?php echo $row['course_image'] ?>" width="50" onerror="this.onerror=null;this.src='../../Virya_Project/images/<?php echo $row['course_image'];?>';"></td>
                            <td><?php echo $row['course_name']?></td>
                            <td><i class="fa fa-inr"></i>&nbsp;<?php echo $row['course_price'] ?></td>
                            <input type="hidden" class="cprice" value="<?php echo $row['course_price'] ?>">
                            <td><?php echo $row['course_code'] ?>
                            <input type="hidden" class="ccode" value="<?php echo $row['course_code'] ?>"
                            style="width:75px;"></td>
                            <td><i class="fa fa-inr"></i>&nbsp;<?php echo $row['total_price'] ?></td>
                            <td><a href="action.php?remove=<?php echo $row['course_code']?>" class="text-danger lead"
                            onclick="return confirm('Are You Sure Want To Remove This Item?');"><i class="fa fa-trash"></i></a></td>    
                        </tr>
                        <?php 
                            $grand_total=$grand_total+$row['total_price'];     
                            
                            ?>
                    
                        <?php 

                        $i++;
                          endwhile;
                        ?> 
                        <tr>
                            <?php  
                                $stmt = $conn->prepare("SELECT * FROM cart");
                                $stmt->execute();
                                $result = $stmt->get_result();
                                if(isset($_POST['apply']))
                                {
                                    if(!isset($_SESSION['coupon_used']))
                                    {
                                        $coupon = $_POST['coupon'];
                                        $statement = $conn->prepare("SELECT * FROM coupons WHERE coupon = ?");
                                        $statement->bind_param("s",$coupon);
                                        $statement->execute();
                                        $res = $statement->get_result();
                                        $val = $res->fetch_assoc();
                                        $off = $val['off']; 
                                        $grand_total = $grand_total - ($grand_total/100)*$off;
                                        //echo"<script>window.location='../../Virya_Project/categories/cart.php'</script>";
                                        $_SESSION['coupon_used'] == true;
                                    }
                                }
                                // $count = $result->num_rows;
                                // $row = $result->fetch_assoc();
                            ?>
                            <td colspan="3">
                                <a href="http://localhost/Virya_Project/index.php" class="btn btn-success">
                                <i class="fa fa-cart-plus"></i>&nbsp; Continue Shopping</a>
                            </td>
                            <td colspan="2"><b>Grand Total</b></td>
                            <td><b><i class="fa fa-inr"></i>&nbsp;<?php echo $grand_total?></b></td>
                            <td>
                            <form class="form-submit" action="checkout.php" method="POST">    
                                <input type="hidden" name="checkout" value="checkout">
                                <input type="hidden" name="buy_code" value="<?php while($row = $result->fetch_assoc()){ echo $row['course_code'].","; }?>">
                                <input type="hidden" value="<?php echo $grand_total ?>" name="grand_total">
                                <button class="btn btn-info <?php if($grand_total>1) echo""; else echo"disabled"; ?>"><i class="fa fa-credit-card"></i>&nbsp; Checkout
                                </button>
                            </form><br><br>
                            <form action="" method="POST" class="coupon">
                            <input type="text" name="coupon" id="coupon" class="coupon" placeholder="Enter Coupon">
                            <input type="submit" class="apply_btn" id="apply_btn" name="apply" value="Apply">
                            </form>
                            </td>    
                        </tr>  
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php

            
// if(isset($_POST['apply']))
// {
//     if(!isset($_SESSION['coupon_used']))
//     {
//         $coupon = $_POST['coupon'];
//         $stmt = $conn->prepare("SELECT * FROM coupons WHERE coupon = ?");
//         $stmt->bind_param("s",$coupon);
//         $stmt->execute();
//         $result = $stmt->get_result();
//         $row = $result->fetch_assoc();
//         $off = $row['off']; 
//         $grand_total = $grand_total - ($grand_total/100)*$off;
//         //echo"<script>window.location='../../Virya_Project/categories/cart.php'</script>";
//         $_SESSION['coupon_used'] == true;
//         echo $_SESSION['coupon_used'];
//         echo"<br><br>".$grand_total;
//     }
// }
// ?>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<?php

include('../../Virya_Project/header_footer/footer.php');

?>


</body>
</html>


