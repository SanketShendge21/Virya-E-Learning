<?php
 error_reporting(0);
session_start();

// include('../../Virya_Project/header_footer/header.php');


?>

<!doctype html>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Virya-Contact Us</title>
    

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    
  
    <style>
body {
    background: linear-gradient(to right, #9b50ef 0%, #ef1f1f 50%, #3fd844 99%);
    margin-top: 100px;  
  }
    
    /*
    
    * {box-sizing: border-box;}
    */
    
    input#pwd{
         width: 100%;
  font-family: sans-serif;
  padding: 21px;
  border: 1px solid #ccc;
  border-radius: 28px;
  box-sizing: border-box;
  margin-top: 14px;
  margin-bottom: 16px;
  resize: vertical;
    height: 40px;
    }

input[type=text], select, textarea{
  width: 100%;
  font-family: sans-serif;
  padding: 21px;
  border: 1px solid #ccc;
  border-radius: 28px;
  box-sizing: border-box;
  margin-top: 14px;
  margin-bottom: 16px;
  resize: vertical;
    height: 40px;
}   
    .container{
        border-radius: 23px;
        background-color: #f2f2f2;
        padding: 20px;
        border: 2px solid grey;
        width: 40%;
        margin: 0 auto;
    }

input[type=submit] {
  background-color: #22d827;
  color: #000000;
  padding: 17px 13px;
  border: 1px solid grey;
    width: 200px;
    font-size: 20px; 
    font-family: sans-serif;
  border-radius: 40px;
  cursor: pointer;
}       

input[type=submit]:hover {
  background-color: #24f0c1;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
    h3{
        font-family: 'verdana';
        font-size: 19px;
        font: bold;
        color: black;
        padding: 15px;
    }

    .btn{
      margin: 10px;
    }
</style>

  
  
  
  </head>
  <body>

  
    

    <main role="main" class="container">
      <div class="row">
        <div class="col-md-8 blog-main">
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            Contact Us
          </h3>


          <div class="blog-post">
           

     <form action="contact.php" method="post">
      <div class="form-group">

    <label for="uname">Name:</label>
    <input type="text" class="form-control" id="uname" value="<?php echo $_SESSION['name']; ?>" name="name">
    
  </div>
  <div class="form-group">
    <label for="pwd">Email:</label>
    <input type="email" class="form-control" id="pwd" value="<?php echo $_SESSION['uemail']; ?>" name="email">
    
  </div>
 <div class="form-group">
  <label for="comment">Comment:</label>
  <textarea name="comment" class="form-control" rows="5" id="comment"></textarea>
</div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>

</form>



  <?php
 include('C:\xampp\htdocs\Virya_Project\config.php');
 

 if (isset($_POST['submit'])) {
  $name=$_POST['name'];
  $email=$_POST['email'];
  $comment=$_POST['comment'];
              

            if($comment == "")
            {
              echo "<p><font color=red>Please enter something in the comment section!</font></p>"; 
              goto page;
              
            }

              $query=mysqli_query($conn,"insert into comment(name,email,comment)values('$name','$email','$comment') "); 
  
          if ($conn->query($query) === TRUE) {
               }
              else {
            echo "<script> alert('Your comment has been sent')</script> ";
       echo "<script >window.location='http://localhost/Virya_Project/header_footer/contact.php' ;</script>";  }

            }
page:

?>


          
      
<a href="../index.php" button type="button" name="submit" class="btn btn-primary">Back</button>
    
  </body>
  <?php

?> 
  </html>