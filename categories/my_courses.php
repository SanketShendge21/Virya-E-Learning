<?php
session_start();
include('../../Virya_Project/header_footer/header.php');
include('../../Virya_Project/config.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Courses</title>

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
<div class="container">
    <div id="message"></div>
    <h1><center>My Courses</center></h1>
    <div class="row mt-2 pb-3">
        <?php
        
        $my_email = $_SESSION['uemail'];

        $stmt = $conn->prepare("SELECT * FROM orders WHERE email = ? ");
        $stmt->bind_param("s",$my_email);
        $stmt->execute();
        $result = $stmt->get_result();



        while ($row = $result->fetch_assoc()):
            $stmtt = $conn->prepare("SELECT * FROM courses WHERE course_name = ?");
            $stmtt->bind_param("s",$row['courses']);
            $stmtt->execute();
            $resultt = $stmtt->get_result();
            while($roww = $resultt->fetch_assoc()):
        ?>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
            <div class="card-deck">
                <div class="card p-2 border-secondary mb-2">
                <img src="<?php echo $roww['course_image'] ?>" class="card-img-top" alt="Error Loading Image" width="245px" height="163px">
                    <div class="card-body p-1">
                        <h5 class="card-title text-center text-info"><?php echo $row['courses'] ?></h5>
                        <p class="card-text"><?php echo $roww['course_desc']; ?></p>

                        <form action="courses.php" method="get" target="_self">
                        <?php 
                        echo "
                            <input type='hidden' value='$row[id]' name = 'cid'>";
                        echo"
                            <input type='hidden' value='$row[course_code]' name = 'course_code'>";
                            ?>
                            <button type="submit" class="btn btn-primary" value="submit">Explore</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>        
        <?php endwhile; ?>
        <?php endwhile; ?>
    </div>
</div>   

</body>
</html>