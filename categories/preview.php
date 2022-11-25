<?php

include('../../Virya_Project/config.php');
include('../../Virya_Project/header_footer/header.php');

$prev_code  = $_POST['prev_code'];

$stmt = $conn->prepare('SELECT * FROM lectures WHERE course_code = ?');
$stmt->bind_param('s', $prev_code);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

$stmtt = $conn->prepare('SELECT course_desc,course_name FROM courses WHERE course_code = ?');
$stmtt->bind_param('s', $prev_code);
$stmtt->execute();
$resultt = $stmtt->get_result();
$roww = $resultt->fetch_assoc();

?>
<html>
<title>Preview</title>

<head></head>

<body>
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold"><?php echo $roww['course_name']; ?></h1>
            <p class="col-md-8 fs-4"><?php echo $roww['course_desc'] ?></p>
            <video src="../../Virya_Project/lectures/<?php echo $row['preview'] ?>" controls></video>
        </div>
    </div>
</body>
<?php include('../../Virya_Project/header_footer/footer.php'); ?>
</html>