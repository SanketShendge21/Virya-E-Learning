<?php
error_reporting(0);
?>

<?php

 include('C:\xampp\htdocs\Virya_Project\config.php');

 $name=$_GET['edit'];
 $query=mysqli_query($conn,"select * from user_login where name ='$name' ");
  while ($row=mysqli_fetch_array($query)) {
      $name=$row['name'];
       $email=$row['email'];
        $phone=$row['phone'];
         $board=$row['board'];
          $class=$row['class'];
  }

?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Update Profile</title>

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="../../Virya_Project/css/user.css" rel="stylesheet">
    <style>
        select{
          width: 350px;
          margin: 0px;
          height: 42px;
          border: 2px solid white;
          border-radius: 40px;
        }   
        .body{
           font-family: 'verdana' ;
           margin: 0 auto;
        }
        .container{
            font-family: 'Verdana' ;
            margin: 0 auto;
            height: auto;
            background: #ffc107;
            padding-top: 10px;
            padding-left: 250px;
            width: 990px;
        }
   /* select:focus {
        min-width: 450px;
        width: fit-content;
    }*/
        .labelclass{
            font-size: 20px;
            color: black;
            padding: 10px;
        }
        .form-control{
            padding:10px;
            border: 2px solid white;
            border-radius: 40px;
            width: 350px;
            line-height: 0.5rem;
        }
        .btn-primary{
/*
            top: 0;
            bottom: 0;
            padding: 0;
*/
            background-color: #f2f2f2;
            color: black;
            align-content: center;
            border: 4px solid white;
            border-radius: 34px;
            width: 150px;
            margin:1px 250px 0px 100px;
            height:50px;   
        }
        
        .fff{
            font-family: 'Cinzel Decorative', cursive;
        }
        
        .btn-danger{                 
            padding: 10px;
            top: 0;
            color: black;
            bottom: 0;
            background: limegreen;  
            border:3px solid white;
            border-radius: 34px;
            width: 100px;
            background: #f2f2f2;
        }
</style>
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@700&display=swap"> 
  </head>

  <body>

    <div class="container">
        
        <a href="../../Virya_Project/user_login_details/user_profile.php"> <button class="btn btn-danger">BacK</button> </a>
        
  <form action="update_profile.php" method="post">
    <h3><center>Update Profile</center></h3>
      <div class="form-group">

    <label for="uname">Username:</label>
    <input type="text" class="form-control" id="uname" value="<?php echo $name; ?>" name="name">
    
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" value="<?php echo $email; ?>" name="uemail">
    
  
  </div>
  <div class="form-group">
    <label for="phn">Phone No:</label>
    <input type="number" class="form-control" id="phn" value="<?php echo $phone; ?>" name="phone">
    
  </div>

  <div class="form-group">
 <label for="phn">Gender:</label><br>
 <select name="gender">
  <option value="<?php echo $gender; ?>"></option>
  <option value="Male">Male</option>
  <option value="Female">Female</option>
  <option value="Other">Other</option>
</select>
 
 </div>

  <div class="form-group">
 <label for="phn">Board:</label><br>
 <select name="board">
  <option value="<?php echo $board; ?>"></option>
  <option value="CBSE">CBSE</option>
  <option value="ISCE">ISCE</option>
  <option value="SSC">SSC</option>
  <option value="MSBTE">MSBTE</option>
  <option value="DTE">DTE</option>
</select>
 </div>

  <div class="form-group">
 <label for="phn">Class:</label><br>
 <select name="class">
  <option value="<?php echo $class; ?>"></option>
  <option value="Class 11">Class 11</option>
  <option value="Class 12">Class 12</option>
  <option value="Diploma">Diploma</option>
  <option value="Post Diploma">Post Diploma</option>
</select>
 </div>

  <button type="submit" name="submit" class="btn btn-primary">Update</button>
  <br><br>
</form>
</div>

 <?php
 include('../../Virya_Project/config.php');
 

 if (isset($_POST['submit'])) {
  $name=$_POST['name'];
  $uemail=$_POST['uemail'];
  $gender=$_POST['gender'];
  $board=$_POST['board'];
  $class=$_POST['class'];
  $phone=$_POST['phone'];
              
              
              if (!preg_match("/^[a-zA-Z-' ]*$/",$name))
                {
                  echo "<p><font color=red>ERROR: Please enter a Valid Name! </font></p>";
                  goto page;
                }
                
             
            
               if(!filter_var($uemail, FILTER_VALIDATE_EMAIL))
            {
              echo "<p><font color=red>ERROR: Please Enter a Valid Email Address!</font></p>";
              goto page;
              
            }

            
              if ((!preg_match("/^[0-9]{10}+$/",$phone))||$phone=="1234567890"||$phone=="1111111111"||$phone=="0000000000"||$phone=="1122334455"||$phone=="2222222222"||$phone=="3333333333"||$phone=="4444444444"||$phone=="5555555555"||$phone=="6666666666"||$phone=="7777777777"||$phone=="8888888888"||$phone=="9999999999")
                {
                  echo "<p><font color=red>ERROR: Please enter a Valid Phone number!</font></p>";
                  goto page;
                }
    
            

           



              $sql=mysqli_query($conn,"update user_login set name='$name',email='$uemail',gender='$gender',board='$board',class='$class',phone='$phone' where name='$name' "); 
  
          

         if ($sql) {
      echo "<script>alert('Profile updated Successfully !!')</script>  ";
     echo "<script >window.location='http://localhost/Virya_Project/user_login_details/user_profile.php' ;</script>";
     
  } else{
    echo "<script>alert('Please try again !!')</script>  ";
  }
            
  
}
           
page:

?>


    
  </body>
</html>