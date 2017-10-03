<?php
session_start();
include("dbconnection.php");

if (isset($_POST["submit"]));

$username = $_POST ['username'];
$email = $_POST ['email'];
$password = $_POST ['password'];
$phone_number = $_POST ['phone_number'];
$company_id = $_POST ['company_id'];

mysqli_query ($connection, "INSERT INTO users (username, email, password, phone_number, company_id) VALUES ('$username', '$email', '$password', '$phone_number', '$company_id')");
if(mysqli_affected_rows ($connection)>0){
	header('Location: https://hotels.ng');
}
	else {echo "<p> There were errors with your registration";
	echo mysqli_error($connect);

}








?>