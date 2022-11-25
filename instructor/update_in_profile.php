 <?php
session_start();

 include('../../Virya_Project/include/header.php');

  ?>

  <?php

 include('../../Virya_Project/config.php');

 $name=$_GET['edit'];
 $query=mysqli_query($conn,"select * from instructor_login where name ='$name' ");
  while ($row=mysqli_fetch_array($query)) {
      $name=$row['name'];
       $email=$row['email'];
        $phone=$row['phone'];
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
    select {
        width: 550px;
        margin: 0px;
        height: 35px;
    }
    select:focus {
        min-width: 550px;
        width: auto;
    }
    .btn{
      margin-top: 20px;
    }
</style>
  </head>

  <body>

    <div class="container">

  <form action="update_in_profile.php" method="post">
    <h3><center>Update Profile</center></h3>
      <div class="form-group">

    <label for="uname">Username:</label>
    <input type="text" class="form-control" id="uname" value="<?php echo $name; ?>" name="iname">
    
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" value="<?php echo $email; ?>" name="iemail">
    
  
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


  <button type="submit" name="submit" class="btn btn-primary">Update</button>
  
</form>
</div>

 <?php
 include('../../Virya_Project/config.php');
 

 if (isset($_POST['submit'])) {
  $name=$_POST['iname'];
  $iemail=$_POST['iemail'];
  $gender=$_POST['gender'];
  $phone=$_POST['phone'];
              
              
              if (!preg_match("/^[a-zA-Z-' ]*$/",$name))
                {
                  echo "<p><font color=red>ERROR: Please enter a Valid Name! </font></p>";
                  goto page;
                }
                
             
            
               if(!filter_var($iemail, FILTER_VALIDATE_EMAIL))
            {
              echo "<p><font color=red>ERROR: Please Enter a Valid Email Address!</font></p>";
              goto page;
              
            }

            
              if ((!preg_match("/^[0-9]{10}+$/",$phone))||$phone=="1234567890"||$phone=="1111111111"||$phone=="0000000000"||$phone=="1122334455"||$phone=="2222222222"||$phone=="3333333333"||$phone=="4444444444"||$phone=="5555555555"||$phone=="6666666666"||$phone=="7777777777"||$phone=="8888888888"||$phone=="9999999999")
                {
                  echo "<p><font color=red>ERROR: Please enter a Valid Phone number!</font></p>";
                  goto page;
                }
    
            

           



              $sql=mysqli_query($conn,"update instructor_login set name='$name',email='$iemail',gender='$gender',phone='$phone' where name='$name' "); 
  
          

         if ($sql) {
      echo "<script>alert('Profile updated Successfully !!')</script>  ";
     echo "<script >window.location='http://localhost/Virya_Project/instructor/in_profile.php' ;</script>";
     
  } else{
    echo "<script>alert('Please try again !!')</script>  ";
  }
            
  
}
           
page:

?>


    
  </body>
</html>