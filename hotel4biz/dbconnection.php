<?php 
$host = "localhost";
$username = "root";
$password = "";
$database = "hotels4biz";

$connection = new mysqli ($host, $username, $password, $database);

if ($connection ->connect_error)
{
	die ("connection failed" . $connection ->connect_error);
}


 ?>
