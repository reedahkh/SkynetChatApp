<?php
session_start();
include("dbconnection.php");

if (isset($_POST["submit"]));

$username = $_POST ['username'];
$password = $_POST ['password'];

$sql = "SELECT username, password from users where username = '$username' and password = '$password' ";
$result = mysqli_query ($connection, $sql);
$row = mysqli_fetch_array ($result);
if (is_array($row))
{
	$_session ['username'] = $row [username];
	$_session ['password'] = $row [password];
}
else
	echo "Incorrect username/password";
if(isset($_session['username'])) 
	header('Location:https://hotels.ng');

?>