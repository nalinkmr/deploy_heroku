<?php
$servername = "localhost";
$username = "root";
$password = "password";
$database="campaign";
$table="customer";

$conn = mysqli_connect($servername, $username, $password,$database);
if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}
?>
