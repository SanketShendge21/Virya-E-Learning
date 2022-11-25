<?php

error_reporting(0);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title> Instructor Dashboard </title>
   
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="../../Virya_Project/css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="../../Virya_Project/instructor/in_profile.php"><?php echo $_SESSION['iname'];?></a>
      <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="logout.php">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">

               <li class="nav-item">
                <a class="nav-link  <?php if($page=='profile'){echo 'active';} ?>  " href="in_profile.php">
                  <span data-feather="users"></span>
                  Profile
                </a>
              </li>
             
              <li class="nav-item active">
                <a class="nav-link <?php if($page=='courses'){echo 'active';} ?> " href="courses.php">
                  <span data-feather="shopping-cart"></span>
                  Courses
                </a>
              </li>
             
              <li class="nav-item">
                <a class="nav-link <?php if($page=='Comments'){echo 'active';} ?>" href="comment.php">
                  <span data-feather="bar-chart-2"></span>
                  FeedBacks
                </a>
              </li>

               <li class="nav-item">
                <a class="nav-link <?php if($page=='quiz'){echo 'active';} ?>" href="quiz.php">
                  <span data-feather="bar-chart-2"></span>
                  Testimonials
                </a>
              </li>
             
            </ul>

            
              
            </ul>
          </div>
        </nav>