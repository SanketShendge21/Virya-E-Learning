		
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Student Registration</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" href="style.css" type="text/css">
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

			<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		<!-- STYLE CSS -->
    
		<style>
		@font-face {
  font-family: "Poppins-Regular";
  src: url("../fonts/poppins/Poppins-Regular.ttf"); }
@font-face {
  font-family: "Poppins-SemiBold";
  src: url("../fonts/poppins/Poppins-SemiBold.ttf"); }
body {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box; }

body {
  font-family: "Poppins-Regular";
  color: #333;
  font-size: 13px;
  margin: 0; }

input, textarea, select, button {
  font-family: "Poppins-Regular";
  color: #333;
  font-size: 11px; }

p, h1, h2, h3, h4, h5, h6, ul {
  margin: 0; }

img {
  max-width: 109%;
   }

ul {
  padding-left: 0;
  margin-bottom: 0; }

a:hover {
  text-decoration: none; }

:focus {
  outline: none; }

.wrapper {
  min-height: 100vh;
  background-size: cover;
  background-repeat: no-repeat;
  display: flex;
  align-items: center; }

.inner {
  padding: 5px;
  background: #fff;
  max-width: 838px;
  margin: auto;
  max-height: 750px;
  display: flex; }
  .inner .image-holder {
    max-width: 100% ;
	;
	
	}
  .inner form {
    width: 80%;
    padding-top: 0px;
    padding-left: 45px;
    padding-right: 45px; }
  .inner h3 {
    text-transform: uppercase;
    font-size: 15px;
    font-family: "Poppins-SemiBold";
    text-align: center;
    margin-bottom: 28px; }

.form-group {
  display: flex; }
  .form-group input {
    width: 70%; }
    .form-group input:first-child {
      margin-right: 15px; }

.form-wrapper {
  position: relative; }
  .form-wrapper i {
    position: absolute;
    bottom: 9px;
    right: 0; }

.form-control {
  border: 1px solid #333;
  border-top: none;
  border-right: none;
  border-left: none;
  display: block;
  width: 100%;
  height: 20px;
  padding: 0;
  margin-bottom: 25px; }
  .form-control::-webkit-input-placeholder {
    font-size: 13px;
    color: #333;
    font-family: "Poppins-Regular"; }
  .form-control::-moz-placeholder {
    font-size: 13px;
    color: #333;
    font-family: "Poppins-Regular"; }
  .form-control:-ms-input-placeholder {
    font-size: 13px;
    color: #333;
    font-family: "Poppins-Regular"; }
  .form-control:-moz-placeholder {
    font-size: 13px;
    color: #333;
    font-family: "Poppins-Regular"; }

select {
  -moz-appearance: none;
  -webkit-appearance: none;
  cursor: pointer;
  padding-left: 20px; }
  select option[value=""][disabled] {
    display: none; }

button {
  border: none;
  width: 300px;
  height: 10px;
  margin: auto;
  margin-top: 17px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 28px;
  background: #333;
  font-size: 16px;
  color: #fff;
  vertical-align: middle;
  -webkit-transform: perspective(1px) translateZ(0);
  transform: perspective(1px) translateZ(0);
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s; }
  button i {
    margin-left: 10px;
    -webkit-transform: translateZ(0);
    transform: translateZ(0); }
  button:hover i, button:focus i, button:active i {
    -webkit-animation-name: hvr-icon-wobble-horizontal;
    animation-name: hvr-icon-wobble-horizontal;
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
    -webkit-animation-iteration-count: 1;
    animation-iteration-count: 1; }

@-webkit-keyframes hvr-icon-wobble-horizontal {
  16.65% {
    -webkit-transform: translateX(6px);
    transform: translateX(6px); }
  33.3% {
    -webkit-transform: translateX(-5px);
    transform: translateX(-5px); }
  49.95% {
    -webkit-transform: translateX(4px);
    transform: translateX(4px); }
  66.6% {
    -webkit-transform: translateX(-2px);
    transform: translateX(-2px); }
  83.25% {
    -webkit-transform: translateX(1px);
    transform: translateX(1px); }
  100% {
    -webkit-transform: translateX(0);
    transform: translateX(0); } }
@keyframes hvr-icon-wobble-horizontal {
  16.65% {
    -webkit-transform: translateX(6px);
    transform: translateX(6px); }
  33.3% {
    -webkit-transform: translateX(-5px);
    transform: translateX(-5px); }
  49.95% {
    -webkit-transform: translateX(4px);
    transform: translateX(4px); }
  66.6% {
    -webkit-transform: translateX(-2px);
    transform: translateX(-2px); }
  83.25% {
    -webkit-transform: translateX(1px);
    transform: translateX(1px); }
  100% {
    -webkit-transform: translateX(0);
    transform: translateX(0); } }
@media (max-width: 1199px) {
  .wrapper {
    background-position: right center; } }
@media (max-width: 991px) {
  .inner form {
    padding-top: 0px;
    padding-left: 52px;
    padding-right: 20px; } }
@media (max-width: 767px) {
  .inner {
    display: block; }
    .inner .image-holder {
      width: 70%; }
    .inner form {
      width: 100%;
      padding: 40px 0 30px; }

}
		</style>
	</head>
	<body>
		<div class="wrapper" style="background-image: url('images/bg-registration-form-1.jpg');">
			<div class="inner">
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
				<div class="image-holder">
					<img src="images/registration-form-1.jpg" alt="...">
				</div>      
				<form action="user_register.php"  method="POST">
					<h3>Registration Form</h3>
					
					<div class="form-wrapper">
						<input type="text" placeholder="Username" id="uname" class="form-control" name="name">
						<i class="zmdi zmdi-account"></i>
					</div>
					<div class="form-wrapper">
						<input type="text" placeholder="Email Address" id="email" name="email" class="form-control">
						<i class="zmdi zmdi-email"></i>
					</div>
                    					   
                    <div class="form-wrapper"> 
					    <input type="number" class="form-control" id="phnumber" placeholder="Enter Your Phone Number" name="phone">
                        <i class="zmdi zmdi-account"></i>
					</div>
                    
					<div class="form-wrapper">
							<label for="phn">Gender:		</label>
						<select name="gender" id="gender" class="form-control">
                            
							<option value="" disabled selected>Select Gender</option>
							<option value="male">Male</option>
							<option value="femal">Female</option>
							<option value="other">Other</option>
						</select>	
							<label for="phn">Board:		</label>
						<select name="board" id="board" class="form-control">
							<option value="" disabled selected>Select Board</option>
							<option value="CBSE">CBSE</option>
							<option value="ISCE">ISCE</option>
							<option value="SSC">SSC</option>
							<option value="MSBTE">MSBTE</option>
							<option value="DTE">DTE</option>
						</select>
								
								  <label for="phn">Class:		</label>
						<select name="class" id="class" class="form-control">
							<option value="" disabled selected>Select Class</option>
							<option value="Class 11">Class 11</option>
							<option value="Class 12">Class 12</option>
							<option value="Diploma">Diploma</option>
							<option value="Post Diploma">Post Diploma</option>
						</select>
					</div>

                    
					<div class="form-wrapper">
						<input type="password" id="pwd" placeholder="Password" name="password" class="form-control">
						<i class="zmdi zmdi-lock"></i>
					</div>
					
					<button name="submit" value="submit">
                        
                            <font color="white">Register</font>
						<i class="zmdi zmdi-arrow-right"></i>
                           
					</button>
				<button type="button">
                        <a href="../../Virya_Project/user_login_details/user_login.php" style="text-decoration:none;">
                            <font color="white"> 
                                Log In   &ensp;
						      <i class="zmdi zmdi-arrow-right">   </i>
                             </font>
                        </a>
                        <a class="null" style="text-decoration:none;">
                            <font size="6px"> || </font>  </a>
                                &ensp;
                        <a href="../../Virya_Project/index.php" style="text-decoration:none;">
                            <font color="white">&ensp; BacK</font>
                    </a>
                        
					</button>
					</div>
				</form>
			</div>
		</div>
		
</body>	
</html>




		<?php
			 
  include('C:\xampp\htdocs\Virya_Project\config.php');


  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $board = $_POST['board'];
    $class = $_POST['class'];
    $phone = $_POST['phone'];
    if ($name == "") {
	  echo "<script> alert(' Please Enter Your Name ! ')</script> ";

      goto page;
    }

    if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
       
	   echo "<script> alert(' Please Enter a Valid Name ! ')</script> ";

      goto page;
    }


    if ($email == "") {
      
	  echo "<script> alert(' Please Enter Your Email id ! ')</script> ";
      goto page;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    
	  echo "<script> alert(' Email id Already exists ! ')</script> ";
      goto page;
    }

    if ($phone == "") {
     
	  echo "<script> alert(' Please Enter Your Number ! ')</script> ";	
      goto page;
    }
    if ((!preg_match("/^[0-9]{10}+$/", $phone)) || $phone == "1234567890" || $phone == "1111111111" || $phone == "0000000000" || $phone == "1122334455" || $phone == "2222222222" || $phone == "3333333333" || $phone == "4444444444" || $phone == "5555555555" || $phone == "6666666666" || $phone == "7777777777" || $phone == "8888888888" || $phone == "9999999999") {
	  echo "<script> alert(' Please Enter Valid Number ! ')</script> ";	
      goto page;
    }

    if ($gender == "") {
      
	   echo "<script> alert(' Please select Your Gender ! ')</script> ";

      goto page;
    }

    if ($board == "") {
     
	  echo "<script> alert(' Please Select Your Board ! ')</script> ";

      goto page;
    }

    if ($class == "") {
      
	  echo "<script> alert(' Please Select Your Class ! ')</script> ";

      goto page;
    }


    if ($password == "") {

	  echo "<script> alert(' Please Enter Your Password ! ')</script> ";

      goto page;
    }




    if (!preg_match("#[0-9]+#", $password)) {

	  echo "<script> alert(' Password Must Contain At Least 1 Number (0-9) ! ')</script> ";

      goto page;
    }
    if (!preg_match("#[A-Z]+#", $password)) {
	   
	  echo "<script> alert(' Password Must Contain At Least 1 Capital Letter ! ')</script> ";

      goto page;
    }
    if (!preg_match("#[a-z]+#", $password)) {
	  echo "<script> alert(' Password Must Contain At Least 1 Small Letter ! ')</script> ";

      goto page;
    }



    $duplicate = mysqli_query($conn, "select * from user_login where email='$email' or phone='$phone'");

    if (mysqli_num_rows($duplicate) > 0) {
		echo "<script> alert('Email And Phone Already Exists Try Again !')</script> ";


      goto page;
    }



    $query = mysqli_query($conn, "insert into user_login(name,email,password,gender,board,class,phone)values('$name','$email','$password','$gender','$board','$class','$phone') ");

    if ($conn->query($query) === TRUE) {
    } else {
      echo "<script> alert('You have successfully registered!')</script> ";
      echo "<script >window.location='http://localhost/Virya_Project/user_login_details/user_login.php' ;</script>";
    }
  }
  page:	
			 ?>
			
			
			
			</body>
</html>

