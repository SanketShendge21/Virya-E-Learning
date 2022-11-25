<?php
error_reporting(0);
include('C:/xampp/htdocs/Virya_Project/header_footer/header.php');
include('action.php');
if(!isset($_SESSION['uemail']))
{
    header('location:../../Virya_Project/user_login_details/user_login.php');
}

    
    require('C:/xampp/htdocs/Virya_Project/config.php');

    $grand_total = 0;
    $allItems = "";
    $items = array();

    $sql = "SELECT CONCAT(course_name) AS course_name, total_price FROM cart";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->get_result();
    while($row=$result->fetch_assoc())
    {
        $grand_total+=$row['total_price'];
        $items[] = $row['course_name'];
    }
    $allItems = implode(",",$items);

    $stmtt = $conn->prepare("SELECT * FROM user_login WHERE email = ?");
    $stmtt->bind_param("s",$_SESSION['uemail']);
    $stmtt->execute();
    $resultt = $stmtt->get_result();
    $roww = $resultt->fetch_assoc();
    
    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>

    <style>
        
        .btn-danger{
            color: #000000;
            margin: 25px;
        }
        .form-group{
            margin: 15px;
        }
        .text-info{
            color: #1749ff;
        }
        .h4, .h5, .h6, h4, h5, h6{
            margin-top: 2px;
            margin-bottom: 0px;
        }
        
        .h4, h4{
            font-size: 26px;
        }
        .btn{
            font-size: 18px;
            line-height: 1.42858871;
        }
        
      .jumbotron{
          padding-top:6px;
          padding-bottom:22px;
          margin-bottom: 15px;
          color: black;
        }
        .container{
            
            margin:0px auto;
        }
        
       .container .jumbotron, .container-fluid .jumbotron {
            border-radius: 21px;
        }
        .body{
            color: black;
            margin: 57px ;
            font-family: 'Noto Sans', sans-serif;
            background-color:linear-gradient(120deg,#3e25fa, #f2991f);
        }
        
        .lead{
            margin-bottom: 0px;
        }
        
        .row{
            margin-right: 150px;
            margin-left: 50px;
        }
        
        .form-control{
            color: black;
            height: 40px;
            padding: 0px 28px;
            border-radius: 16px;
        }
    </style>

</head>
<body>
<?php
error_reporting(0);
if(isset($_POST['checkout']))
{
    $order_code = $_POST['buy_code'];
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 px-4 pb-4" id="order">
                <h4 class="text-center text-info p-2">Complete Your Order</h4>
                <div class="jumbotron p-3 mb-2 text-center">
                    <h6 class="lead"><b>Course(s) : </b><?php echo $allItems ?></h6>
                
                    <h5><b>Amount To Be Paid : </b><i class="fa fa-inr"></i><?php echo $_POST['grand_total'] ?>/-</h5>
                </div>
                <form method="post" id="placeOrder">
                    <input type="hidden" name="course_name" value="<?php echo $allItems ?>">
                    <input type="hidden" name="grand_total" value="<?php echo $_POST['grand_total'] ?>">
                    <input type="hidden" name="order_code" value="<?php echo $order_code ?>">
                    <div class="form-group">
                        <input type="text" name="name" value="<?php echo $roww['name'] ?>" class="form-control" 
                        required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" value="<?php echo $roww['email'] ?>"
                        required>
                    </div>
                    <div class="form-group">
                        <input type="tel" name="phone" class="form-control" value="<?php echo $roww['phone'] ?>"
                        required>
                    </div>
                    <div class="form-group">
                        <textarea name="address" class="form-control" cols="10" rows="3" 
                        placeholder="Enter Location" required></textarea> 
                    </div>
                    <h6 class="text-center lead">Select Payment Method</h6>
                    <div class="form-group">
                        <select name="payment_method" class="form-control">
                            <option value="" selected disabled>-Select Payment Method-</option>
                            <option value="Google Pay">Google Pay</option>
                            <option value="Card">Debit Card/Credit Card</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="place_order" value="Place Order" class="btn btn-danger btn-block">
                    
                    </div>
                </form>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
<?php

if(isset($_POST['d_checkout']))
{
    require('C:/xampp/htdocs/Virya_Project/config.php');

    $course_price = 0;
    $allItems = "";
    $items = array();
    $buy_code = $_POST['buy_code'];
    $sql = "SELECT CONCAT(course_name) AS course_name, course_price FROM courses WHERE course_code = ? ";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s",$buy_code);
    $stmt->execute();
    $result = $stmt->get_result();
    while($row=$result->fetch_assoc())
    {
        $course_price+=$row['course_price'];
        $items[] = $row['course_name'];
    }
    $allItems = implode(",",$items);
    
    $stmtt = $conn->prepare("SELECT * FROM user_login WHERE email = ?");
    $stmtt->bind_param("s",$_SESSION['uemail']);
    $stmtt->execute();
    $resultt = $stmtt->get_result();
    $roww = $resultt->fetch_assoc();
    
    ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 px-4 pb-4" id="order">
                <h4 class="text-center text-info p-2">Complete Your Order</h4>
                <div class="jumbotron p-3 mb-2 text-center">
                    <h6 class="lead"><b>Course(s) : </b><?php echo $allItems ?></h6>
        
                    <h5><b>Amount To Be Paid : </b><i class="fa fa-inr"></i><?php echo $course_price ?>/-</h5>
                </div>
                <form method="post" id="placeOrder">
                    <input type="hidden" name="course_name" value="<?php echo $allItems ?>">
                    <input type="hidden" name="grand_total" value="<?php echo $course_price ?>">
                    <input type="hidden" name="order_code" value="<?php echo $buy_code ?>"> 
                    <div class="form-group">
                    <input type="text" name="name" value="<?php echo $roww['name'] ?>" class="form-control" 
                        required>
                    </div>
                    <div class="form-group">
                    <input type="email" name="email" class="form-control" value="<?php echo $roww['email'] ?>"
                        required>
                    </div>
                    <div class="form-group">
                    <input type="tel" name="phone" class="form-control" value="<?php echo $roww['phone'] ?>"
                        required>
                    </div>
                    <div class="form-group">
                        <textarea name="address" class="form-control" cols="10" rows="3" 
                        placeholder="Enter Location"></textarea> 
                    </div>
                    <h6 class="text-center lead">Select Payment Method</h6>
                    <div class="form-group">
                        <select name="payment_method" class="form-control">
                            <option value="" selected disabled>-Select Payment Method-</option>
                            <option value="Google Pay">Google Pay</option>
                            <option value="Card">Debit Card/Credit Card</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="place_order" value="Place Order" class="btn btn-danger btn-block">
                    </div>
                </form>
                <?php
                }
                ?>
            </div>
        </div>
    </div>


</body>
<?php

include('../../Virya_Project/header_footer/footer.php');

?>
</html>