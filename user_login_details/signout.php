<?php

include('../../Virya_Project/config.php');


session_start();


session_unset();
session_destroy();

if(!isset($_SESSION['uemail']))
{
    $sql = "DELETE FROM cart";
    $conn->query($sql);
}





header('location:http://localhost/Virya_Project/index.php');

?>