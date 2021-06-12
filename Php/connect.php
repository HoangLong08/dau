<?php
$servername = "localhost";
$database = "dau_faculty_celc";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
?>