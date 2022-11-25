<?php
error_reporting(0);
require('../../Virya_Project/header_footer/header.php');
require('../../Virya_Project/config.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <link rel="stylesheet" href="css/categories_home_style.css">
</head>
<body>

<div class="searchResults">
    <h1>Search Results For " <?php echo $_GET['search_query'] ?> "</h1>
</div>
    <div id="message"></div>
    <div class="row mt-2 pb-3">
        <?php
        // "SELECT * FROM courses WHERE match(course_name,course_desc) against ('?')"
        $stmt = $conn->prepare("SELECT * FROM courses WHERE match(course_name,course_desc) against (?)");
        $stmt->bind_param("s",$_GET['search_query']);
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

                        <form action="../../Virya_Project/categories/courses.php" method="get" target="_self">
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
        <?php
         
        endwhile;
                
        ?>

    </div>
</div>
<?php   
$stmt = $conn->prepare("SELECT * FROM courses WHERE match(course_name,course_desc) against (?)");
$stmt->bind_param("s",$_GET['search_query']);
$stmt->execute();
$result = $stmt->get_result();
$search_fail = $result->fetch_assoc();
if(empty($search_fail))
        {
            echo"
            <div class='p-5 mb-4 bg-light rounded-3'>
                <div class='container-fluid py-5'>
                    <h1 class='display-5 fw-bold'>No Results Found For </h1>
                    <p class='col-md-8 fs-4'>"?>&nbsp;<?php echo"    Suggestions:
                    <br>
                    ●Make sure that all words are spelled correctly.<br>
                    ●Try different courses.<br>
                    ●Try more general topics.<br>
                    </p>
                    <form action='../../Virya_Project/index.php'>
                        <button class='btn btn-primary btn-lg' type='submit'>Back</button>
                    </form>
                </div>
            </div>";
        }
?>
<?php

require('../../Virya_Project/header_footer/footer.php');

?>

</body>
</html>