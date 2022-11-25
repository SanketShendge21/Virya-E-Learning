<?php
session_start();



?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
<style>
 
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Poppins:wght@400;500;600&display=swap');
 
*{
 
  margin: 0;
 
  padding: 0;
 
  box-sizing: border-box;
 
  font-family: "Poppins", sans-serif;
 
}
 
body{
 
  margin: 0;
 
  padding: 0;
 
  background: linear-gradient(120deg,#f2ff00, #0082de);
 
  height: 100vh;
 
  overflow: hidden;
 
}
    
    .bbbb{
           width:70px;
 
  height: 70px; 
 
  border: none;

 
  background: #2691d9;
 
  border-radius: 40px;   
 
  font-size: 20px;
 
            padding-top:0px;
            padding-bottom: 0px;
        padding-left: 5px;
        padding-right: 20px;
  color: #e9f4fb;
 
    margin: 0 auto;

 
  cursor: pointer;
 
  outline: none;
    }
 
.center{
 
  position: absolute;
 
  top: 50%;
 
  left: 50%;
 
  transform: translate(-50%, -50%);
 
  width: 400px;
 
  background: white;
 
  border-radius: 10px;
 
  box-shadow: 10px 10px 15px rgba(0,0,0,0.05);
 
}
 
.center h1{
 
  text-align: center;
 
  padding: 20px 0;
 
  border-bottom: 1px solid silver;
 
}
 
.center form{
 
  padding: 0 40px;
 
  box-sizing: border-box;
 
}
 
form .txt_field{
 
  position: relative;
 
  border-bottom: 2px solid #adadad;
 
  margin: 30px 0;
 
}
 
.txt_field input{
 
  width: 100%;
 
  padding: 0 5px;
 
  height: 40px;
 
  font-size: 16px;
 
  border: none;
 
  background: none;
 
  outline: none;
 
}
 
.txt_field label{
 
  position: absolute;
 
  top: 50%;
 
  left: 5px;
 
  color: #adadad;
 
  transform: translateY(-50%);
 
  font-size: 16px;
 
  pointer-events: none;
 
  transition: .5s;
 
}
 
.txt_field span::before{
 
  content: '';
 
  position: absolute;
 
  top: 40px;
 
  left: 0;
 
  width: 0%;
 
  height: 2px;
 
  background: #2691d9;
 
  transition: .5s;
 
}
 
.txt_field input:focus ~ label,
 
.txt_field input:valid ~ label{
 
  top: -5px;
 
  color: #2691d9;
 
}
 
.txt_field input:focus ~ span::before,
 
.txt_field input:valid ~ span::before{
 
  width: 100%;
 
}
 
.pass{
 
  margin: -5px 0 20px 5px;
 
  color: #a6a6a6;
 
  cursor: pointer;
 
}
 
.pass:hover{
 
  text-decoration: underline;
 
}
 
input[type="submit"]{
 
  width: 100%;
 
  height: 50px;
 
  border: 1px solid;
 
  background: #2691d9;
 
  border-radius: 25px;
 
  font-size: 18px;
 
  color: #e9f4fb;
 
  font-weight: 700;
 
  cursor: pointer;
 
  outline: none;
 
}
 
input[type="submit"]:hover{
 
  border-color: #2691d9;
 
  transition: .5s;
 
}
 
.signup_link{
 
  margin: 30px 0;
 
  text-align: center;
 
  font-size: 16px;
 
  color: #666666;
 
}
 
.signup_link a{
 
  color: #2691d9;
 
  text-decoration: none;
 
}
 
.signup_link a:hover{
 
  text-decoration: underline;
 
}
 
</style>
    <meta charset="utf-8">

  </head>
  <body>    
             <div class="bbbb">
            <button type="button" class="bbbb"><a href="../../Virya_Project/index.php" style="text-decoration: none; color: white;">Home</a></button>   </div>      
      
    <div class="center">
      <h1>Instructor Login</h1>
      <form action="instructor_login.php" method="POST">
        <div class="txt_field">
          <input type="text"  name="iname" id="name" required>
          <span></span>
          <label>Username</label>
        </div>
           <div class="txt_field">
          <input type="text" name="iemail" id="email"  required>
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" id="pwd" required>
          <span></span>
          <label>Password</label>
        </div>
        <input type="submit" name="submit" value="Login">
        <div class="signup_link">
          New to Virya ? <a href="../../Virya_Project/instructor/instructor_register.php">Signup Here !</a>
        </div>
      </form>
    </div>

  </body>
</html>




<?php
 include('../../Virya_Project/config.php');

  if (isset($_POST['submit'])) {
    $iname=$_POST['iname'];
    $iemail=$_POST['iemail'];
   $password=$_POST['password'];
    


    $query=mysqli_query($conn,"select * from instructor_login where name='$iname' AND password='$password'");

   if ($query) {
   	  if (mysqli_num_rows($query)>0) {
       $_SESSION['iname']=$iname;
        $_SESSION['iemail']=$iemail;
        
  
   	  	  header('location:../../Virya_Project/instructor/in_profile.php');
      }else{
      	 echo "<script>  alert('Invalid Credentails,Please Try Again')</script>";

      }
   }

  	
  }


?>



