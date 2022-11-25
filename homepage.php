
<?php	require('header_footer/header.php');
        require('C:/xampp/htdocs/Virya_Project/config.php');
?>



<!Doctype html>
<html lan="en">
<head>
<style>
    
.section {
  padding: 50px;
  text-align: center;
  background-color: #08a2cc;
  color: black;
}
    .section img{
        border-radius: 80px;
    }
        /*

*, *:before, *:after {
  box-sizing: inherit;
}       */

.column {
  width: 36.3%;
  margin:0px auto;
  padding: 10px;


}

.card2{
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 0px auto;
    border: 8px solid white;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.container {
  padding: 0 15px;
}

    .ChatBot a:hover{
        background-color: lightblue;
    }
    
    .ChatBot{
        font-size: 40px;
        color: darkgreen;
        cursor: pointer;
    }
    
.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: black;
  background-color: #13c913;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #0093ad;
}



</style>
    
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
        
        <div class="card2"> 
    <div class="section">
    
        <img src="img/virya_logo.png" alt="homepage" style="width:33%";>
        <h2 style="text-align: center"> Welcome to Vīrya Learning platform for the next generation !   </h2>   
      
        </div>
    </div>
          
                        <h2 style="text-align:center"> Certified Courses </h2>
<div class="row">
  
    
    <div class="column">
    <div class="card2">
      <img src="img/advanced.png" alt="..." style="width:100%">
      <div class="container">
        <h5> Courses For Every kind of Learner updated every Month for our beLoved learners ! </h5>
          <p> <a href="#categories.php"> <button class="button">	Explore All  </button></a> </p>   
      </div>
    </div>
  </div>
    <!--------------------------------------------------------------------->
    
   
<div class="container">
    <div id="message">
    <div class="row mt-2 pb-3">
        <?php
        $stmt = $conn->prepare("SELECT `id`, `name`, `image`, `description` FROM `computer_science` WHERE `id`<=6");
        $stmt->execute();
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc()):
        ?>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
            <div class="card-deck">
                <div class="card p-2 border-secondary mb-2">
                <img src="<?php echo $row['image'] ?>" class="card-img-top" alt="Error Loading Image" width="245px" height="163px">
                    <div class="card-body p-1">
                        <h5 class="card-title text-center text-info"><?php echo $row['name'] ?></h5>
                        <p class="card-text"><?php echo $row['description'] ?></p>
                        <a href="#categories/computer_science.php" class="btn btn-primary">Explore</a>
                    </div>
                </div>
            </div>
        </div>        
        <?php endwhile; ?>
    </div>
</div>
    
    <!----------------------------------------------------------------------->
    
    <div class="column">
    <div class="card2">
      <img src="img/trending.png" alt="..." style="width:100%">
      <div class="container">
        <h5> Check Out the Weekly Updated Courses By Our Team & Instrcutors</h5>
          <p> <a href="#categories.php"> <button class="button">	Explore   All </button> </a>  </p>
      </div>
    </div>
  </div>
    
        <!--------------------------------------------------------------------->
    
   
<div class="container">
    <div id="message"></div>
    <div class="row mt-2 pb-3">
<?php   $stmt = $conn->prepare("SELECT `id`, `name`, `image`, `description` FROM `science_and_tech` WHERE `id`<=4");
        $stmt->execute();
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc()):
        ?>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
            <div class="card-deck">
                <div class="card p-2 border-secondary mb-2">
                <img src="<?php echo $row['image'] ?>" class="card-img-top" alt="Error Loading Image" width="245px" height="163px">
                    <div class="card-body p-1">
                        <h5 class="card-title text-center text-info"><?php echo $row['name'] ?></h5>
                        <p class="card-text"><?php echo $row['description'] ?></p>
                        <a href="#categories/computer_science.php" class="btn btn-primary">Explore</a>
                    </div>
                </div>
            </div>
        </div>        
        <?php endwhile; ?>
    </div>
</div>
    
    <!----------------------------------------------------------------------->
    
    
    
    <div class="column">
    <div class="card2">
      <img src="img/popular.png" alt="..." style="width:100%">
      <div class="container">
        <h5> Courses on demand updated every Month for our beLoved learners ! </h5>
          <p> <a href="#categories.php"> <button class="button">	Explore All  </button></a> </p>   
      </div>
    </div>
  </div>
	
	<!------------------------------------------------------------------------------------------>
    
 
<div class="container">
    <div id="message"></div>
    <div class="row mt-2 pb-3">
<?php   $stmt = $conn->prepare("SELECT `id`, `name`, `image`, `description` FROM `science_and_tech` WHERE `id`<=4");
        $stmt->execute();
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc()):
        ?>
        <div class="col-sm-6 col-md-4 col-lg-3 mb-2">
            <div class="card-deck">
                <div class="card p-2 border-secondary mb-2">
                <img src="<?php echo $row['image'] ?>" class="card-img-top" alt="Error Loading Image" width="245px" height="163px">
                    <div class="card-body p-1">
                        <h5 class="card-title text-center text-info"><?php echo $row['name'] ?></h5>
                        <p class="card-text"><?php echo $row['description'] ?></p>
                        <a href="categories/computer_science.php" class="btn btn-primary">Explore</a>
                    </div>
                </div>
            </div>
        </div>        
        <?php endwhile; ?>
    </div>
    <div class="ChatBot">   <span>  </span>
       <a href='chatbot/index.php'> <i class="fa fa-comments" aria-hidden="true">   </i></a>
    </div>
    
</div>
 </div>
   
<!------------------------------------------------------------------------------------------>
  
  </body>
  </html>
    
    
    <?php		require('header_footer/footer.php');	?>