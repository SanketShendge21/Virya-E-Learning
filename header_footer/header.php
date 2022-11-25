<?php
error_reporting(0);
include('C:\xampp\htdocs\Virya_Project\config.php');
$count = 0;

$result = $conn->query("SELECT * FROM cart ");
$count=$result->num_rows;
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Virya </title>
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>	
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>	 -->

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->


<style>
    .bs-example{
        margin: 0px;

    }
	
	.cart{
		background:#fdbb2d;
		border-radius:40px;
		width:fit-content;
		border:1px solid grey;
	}

	.cart span{
		transition:400ms;
		font-size: 18px;
	}
	.cart i{
	margin: 12px;
	width: 50px;
	color:black;
	font-size: 28px;
	text-align:center;
	cursor:pointer;
	display:inline-block;
	}
	
	.Profile span{
			transition: 400ms;
			font-size:20px;
		}
		.Profile i{
			margin: 12px;
			color: black;
			cursor: pointer;
			font-size: 30px;
			text-align: center;
			display:inline-block;
					
		}
		
		.nav-item a:hover{
				background-color:#fdbb2d;
		}
		.dropdown a:hover{
				background-color:#fdbb2d;
		}
        
    .navbar-brand{
      
        border-radius: 5px;
    }
		
    /* .Profile a:hover{
        background-color: aqua;
    } */
		.Profile{
			background-color: #13f7ec;
			width: fit-content;
			border-radius: 40px;
			border: 1px solid grey;
			margin-right: 10px;
		}

		.dropdown:hover .dropdown-menu {display: block;}



</style>
</head>
<body>
<div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a href="../../Virya_Project/index.php" class="navbar-brand">	<font color="white";>	 VīRYA   	</font>	</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
					


        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="../../Virya_Project/index.php" class="nav-item nav-link "><font color="#e5427a";>	Home	</font></a>
					<div class="nav-item dropdown">
                    <a href="../../Virya_Project/categories_home.php" class="nav-link dropdown-toggle" data-toggle="dropdown"><font color="e5427a";>	Categories	</font></a>
                    <div class="dropdown-menu">
                        <a href="../../Virya_Project/categories/business.php" class="dropdown-item">Business</a>
                        <a href="../../Virya_Project/categories/languages.php" class="dropdown-item">Languages</a>
                        <a href="../../Virya_Project/categories/marketing.php" class="dropdown-item">Marketing</a>
						<a href="../../Virya_Project/categories/esports.php" class="dropdown-item">Esports</a>
						<a href="../../Virya_Project/categories/maths.php" class="dropdown-item">Mathematcis</a>
						<a href="../../Virya_Project/categories/music.php" class="dropdown-item">Music</a>
						<a href="../../Virya_Project/categories/3d_and_animation.php" class="dropdown-item">Animation</a>
						<a href="../../Virya_Project/categories/art_and_craft.php" class="dropdown-item">Art & Craft</a>
						<a href="../../Virya_Project/categories/health_and_fitness.php" class="dropdown-item">Health & Fitness</a>
						<a href="../../Virya_Project/categories/electrical_engg.php" class="dropdown-item">Electrical Engineering</a>
						<a href="../../Virya_Project/categories/mechanical_engg.php" class="dropdown-item">Mechanical Engineering</a>
						<a href="../../Virya_Project/categories/science_and_tech.php" class="dropdown-item">Science & Technology</a>
						<a href="../../Virya_Project/categories/computer_science.php" class="dropdown-item">Computer Science</a>
						<a href="../../Virya_Project/categories/game_development.php" class="dropdown-item">Game Development</a>
						<a href="../../Virya_Project/categories/science_and_tech.php" class="dropdown-item"></a>
                    </div>
                </div>
				 <a href="../../Virya_Project/header_footer/about_us.php" class="nav-item nav-link"> 
				 <font color="e5427a";>		About 	</font></a>	
				<a href="../../Virya_Project/header_footer/contact.php" class="nav-item nav-link"><font color="e5427a";>	Contact	</font></a>
				

						<div class="cart">
							<a href="../../Virya_Project/categories/cart.php"><i class="fa fa-shopping-cart"	aria-hidden="true"></i><span id="cart-item" class="badge
        							bg-danger"><?php echo $count ?></span>		
								<!-- <span> </span> -->
							</a>
						</div>
					
            </div>
            <form class="form-inline" action="../../Virya_Project/categories/search.php" method="get">
                <div class="input-group">                    
                    <input type="text" name="search_query" class="form-control" placeholder="Search">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary "><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </form>
            <div class="navbar-nav Profile">
			<?php  

				if (!isset($_SESSION['uemail'])) {  ?>
					<a href="../../Virya_Project/user_login_details/user_login.php" class="nav-item nav-link"><font color="e5427a";>	Log-In	</font></a>	
				<?php 
                }else{ ?>
					<a href="../../Virya_Project/user_login_details/user_profile.php">	<span></span><i class="fa fa-user" aria-hidden="true">	</i></a>	
				<?php }  ?>	
			
			</div> 
            </div>
            </div>
        </div>
    </nav>
</div>
</body>
</html>