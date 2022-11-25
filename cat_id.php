<?php
 
// PHP program to pop an alert
// message box on the screen
  
// Function defnition
function function_alert($message)
{      
    // Display the alert box 
    echo "<script>alert('$message');</script>";
}

$id = $_POST['id'];
header("location:$id");




?>
