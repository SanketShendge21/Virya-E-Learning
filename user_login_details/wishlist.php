<?php
session_start();

include('../../Virya_Project/config.php');

if(!isset($_SESSION['uemail']))
{
    header('location:../../Virya_Project/user_login_details/user_login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wishlist</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
    crossorigin="anonymous">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
<div class="grid_10">
    <div class="box round first">
        <h2 class="text-center"><b>Wishlist</h2>
        <div class="block">
            <?php
            $my_email = $_SESSION['uemail'];
            $stmt = $conn->prepare("SELECT * FROM wishlist WHERE email = ?");
            $stmt->bind_param("s",$my_email);
            $stmt->execute();
            $result = $stmt->get_result();
            echo"<table class='table table-bordered table-striped text-center'>";
                echo"<tr>";
                        echo"<td>"; echo"Course Name"; echo"</td>";
                        echo"<td>"; echo"Course Image"; echo"</td>";
                        echo"<td>"; echo"Course Description"; echo"</td>";
                        echo"<td>"; echo"Course Price"; echo"</td>";
                        echo"<td>"; echo"View"; echo"</td>";
                echo"</tr>";
                
            while($row=$result->fetch_assoc())
            {

                    echo"<tr>";
                        echo"<td>"; echo $row['course_name']; echo"</td>";
                        echo"<td>"; ?><img src="../../Virya_Project/categories/<?php echo $row['course_image'] ?>" width="50px" height="50px">   <?php echo"</td>";
                        echo"<td>"; echo $row['course_desc']; echo"</td>";
                        echo"<td>"; echo $row['course_price']; echo"</td>";

                        ?>
                        <form method='get' action='../../Virya_Project/categories/courses.php'>
                        <input type="hidden" value="<?php echo $row['id']; ?>" name="cid">
                        <input type='hidden' value='<?php echo $row['course_code'] ?>' name = 'course_code'>
                        <td><button type='submit' class='btn btn-info'>View</button></td>
                        </form>
                    <?php    
                    echo'</tr>';

            }
            
                echo"</table>";

            ?>

        </div>
    </div>


</div>    

</body>
</html>