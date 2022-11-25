<?php

require('C:\xampp\htdocs\Virya_Project\config.php');
require('C:\xampp\htdocs\Virya_Project\header_footer\header.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Science</title>
</head>
<body>
<div class="container">
    <div id="message"></div>
    <div class="row mt-2 pb-3">
        <?php
        
        $stmt = $conn->prepare("SELECT * FROM courses WHERE course_cat = '3d_and_animation' ");
        $stmt->execute();
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()):
        ?>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
            <div class="card-deck">
                <div class="card p-2 border-secondary mb-2">
                <img src="<?php echo $row['course_image'] ?>" class="card-img-top" alt="Error Loading Image" width="245px" height="163px">
                    <div class="card-body p-1">
                        <h5 class="card-title text-center text-info"><?php echo $row['course_name'] ?></h5>
                        <p class="card-text"><?php echo $row['course_desc'] ?></p>

                        <form action="courses.php" method="get" target="_self">
                        <?php 
                        echo "
                            <input type='hidden' value='$row[cid]' name = 'cid'>";
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
    </div>
</div>

<?php

require('../header_footer/footer.php');

?>


</body>
</html>