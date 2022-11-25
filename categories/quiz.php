<!doctype html>
<html lang="en">

<head>
    <?php
    include('../../Virya_Project/config.php');
    include('../../Virya_Project/header_footer/header.php');

    $quiz_code = $_POST['course_code'];
    $stmt = $conn->prepare("SELECT * FROM quiz_questions WHERE course_code = ?");
    $stmt->bind_param("s", $quiz_code);
    $stmt->execute();
    $result = $stmt->get_result();



    ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Quiz</title>
</head>

<body>
    <div class="container">
        <form method="POST" action="../../Virya_Project/categories/result.php">
            <h1>
                <center>Quiz</center>
            </h1>

            <?php
            $i = 1;
            while ($row = $result->fetch_assoc()) {
            ?>
                <table class="table table-hover table-bordered table-active">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col"><?php echo $i . '. '; ?><?php echo $row['question']; ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (isset($row['opt1'])) { ?>
                            <!--  to check whether the answer is selected or not -->
                            <tr>
                                <td scope="row"><input type="radio" value="a" name="opt1" />&emsp;<?php echo $row['opt1']; ?></td> 
                            </tr>
                        <?php } ?>
                        <?php if (isset($row['opt2'])) { ?>
                            <tr>
                                <td scope="row"><input type="radio" value="b" name="opt2"/>&emsp;<?php echo $row['opt2']; ?></td>
                            </tr>
                        <?php } ?>
                        <?php if (isset($row['opt3'])) { ?>
                            <tr>
                                <td scope="row"><input type="radio" value="c" name="opt3"/>&emsp;<?php echo $row['opt3']; ?></td>
                            </tr>
                        <?php } ?>
                        <?php if (isset($row['opt4'])) { ?>
                            <tr>
                                <td scope="row"><input type="radio" value="d" name="opt4"/>&emsp;<?php echo $row['opt4']; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>




            <?php
                $i++;
            }
            ?>

            <center>
                <input type="hidden" value="<?php echo $_POST['course_code'] ?>" name="course_code">
                <button class="btn btn-success mt-2 " name="submit" type="submit">Submit</button>
            </center>

        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
<?php include('../../Virya_Project/header_footer/footer.php'); ?>
</body>

</html>