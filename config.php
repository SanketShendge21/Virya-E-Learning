<?php
error_reporting(0);
$conn = new mysqli("localhost","root","","virya");

if ($conn->connect_error)
{
    die("Connection Failed".$conn->connect_error);
}

?>