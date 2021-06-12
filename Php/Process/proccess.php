<?php 
require '../connect.php';
require '../executeQuery.php';
if(!isset($_SESSION)) { 
	session_start(); 
} 

$username = base64_encode($_POST['userName']);
$password = base64_encode($_POST['passWord']);
$result = executeQuery($conn, "CALL procedureLogin('$username', '$password')");
$row = mysqli_fetch_assoc($result);
	$resp = "fail";
	
if (mysqli_num_rows($result) === 1) {
	$resp = "success";
	$_SESSION['username'] = $row['username'];
	$_SESSION['fullname'] = $row['fullname'];
	$_SESSION['id']       = $row['id'];
	
}
else{
	$resp = "fail";
}
echo $resp;
?>