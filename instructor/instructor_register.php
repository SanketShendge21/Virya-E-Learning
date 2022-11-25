
<?php
// error_reporting(0);

?>



<!DOCTYPE html>
<html lan="en">
  <head>
    <meta charset="utf-8">
    <title>Instructor Registration Form</title>
    <style>
 
 
/*---------------------------------------*/
 
/* Font */
 
/*---------------------------------------*/
 
@import url('https://fonts.googleapis.com/css?family=Roboto');
 
 
 
/*---------------------------------------*/
 
/* Register Form */
 
/*---------------------------------------*/
 
body {
 
  background: linear-gradient(to right, #00b0f7 0%, #05ef4d 50%, #8736e2 99%);
 
}
 
 
.signup-form {
 
  font-family: "Roboto", sans-serif;
 
  width:690px;
 
  margin:88px  auto;
 
  background:linear-gradient(to right, #ffffff 0%, #fafafa 50%, #ffffff 99%);
 
  border-radius: 10px;
 
}
        
 
/*---------------------------------------*/
 
/* Form Header */
 
/*---------------------------------------*/
 
.form-header  {
 
  background-color: #EFF0F1;
 
  border-top-left-radius: 10px;
 
  border-top-right-radius: 10px;
 
}
 
 
.form-header h1 {
 
  font-size: 30px;
 
  text-align:center;
 
  color:#0028ea;
 
  padding:32px 0px;
 
  border-bottom:1px solid #cccccc;
 
}
 
 
/*---------------------------------------*/
 
/* Form Body */
 
/*---------------------------------------*/
 
.form-body {
 
  padding:10px 40px;
 
  color:#666;
 
}
 
 
.form-group{
 
  margin-bottom:20px;
 
}
 
 
.form-body .label-title .select .option{
 
  color:#000000;
 
  font-size: 17px;
 
  font-weight: bold;
        
}
 
 
.form-body .form-input {
 
    font-size: 17px;
 
    box-sizing: border-box;
 
    width: 91%;
 
    height: 41px;
 
    padding-left: 8px;
 
    padding-right: 10px;
 
    color: #333333;
 
    text-align: left;
 
    border: 1px solid #a5a5a5;
 
    border-radius: 7px;
 
    background: white;
 
    outline: none;
 
}
 
.horizontal-group .left{
 
  float:left;
 
  width:49%;
 
}
 
 
.horizontal-group .right{
 
  float:right;
 
  width:49%;
 
}
 
 

 
 /*
 
::-webkit-input-placeholder  {
 
  color:#d9d9d9;
 
}   */
 
 
/*---------------------------------------*/
 
/* Form Footer */
 
/*---------------------------------------*/
 
.signup-form .form-footer  {
 
  padding:25px 40px;
 
  text-align: center;
 
  clear:both;
 
}
 
.btn {
 
   display:inline-block;
 
   padding:19px 100px;
 
   background-color: #f7732c;
 
   font-size:18px;
 
   border:none;
 
   border-radius:25px;
 
   color:#000000;
 
   cursor:pointer;
 
}
 
.btn:hover {
 
  background-color: #169c7b;
 
  color:white;
 
}
        
        .select-style {
    /*    border: 1px solid #b3afaf;    */
    width: 135px;
    border-radius: 9px;
    /*    overflow: hidden; */
    background: #d8d8d8 ;
}

.select-style select {
    padding: 10px 21px;
    width: 92%;
    border: none;
    box-shadow: none;
    background: transparent;
      background-image: none; 
  /*  -webkit-appearance: none;  */
}
        .bbbb{
         width:fit-content;
 
  height: 50px;
 
  border: none;
 
  background: #2691d9;
 
  border-radius: 35px;
 
  font-size: 20px;
 
            padding:10px;
  color: #e9f4fb;
 
    margin: 0 auto;
  font-weight: 700;
 
  cursor: pointer;
 
  outline: none;
    }
        

.select-style select:focus {
    outline: none;     
}

        
        

</style>
  </head>
  <body>     <div class="bbbb">
            <button type="button" class="bbbb"><a href="../../Virya_Project/index.php" style="text-decoration: none; color: white;">Home</a></button>   </div>
      
    <form class="signup-form" action="#instructor_register_form.php" method="POST">
       
      <!-- form header -->
      <div class="form-header">
        <h1>Create Account</h1>
      </div>

      <!-- form body -->
      <div class="form-body">

        <!-- Firstname and Lastname -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label for="firstname" class="label-title">Full Name </label>
            <input type="text" id="uname" name="name" class="form-input" placeholder="Enter Your Full Name" required="required" />
          </div>
    

        <!-- Email -->
        <div class="form-group left">
          <label for="email" class="label-title">Email</label>
          <input type="email" id="email" name="email" class="form-input" placeholder="Enter Your Email" required="required">
        </div>
            </div>

        <!-- Password----->
        <div class="horizontal-group">
          <div class="form-group left">
            <label for="password" class="label-title">Password </label>
            <input type="password" id="pwd" name="password" class="form-input" placeholder="Enter Your Password" required="required">
          </div>
        
            <!----------phone number--------------------->
              <div class="form-group left">
            <label for="experience" class="label-title">Phone Number</label>
            <input type="number" id="phn" name="phone" class="form-input" placeholder="Enter Your Mobile Number">
          </div>        
        </div>

        <!-- Gender -->
        <div class="horizontal-group">
          <div class="form-group left">
            <label for="phn" class="label-title">Select Gender</label>
                <div class="input-group">
                   <div class="select-style">
                        <select name="gender">
                                                
                            <option value="male">- Select -</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="other">Other</option>
                            
                        </select>
                    </div>

              </div>
          </div>
          </div>
   
          
          

          

      <!-- form-footer -->
      <div class="form-footer">
        <button type="submit" name="submit" class="btn">Sign Up</button>
          <label for="Login">  Already Registered: <a href="instructor_login.php">click Here! </label>
      </div>
            
        
          
    </form>

  </body>
</html>
      
      
      
      
      
      
 <?php
 include('C:/xampp/htdocs/Virya_project/config.php');
 

 if (isset($_POST['submit'])) {
  $name=$_POST['name'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $gender=$_POST['gender'];
  $phone=$_POST['phone'];
              if($name=="")
                {
                   echo "<p><font color=red>ERROR: Please enter a  Name! </font></p>"; 
                  goto page;
                }
              
              if (!preg_match("/^[a-zA-Z-' ]*$/",$name))
                {
                  echo "<p><font color=red>ERROR: Please enter a Valid Name! </font></p>";
                  goto page;
                }
                
             
             if($email == "")
            {
              echo "<p><font color=red>ERROR: Please enter an Email Address!</font></p>"; 
              goto page;
              
            }
               if(!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
              echo "<p><font color=red>ERROR: Please Enter a Valid Email Address!</font></p>";
              goto page;
              
            }

            if($phone=="")
                {
                  echo "<p><font color=red>ERROR: Please enter a Phone number!</font></p>";
                  goto page;
                }
              if ((!preg_match("/^[0-9]{10}+$/",$phone))||$phone=="1234567890"||$phone=="1111111111"||$phone=="0000000000"||$phone=="1122334455"||$phone=="2222222222"||$phone=="3333333333"||$phone=="4444444444"||$phone=="5555555555"||$phone=="6666666666"||$phone=="7777777777"||$phone=="8888888888"||$phone=="9999999999")
                {
                  echo "<p><font color=red>ERROR: Please enter a Valid Phone number!</font></p>";
                  goto page;
                }

                if($gender=="") 
                {
                  echo "<p><font color=red>ERROR: You forgot to select your Gender! </font></p>";
                  goto page;
                }


            if($password == "")
            {
              echo "<p><font color=red>ERROR: Please enter a Password!</font></p>"; 
              goto page;
              
            }

          
            
    
    if(!preg_match("#[0-9]+#",$password)) {
        echo "<p><font color=red>ERROR: Password Must Contain At Least 1 Number!</font></p>";
        goto page;
    }
    if(!preg_match("#[A-Z]+#",$password)) {
        echo "<p><font color=red>ERROR: Password Must Contain At Least 1 Capital Letter!</font></p>";
        goto page;
    }
    if(!preg_match("#[a-z]+#",$password)) {
        echo "<p><font color=red>ERROR: Password Must Contain At Least 1 Lowercase Letter!</font></p>";
        goto page;
    } 
    
            

            $duplicate=mysqli_query($conn,"select * from instructor_login where email='$email' or phone='$phone'");

            if (mysqli_num_rows($duplicate)>0)
             { 
               echo "<p><font color=red>ERROR: Email or Phone number already exists!</font></p>"; 
             
               goto page;

             }



              $query=mysqli_query($conn,"insert into instructor_login(name,email,password,gender,phone)values('$name','$email','$password','$gender','$phone') "); 
  
          if ($conn->query($query) === TRUE) {
               }
              else {
            echo "<script> alert('You have successfully registered!')</script> ";
       echo "<script >window.location='http://localhost/Virya_Project/instructor/instructor_login.php' ;</script>";  }

            }

           
            
           
page:

?>
