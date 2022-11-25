<?php
error_reporting(0);
session_start();
if ( $_SESSION['iemail']==true) {
  # code...
}else
header('location:../../Virya_Project/instructor/instructor_login.php');
$page='profile';
 include('../../Virya_Project/include/header.php');

  ?>

  <!DOCTYPE html>
<html>
<title>User Profile</title>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- <link rel="stylesheet" href="../../Virya_Project/css/style.css"> -->
<center>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 350px;
  margin: auto;
  text-align: center;
  font-family: 'Verdana';
/*    color: aqua;*/
}

.title {
  color: grey;
  font-size: 18px;
}

.btn-primary{
  border: 2px solid #f3f3f3;
/*  outline: 0;*/
  display: inline-block;
  padding: 8px;
  color: black;
    border-radius: 15px;
  background-color: #46d932;
  text-align: center;   
  cursor: pointer;
  width: 70%;
  font-size: 28px;
}

a{
  text-decoration: none;
  font-size: 22px;
  color: black; 
    width: 200px;
    background-color: none;
}

/*
btyn:hover, a:hover {
  opacity: 0.7;
}
*/
</style>
</center>
</head>
<body>
    
  

<h2 style="text-align:center">User Profile</h2>

<div class="card">
  <img src="../../Virya_Project/images/po.png" style="width:100%">
  <h1><?php echo $_SESSION['iname']; ?></h1>
  <p class="title"><?php echo $_SESSION['iemail']; ?></p>
  <p></p>
  
  <p><a class="#" href="update_in_profile.php?edit=<?php echo $_SESSION['iname']; ?>"><button class="btn btn-primary">Update Profile</button></a></p>
  
</div>
    
<!--<<button class="btyn">-->

</body>
</html>
