<?php

session_start();


session_unset();

session_destroy();

header('location:../../Virya_Project/instructor/instructor_login.php');

?>