<?php

require('header_footer/header.php');
require('../Virya_Project/config.php');
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

<div class="container">
    <div id="message"></div>
    <div class="row mt-2 pb-3">
        <?php
        
        $stmt = $conn->prepare("SELECT * FROM categories_main");
        $stmt->execute();
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()):
        ?>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
            <div class="card-deck">
                <div class="card p-2 border-secondary mb-2">
                <img src="../Virya_Project/images/<?php echo $row['image'] ?>" class="card-img-top" alt="Error Loading Image" width="245px" height="163px">
                    <div class="card-body p-1">
                        <h5 class="card-title text-center text-info"><?php echo strtoupper($row['name']); ?></h5>
                        <p class="card-text"><?php echo $row['description'] ?></p>
                        <form action="cat_id.php" method="POST" target="_self">
                        <?php 
                        echo "
                            <input type='hidden' value='$row[webpage_name]' name = 'id'>";
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

require('../Virya_Project/header_footer/footer.php');

?>

</body>
</html>