<?php

error_reporting(0);

session_start();

$lec_ccode = substr($_GET['course_code'], 0, 8);

$exp_id = $_GET['cid'];




require('C:\xampp\htdocs\Virya_Project\config.php');
require('C:\xampp\htdocs\Virya_Project\header_footer\header.php');

$stmt = $conn->prepare("SELECT * FROM courses WHERE course_code = ? ");
$stmt->bind_param("s", $lec_ccode);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();


$cid = $row['cid'];
$cname = $row['course_name'];
$cimage = $row['course_image'];
$cdesc = $row['course_desc'];
$ccat = $row['course_cat'];
$cprice = $row['course_price'];
$cduration = $row['course_duration'];
$cout = $row['course_outcome'];
$creq = $row['course_req'];
$ccode = $row['course_code'];

$stmtt = $conn->prepare("SELECT * FROM orders WHERE match(course_code) against (?)");
$stmtt->bind_param("s", $lec_ccode);
$stmtt->execute();
$resultt = $stmtt->get_result();
$roww = $resultt->fetch_assoc();

$stmttt = $conn->prepare("SELECT * FROM wishlist WHERE course_code = ?");
$stmttt->bind_param("s", $lec_ccode);
$stmttt->execute();
$resulttt = $stmttt->get_result();
$rowww = $resulttt->fetch_assoc();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <!-- <link rel="stylesheet" href="css/all.css"> -->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>

<body>
    <?php /*
    if(isset($_SESSION['item_added_msg']))
    { ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong><?php echo $cname; ?>&nbsp;</strong><?php echo $_SESSION['item_added_msg']; ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php unset($_SESSION['item_added_msg']);
    }*/ ?>
    <div class="c_top_header">
        <div class="c_top_sec1">
            <span class="crs_title crs_cmm"><?php echo $cname; ?></span>
            <span class="crs_tag crs_cmm"><?php echo $cdesc; ?></span>
            <span class="crs_btns crs_cmm">
                <form action="../../Virya_Project/categories/action.php" method="post">
                    <input type="hidden" name="wemail" value="<?php echo $_SESSION['uemail']; ?>">
                    <input type="hidden" name="wname" value="<?php echo $cname ?>">
                    <input type="hidden" name="wcode" value="<?php echo $lec_ccode ?>">
                    <input type="hidden" name="wimage" value="<?php echo $cimage ?>">
                    <input type="hidden" name="wid" value="<?php echo $cid ?>">
                    <input type="hidden" name="wprice" value="<?php echo $cprice ?>">
                    <input type="hidden" name="wdesc" value="<?php echo $cdesc ?>">
                    <button type="submit" name="wishlist" class="crs_top_btn btn btn-light <?php if (isset($rowww['course_code']) == isset($row['course_code']) and isset($_SESSION['uemail']) == $rowww['email']) echo "disabled";
                                                                                            else echo ""; ?>">Wishlist &nbsp;<i class="fas fa-heart"></i></button>
                </form>
                <input type="text" value="" id="cshare" class="hide">
            </span>
        </div>
    </div>
    <!-- Sidebar Start  -->
    <div class="crs_sidebar">
        <div class="crs_video_bar">
            <img src="<?php echo $cimage; ?>" class="crs_sbr_video" width="100%" ; height="100%" ; onerror="this.onerror=null;this.src='../../Virya_Project/images/<?php echo $row['course_image']; ?>';">
        </div>
        <div class="crs_sbr_body">
            <span class="crs_sbr_price crs_mr"><span class="crs_prce"> <b>₹</b>
                    <?php if (isset($cprice)) {
                        echo $cprice;
                    } ?></span>&nbsp;<span class="crs_discount"></span>
                &nbsp;<span class="crs_off"></span></span>
            <span class="crs_sbr_tme_lft crs_mr"> <i class="fas fa-clock"></i> 5 days left at this price!</span>
            <form action="action.php" method="post" class="form-submit">
                <input type="hidden" name="cid" value="<?php echo $cid ?>">
                <input type="hidden" name="cname" value="<?php echo $cname ?>">
                <input type="hidden" name="cprice" value="<?php echo $cprice ?>">
                <input type="hidden" name="cimage" value="<?php echo $cimage ?>">
                <input type="hidden" name="ccode" value="<?php echo $ccode ?>">
                <input type="hidden" name="add_to_cart" value="add_to_cart">
                <button class="crs_sbr_btn add_btn crs_mr addItemBtn btn btn-danger <?php if (isset($roww['course_code']) == isset($row['course_code']) and isset($_SESSION['uemail']) == $roww['email']) { echo "disabled";}
                                                                                    else echo ""; ?>">Add To Cart</button>
            </form>
            <form class="form-submit" action="checkout.php" method="POST">
                <input type="hidden" name="d_checkout" value="checkout">
                <input type="hidden" name="buy_code" value="<?php echo $ccode; ?>">
                <button class="crs_sbr_btn buy_btn crs_mr btn <?php if (isset($roww['course_code']) == isset($row['course_code']) and isset($_SESSION['uemail']) == $roww['email']){ echo "disabled";}
                else echo ""; ?>" id="buy_nw">
                    <p style="color:white;"> Buy Now </p>
                </button>
            </form>
            <span class="crs_sbr_mny crs_mr">30-Day Money-Back Guarantee</span>
            <div class="crs_sbr_div crs_mr">
                <span class="crs_sbr_ttl crs_mr">This course includes:</span>
                <span class="crs_sbr_1 crs_mr"><i class="fas fa-file-video"></i>&nbsp; <span><?php if (isset($cduration)) {
                                                                                                    echo $cduration;
                                                                                                } ?></span> hours
                    on-demand video</span>
                <span class="crs_sbr_4 crs_mr"><i class="fas fa-infinity"></i>&nbsp; Full lifetime access</span>
                <span class="crs_sbr_5 crs_mr"><i class="fas fa-mobile"></i>&nbsp; Access on mobile and TV</span>
                <span class="crs_sbr_6 crs_mr"><i class="fas fa-certificate"></i>&nbsp; Certificate of completion</span>
            </div>
        </div>
        <hr class="hr">
        <div class="crs_sbr_end">
            <span class="crs_sbr_end_title crs_mr">Learn across different cateogries with best instructors.</span>
            <span class="crs_sbr_end_sub crs_mr">Get your team access to 4,000+ top courses anytime, anywhere.</span>
        </div>
    </div>
    <!-- Sidebar End -->

    <!-- Section 2 Start  -->

    <div class="crs_sec2">
        <ul class="crs_sec2_ul">
            <p class="crs_Sec2_ttl">What you'll learn</p>
            <?php if (isset($cout)) {
                $mark = explode('.', $cout);
                foreach ($mark as $out) {
                    echo "<li class='crs_sec2_listy'>&nbsp; &nbsp;$out</li>";
                }
            } ?>
        </ul>
        <form action="preview.php" method="post">
            <div class="container">
                    <input type="hidden" value="<?php echo $lec_ccode ?>" name="prev_code">
                    <button class="btn btn-primary">Preview Course</button>
                </div>
            </form>  
    </div>

    <!-- Section 2 End  -->


    <!-- Section 3 Start  -->

    <div class="crs_sec3">
        <ul>
            <p class="crs_sec3_ttl">Requirements</p>
            <?php if (isset($creq)) {
                $mark = explode('.', $creq);
                foreach ($mark as $out) {
                    echo "<li class='crs_sec3_listy'>$out</li>";
                }
            } ?>
        </ul>
        <div>
            <p class="crs_sec3_ttl">Description</p>
            <p><?php if (isset($cdesc)) {
                    echo $cdesc;
                } ?></p>
        </div>

    </div>

    <!-- Section 3 End  -->

    <!-- Section 4 Start  -->

    <div class="crs_sec6 crs_cmm_sec">
        <p class="crs_sec6_ttl">Course content</p>
        <?php
        $sql = "SELECT COUNT(DISTINCT section_name) AS section_name, COUNT( lecture_name ) AS lecture_name, SEC_TO_TIME(SUM(TIME_TO_SEC(`lecture_dur`))) AS time, video FROM lectures WHERE  course_code = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $lec_ccode);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();
        $cnt = count($row);
        if ($cnt != 0) {
            $secs = $row['section_name'];
            $lects = $row['lecture_name'];
            $times = $row['time'];
            echo "<div class='crs_sec6_det'><span>$secs Sections • </span><span>$lects Lectures • </span><span> $times total length</span></div>";
        }
        ?>
        <div class="crs_sec6_cnt">

            <?php
            if (isset($_SESSION['uemail'])) {
                $stmt = $conn->prepare("SELECT * FROM orders WHERE match(course_code) against (?)");
                $stmt->bind_param("s", $lec_ccode);
                $stmt->execute();
                $result = $stmt->get_result();
                $row = $result->fetch_assoc();

                //$content_code = $row['course_code'];

                // print_r($row);
                // // $pur_email = $row['email'];
                // $pur_course = $row['courses'];
                // print_r($pur_course);
                if (isset($row['course_code']) && str_contains($row['course_code'], $lec_ccode) == 1) {
                    $sql = "SELECT DISTINCT(section_name), lecture_dur,lecture_name,video FROM lectures WHERE course_code = ? ";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("s", $lec_ccode);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $row = $result->fetch_assoc();
                    // print_r($row);
                    if (!empty($row)) {
                        $sec_time = $row['lecture_dur'];
                        $sec_name = $row['section_name'];
                        $lecture_name = $row['lecture_name'];
                        $video = $row['video'];
                        // echo $sec_name."<br>";
                        // echo $sec_time."<br>";
                        // echo $lecture_name."<br>";
                        $cnttt = count($row);
                        $i = 3;
                        while ($i < $cnttt) {
                            // $sql = "SELECT SEC_TO_TIME(SUM(TIME_TO_SEC('lecture_dur'))) as time2',null,course_code=?,section_name = ?";   
                            // $stmt=$conn->prepare($sql);
                            // $stmt->bind_param("ss",$ccode,$sec_name);
                            // // $db->select('lectures','SEC_TO_TIME(SUM(TIME_TO_SEC(`lct_dur`))) as time2',null,"crs_token='$crs_token' AND sec_nm = '$sec_name'");
                            // $stmt->execute();
                            // $result = $stmt->get_result();
                            // $row = $result->fetch_assoc();

            ?>
                            <details class="crs_sec6_details" <?php if ($i == 0) {
                                                                    echo "open";
                                                                } ?>>
                                <summary class="crs_sec6_summary">
                                    <span class="crs_sec6_sum1">
                                        <span class='crs_sec6_sum_name'><?php echo $sec_name; ?></span><span class='crs_sec6_sum_dur'><?php echo $sec_time; ?></span>
                                    </span>
                                </summary>
                                <ul>
                                    <?php
                                    // $sql = "SELECT lecture_name, lecture_duration,course_code = ? FROM lectures"; 
                                    // $stmt = $conn->prepare($sql);
                                    // $stmt->bind_param('s',$ccode);
                                    // $stmt->execute();
                                    // $result = $stmt->get_result();
                                    // $row = $result->fetch_assoc();

                                    // $db->select('lectures','lct_nm,lct_dur',null,"crs_token='$crs_token' AND sec_nm = '$sec_name'");
                                    // $ltt = $db->getResult();

                                    $cont = count($row);
                                    if ($cont != 0) {
                                        $j = 3;
                                        while ($j < $cont) {
                                            // $lecture_name = $ltt[$j]['lct_nm'];
                                            // $lecture_dur = $ltt[$j]['lct_dur'];
                                            $num = 1;
                                            echo "<li><span class='crs_sec6_liname'>$num. $lecture_name<br><video src='../../Virya_Project/lectures/$video' width='320' height='240' controls></video></span><span class='crs_sec6_litime'>$sec_time</span></li>";
                                            $j++;
                                        }
                                    }
                                    ?>
                                </ul>
                            </details><br><br>
                            <form method="POST" action="quiz.php">
                                <input type="hidden" name="course_code" value="<?php echo $lec_ccode; ?>">
                                <button type="submit" class="btn btn-primary">Quiz</button>
                            </form>
            <?php
                            $i++;
                        }
                    } else {
                        echo "
                        <div class='container'>
                        <strong><p style='font-size:large;'>Please Purchase This Course To Access Its Contents</p></strong>
                        </div>";
                    }
                } else {
                    echo "
                    <div class='container'>
                    <strong><p style='font-size:large;'>Please Purchase This Course To Access Its Contents</p></strong>
                    </div>";
                }
            } else {
                echo "
                <div class='container'>
                <strong><p style='font-size:large;'>Please Login To Access Its Contents</p></strong>
                </div>";
            }
            ?>

        </div>
    </div>
              
    <!-- Section 4 End  -->

    <?php
    require('../header_footer/footer.php');

    ?>


</body>

</html>